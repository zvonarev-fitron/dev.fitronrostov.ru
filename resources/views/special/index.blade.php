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
            <h1>{{$params['page']->menu}}</h1>

            <ul class="uk-breadcrumb">
                <li>
                    <a href="/"><span>Главная</span></a>
                </li>
                <li class="uk-active">
                    <span >{{$params['page']->menu}}</span>
                </li>
            </ul>

            {{--<ul class="uk-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">--}}
                {{--<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">--}}
                    {{--<a href="/" itemprop="url"><span itemprop="name">Главная</span></a>--}}
                {{--</li>--}}
                {{--<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">--}}
                    {{--<span itemprop="name">{{$params['page']->menu}}</span>--}}
                {{--</li>--}}
            {{--</ul>--}}

        </div>
    </div>
@endsection

@section('main')
    <div class="container">
        <div class="special_head_title">
            <span class="special_head_title_txt">Лучшие Акции Месяца!</span>
        </div>
@if (0 < count($params['special']))
        <div class="special_main">
            @if($params['special_1'])
            <div class="special_main_first"
                 style="{{ (0 < strlen($params['special_1']->image)) ? 'background-image: url("' . $params['special_1']->image . '");' : 'background-color: #0f3b89;' }}">

                <div class="special_main_head">
                    @if(!strlen($params['special_1']->image))
                        @if(!is_null($params['special_1']->name))
                        <p id="name_special_1" class="special_main_head_name">{!! $params['special_1']->name !!}</p>
                        @endif
                        @if(false) {{--!is_null($params['special_1']->description))--}}
                        <p id="description_special_1" class="special_main_head_desc">{!! $params['special_1']->description !!}</p>
                        @endif
                    @endif
                </div>

                <div class="special_main_date">
                    @if(!strlen($params['special_1']->image))
                        <span class="special_main_date_txt">С {{ $params['special_1']->start_active }} по {{ $params['special_1']->end_active }}</span>
                    @endif
                </div>

                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span id="price_1_special_1" class="special_main_text_price_1">{{ $params['special_1']->price_1 }}</span>
                        <span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2">
                        <span id="price_2_special_1" class="special_main_text_price_2">{{ $params['special_1']->price_2 }}</span>
                        <span class="special_main_ru_price_2"><i class="fas fa-ruble-sign special_main_icon_price_2"></i>/мес.</span>
                    </div>
                </div>

                <div class="special_main_footer">
                    <label data-id="{{ $params['special_1']->id }}" id="special_1" for="modal_special" class="special_main_footer_button">
                        <span class="special_main_footer_button_txt">Подробнее</span>
                    </label>
                </div>
            </div>
            @endif
            @if($params['special_2'])
            <div class="special_main_second"
                 style="{{ (0 < strlen($params['special_2']->image)) ? 'background-image: url("' . $params['special_2']->image . '");' : 'background-color: #0f3b89;' }}">
                <div class="special_main_head">
                    @if(!strlen($params['special_2']->image))
                        @if(!is_null($params['special_2']->name))
                        <p id="name_special_2" class="special_main_head_name">{!! $params['special_2']->name !!}</p>
                        @endif
                        @if(false) {{--!is_null($params['special_1']->description))--}}
                            <p id="description_special_2" class="special_main_head_desc">{!! $params['special_2']->description !!}</p>
                        @endif
                    @endif
                </div>

                <div class="special_main_date">
                    @if(!strlen($params['special_2']->image))
                        <span class="special_main_date_txt">С {{ $params['special_2']->start_active }} по {{ $params['special_2']->end_active }}</span>
                    @endif
                </div>

                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span id="price_1_special_2" class="special_main_text_price_1">{{ $params['special_2']->price_1 }}</span>
                        <span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2">
                        <span id="price_2_special_2" class="special_main_text_price_2">{{ $params['special_2']->price_2 }}</span>
                        <span class="special_main_ru_price_2"><i class="fas fa-ruble-sign special_main_icon_price_2"></i>/мес.</span>
                    </div>
                </div>

                <div class="special_main_footer">
                    <label data-id="{{ $params['special_2']->id }}" id="special_2" for="modal_special" class="special_main_footer_button">
                        <span class="special_main_footer_button_txt">Подробнее</span>
                    </label>
                </div>
            </div>
            @endif
        </div>
@endif

@if (0 < count($params['special_r']))
    <div class="special_main">
        @if($params['special_r_1'])
            <div class="special_main_first"
                 style="{{ (0 < strlen($params['special_r_1']->image)) ? 'background-image: url("' . $params['special_r_1']->image . '");' : 'background-color: #0f3b89;' }}">
                <div class="special_main_head">
                    @if(!strlen($params['special_r_1']->image))
                        @if(!is_null($params['special_r_1']->name))
                            <p id="name_special_r_1" class="special_main_head_name">{!! $params['special_r_1']->name !!}</p>
                        @endif
                        @if(false) {{--!is_null($params['special_1']->description))--}}
                            <p id="description_special_r_1" class="special_main_head_desc">{!! $params['special_r_1']->description !!}</p>
                        @endif
                    @endif
                </div>

                <div class="special_main_date">
                    @if(!strlen($params['special_r_1']->image))
                        <span class="special_main_date_txt">С {{ $params['special_r_1']->start_active }} по {{ $params['special_r_1']->end_active }}</span>
                    @endif
                </div>

                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span id="price_1_special_r_1" class="special_main_text_price_1">{{ $params['special_r_1']->price_1 }}</span>
                        <span class="special_main_ru_price_1">
                            <i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.
                        </span>
                    </div>
                    <div class="special_main_price_2_r">
                        <span class="special_main_text_price_2">&nbsp;</span>
                        <span class="special_main_ru_price_2">&nbsp;</span>
                    </div>
                </div>

                <div class="special_main_footer">
                    <label data-id="{{ $params['special_r_1']->id }}" id="special_r_1" for="modal_special" class="special_main_footer_button">
                        <span class="special_main_footer_button_txt">Подробнее</span>
                    </label>
                </div>
            </div>
        @endif
        @if($params['special_r_2'])
            <div class="special_main_second"
                 style="{{ (0 < strlen($params['special_r_2']->image)) ? 'background-image: url("' . $params['special_r_2']->image . '");' : 'background-color: #0f3b89;' }}">
                <div class="special_main_head">
                    @if(!strlen($params['special_r_2']->image))
                        @if(!is_null($params['special_r_2']->name))
                            <p id="name_special_r_2" class="special_main_head_name">{!! $params['special_r_2']->name !!}</p>
                        @endif
                        @if(false) {{--!is_null($params['special_1']->description))--}}
                            <p id="description_special_r_2" class="special_main_head_desc">{!! $params['special_r_2']->description !!}</p>
                        @endif
                    @endif
                </div>

                <div class="special_main_date">
                    @if(!strlen($params['special_r_2']->image))
                        <span class="special_main_date_txt">С {{ $params['special_r_2']->start_active }} по {{ $params['special_r_2']->end_active }}</span>
                    @endif
                </div>

                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span id="price_1_special_r_2" class="special_main_text_price_1">{{ $params['special_r_2']->price_1 }}</span>
                        <span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2_r">
                        <span class="special_main_text_price_2">&nbsp;</span><span class="special_main_ru_price_2">&nbsp;</span>
                    </div>
                </div>

                <div class="special_main_footer">
                    <label data-id="{{ $params['special_r_2']->id }}" id="special_r_2" for="modal_special" class="special_main_footer_button">
                        <span class="special_main_footer_button_txt">Подробнее</span>
                    </label>
                </div>
            </div>
        @endif
    </div>
@endif
    </div>
    <div class="redhr"></div>
@endsection

@push('modal')
@includeIf('include.modal.special')
@endpush

@section('script')
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
            window.special_modal_form_captcha = special_modal_form();
        };
    </script>
@endsection
