<!DOCTYPE html>
<html>
<head>
    <title>Www1</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Bootstrap carousel example" />

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="/html/www1/engine1/style.css" />
    <script type="text/javascript" src="/html/www1/engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>
<body style="margin:auto">


<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach($params['doings'] as $doing)
            <li>
                <a href="{{route('doing', ['code' => $doing->url])}}" target="_parent">
                    {{$doing->name}}
                <img src="{{$doing->image}}" alt="" title="" id="wows1_{{$doing->id}}"/>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="ws_thumbs">
        <div>
            @foreach($params['doings'] as $doing)
            <a href="#wows1_{{$doing->id}}" title="{{$doing->name}}"><img src="{{$doing->image}}" alt="" /></a>
            @endforeach
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap carousel example</a> by WOWSlider.com v8.8</div>
    <div class="ws_shadow"></div>
</div>

<script type="text/javascript" src="/html/www1/engine1/wowslider.js"></script>
<script type="text/javascript" src="/html/www1/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

</body>
</html>