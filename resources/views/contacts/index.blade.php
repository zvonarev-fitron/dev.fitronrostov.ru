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
        <div class="contacts">
            <div class="cc_contacts">
            <div class="cc_h_1">
                <div class="cc_v">
                    <div class="cc_vh_vi">
                        <div class="cc_vh_i">
                            <i class="fas fa-phone-volume" style="font-size: 105%;"></i>
                        </div>
                    </div>
                    <div class="cc_vh">
                        <span class="cc_vh_head">{{ __('Сеть Фитнес-клубов FITRON') }}</span>
                        <span class="cc_vh_phone">
                            <a href="tel:88633018000">{{ __('+7(863)301-8000') }}</a>
                        </span>
                    </div>
                </div>
                <div class="cc_v">
                    <div class="cc_vh_vi">
                        <div class="cc_vh_i">
                            <i class="fas fa-phone-volume" style="font-size: 105%;"></i>
                        </div>
                    </div>
                    <div class="cc_vh">
                        <span class="cc_vh_head">{{ __('Офис продаж') }}</span>
                        <span  class="cc_vh_phone"><a href="tel:88633012000">{{ __('+7(863)301-2000') }}</a></span>
                    </div>
                </div>
                <div class="cc_v">
                    <div class="cc_vh_n">
                        {{--<div class="cc_vh_i"></div>--}}
                    </div>
                    <div class="cc_vh_v_n">
                        <div class="cc_vh_1">
                            <span class="cc_vh_name">{{ __('ПН. - СБ.') }}</span>
                            <span class="cc_vh_name">{{ __('ВС.') }}</span>
                        </div>
                        <div class="cc_vh_2">
                            <span class="cc_vh_val">{{ __('07:00 - 23:00') }}</span>
                            <span class="cc_vh_val">{{ __('09:00 - 21:00') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cc_h_2">
                <form action="{{ route('join_contact') }}" method="get">
                    @csrf
                    <div class="cc_f">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                {!! \Session::get('success') !!}
                            </div>
                        @endif
                        <div class="cc_f_row">
                            <p class="cc_f_p">{{ __('Мы рады ответить на любой ваш вопрос,') }}<br>{{ __('выслушать ваше предложение или замечание') }}</p>
                        </div>
                        <div class="cc_f_row">
                            <div class="cc_f_row_col">
                                <input type="text" class="cc_f_i" name="name" id="name" value="{{ old('name') }}" required />
                                <label for="name" class="cc_f_l">{{ __('Имя') }}<span>{{ __('*') }}</span></label>
                                <div class="error" style="opacity: {{ $errors->has('name') ? 1 : 0 }}">{{ $errors->first('name') }}</div>
                            </div>
                            <div class="cc_f_row_col">
                                <input type="text" class="cc_f_i" name="surname" id="surname" value="{{ old('surname') }}" required />
                                <label for="surname" class="cc_f_l">{{ __('Фамилия') }}<span>{{ __('*') }}</span></label>
                                <div class="error" style="opacity: {{ $errors->has('surname') ? 1 : 0 }}">{{ $errors->first('surname') }}</div>
                            </div>
                        </div>
                        <div class="cc_f_row">
                            <div class="cc_f_row_col">
                                <input type="tel" class="cc_f_i" name="phone" id="phone" value="{{ old('phone') }}" required />
                                <label for="phone" class="cc_f_l">{{ __('Телефон') }}<span>{{ __('*') }}</span></label>
                                <div class="error" style="opacity: {{ $errors->has('phone') ? 1 : 0 }}">{{ $errors->first('phone') }}</div>
                            </div>
                            <div class="cc_f_row_col">
                                <input type="email" class="cc_f_i" name="email" id="email" value="{{ old('email') }}" required />
                                <label for="email" class="cc_f_l">{{ __('Электронная почта') }}<span>{{ __('*') }}</span></label>
                                <div class="error" style="opacity: {{ $errors->has('email') ? 1 : 0 }}">{{ $errors->first('email') }}</div>
                            </div>
                        </div>
                        <div class="cc_f_row_col">
                            <input type="text" class="cc_f_i cc_f_w" name="subject" id="subject" value="{{ old('subject') }}" required />
                            <label for="subject" class="cc_f_l">{{ __('Тема сообщения') }}<span>{{ __('*') }}</span></label>
                            <div class="error" style="opacity: {{ $errors->has('subject') ? 1 : 0 }}">{{ $errors->first('subject') }}</div>
                        </div>
                        <div class="cc_f_row_col">
                            <textarea name="message" id="message" class="cc_f_i cc_f_t" placeholder="Сообщение">{{ old('message') }}</textarea>
                            {{--<label for="message" class="cc_f_l">{{ __('Сообщение') }}</label>--}}
                        </div>
                        <div class="cc_f_row_c">
                            <input type="checkbox" id="processing" name="processing" value="1" class="cc_f_pro">
                            <label for="processing" class="cc_f_pro_l">{{ __('Я согласен на обработку') }} </label>
                            <label for="modal_policy" style="color:red;">{{ __('персональных данных') }}</label>
                            <span class="cc_f_ps"><span>{{ __('*') }}</span>{{__(' - обязательные для заполнения поля')}}</span>
                            <div class="error" style="opacity: {{ $errors->has('processing') ? 1 : 0 }}">{{ $errors->first('processing') }}</div>
                        </div>
                        <div class="cc_f_row cc_f_row_btn">
                            <button type="submit" id="form_contact_btn_submit" class="cc_f_btn"  @if (\Session::has('success')) disabled @endif><span>{{ __('Отправить') }}</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div class="redhr"></div>
    <script>
        jQuery(function($){$("#phone").mask("+7(999) 999-9999");});
    </script>
@endsection

