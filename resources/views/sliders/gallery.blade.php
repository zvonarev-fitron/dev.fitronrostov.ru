@extends('layouts.layout')

@push('style')
    <!-- Include stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" rel="stylesheet">
    <!-- Include the Swiper library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- Swiper JS Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue-awesome-swiper@3.1.2/dist/vue-awesome-swiper.js"></script>

    <style>
        .swiper-container {
            /*height: 300px;*/
            width: 100%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 38px;
            font-weight: 700;
            background-color: #eee;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .swiper-container {
            background-color: #000;
        }
        .swiper-slide {
            background-size: cover;
            background-position: center;
        }
        .gallery-top {
            height: 80%!important;
            width: 100%;
        }
        .gallery-thumbs {
            height: 20%!important;
            box-sizing: border-box;
            padding: 10px 0;
        }
        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }
        .gallery-thumbs .swiper-slide-active {
            opacity: 1;
        }
    </style>
@endpush

@section('script')
<script>
    Vue.use(VueAwesomeSwiper);
    new Vue({
        el: '#vueapp',
        components: {
            LocalSwiper: VueAwesomeSwiper.swiper,
            LocalSlide: VueAwesomeSwiper.swiperSlide,
        },
        data: {
            message: 'Hi from Vue',
            swiperOptionTop: {
                spaceBetween: 10,
                loop: true,
                loopedSlides: 5, //looped slides should be the same
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: true  //false
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                }
            },
            swiperOptionThumbs: {
                spaceBetween: 10,
                slidesPerView: 10,   //'{{ count($params['images']) > 5 ? 5 : count($params['images'])  }}',
                touchRatio: 0.2,
                loop: true,
                loopedSlides: 5, //looped slides should be the same
                slideToClickedSlide: true,
            }
        },
        methods: {
            stop: function() {
                if(!this.$refs.swiperTop.swiper.autoplay.paused){
                    this.$refs.swiperTop.swiper.autoplay.paused = true;
                    this.$refs.swiperTop.swiper.autoplay.stop();
                }
            },
            start: function() {
                if(this.$refs.swiperTop.swiper.autoplay.paused){
                    this.$refs.swiperTop.swiper.autoplay.paused = false;
                    this.$refs.swiperTop.swiper.autoplay.start();
                }
            }
        },
        mounted() {
            this.$nextTick(() => {
                const swiperTop = this.$refs.swiperTop.swiper;
                const swiperThumbs = this.$refs.swiperThumbs.swiper;
                swiperTop.controller.control = swiperThumbs;
                swiperThumbs.controller.control = swiperTop;
            })
        }
    })
</script>
@endsection

@section('pagehead')
    <div id="pagehead" style="background: url(/images/bg2.jpg) no-repeat center;background-size: cover;">
        <div class="container">
            <h1>Галлерея</h1>
            <ul class="uk-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">Галлерея</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
<div class="redhr"></div>
<div id="vueapp">
    {{--<p>@{{message}}</p>--}}
    <!-- swiper1 -->
    <div v-on:mouseover="stop" v-on:mouseout="start">
    <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop">
        @foreach($params['images'] as $image)
            <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
        @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach

            <div class="swiper-button-next swiper-button-white" slot="button-next"></div>
        <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>
    </swiper>
    <!-- swiper2 Thumbs -->
    <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
        @foreach($params['images'] as $image)
            <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
        @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach
            @foreach($params['images'] as $image)
                <swiper-slide><img src="{{ url($image->image) }}"></swiper-slide>
            @endforeach

    </swiper>
    </div>
</div>
<div class="redhr"></div>
@endsection

