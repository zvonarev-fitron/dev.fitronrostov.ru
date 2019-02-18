<template>
    <swiper :options="swiperOption" ref="mySwiper" >
        <swiper-slide v-for="(item, id) in items" :key="id">
            <img :src="item.src" />
        </swiper-slide>
        <div class="swiper-m-button-prev" slot="button-prev"><span></span></div>
        <div class="swiper-m-button-next" slot="button-next"><span></span></div>
        <div class="swiper-scrollbar"   slot="scrollbar"></div>
    </swiper>
</template>

<script>
    import '../../../sass/swiper/css/swiper.css';
    import { swiper, swiperSlide } from 'vue-awesome-swiper';
    export default {
        name: "carrousel",
        components: {
            swiper,
            swiperSlide
        },
        props: [
            'items'
        ],
        data() {
            return {
                swiperOption: {
                    scrollbar: {
                        el: '.swiper-scrollbar',
                        hide: false,
                        dragClass: 'ft-site-swiper-scrollbar-drag'
                    },
                    autoplay: {
                        delay: 7000,
                        disableOnInteraction: false,
                        waitForTransition: false
                    },
                    navigation: {
                        nextEl: '.swiper-m-button-next',
                        prevEl: '.swiper-m-button-prev',
                    },
                    // spaceBetween: 3000,
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    speed: 2000,
                }
            }
        }
    }
</script>

<style scoped lang="scss">
    .swiper-container-horizontal > .swiper-scrollbar {
        bottom: 0;
        height: 3px;
        background: none;
    }
    .swiper-m-button-prev {
        left: 10px;
        right: auto;
        width: 48px;
        height: 20px;
        top: 50%;
        overflow: hidden;
        span {
            display: block;
            width: 48px;
            height: 20px;
            background-image: url('/images/arrow-left.svg');
            background-size: 48px 20px;
            background-position: center;
            background-repeat: no-repeat;
            margin-left: 15px;
            transition: margin-left .3s linear;
            &:hover {
                margin-left: 0;
            }
        }
    }
    .swiper-m-button-next {
        right: 10px;
        left: auto;
        width: 48px;
        height: 20px;
        top: 40%;
        overflow: hidden;
        span {
            display: block;
            width: 48px;
            height: 20px;
            background-image: url('/images/arrow-right.svg');
            background-size: 48px 20px;
            background-position: center;
            background-repeat: no-repeat;
            margin-left: -15px;
            transition: margin-left .3s linear;
            &:hover {
                margin-left: 0;
            }
        }
    }
    .swiper-m-button-prev,
    .swiper-m-button-next {
        position: absolute;
        width: 48px;
        height: 20px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
    }
    @media (max-width: 767px) {
        .swiper-m-button-prev,
        .swiper-m-button-next {
            display:none;
        }
    }
</style>
