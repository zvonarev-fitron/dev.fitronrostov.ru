<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>

    {{--<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/html/admin/css/jPushMenu.css">
    <link rel="stylesheet" type="text/css" href="/html/admin/css/admin.css">

</head>
<body>
<!-- Left menu element-->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
    <div class="div_cbp-spmenu-vertical">
        <div class="navbar-brand navbar-brand-center head-left_panel">
            <a class="a_menu-left_panel" href="#"><img class="navbar-brand-logo" src="/images/fitron-logo-mobile.svg" title="Fitron"></a>
        </div>
        <button class="toggle-menu menu-left menu-left_panel" title="Убрать левое меню"><i class="fa fa-times-circle fa-lg" aria-hidden="true" style="color:white;"></i></button>
    </div>
    <ul class="nav flex-column first-menu_panel">
        <li class="nav-item">
            <a class="nav-link" id="menu_users" href="javascript:void(0)">Пользователи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_roles" href="javascript:void(0)">Роли</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_clubs" href="javascript:void(0)">Клубы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_pages" href="javascript:void(0)">Страницы</a>
        </li>
        <li class="nav-item">
            @if(0 < count($params['sliders']))
                <a class="nav-link collapsed" id="menu_sliders" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_menu_sliders">Слайдеры</a>
                <div class="collapse" id="sub_menu_sliders" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                    @foreach($params['sliders'] as $slider)
                        <li class="nav-item"><a class="nav-link py-0" id="slider_{{$slider->id}}" href="javascript:void(0)">{{$slider->name}}</a></li>
                    @endforeach
                    </ul>
                </div>
            @else
                <a class="nav-link" id="menu_sliders" href="javascript:void(0)">Слайдеры</a>
            @endif
        </li>
        <li class="nav-item">
            @if(0 < count($params['categories']))
                <a class="nav-link collapsed" id="menu_fitnes" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_menu_fitnes">Фитнес-программы</a>
                <div class="collapse" id="sub_menu_fitnes" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        @foreach($params['categories'] as $category)
                            <li class="nav-item">
                                @if(isset($params['category_trainings'][$category->id]))
                                    <a class="nav-link collapsed py-0" id="category_{{$category->id}}" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_sub_menu_category_{{$category->id}}">{{$category->name}}</a>
                                    <div class="collapse" id="sub_sub_menu_category_{{$category->id}}" aria-expanded="false">
                                        <ul class="flex-column pl-2 nav">
                                            @foreach($params['category_trainings'][$category->id] as $training)
                                                <li class="nav-item">
                                                    <a class="nav-link py-0" id="training_{{$training->id}}" href="javascript:void(0)">{{$training->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                    <a class="nav-link py-0" id="category_{{$category->id}}" href="javascript:void(0)">{{$category->name}}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <a class="nav-link" id="menu_fitnes" href="javascript:void(0)">Фитнес-программы</a>
            @endif
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_doings" href="javascript:void(0)">События</a>
        </li>
        <li class="nav-item">
            @if(0 < count($params['clubs']))
                <a class="nav-link collapsed" id="menu_infrastructure" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_menu_infrastructure">Инфраструктура</a>
                <div class="collapse" id="sub_menu_infrastructure" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        @foreach($params['clubs'] as $club)
                            <li class="nav-item">
                                <a class="nav-link py-0" id="infrastucture_club_{{$club->id}}" href="javascript:void(0)" >{{$club->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <a class="nav-link" id="menu_infrastructure" href="javascript:void(0)">Инфраструктура</a>
            @endif
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_blogs" href="javascript:void(0)">Блог</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_news" href="javascript:void(0)">Новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="menu_special" href="javascript:void(0)">Акции</a>
        </li>
        <li class="nav-item">
            @if(0 < count($params['clubs']))
                <a class="nav-link collapsed" id="menu_trainer" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_menu_trainer">Тренеры</a>
                <div class="collapse" id="sub_menu_trainer" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        @foreach($params['clubs'] as $club)
                            <li class="nav-item">
                                @if(0 < count($params['type_trainer']))
                                    <a class="nav-link py-0 collapsed" id="trainer_club_{{$club->id}}" href="javascript:void(0)"  data-toggle="collapse" data-target="#sub_sub_menu_trainer_{{$club->id}}">{{$club->name}}</a>
                                    <div class="collapse" id="sub_sub_menu_trainer_{{$club->id}}" aria-expanded="false">
                                        <ul class="flex-column pl-2 nav">
                                            @foreach($params['type_trainer'] as $type_trainer)
                                                <li class="nav-item">
                                                    <a class="nav-link py-0" id="typetraining_{{$club->id}}_{{$type_trainer->id}}" href="javascript:void(0)">{{$type_trainer->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                    <a class="nav-link py-0" id="trainer_club_{{$club->id}}" href="javascript:void(0)" >{{$club->name}}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <a class="nav-link" id="menu_trainer" href="javascript:void(0)">Тренеры</a>
            @endif
        </li>
        <li class="nav-item">
            @if(0 < count($params['clubs']))
                <a class="nav-link collapsed" id="menu_schedule" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_menu_schedule">Расписание</a>
                <div class="collapse" id="sub_menu_schedule" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        @foreach($params['clubs'] as $club)
                            <li class="nav-item">
                                <a class="nav-link py-0" id="schedule_club_{{$club->id}}" href="javascript:void(0)" >{{$club->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <a class="nav-link" id="menu_schedule" href="javascript:void(0)">Расписание</a>
            @endif
        </li>
        <li class="nav-item">
            @if(0 < count($params['clubs']))
                <a class="nav-link collapsed" id="menu_room" href="javascript:void(0)" data-toggle="collapse" data-target="#sub_menu_room">Место</a>
                <div class="collapse" id="sub_menu_room" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        @foreach($params['clubs'] as $club)
                            <a class="nav-link py-0" id="room_club_{{$club->id}}" href="javascript:void(0)" >{{$club->name}}</a>
                        @endforeach
                    </ul>
                </div>
            @else
                <a class="nav-link" href="javascript:void(0)">Место</a>
            @endif
        </li>
    </ul>
</nav>

<!-- Right menu element-->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
    <h3>Menu</h3>
    <a href="#">Celery seakale</a>
    <a href="#">Dulse daikon</a>
    <a href="#">Zucchini garlic</a>
    <a href="#">Catsear azuki bean</a>
    <a href="#">Dandelion bunya</a>
    <a href="#">Rutabaga</a>
</nav>
<!-- Top menu element-->
<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
    <h3>Menu</h3>
    <a href="#">Celery seakale</a>
    <a href="#">Dulse daikon</a>
    <a href="#">Zucchini garlic</a>
    <a href="#">Catsear azuki bean</a>
    <a href="#">Dandelion bunya</a>
    <a href="#">Rutabaga</a>
    <a href="#">Celery seakale</a>
    <a href="#">Dulse daikon</a>
    <a href="#">Zucchini garlic</a>
    <a href="#">Catsear azuki bean</a>
    <a href="#">Dandelion bunya</a>
    <a href="#">Rutabaga</a>
</nav>
<!-- Bottom menu element-->
<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-bottom">
    <h3>Menu</h3>
    <a href="#">Celery seakale</a>
    <a href="#">Dulse daikon</a>
    <a href="#">Zucchini garlic</a>
    <a href="#">Catsear azuki bean</a>
    <a href="#">Dandelion bunya</a>
    <a href="#">Rutabaga</a>
    <a href="#">Celery seakale</a>
    <a href="#">Dulse daikon</a>
    <a href="#">Zucchini garlic</a>
    <a href="#">Catsear azuki bean</a>
    <a href="#">Dandelion bunya</a>
    <a href="#">Rutabaga</a>
</nav>
<div class="container-fluid div-container">
    <header class="navbar navbar-expand-sm navbar-light bg-light header-navbar">
        <div class="main">
            <section class="collapse navbar-collapse justify-content-between">
                <ul class="nav navbar-toolbar navbar-nav">
                    <li>
                        <button  class="toggle-menu menu-left" title="Показать левое меню"><i class="fa fa-indent" aria-hidden="true"></i></button>
                    </li>
                    <li>
                        <button id="start-menu-left_button" class="toggle-menu menu-left push-body" title="Зафиксировать левое меню"><i class="fa fa-list"  aria-hidden="true"></i></button>
                    </li>
                    {{--<li class="li_dropdown">--}}
                        {{--<select class="header-select_navbar_panel">--}}
                            {{--<option>Выберите клуб</option>--}}
                            {{--<option>Fitron Газетный</option>--}}
                            {{--<option>Fitron Милениум</option>--}}
                            {{--<option>Fitron Орбита</option>--}}
                        {{--</select>--}}
                    {{--</li>--}}
                </ul>
                <ul class="nav navbar-toolbar navbar-nav">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="nav-item" type="submit">Выйти</button>
                    </form>
                </ul>
            </section>
        </div>
    </header>
    <div id="content" class="main">
        <section>
            {{--<h2>Для начала работы необходимо выбрать клуб</h2>--}}

            {{--<h2>Здесь вы можете провести все необходимые работы по администрированию сайта</h2>--}}
            {{--<ul>--}}
                {{--<li>1.1.1 : Add <code>return false;</code> on button/link.</li>--}}
                {{--<li>1.1 : Add <code>closeOnClickOutside</code> parameter.</li>--}}
                {{--<li>1.0 : Initial release</li>--}}
            {{--</ul>--}}

            {{--<h2>How to use?</h2>--}}
            {{--<h3>Include required style</h3>--}}

            {{--<h3>Include required script</h3>--}}

            {{--<h3>Make button or link</h3>--}}
            {{--<p>The class names are self explained.</p>--}}


            {{--<h3>Make menu element</h3>--}}
        </section>
    </div>
    <footer id="footer" class="footer navbar-fixed-bottom bg-light">
        &copy; 2018 -  <a target="_blank" href="https://fitron.club">fitron</a>
    </footer>
    <!-- The Modal Error-->
    <div class="modal" id="FTModalError">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Сообщение об ошибке</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>--}}
<script src="https://unpkg.com/imask"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>

{{--<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>--}}
<script src="/html/admin/js/jPushMenu.js"></script>
<script src="/html/admin/js/admin.js"></script>
{{--<script src="{{asset('js/service/MaskedInput.js')}}"></script>--}}
<script>
    <!--call jPushMenu, required-->
    jQuery(document).ready(function($) {
        $('.toggle-menu').jPushMenu();
        //$('#start-menu-left_button').click();
    });
    document.addEventListener('DOMContentLoaded', function(){
        if(typeof FTAdmin !== "undefined") {
        @foreach($params['sliders'] as $slider)
            FTAdmin.res.sliders.slider['{{$slider->id}}'] = {id: 'slider_{{$slider->id}}'}
        @endforeach
        @foreach($params['categories'] as $category)
            FTAdmin.res.fitne.categories['{{$category->id}}'] = {id: 'category_{{$category->id}}'}
        @endforeach
        @foreach($params['trainings'] as $training)
            FTAdmin.res.trainings['{{$training->id}}'] = {id: 'training_{{$training->id}}'}
        @endforeach
        @foreach($params['clubs'] as $club)
            FTAdmin.res.infrastructure.clubs['{{$club->id}}'] = {id: 'infrastucture_club_{{$club->id}}'}
            FTAdmin.res.trainer.clubs['{{$club->id}}'] = {id: 'trainer_club_{{$club->id}}'}
            FTAdmin.res.schedule.clubs['{{$club->id}}'] = {id: 'schedule_club_{{$club->id}}'}
            @foreach($params['type_trainer'] as $type_trainer)
                FTAdmin.res.trainer.typetrainer['{{$club->id}}_{{$type_trainer->id}}'] = {id: 'typetraining_{{$club->id}}_{{$type_trainer->id}}'}
            @endforeach
            FTAdmin.res.room.clubs['{{$club->id}}'] = {id: 'room_club_{{$club->id}}'}
        @endforeach
            FTAdmin.Init();
        @if('slider' == $params['code'])
            FTAdmin.res.sliders.el.click();
        @elseif('fitnes' == $params['code'])
            FTAdmin.res.fitne.el.click();
        @elseif('fitnes_id' == $params['code']){
                FTAdmin.res.fitne.el.click();
                if(!!FTAdmin.res.fitne.categories['{{$params['fitnes_id']}}'].el) FTAdmin.res.fitne.categories['{{$params['fitnes_id']}}'].el.click();
            }
        @endif
       }
   });
</script>
</body>
</html>
