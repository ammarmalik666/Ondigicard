@extends('partials.layout')
@section('meta')
<title>Ondigicard</title>
@endsection
@section('extra_css')

@endsection
@section('main_content')
<section id="stripe" class="dtr-section dtr-hero-section-top-padding dtr-pb-100">
    
  <div class="container">
      <div class="bg-white col-md-12 text-center pt-5 pb-5">
         <img src="assets/web_images/paid.png" class="img-fluid" style="width:140px;" />
         <h4 style="text-transform:uppercase;margin-top: 15px;">Awesome, Your payment is successful!</h4>
         <p>
            Thank you for your payment. We will be in contact with more details shortly.<br>Incase of any queries, please feel free to <a href="/#contact" style="color:#F16505;">contact us</a>.
         </p>
      </div>
  </div>

</section>

@endsection     