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
        <div id="clubs-list">
            <h2>Сеть фитнес-клубов Fitron</h2>
            <p class="big-text">Фитнес-клубы повышенного класса комфортности с лучшими тренерскими составами и инновационным техническим оснащением.</p>
            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2">

                <div class="clubcont">
                    <div class="clubtext">
                        <p class="clubname"><a href="{{route('club', ['code' => 'millenium'])}}">FITRON Миллениум</a></p>
                        <table>
                            <tbody><tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>пер. Соборный 94г</td>
                                <td rowspan="2" class="showmapcont">
                                    <a href="https://goo.gl/maps/M5wm5G7bA5U2" class="showmap" data-slug="millenium" target="_blank" rel="nofollow">Показать на карте</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td><a class="comagic_phone2" href="tel:+78633109571">+7 (863) 310-9571</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clublinks">
                        <div class="uk-grid uk-grid-width-1-3 uk-grid-collapse">
                            <div><a href="{{route('club', ['code' => 'millenium'])}}">О клубе</a></div>
                            <div><a href="https://fitron.club/clubs/millenium/schedule/">Расписание</a></div>
                            <div><a href="https://fitron.club/clubs/millenium/trainers/">Тренеры</a></div>
                        </div>
                    </div>
                </div>

                <div class="clubcont">
                    <div class="clubtext">
                        <p class="clubname"><a href="{{route('club', ['code' => 'orbita'])}}">FITRON Орбита</a></p>
                        <table>
                            <tbody><tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>пр. Королёва 10/4</td>
                                <td rowspan="2" class="showmapcont">
                                    <a href="https://goo.gl/maps/YKxj7vnJrH62" class="showmap" data-slug="orbita" target="_blank" rel="nofollow">Показать на карте</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td><a class="comagic_phone2" href="tel:+78633109571">+7 (863) 310-9571</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clublinks">
                        <div class="uk-grid uk-grid-width-1-3 uk-grid-collapse">
                            <div><a href="{{route('club', ['code' => 'orbita'])}}">О клубе</a></div>
                            <div><a href="https://fitron.club/clubs/orbita/schedule/">Расписание</a></div>
                            <div><a href="https://fitron.club/clubs/orbita/trainers/">Тренеры</a></div>
                        </div>
                    </div>
                </div>

                <div class="clubcont">
                    <div class="clubtext">
                        <p class="clubname"><a href="{{route('club', ['code' => 'gazetnyi'])}}">FITRON Газетный</a></p>
                        <table>
                            <tbody><tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>ул. Красноармейская 170</td>
                                <td rowspan="2" class="showmapcont">
                                    <a href="https://goo.gl/maps/rsoFhohhkEB2" class="showmap" data-slug="gazetnyi" target="_blank" rel="nofollow">Показать на карте</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td><a class="comagic_phone2" href="tel:+78633109571">+7 (863) 310-9571</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clublinks">
                        <div class="uk-grid uk-grid-width-1-3 uk-grid-collapse">
                            <div><a href="{{route('club', ['code' => 'gazetnyi'])}}">О клубе</a></div>
                            <div><a href="https://fitron.club/clubs/gazetnyi/schedule/">Расписание</a></div>
                            <div><a href="https://fitron.club/clubs/gazetnyi/trainers/">Тренеры</a></div>
                        </div>
                    </div>
                </div>

                <div class="clubcont">
                    <div class="clubtext">
                        <p class="clubname"><a href="{{route('club', ['code' => 'cyclon'])}}">Cycle-студия Cyclon</a></p>
                        <table>
                            <tbody><tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>пер. Соборный 94г</td>
                                <td rowspan="2" class="showmapcont">
                                    <a href="https://goo.gl/maps/M5wm5G7bA5U2" class="showmap" data-slug="cyclon" target="_blank" rel="nofollow">Показать на карте</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td><a class="comagic_phone1" href="tel:+78633109570">+7 (863) 310-9570</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clublinks">
                        <div class="uk-grid uk-grid-width-1-2 uk-grid-collapse">
                            <div><a href="{{route('club', ['code' => 'cyclon'])}}">О студии</a></div>
                            <div><a href="https://fitron.club/clubs/cyclon/schedule/">Расписание</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="club-map-modal" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                <div class="uk-position-cover">
                    <div class="uk-align-center"><i class="uk-icon-spinner uk-icon-large uk-icon-spin"></i></div>
                </div>
                <div class="modalcont"></div>
            </div>
        </div>


    </div>
    <div class="redhr"></div>
@endsection
