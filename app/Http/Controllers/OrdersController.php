<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EmailsController;
use App\Models\Order;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use View;
use Stripe\Error\Card;
use Stripe\Stripe;

class OrdersController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function postPaymentStripe(Request $request)
    {

         $request->validate([
             'name' => 'required',
             'cus_name' => 'required',
             'email' => 'required',
             'mobile' => 'required',
             'card_no' => 'required',
             'expiry' => 'required',
             'cvvNumber' => 'required',
             'amount' => 'required'
         ]);

        $amount = (int)$request->amount;
        $dollars = $amount;
        $amount = $amount*100;

        $input = $request->all();

        $order_id = substr(md5(time()), 0, 6).date('mdy');
     
        $ex = explode('/', $request->expiry);
        $exp_month = (int)$ex[0];
        $exp_year = (int)$ex[1];


       $STRIPE_SECRET = env('STRIPE_SECRET');
       $stripe = new \Stripe\StripeClient(
            $STRIPE_SECRET
       );

       // Check customer in Stripe
       $customer = $stripe->customers->all(['email' => $request->email]);

       if(empty($customer->data))
       {
          //create customer
          $customer = $stripe->customers->create([
               'name' => $request->name,
               'email' => $request->email,
               'phone' => $request->mobile
          ]);

          $customer_id = $customer->id;
       }
       else{
           $customer_id = $customer->data[0]->id;
       }

       // Retrieving a card
       $card = $stripe->customers->allSources(
            $customer_id,
            ['object' => 'card', 'limit' => 3]
          );

       if(empty($card->data))
       {
          $card_number = str_replace(' ', '', $request->card_no);
          // Creating a card
          $card = $stripe->customers->createSource(
               $customer_id,
               ['card' => [
                    'name' => $request->name,
                    'number' => $card_number,
                    'exp_month' => $exp_month,
                    'exp_year' => $exp_year,
                    'cvc' => $request->get('cvvNumber')
               ]]
          );
       }
       
       try {
            
            $token = $stripe->tokens->create([
                'card' => [
                'number' => $request->get('card_no'),
                'exp_month' => $exp_month,
                'exp_year' => $exp_year,
                'cvc' => $request->get('cvvNumber'),
                ],
            ]);


           if (!isset($token['id'])) {
            return redirect('/order')->withErrors('tokenError');
           }
           $desc = $request->cus_name. ' - '.$order_id;
           $charge = $stripe->charges->create([
            'card' => $token['id'],
            'receipt_email' => $request->email,
            'currency' => 'AUD',
            'amount' => $amount,
            // 'customer' => $customer_id,
            'description' => $desc
           ]);
           // return $charge;
           if($charge['status'] == 'succeeded') {
               
               $customer_id = "NaN";
               Order::create([
                    'name' => $request->cus_name,
                    'email' => $request->email,
                    'phone' => $request->mobile,
                    'order_id' => $order_id,
                    'charge_id' => $charge->id,
                    'customer_id' => $customer_id,
                    'amount' => $request->amount
               ]);
               $request->session()->put('paid','1');

               // Send Email here
               // ====================
               EmailsController::checkout($request->cus_name, $request->email, $request->mobile, $dollars);

               return redirect('/thankyou');

           } else {
               return back()->withErrors('unknownError');
           }
       } catch (\Exception $e) {
            // return back()->withErrors('ex', $e->getMessage());
          $request->session()->put('ex', $e->getMessage());
          return back();
       }
    }
    public function thankyou()
    {

        if(session()->has('paid'))
        {
          return view('thankyou');
        }else{
          return redirect('/order');
        }

    }

}
