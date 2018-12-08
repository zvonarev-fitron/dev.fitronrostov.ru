<!DOCTYPE html>
<html>
<head>
    <title>Css slideshow</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Css slideshow" />

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="/html/www3/engine1/style.css" />
    <script type="text/javascript" src="/html/www3/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>
<body style="margin:0">

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach($params['infrastructure'] as $infrastructure)
            <li><img src="{{$infrastructure->image}}" alt="" title="" id="wows1_{{$infrastructure->id}}"/></li>
            @endforeach
        </ul>
    </div>
    <div class="ws_thumbs">
        <div>
            @foreach($params['infrastructure'] as $infrastructure)
            <a href="#wows1_{{$infrastructure->id}}" title=""><img src="{{$infrastructure->image}}" alt="" /></a>
            @endforeach
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css slideshow</a> by WOWSlider.com v8.8</div>
    <div class="ws_shadow"></div>
</div>
<div style="clear: both;"></div>
<script type="text/javascript" src="/html/www3/engine1/wowslider.js"></script>
<script type="text/javascript" src="/html/www3/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

</body>
</html>