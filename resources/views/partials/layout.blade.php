<!doctype html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        @yield('meta')
        <meta name="author" content="tansh">
        <meta name="description" content="HTML Teamplate">
        <asmeta name="keywords" content="agency, personal, photography, one page">
        @include('partials.head_css')
        @yield('extra_css')
    </head>
    <body>
        <div id="dtr-wrapper" class="clearfix">
            <div class="dtr-preloader">
                <div class="dtr-preloader-inner">
                    <div class="dtr-preloader-img"></div>
                </div>
            </div>
            @include('partials.header')
            <div id="dtr-main-content">
                @yield('main_content')
                @include('partials.footer')
            </div>
        </div>
        <script src="/assets/web_js/jquery.min.js"></script> 
        <script src="/assets/web_js/bootstrap.min.js"></script> 
        <script src="/assets/web_js/plugins.js"></script> 
        <script src="/assets/web_js/custom.js"></script>
    </body>
</html>