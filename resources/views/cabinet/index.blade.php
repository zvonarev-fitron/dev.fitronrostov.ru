@extends('layouts.layout')

@section('logo')
    <div id="topleftcont" class="uk-hidden-small">
        <div class="toplefttop"></div>
        <div id="topleftblock">
            <div class="bottomwhite"></div>
        </div>
        <div class="blueline"></div>
    </div>
@endsection

@section('pagehead')
    <div id="pagehead" style="background: url(/images/bg2.jpg) no-repeat center;background-size: cover;">
        <div class="container">
            <h1>Личный кабинет</h1>
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li class="uk-active">
                    <span itemprop="name">Личный кабинет</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="cabinet_container">
        @includeIf('cabinet.include.header')
        <div class="cabinet_container_content">
            @includeIf('cabinet.include.menu')
            @includeIf($params['cabinet_page'])
        </div>
    </div>
@endsection

@section('script')
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
            // window.cards_modal_form_captcha = cards_modal_form();
        };

        document.getElementById('cabinet_select_club').addEventListener('click', function(event){
            var $thiscont = this.querySelector('.select-club');
            if($thiscont.classList.contains('select-open')){
                $thiscont.classList.remove('select-open');
            }
            else {
                $thiscont.classList.add('select-open');
            }
        });

    </script>
@endsection

{{--@push('modal')--}}
    {{--@includeIf('include.modal.cards')--}}
{{--@endpush--}}

