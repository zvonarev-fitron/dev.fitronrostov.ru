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
            <ul class="uk-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['page']->menu}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">
@if (1 < count($params['special']))
        <div class="special_main">
            @if($params['special_1'])
            <div class="special_main_first">
                <div class="special_main_head">
                    @if(!is_null($params['special_1']->name))
                    <p class="special_main_head_name">{!! $params['special_1']->name !!}</p>
                    @endif
                    @if(!is_null($params['special_1']->description))
                    <p class="special_main_head_desc">{!! $params['special_1']->description !!}</p>
                    @endif
                </div>
                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span class="special_main_text_price_1">{{ $params['special_1']->price_1 }}</span><span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2">
                        <span class="special_main_text_price_2">{{ $params['special_1']->price_2 }}</span><span class="special_main_ru_price_2"><i class="fas fa-ruble-sign special_main_icon_price_2"></i>/мес.</span>
                    </div>
                </div>
                <div class="special_main_line"></div>
                <div class="special_main_footer">
                    <button class="special_main_footer_button">Уточнить подробности акции</button>
                </div>
            </div>
            @endif
            @if($params['special_2'])
            <div class="special_main_second">
                <div class="special_main_head">
                    @if(!is_null($params['special_2']->name))
                    <p class="special_main_head_name">{!! $params['special_2']->name !!}</p>
                    @endif
                    @if(!is_null($params['special_2']->description))
                        <p class="special_main_head_desc">{!! $params['special_2']->description !!}</p>
                    @endif
                </div>
                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span class="special_main_text_price_1">{{ $params['special_2']->price_1 }}</span><span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2">
                        <span class="special_main_text_price_2">{{ $params['special_2']->price_2 }}</span><span class="special_main_ru_price_2"><i class="fas fa-ruble-sign special_main_icon_price_2"></i>/мес.</span>
                    </div>
                </div>
                <div class="special_main_line"></div>
                <div class="special_main_footer">
                    <button class="special_main_footer_button">Уточнить подробности акции</button>
                </div>
            </div>
            @endif
        </div>
@endif

@if (1 < count($params['special_r']))
    <div class="special_main">
        @if($params['special_r_1'])
            <div class="special_main_first">
                <div class="special_main_head">
                    @if(!is_null($params['special_r_1']->name))
                        <p class="special_main_head_name">{!! $params['special_r_1']->name !!}</p>
                    @endif
                    @if(!is_null($params['special_r_1']->description))
                        <p class="special_main_head_desc">{!! $params['special_r_1']->description !!}</p>
                    @endif
                </div>
                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span class="special_main_text_price_1">{{ $params['special_r_1']->price_1 }}</span><span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2_r">
                        <span class="special_main_text_price_2">&nbsp;</span><span class="special_main_ru_price_2">&nbsp;</span>
                    </div>
                </div>
                <div class="special_main_line"></div>
                <div class="special_main_footer">
                    <button class="special_main_footer_button">Купить в рассрочку</button>
                </div>
            </div>
        @endif
        @if($params['special_r_2'])
            <div class="special_main_second">
                <div class="special_main_head">
                    @if(!is_null($params['special_r_2']->name))
                        <p class="special_main_head_name">{!! $params['special_r_2']->name !!}</p>
                    @endif
                    @if(!is_null($params['special_r_2']->description))
                        <p class="special_main_head_desc">{!! $params['special_r_2']->description !!}</p>
                    @endif
                </div>
                <div class="special_main_price">
                    <div class="special_main_price_1">
                        <span class="special_main_text_price_1">{{ $params['special_r_2']->price_1 }}</span><span class="special_main_ru_price_1"><i class="fas fa-ruble-sign special_main_icon_price_1"></i>/мес.</span>
                    </div>
                    <div class="special_main_price_2_r">
                        <span class="special_main_text_price_2">&nbsp;</span><span class="special_main_ru_price_2">&nbsp;</span>
                    </div>
                </div>
                <div class="special_main_line"></div>
                <div class="special_main_footer">
                    <button class="special_main_footer_button">Купить в рассрочку</button>
                </div>
            </div>
        @endif
    </div>
@endif
    </div>
    <div class="redhr"></div>
@endsection
