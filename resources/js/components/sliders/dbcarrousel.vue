<template>
    <div>
        <swiper :options="swiperOptionTop" ref="swiperTop" class="swiper_top">
            <swiper-slide v-for="(item, id) in items" :key="id">
                <div class="st_slider">
                    <div class="st_date">
                        <span class="st_day">{{ item.day }}</span>
                        <span class="st_month">{{ item.month }}</span>
                    </div>
                    <div class="st_image">
                        <img :src="item.src" class="st_img"/>
                        <div class="st_sider_title">
                            <div class="st_title"><a  :href="item.url" target="_parent">{{ item.title }}</a></div>
                            <div class="st_subtitle"><span>{{ item.subtitle }}</span></div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
        <swiper :options="swiperOptionButtom" ref="swiperButtom" class="swiper_buttom">
            <swiper-slide v-for="(item, id) in items" :key="id">
                <div class="sb_slider">
                    <div class="sb_date">
                        <span class="sb_day">{{ item.day }}</span>
                        <span class="sb_month">{{ item.month }}</span>
                    </div>
                    <div class="sb_name">
                        <span>{{ item.name }}</span>
                    </div>
                    <div class="sb_url">
                        <div class="sb_url_arrow">
                            <a :href="item.url" target="_parent"><span>Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <div class="swiper-db-button-prev" slot="button-prev"><span></span></div>
            <div class="swiper-db-button-next" slot="button-next"><span></span></div>
        </swiper>
    </div>
</template>

<script>
    import '../../../sass/swiper/css/swiper.css';
    import { swiper, swiperSlide } from 'vue-awesome-swiper';
    export default {
        name: "dbcarrousel",
        components: { swiper, swiperSlide },
        props: [ 'items', 'width'],
        data(){
            return {
                swiperOptionTop: {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    // spaceBetween: 0,
                    grabCursor: true,
                    // width: 1000,
                    // slidesPerView: 2,
                    spaceBetween: 0,
                    // slidesPerGroup: 2,
                    // loop: true,
                    // loopFillGroupWithBlank: true,
                },
                swiperOptionButtom: {
                    slidesPerView: 5,
                    centeredSlides: true,
                    mousewheel: true,
                    grabCursor: true,
                    slideToClickedSlide: true,
                    navigation: {
                        nextEl: '.swiper-db-button-next',
                        prevEl: '.swiper-db-button-prev',
                    },
                    breakpoints: {
                        5000: {
                            width: 1000,
                        },
                        1199: {
                            width: 750
                        },
                        959: {
                            width: 500
                        },
                        767: {
                            slidesPerView: 3
                        }
                    }
                }
            }
        },
        // created() {
        //     let iW = window.innerWidth;
        //     let w = 1000;
        //     if(960 <= iW && 1200 > iW){
        //         w = 750;
        //     }
        //     if(768 <= iW && 960 > iW){
        //         w = 500;
        //     }
        //     this.$data.swiperOptionButtom.width = w;
        // },
        mounted() {
            // console.log(document.body.clientWidth);
            // console.log(window.innerWidth);
            // console.log(this.$data.swiperOptionButtom.width);
            this.$nextTick(() => {
                const swiperTop = this.$refs.swiperTop.swiper;
                const swiperButtom = this.$refs.swiperButtom.swiper;
                swiperTop.controller.control = swiperButtom;
                swiperButtom.controller.control = swiperTop;
            })
        }
    }
</script>

<style lang="scss">
    /*.swiper-slide {*/
        /*width: 80%;*/
    /*}*/
    /*.swiper-slide:nth-child(2n) {*/
        /*width: 70%;*/
    /*}*/
    .swiper_top {
        height: 380px;
        .swiper-wrapper {
            left: -99px;
        }
        .st_sider_title {
            position: relative;
            bottom: 106px;
            color: white;
            font-size: 14px;
            left: 22px;
            text-transform: uppercase;
            a {
                color: white;
                font-size: 20px;
                font-weight: 600;
            }
        }
        .st_day {
            font-size: 25px;
        }
        .st_day,
        .st_month {
            color: #0c3989;
        }
        .swiper-slide {
            width:75%;
            height: 50%;
            overflow: hidden;
        }
        .swiper-slide-prev {
            /*width:60%;*/
            height: 50%;
            opacity: 0;
            transition: opacity 1s linear;
        }
        .swiper-slide-active {
            /*width:70%;*/
            z-index: 1;
            overflow: visible;
            .st_day,
            .st_month {
                color: #ff0033;
            }
        }
        .swiper-slide-next {
            /*width:60%;*/
            margin-top: 10px;
            height: 65%;
            overflow: hidden;
        }
    }
    .swiper_buttom {
        height: 180px;
        padding-top: 20px;
        .sb_day {
            font-size: 25px;
        }
        .sb_day,
        .sb_month {
            color: #8399c0;
        }
        .swiper-slide {
            height:158px;
            &:hover {
                .sb_date,
                .sb_url_arrow {
                    span {
                        color: #ff0033;
                    }
                }
            }
        }
        .swiper-wrapper {
            left: -200px;
        }
        .swiper-slide-prev {
        }
        .swiper-slide-active {
            border: 1px solid red;
            .sb_subtitle {
                color: #ff0033;
            }
            .sb_url_arrow {
                cursor: pointer;
                span {
                    color: #ff0033;
                }
            }
            .sb_day,
            .sb_month {
                color: #ff0033;
            }
        }
        .swiper-slide-next {
        }
        .swiper-db-button-next {
            right: 210px;
            left: auto;
            span {
                display: block;
                width: 48px;
                height: 20px;
                background-image: url('/images/arrow-blue-right.svg');
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
        .swiper-db-button-prev {
            left: 10px;
            right: auto;
            span {
                display: block;
                width: 48px;
                height: 20px;
                background-image: url('/images/arrow-blue-left.svg');
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
        .swiper-db-button-next,
        .swiper-db-button-prev {
            width: 48px;
            height: 20px;
            top: 12%;
            overflow: hidden;
            position: absolute;
            margin-top: -22px;
            z-index: 10;
            cursor: pointer;
        }
        .sb_slider {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            height: 100%;
            margin: 0 15px;
            color: #8399c0;
        }
        .sb_url_arrow {
            cursor: pointer;
            a {
                text-decoration: none;
            }
            span {
                color: #8399c0;
                display: block;
                width: 38px;
                height: 20px;
                background-image: url(/images/arrow-right.svg);
                background-size: 0;
                background-position: left;
                background-repeat: no-repeat;
                padding-left: 0;
                transition: all .3s linear ;
                &:hover {
                    color: #ff0033;
                    background-size: 22px;
                    padding-left: 22px;
                }
            }
        }
    }

    @media (min-width: 960px) and (max-width: 1199px){
        .swiper_top {
            height: 300px;
            .swiper-wrapper {
                left: -81px;
            }

        }
        .swiper_buttom {
            height: 103px;
            .swiper-wrapper {
                left: -151px;
            }
            .swiper-slide {
                height: 100px;
            }
            .sb_slider {
                margin:0;
                align-items: center;
            }
            .sb_name {
                display: none;
            }
            .sb_url_arrow {
                cursor: pointer;
                a {
                    text-decoration: none;
                }
                span {
                    width: 86px;
                }
            }
            .swiper-db-button-next,
            .swiper-db-button-prev {
                top: 20%;
            }
        }
    }
    @media (min-width: 768px) and (max-width: 959px) {
        .swiper_top {
            height: 241px;
            .swiper-wrapper {
                left: -64px;
            }

        }
        .swiper_buttom {
            height: 78px;
            padding-top: 20px;
            .swiper-wrapper {
                left: -100px;
            }
            .sb_name,
            .sb_url {
                display: none;
            }
            .sb_date {
                text-align: center;
            }
            .swiper-slide {
                height: 75px;
            }
            .swiper-db-button-next,
            .swiper-db-button-prev {
                top: 22%;
            }
            .swiper-db-button-next {
                right: 140px;
            }
        }
    }
    @media (max-width: 767px){
        .swiper_top {
            height: 343px;
            .swiper-wrapper {
                left: -94px;
            }
        }
        .swiper_buttom {
            height: 142px;
            .swiper-slide {
                height: 133px;
            }
            .swiper-wrapper {
                left: 0;
            }
            .swiper-db-button-next {
                right: 12px;
            }
            .swiper-db-button-next,
            .swiper-db-button-prev {
                top: 16%;
            }
        }
    }
    @media (min-width: 533px) and (max-width: 639px){
        .swiper_top {
            height: 287px;
            .swiper-wrapper {
                left: -78px;
            }
        }
        .swiper_buttom {
            .sb_name,
            .sb_url {
                display: none;
            }
        }
    }
    @media (min-width: 480px) and (max-width: 532px){
        .swiper_top {
            height: 242px;
            .swiper-wrapper {
                left: -64px;
            }
        }
        .swiper_buttom {
            height: 68px;
            .swiper-slide {
                height: 65px;
            }
        }
        .swiper_buttom {
            .sb_name,
            .sb_url {
                display: none;
            }
            .swiper-db-button-next,
            .swiper-db-button-prev {
                top: 25%;
            }
        }
    }
    @media (max-width: 479px){
        .swiper_top {
            height: 220px;
            .swiper-wrapper {
                left: -58px;
            }
        }
        .swiper_buttom {
            height: 68px;
            .swiper-slide {
                height: 65px;
            }
        }
        .swiper_buttom {
            .sb_name,
            .sb_url {
                display: none;
            }
            .swiper-db-button-next,
            .swiper-db-button-prev {
                top: 25%;
            }
        }
    }
</style>
