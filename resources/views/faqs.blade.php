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
    <body id="faqPage">
        <div id="dtr-wrapper" class="clearfix">
            <div class="dtr-preloader">
                <div class="dtr-preloader-inner">
                    <div class="dtr-preloader-img"></div>
                </div>
            </div>
            <div class="dtr-responsive-header fixed-top">
                <div class="container">
                    <a href="/">
                        <img src="/assets/web_images/logo-dark.png" class="logo">
                    </a>
                    <button id="dtr-menu-button" class="dtr-hamburger" type="button">
                        <span class="dtr-hamburger-lines-wrapper">
                            <span class="dtr-hamburger-lines"></span>
                        </span>
                    </button>
                </div>
                <div class="dtr-responsive-header-menu"></div>
            </div>
            <header id="dtr-header-global" class="fixed-top">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="dtr-header-left">
                            <a class="logo-default dtr-scroll-link" href="/"><img src="/assets/web_images/logo-dark.png" alt="logo" width="250"></a> 
                            <a class="logo-alt dtr-scroll-link" href="/"><img src="/assets/web_images/logo-dark.png" alt="logo" width="250"></a> 
                        </div>
                        <div class="dtr-header-right">
                            <div class="main-navigation dtr-menu-dark">
                                <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                                    <li> <a class="nav-link" href="/">Home</a> </li>
                                    <li> <a class="nav-link" href="/#about">About Us</a> </li>
                                    <li> <a class="nav-link" href="/#features">Features</a> </li>
                                    <li> <a class="nav-link" href="/#pricing">Pricing</a> </li>
                                    <li> <a class="nav-link active" href="/faqs">FAQ's</a> </li>
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
                    </div>
                </div>
            </header>
            <div id="dtr-main-content" >
                <section class="dtr-section dtr-py-100 bg-light-blue pt-100 faq-banner">
                    <div class="container" style="padding-top:50px!important;">
                        <div class="dtr-styled-heading">
                            <h2 class="orbitron-font">What is a Digital Business Card?</h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img src="/assets/web_images/DigicardSample-Phil.png" alt="" style=" width: 100%;">
                            </div>
                            <div class="col-12 col-md-8 mdya">
                                <div class="bg-white charter">
                                    Digital business cards are used by both individuals and businesses to quickly exchange contact information. <br><br>The Ondigicard is an excellent way to grow your network. Reason being is that it’s more engaging, cost-effective, and eco-friendly than traditional physical business cards.
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="dtr-styled-heading">
                            <h2 class="orbitron-font mt-5">How Do I Share My Digital Business Card?</h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8 mdya">
                                <div class="bg-white charter">
                                    There are multiple ways to share your Ondigicard digital business card. The quickest way to share your digital business card in person is with your QR code. <br><br>With Ondigicard, you are also able to send your digital business card to someone via an SMS text message, email, WhatsApp or social media.
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="/assets/web_images/SocialMediaLinks.jpg" alt="" style=" width: 100%;">
                            </div>
                        </div>
                        <div class="dtr-styled-heading m-mt-60 m-mb-20">
                            <h2 class="orbitron-font mt-5">How to Scan a QR Code</h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img src="/assets/web_images/QRCode.jpg" alt="" style=" width: 100%;">
                            </div>
                            <div class="col-12 col-md-8 mdya">
                                <div class="bg-white charter" >
                                    When you first open your card on your phone, you just tap the “Share this Card” button, then tap on the QR Code button. <br><br>This action will then bring up the QR Code which can be used by the person you’re meeting with to add your Ondigicard to their home screen.
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('partials.footer')
            </div>
        </div>
        <script src="/assets/web_js/jquery.min.js"></script> 
        <script src="/assets/web_js/bootstrap.min.js"></script> 
        <script src="/assets/web_js/plugins.js"></script> 
        <script src="/assets/web_js/custom.js"></script>
    </body>
</html>