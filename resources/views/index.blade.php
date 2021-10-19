@extends('partials.layout')
@section('meta')
<title>Ondigicard</title>
@endsection
@section('extra_css')

@endsection
@section('main_content')
<section id="home" class="dtr-section dtr-hero-section-top-padding dtr-pb-100">
    <div class="container"> 
        <div class="row"> 
            <div class="col-12 col-md-6">
            <p class="text-size-xxl orbitron-font font-weight-300 color-dark">Mobile</p>
                <p class="text-size-xxl font-weight-300 color-dark orbitron-font">Your <span class="font-weight-500 orbitron-font">Profile</span></p>
                <div class="spacer-20"></div>
                <h3>
                    <span class="dtr-animated-headline push"> 
                        <span class="dtr-words-wrapper"> 
                            <b class="is-visible">
                                <span class="color-blue orbitron-font" style="font-size: 2rem;">
                                    The Best Digital <br> Business Card App
                                </span>
                            </b>
                        </span>
                    </span>
                </h3>
            </div>
            <div class="col-12 col-md-6">
                <img src="/assets/web_images/main-banner.jpg" alt="image">
            </div>
        </div>
        <div class="row dtr-mt-30"> 
            <div class="col-12 col-md-10"> 
                <p class="text-size-md">
                    <span class="font-weight-500 color-dark">Ondigicard</span>
                    is a digital business card designed to help you grow your business whilst growing your network.
                </p>
                <p class="text-size-md">
                    <span class="font-weight-500 color-dark">Network smarter with digital business cards</span><br>
                    Stand out from the crowd with digital business cards. Not only are digital business cards better for the environment, they’re also better for your wallet and will help you make a great first impression.
                </p>
                <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                    <li class="dtr-social-title font-weight-500 color-dark">Follow Us on</li>
                    <li><a href="#" class="dtr-social-button dtr-instagram" target="_blank" title="instagram"><span>Follow on Instagram</span></a></li>
                    <li><a href="https://www.facebook.com/onDigicard" class="dtr-social-button dtr-facebook" target="_blank" title="facebook"><span>Like On Facebook</span></a></li>
                    <li><a href="https://www.linkedin.com/company/ondigicard/" class="dtr-social-button dtr-linkedin" target="_blank" title="linkedin"><span>View Our Profile</span></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-2 dtr-rounded-img small-device-space"> <a href="/order-now"><img src="/assets/web_images/experience-img.png" alt="image"></a></div>
        </div>
    </div>
</section>
<section id="" class="dtr-section dtr-py-100 bg-light-blue">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-6">

                <div class="dtr-styled-heading">
                    <h2 class="orbitron-font">OUR STORY</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-12 col-md-6 small-device-space">
                <div class="dtr-pr-30"> <img src="/assets/web_images/our-story.jpg" alt="image"> </div>
            </div>
            <div class="col-12 col-md-6">
                
                <p class="">
                    Our Co-founder and CEO, Phil Manhire, always endeavoured to have the best quality paper business cards. However, he was constantly frustrated by their limitations.
                </p>
                <p class="dtr-mt-20">
                    Then Phil had the good fortune to meet Shahid Siddiqui – an accomplished web app developer. Both men quickly realised that they had compatible skills covering business management and development, marketing, web app design/development and a host of others.
                </p>
                <p class="dtr-mt-20">
                    This led to their teaming up and lending their respective talents to the development of the Ondigicard app. Today, Ondigicard helps people around the world connect and share information. On the Digicard platform, people anywhere in the world can readily create and share their own digital business cards.
                    Although Ondigicard is headquartered in Adelaide, South Australia, most of the team works remotely. The wants and needs of our customers are always their primary focus. Hence, they are passionate about providing you with the best quality service and products.
                </p>
            </div> 
        </div>
    </div>
</section>
<section id="about" class="dtr-section dtr-py-100 bg-white">
    <div class="container"> 
        <div class="row">
            <div class="dtr-styled-heading">
                <h2 class="orbitron-font">About Us</h2>
            </div>
        </div>
        <div class="row d-flex"> 
            <div class="col-12 col-md-6"> 
                <p>
                    Here you can read about Shahid and Phil. Their combined backgrounds, skills and expertise have come together  to produce the finest digital business card experience on offer.
                </p>
                <p>
                    In keeping with their goal to provide  you with  the very best digital card service and product, below are links that should answer any queries that you may have:
                </p>
                <ul style="padding-left:30px;">
                    <li class="mb-0"><a href="/faqs">Digital Business Cards</a></li>
                    <li class="mb-0"><a href="/faqs">Sharing Your Card</a></li>
                    <li class="mb-0"><a href="/faqs">How to Scan a QR Code</a></li>
                </ul>
                <p>
                    If you have any question that you would like answered, please 
                    <a href="#contact" class="color-blue">Contact Us</a>
                </p>
            </div>
            <div class="col-12 col-md-6 small-device-space">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="dtr-pr-30"> 
                            <img src="/assets/web_images/Phil-r.png" alt="image"> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-6">
                        <div class="dtr-pr-30"> 
                            <img src="/assets/web_images/Shahid-r.png" alt="image"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="founders" class="dtr-section dtr-py-100 bg-light-blue">
    <div class="container">
        <div class="dtr-styled-heading">
            <h2 class="orbitron-font">THE CO-FOUNDERS</h2>
        </div>
        <div class="row d-flex align-items-center dtr-styled-tab">
            <div class="col-12 col-md-3">
                <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="phil-tab-1" data-toggle="pill" href="#phil-tab" role="tab" aria-controls="services-tab-1" aria-selected="false">
                        <h4>PHIL MANHIRE</h4>
                    </a>
                    <a class="nav-link" id="shahid-tab-1-tab" data-toggle="pill" href="#shahid-tab-1" role="tab" aria-controls="shahid-tab-1" aria-selected="true">
                        <h4>SHAHID SIDDIQUI</h4>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-9 small-device-space">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="phil-tab" role="tabpanel" aria-labelledby="phil-tab-1">
                        <div class="row">
                            <div class="col-12 col-md-5 small-device-space"> <img src="/assets/web_images/Phil.jpg" alt="image"> </div>
                            <div class="col-12 col-md-7">
                                <p>
                                    <b>Phil’s expertise</b> is broad and varied, ranging from devising business exit strategies, designing and managing websites, implementing social media strategies and customer success strategies for business owners and copywriting.
                                </p>
                                <p>
                                    His experience and achievements include::
                                </p>
                                <ul style="padding-left:30px;">
                                    <li class="mb-0">Pioneering Australia’s technology broking industry.</li>
                                    <li class="mb-0">Financial services organisations, public and private, management experience.</li>
                                    <li class="mb-0">Starting up, developing and selling a successful financial planning business.</li>                                      
                                    <li class="mb-0">Financial and current affairs columnist for national newspaper.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shahid-tab-1" role="tabpanel" aria-labelledby="shahid-tab-1-tab">
                        <div class="row">
                            <div class="col-12 col-md-5 small-device-space"> <img src="/assets/web_images/Phil.jpg" alt="image"> </div>
                            <div class="col-12 col-md-7">
                                <p>
                                    In keeping with their goal to provide  you with  the very best digital card service and product, below are links that should answer any queries that you may have.
                                </p>
                                <p>
                                    In keeping with their goal to provide  you with  the very best digital card service and product, below are links that should answer any queries that you may have:
                                </p>
                                <ul style="padding-left:30px;">
                                    <li class="mb-0">Digital Business Cards</li>
                                    <li class="mb-0">Sharing Your Card</li>
                                    <li class="mb-0">Business Card Scanner</li>                                      
                                    <li class="mb-0">How to Scan a QR Code</li>
                                </ul>
                                <p>
                                    If you have that you would like to answered, please <a href="#" class="color-blue">Contact Us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features" class="dtr-section dtr-py-100">
    <div class="container">
        <!-- heading starts -->
        <div class="dtr-styled-heading heading-center">
            <h2 class="orbitron-font">Features and Benefits</h2>
        </div>
        <!-- heading ends --> 
        <!-- portfolio grid starts -->
        <div class="dtr-portfolio-grid dtr-portfolio-grid-4col dtr-portfolio-style-1 dtr-rounded-img clearfix">
            <!-- portfolio item 1 starts -->
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-1.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> 
                        <a class="media-zoom popup-gallery" href="/assets/web_images/feature-1.jpg"></a> 
                    </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-2.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-2.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-3.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-3.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-4.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-4.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-5.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-5.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-6.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-6.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-7.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-7.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-8.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-8.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-9.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-9.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-10.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-10.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-11.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-11.jpg"></a> </div>
                </div>
            </div>
            <div class="dtr-portfolio-item">
                <div class="dtr-portfolio-content">
                    <img src="/assets/web_images/feature-12.jpg" alt="image">
                    <div class="dtr-portfolio-overlay"> <a class="media-zoom popup-gallery" href="/assets/web_images/feature-12.jpg"></a> </div>
                </div>
            </div>
        </div>
        <!-- portfolio grid ends --> 
    </div>
</section>
<section class="dtr-section parallax dtr-py-100" style="background-image: url(/assets/web_images/background-cta.jpg);">
    <div class="container">
        <!--== row starts ==-->
        <div class="row text-center">
            <div class="col-12">
                <h3 class="orbitron-font font-weight-700 color-dark">Want to work together?</h3>
                <p class="color-dark text-size-md orbitron-font">We're available for freelance work.</p>
                <!-- link starts --> 
                <a href="#contact" class="dtr-btn btn-white dtr-mt-30">Contact Us <i class="icon-chevron-compact-right"></i></a> 
                <!-- link ends --> 
            </div>
        </div>
        <!--== row ends ==--> 
    </div>
</section>
<section id="pricing" class="dtr-section dtr-py-100 bg-light-blue">
    <div class="container">
        <div class="dtr-styled-heading">
            <h2 class="orbitron-font">Plans & Pricing</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="dtr-pricing bg-white">
                    <h4 class="dtr-pricing-heading mb-0 orbitron-font">FOR INDIVIDUALS </h4>
                    <h4 class="dtr-pricing-heading orbitron-font">
                        On<span class=" color-blue">digi</span>card Professional
                    </h4>
                    <p class="dtr-price color-blue">
                        <span><sup>$</sup><span style="text-decoration: line-through; margin-bottom:40px!important;">189 PA</span></span>
                    </p>
                    <h4 class="dtr-pricing-heading mb-0">
                        Special Offer 
                    </h4>
                    <h4 class="dtr-pricing-heading color-muted">
                        Limited Time Only 
                    </h4>
                    <p class="dtr-price color-blue">
                        <span><sup>$</sup>155 PA</span>
                    </p>
                    <p class="font-weight-500 color-dark">Includes:</p>
                    <ul class="dtr-list-pricing">
                        <li>Customise your business cards</li>
                        <li>Stay on brand</li>
                    </ul>
                    <a href="/order" class="dtr-btn btn-blue dtr-mt-30">Order Now</a>
                </div> 
            </div>
            <div class="col-12 col-md-6">
                <div class="dtr-pricing pricing-focused" style="background-color: #eee;">
                    <div class="dtr-focus-border bg-blue"></div>
                    <h4 class="dtr-pricing-heading mb-0 orbitron-font">
                        FOR BUSINESS
                    </h4>
                    <h4 class="dtr-pricing-heading orbitron-font">
                        On<span class=" color-blue">digi</span>card Corporate
                    </h4>

                    <p class="color-dark">
                        Set up your entire team with branded digital business cards.
                    </p>
                    <p class="color-dark">
                        More affordable and eco-friendly than paper business cards, Ondigicard Corporate gives you all the benefits of our Professional plan, with premium features like corporate branding, custom URLs, administrative control, and more.
                    </p>
                    <br><br><br><br>
                    <p class="font-weight-500 color-dark">Includes:</p>

                    <ul class="dtr-list-pricing">
                        <li>Build and boost brand awareness</li>
                        <li>Track and analyse business engagement</li>
                    </ul>
                    <a href="tel:0452144476" class="dtr-btn btn-blue dtr-mt-30">Talk to us: 0452 144 476 </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dtr-section parallax dtr-py-100" style="background-image: url(/assets/web_images/background-cta.jpg);">
    <div class="container">
        <!--== row starts ==-->
        <div class="row text-center">
            <div class="col-12">
                <h3 class="orbitron-font font-weight-700 color-dark">Want to work together?</h3>
                <p class="color-dark text-size-md orbitron-font">We're available for freelance work.</p>
                <!-- link starts --> 
                <a href="#contact" class="dtr-btn btn-white dtr-mt-30">Contact Us <i class="icon-chevron-compact-right"></i></a> 
                <!-- link ends --> 
            </div>
        </div>
        <!--== row ends ==--> 
    </div>
</section>
<section id="contact" class="dtr-section dtr-py-100 bg-light-blue">
    <div class="container">
        <div class="dtr-styled-heading">
            <h2 class="orbitron-font">SAY HELLO</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                @if(count($errors) > 0)
                    @if($errors->first() == 'success')
                        <div class="alert alert-success">
                            Message successfully sent.
                        </div>
                    @endif
                @endif
                <div class="dtr-form">
                    <form id="" method="post" action="{{route('form.contact')}}">
                        @csrf
                        <fieldset>
                            <div class="dtr-form-row dtr-form-row-2col">
                                <p class="dtr-form-column">
                                    <input name="name"  type="text" placeholder="Name" value="{{old('name')}}">
                                    @error('name')
                                        <span style="color: red;font-size: 14px;">
                                            *{{$message}}
                                        </span>
                                    @enderror
                                </p>
                                <p class="dtr-form-column">
                                    <input name="email"  class="required email" type="text" placeholder="Email" value="{{old('email')}}">
                                    @error('email')
                                        <span style="color: red;font-size: 14px;">
                                            *{{$message}}
                                        </span>
                                    @enderror
                                </p>
                            </div>
                            <p>
                                <input name="phone"  type="text" placeholder="Phone" value="{{old('phone')}}">
                                @error('phone')
                                    <span style="color: red;font-size: 14px;">
                                        *{{$message}}
                                    </span>
                                @enderror
                            </p>
                            <p>
                                <textarea rows="6" name="message" id="message" class="required"  placeholder="Message">
                                    {{old('message')}}
                                </textarea>
                                @error('message')
                                    <span style="color: red;font-size: 14px;">
                                        *{{$message}}
                                    </span>
                                @enderror
                            </p>
                            <p class="text-center">
                                <button class="dtr-btn btn-blue dtr-mt-minus30" type="submit">Enquire Now<i class="icon-cursor dtr-ml-15"></i></button>
                            </p>
                            <div id="result"></div>
                        </fieldset>
                    </form>
                </div>
                <!-- form ends --> 
            </div>
            <!-- column 1 ends --> 
            <!-- column 2 starts -->
            <div class="col-12 col-md-6">
                <div class="dtr-pl-30">
                    <p class="d-flex align-items-center"><i class="icon-geo-alt dtr-mr-10 text-size-md color-blue"></i><span class="font-weight-500 color-dark">Where we are</span></p>
                    <p>Carona Avenue, Gilles Plains, SA 5086, Australia</p>
                    <div class="spacer-20"></div>
                    <p class="d-flex align-items-center"><i class="icon-phone-fill dtr-mr-10 text-size-md color-blue"></i><span class="font-weight-500 color-dark">Give us a call</span></p>
                    <p>+61 452 144 476</p>
                    <div class="spacer-20"></div>
                    <p class="d-flex align-items-center"><i class="icon-envelope-fill dtr-mr-10 text-size-md color-blue"></i><span class="font-weight-500 color-dark">Email us</span></p>
                    <p>hello@ondigicard.com</p>
                    <!-- social starts -->
                    <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                    <li><a href="#" class="dtr-social-button dtr-instagram" target="_blank" title="instagram"><span>Follow on Instagram</span></a></li>
                    <li><a href="https://www.facebook.com/onDigicard" class="dtr-social-button dtr-facebook" target="_blank" title="facebook"><span>Like On Facebook</span></a></li>
                    <li><a href="https://www.linkedin.com/company/ondigicard/" class="dtr-social-button dtr-linkedin" target="_blank" title="linkedin"><span>View Our Profile</span></a></li>
                </ul>
                    <!-- social ends --> 
                </div>
            </div>
            <!-- column 2 ends --> 
        </div>
        <!--== row ends ==--> 
    </div>
</section>
@endsection     