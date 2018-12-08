<!DOCTYPE html>
<html>
<head>
    <title>Www4</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Html5 slideshow" />

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="/html/www5/engine1/style.css" />
    <script type="text/javascript" src="/html/www5/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:0">

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach($params['wow'] as $wow)
            <li><img src="{{$wow->image}}" alt="" title="" id="wows1_{{$wow->id}}"/></li>
            @endforeach
        </ul>
    </div>
    <div class="ws_thumbs">
        <div>
            @foreach($params['wow'] as $wow)
            <a href="#wows1_{{$wow->id}}" title=""><img src="{{$wow->image}}" alt="" /></a>
            @endforeach
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html5 slideshow</a> by WOWSlider.com v8.8</div>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="/html/www5/engine1/wowslider.js"></script>
<script type="text/javascript" src="/html/www5/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

</body>
</html>