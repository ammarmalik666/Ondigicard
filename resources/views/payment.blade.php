@extends('partials.layout')
@section('meta')
<title>Ondigicard</title>
@endsection
@section('extra_css')
   <link rel="stylesheet" href="assets/stripe/style.css">
@endsection
@section('main_content')
<section id="stripe" class="dtr-section dtr-hero-section-top-padding dtr-pb-100">
    
   <div class="container" id="PaymentPage">
        <div class="col2">
            <div class="dtr-form">
               <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!!route('addmoney.stripe')!!}">
                  @csrf
                  <fieldset>
                     <div class="col-12 col-md-12">
                         <p class="">
                             <label class="orbitron-font">Email Address</label>
                             <input name="email" class="email" type="email">
                         </p>
                     </div>
                     <div class="col-12 col-md-12">
                         <p class="">
                             <label class="orbitron-font">Mobile Number</label>
                             <input name="mobile" class="mobile" type="text">
                         </p>
                     </div>
                     <div class="col-12 col-md-12">
                         <p class="">
                             <label class="orbitron-font">Card Number</label>
                             <input name="card_no" class="number" type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                         </p>
                     </div>
                     <div class="col-12 col-md-12">
                         <p class="">
                             <label class="orbitron-font">Cardholder Name</label>
                             <input name="name" class="inputname" type="text">
                         </p>
                     </div>
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-12 col-md-6">
                               <p class="">
                                   <label class="orbitron-font">Expiry date</label>
                                   <input name="expiry" class="expire" type="text" placeholder="MM / YYYY"/>
                               </p>
                           </div>
                           <div class="col-12 col-md-6">
                               <p class="">
                                   <label class="orbitron-font">CVV</label>
                                   <input class="ccv" type="text" name="cvvNumber" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                               </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-12 col-md-12">
                        <input type='hidden' name="amount" value="300" />
                        <button type="submit" class="dtr-btn btn-blue dtr-mt-30">Order Now »</button>
                     </div>
                  </fieldset>
               </form>
            </div>
        </div>
        <div class="col1">
          <div class="card">
            <div class="front">
              <div class="type">
                <img class="bankid"/>
              </div>
              <span class="chip"></span>
              <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
              <div class="date"><span class="date_value">MM / YYYY</span></div>
              <span class="fullname">FULL NAME</span>
            </div>
            <div class="back">
              <div class="magnetic"></div>
              <div class="bar"></div>
              <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
              <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
            </div>
          </div>
        </div>
   </div>

  

  {{-- <div class="container">
     <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
           <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!!route('addmoney.stripe')!!}" >
              {{ csrf_field() }}
              <div class='form-row'>
                 <div class='col-xs-12 form-group card required'>
                    <label class='control-label'>Card Number</label>
                    <input autocomplete='off' class='form-control card-number' size='20' type='text' name="card_no">
                 </div>
              </div>
              <div class='form-row'>
                 <div class='col-xs-4 form-group cvc required'>
                    <label class='control-label'>CVV</label>
                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvvNumber">
                 </div>
                 <div class='col-xs-4 form-group expiration required'>
                    <label class='control-label'>Expiration</label>
                    <input class='form-control card-expiry-month' placeholder='MM' size='4' type='text' name="ccExpiryMonth">
                 </div>
                 <div class='col-xs-4 form-group expiration required'>
                    <label class='control-label'> </label>
                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="ccExpiryYear">
                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='hidden' name="amount" value="300">
                 </div>
              </div>
              <div class='form-row'>
                 <div class='col-md-12' style="margin-left:-10px;">
                    <div class='form-control total btn btn-primary' >
                       Total:
                       <span class='amount'>$300</span>
                    </div>
                 </div>
              </div>
              <div class='form-row'>
                 <div class='col-md-12 form-group'>
                    <button class='form-control btn btn-success submit-button' type='submit'>Pay »</button>
                 </div>
              </div>
              <div class='form-row'>
                 <div class='col-md-12 error form-group hide'>
                    <div class='alert-danger alert'>
                       Please correct the errors and try again.
                    </div>
                 </div>
              </div>
           </form>
        </div>
        <div class='col-md-4'></div>
     </div>
  </div> --}}

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/stripe/stripe.js"></script>
@endsection     