<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <title>Ondigicard - Mobile your Profile</title>
        <meta name="author" content="tansh">
        <meta name="description" content="HTML Teamplate">
        <asmeta name="keywords" content="agency, personal, photography, one page">
        @include('partials.head_css')

    </head>
    <body id="OrderPage">
        <div id="dtr-wrapper" class="clearfix">
            <div class="dtr-preloader">
                <div class="dtr-preloader-inner">
                    <div class="dtr-preloader-img"></div>
                </div>
            </div>
            <div class="dtr-responsive-header fixed-top">
                <div class="container">
                    <!-- small devices logo --> 
                    <a href="/"><img src="assets/web_images/logo-dark.png" class="logo"></a> 
                    <!-- small devices logo ends --> 
                    <!-- menu button -->
                    <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
                </div>
                <div class="dtr-responsive-header-menu"></div>
            </div>
            <header id="dtr-header-global" class="fixed-top">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="dtr-header-left">
                            <a class="logo-default dtr-scroll-link" href="/"><img src="assets/web_images/logo-dark.png" alt="logo" width="250"></a> 
                            <a class="logo-alt dtr-scroll-link" href="/"><img src="assets/web_images/logo-dark.png" alt="logo" width="250"></a> 
                        </div>
                        <div class="dtr-header-right">
                            <div class="main-navigation dtr-menu-dark">
                                <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                                    <li> <a class="nav-link" href="/">Home</a> </li>
                                    <li> <a class="nav-link" href="/#about">About Us</a> </li>
                                    <li> <a class="nav-link" href="/#features">Features</a> </li>
                                    <li> <a class="nav-link" href="/#pricing">Pricing</a> </li>
                                    <li> <a class="nav-link" href="/faqs">FAQ's</a> </li>
                                    <li> <a class="nav-link" href="/#contact">Contact</a> </li>
                                    <li> 
                                        <a class="nav-link order-btn-nav" href="/order-now"
                                            style="
                                            background-color:#F16505;
                                            padding: 10px 20px;
                                            border-radius: 7px;
                                            color: #fff;
                                            " 
                                        >
                                            Order Now
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- menu ends --> 
                    </div>
                </div>
            </header>
            <div id="dtr-main-content">
                <section class="dtr-section dtr-py-100 bg-light-blue pt-100 top-banner">
                    <div class="container" style="padding-top:50px!important;">
                        <div class="dtr-styled-heading">
                            <h4 class="orbitron-font">Personalising your own <span class="color-blue">Digital Business Card</span> is easy! Just fill in the information below that you want on yours and we’ll do the rest.</h4>
                        </div>
                        <div class="errors">
                            @if(count($errors) > 0)
                                @if($errors->first('success'))
                                    <div class="alert alert-success">
                                        Message successfully sent.
                                    </div>
                                @elseif($errors->first('captchaError'))
                                    <div class="alert alert-warning">
                                        Captcha verification failed. Please try again.
                                    </div>
                                @endif
                            @endif
                        </div>  
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="dtr-form">
                                    <form id="" method="post" action="{{route('form.order')}}">
                                        @csrf
                                        <fieldset>
                                            <h4 class="color-blue orbitron-font">Personal Details</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Name:</label>
                                                        <input name="name" class="required"  type="text" placeholder="Name" required>
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Email:</label>
                                                        <input name="email" class="required email" type="text" placeholder="Email" required>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Mobile No:</label>
                                                        <input name="mobile" class="required"  type="text" placeholder="Mobile Number" required>
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Whatsapp No. :</label>
                                                        <input name="whatsapp" class="" type="text" placeholder="Whatsapp Number">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 orbitron-font">Company Details</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Company Name:</label>
                                                        <input name="company_name" class=""  type="text" placeholder="Company Name">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Your Position:</label>
                                                        <input name="position" class=" position" type="text" placeholder="Your Position">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Slogan:</label>
                                                        <input name="slogan" class=""  type="text" placeholder="Slogan">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Website Link:</label>
                                                        <input name="website" class=" website" type="url" placeholder="Website Link">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 orbitron-font">Address Details</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Name For Attention:</label>
                                                        <input name="attention_name" class=""  type="text" placeholder="Name for Attention" >
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Address:</label>
                                                        <input name="address" class="" type="text" placeholder="Address" >
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 orbitron-font">About</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Heading:</label>
                                                        <input name="heading" class=""  type="text" placeholder="Heading">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Details :</label>
                                                        <input name="details" class=" details" type="text" placeholder=" Details">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 orbitron-font">Social Media Links</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Facebook:</label>
                                                        <input name="facebook" class=""  type="text" placeholder="Facebook">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Linkedin :</label>
                                                        <input name="linkedin" class=" details" type="text" placeholder=" Linkedin">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Instagram:</label>
                                                        <input name="instagram" class=""  type="text" placeholder="Instagram">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Youtube :</label>
                                                        <input name="youtube" class=" details" type="text" placeholder=" Youtube">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Twitter :</label>
                                                        <input name="twitter" class=" details" type="text" placeholder=" Twitter">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 orbitron-font">Contact Link</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Contact Link :</label>
                                                        <input name="contact_link" class=" details" type="text" placeholder=" (e.g., domain.com.au/contact-us)">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 orbitron-font">Menu Name</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Menu Name :</label>
                                                        <input name="menu" class=" details" type="text" placeholder="(e.g., Our Services)">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 mb-0 orbitron-font">Template Colors</h4>
                                            <p class="text-dark">Choose two colours – one primary and one secondary. #HEX colours if possible.</p>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Primary Color :</label>
                                                        <input name="primary_color" class=" details" type="text" placeholder="(e.g., #873849)" >
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Secondary Color :</label>
                                                        <input name="secondary_color" class=" details" type="text" placeholder="(e.g., #39ebe9)" >
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 mb-0 orbitron-font">Libraries</h4>
                                            <p class="text-dark">Please provide links for up to a maximum of three videos.</p>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Video 1 :</label>
                                                        <input name="video1" class=" details" type="text" placeholder="Url of Video">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Video 2 :</label>
                                                        <input name="video2" class=" details" type="text" placeholder="Url of Video">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="dtr-form-column">
                                                        <label class="orbitron-font">Video 3 :</label>
                                                        <input name="video3" class=" details" type="text" placeholder="Url of Video">
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="color-blue mt-3 mb-0 orbitron-font">Photos</h4>
                                            <p class="text-dark">
                                                Email up to a maximum of 10 photos to <a href="mailto:hello@ondigicard.com" class="color-blue">hello@ondigicard.com</a>. The photo dimensions ideally will be 800x600 pixels. If the photos provided are different to these dimensions, then we shall need to edit them for quality purposes.
                                            </p>
                                            <div>
                                                <div class="g-recaptcha" id="rcaptcha" data-sitekey="{{env('CAPTCHA_SITEKEY','default')}}"></div>
                                                <span id="captcha" style="color:red;font-size: 14px;" /></span>
                                                <input type="submit" class="dtr-btn btn-blue dtr-mt-30" value="Submit">
                                            </div>
                                            <div id="result"></div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- form ends --> 
                            </div>
                        </div> 
                    </div>
                </section>
                @include('partials.footer')
            </div>
        </div>
        <script src="assets/web_js/jquery.min.js"></script> 
        <script src="assets/web_js/bootstrap.min.js"></script> 
        <script src="assets/web_js/plugins.js"></script> 
        <script src="assets/web_js/custom.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            window.onload = function() {
                var $recaptcha = document.querySelector('#g-recaptcha-response');

                if($recaptcha) {
                    $recaptcha.setAttribute("required", "required");
                }
            };
            function get_action(form) 
            {
                var v = grecaptcha.getResponse();
                if(v.length == 0)
                {
                    document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
                    return false;
                }
                else
                {
                     document.getElementById('captcha').innerHTML="Captcha completed";
                    return true; 
                }
            }
        </script>
    </body>
</html>