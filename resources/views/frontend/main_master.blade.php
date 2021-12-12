<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Tour & Travel's BD</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/frontend/') }}images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css" />

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">

   @include('frontend.body.header')
    <!-- Swiper-->
@yield('content')
    <!-- Page Footer--><a class="banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_big_02.jpg" alt=""/></a>
   @include('frontend.body.footer')
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{ asset('assets/frontend/js/core.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/script.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type){
        case 'info' :
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'success' :

            toastr.success("{{ Session::get('message') }}");
            break;

        case 'warning' :
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'error' :
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>

</body>
</html>
