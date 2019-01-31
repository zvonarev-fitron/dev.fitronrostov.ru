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
            <h1>Тренеры</h1>
            <ul class="uk-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">Тренеры</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section('main')
    <div class="container">
        <div class="schedule_download_btn_fitnes">
            <span class="redbutton"><label for="modal_guest_visit">Получить бесплатный гостевой визит</label></span>
            {{--<a href="javascript:void(0)" class="schedule_download_btn_a">--}}
                {{--<span class="schedule_download_btn_a_span">Получить бесплатный гостевой визит</span>--}}
            {{--</a>--}}
        </div>
        <div class="fitnes-uslugi-trenery uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-top">
            <div class="uk-width-medium-3-10" id="types_clubs_trainers_menu">
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left" id="types_trainers">
                    <li class="{{ in_array(0, $params['query']['type']) ? 'uk-active' : ''}}">
                        <a href="javascript:void(0)" data-id-type="0" class="trainers_type">Показать все направления</a>
                    </li>
                    @foreach($params['type_trainer'] as $type)
                        <li class="{{ in_array($type->id, $params['query']['type']) ? 'uk-active' : ''}}">
                            <a href="javascript:void(0)" data-id-type="{{ $type->id }}" class="trainers_type">{{ $type->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left" id="clubs_trainers">
                    <li class="{{ in_array(0, $params['query']['club']) ? 'uk-active' : ''}}">
                        <a href="javascript:void(0)" data-id-club="0" class="trainers_type">Показать все клубы</a>
                    </li>
                    <li class="{{ in_array($params['select_club']->id, $params['query']['club']) ? 'uk-active' : ''}}">
                        <a href="javascript:void(0)" data-id-club="{{ $params['select_club']->id }}" class="trainers_type">{{ $params['select_club']->name }}</a>
                    </li>
                    @foreach($params['clubs'] as $club)
                        <li class="{{ in_array($club->id, $params['query']['club']) ? 'uk-active' : ''}}">
                            <a href="javascript:void(0)" data-id-club="{{ $club->id }}" class="trainers_type">{{ $club->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top uk-margin-large-bottom">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-grid-small trainers">
                    @foreach($params['trainers'] as $trainer)
                        <div>
                            <div class="trainer-block">
                                <a href="{{ route('trainers_trainer', ['trainer' => $trainer->id]) }}" class="trainer-photo">
                                    <img src="{{ $trainer->picture }}" alt="{{ $trainer->name }}">
                                    <div class="overlay"></div>
                                    <p>{{ $trainer->name }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    {{$params['trainers']->links('vendor.pagination.uncos')}}
                </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
@endsection

@push('modal')
    @includeIf('include.modal.guestvisit')
@endpush

@section('script')
<script>
var onloadCaptcha = function(){
    window.feedback_modal_form_captcha = feedback_modal_form();
};
(function(){
    document.querySelector('#clubs_trainers').addEventListener('click', function(event){
        if('A' == event.target.nodeName){
            var ar_a_clubs =  this.querySelectorAll('A');
            if(0 == event.target.dataset.idClub){
                for(var i in ar_a_clubs) {
                    if (!!ar_a_clubs[i].parentElement && 'LI' == ar_a_clubs[i].parentElement.nodeName) {
                        ar_a_clubs[i].parentElement.classList.remove('uk-active');
                    }
                }
                event.target.parentElement.classList.toggle('uk-active');
            }
            else {
                for(var i in ar_a_clubs){
                    if(0 == ar_a_clubs[i].dataset.idClub){
                        ar_a_clubs[i].parentElement.classList.remove('uk-active');
                        break;
                    }
                }
                event.target.parentElement.classList.toggle('uk-active');
            }
            send();
        }
    });

    document.querySelector('#types_trainers').addEventListener('click', function(event){
        if('A' == event.target.nodeName){
            var ar_a_types =  this.querySelectorAll('A');
            if(0 == event.target.dataset.idType){
                for(var i in ar_a_types) {
                    if (!!ar_a_types[i].parentElement && 'LI' == ar_a_types[i].parentElement.nodeName) {
                        ar_a_types[i].parentElement.classList.remove('uk-active');
                    }
                }
                event.target.parentElement.classList.toggle('uk-active');
            }
            else {
                for(var i in ar_a_types){
                    if(0 == ar_a_types[i].dataset.idType){
                        ar_a_types[i].parentElement.classList.remove('uk-active');
                        break;
                    }
                }
                event.target.parentElement.classList.toggle('uk-active');
            }
            send();
        }
    });

    function send()
    {
        var ar_a_clubs =  document.querySelector('#clubs_trainers').querySelectorAll('A');
        var ar_a_types =  document.querySelector('#types_trainers').querySelectorAll('A');
        var ar_clubs = [];
        var ar_types = [];
        for(var i in ar_a_clubs)
            if ('A' == ar_a_clubs[i].nodeName && ar_a_clubs[i].parentElement.classList.contains('uk-active'))
                ar_clubs[ar_clubs.length] = ar_a_clubs[i].dataset.idClub;
        for(var i in ar_a_types)
            if('A' == ar_a_types[i].nodeName && ar_a_types[i].parentElement.classList.contains('uk-active'))
                ar_types[ar_types.length] = ar_a_types[i].dataset.idType;
        if(!ar_clubs.length) alert('Выберите клуб');
        if(!ar_types.length) alert('Выберите направление');
         if(!!ar_clubs.length && !!ar_types.length) {
//             console.log('{{ route('trainers_index') }}/' + ar_clubs + '/' + ar_types + '/');
            document.location.href = '{{ route('trainers_index') }}/' + ar_clubs + '/' + ar_types + '/';
         }
    }
})();
</script>
@endsection
