<template>
    <div class="p_s_c">
        <font-awesome-icon icon="mobile-alt" class="icon" />
    </div>
</template>

<script>

    import { library } from '@fortawesome/fontawesome-svg-core';
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
    import { faMobileAlt } from '@fortawesome/free-solid-svg-icons'

    library.add(faMobileAlt)

    export default {
        name: "PhoneSendComponent",
        components: { FontAwesomeIcon }
    }
</script>

<style lang="scss" scoped>
    @keyframes p_s_cBeforeWave{
        from{
            width:0;
            height:0;
        }
        to{
            width:60px;
            height:60px;
            opacity:0
        }
    }
    @keyframes p_s_cAfterWave{
        from{
            width:0;
            height:0;
        }
        to{
            width:60px;
            height:60px;
            opacity:0
        }
    }
    @keyframes comagic-label-icon-sitephone {
        1%, 2% {
            transform: rotate3d(0, 0, 1, 9deg);
            opacity: 1;
        }
        3%, 5%, 7% {
            transform: rotate3d(0, 0, 1, -9deg);
        }
        4%, 6%, 8% {
            transform: rotate3d(0, 0, 1, 9deg);
        }
        9% {
            transform: rotate3d(0, 0, 1, 0);
        }
    }
    .icon {
        z-index: 2;
        background-color: #102e7a;
        animation: comagic-label-icon-sitephone 7s ease-in-out infinite;
    }
    .p_s_c{
        width:25px;
        height:36px;
        border-radius:8px;
        background-color: #102e7a;
        /*position:absolute;*/
        cursor:pointer;
        color: white;
        font-size: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        &:before, &:after {
            content:'';
            position:absolute;
            display:block;
            border-radius:50%;
            border:1px solid #ffffff;
            transition:all 4s ease-in-out;
            width:0;
            height:0;
            z-index: 1;
        }
        &:before {
            animation:p_s_cBeforeWave 5s infinite;
        }
        &:after {
            animation:p_s_cAfterWave 4s infinite;
        }
        &:hover {
            &:before,
            &:after {
                animation-play-state:paused;
            }
        }
    }
</style>
