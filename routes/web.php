<?php
use Illuminate\Http\Request;
use App\Exports\InvoceExcel;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('welcome', function(){return view('welcome');});

Route::get('/', 'HomeController@index')->middleware('firstvisit')->name('index');
Route::get('/wowslider/{id}/{club}', 'HomeController@wowslider')->name('wowslider');

//События
//Route::prefix('doing')->group(function(){
//    Route::get('/', 'DoingController@index')->name('doing_index');
//    Route::get('{code}', 'DoingController@doing')->name('doing');
//});

//Тренеры
Route::prefix('trenery')->middleware('firstvisit')->group(function(){
    Route::get('/{club?}/{type?}/', 'TrainersController@index')->name('trainers_index');
    Route::get('/trainer/{trainer}/show/', 'TrainersController@trainer')->name('trainers_trainer');
});

//Контакты
Route::prefix('contacts')->middleware('firstvisit')->group(function(){
    Route::get('/', 'ContactsController@index')->name('contacts_index');
});

Route::prefix('fitron-life')->group(function(){
    Route::get('/', 'DoingController@index')->name('doing_index');
    Route::get('{code}', 'DoingController@doing')->name('doing');
});

//Акции
Route::prefix('/special/')->middleware('firstvisit')->group(function(){
    Route::get('/', 'SpecialController@index')->name('special_index');
});

//Фитнес услуги
Route::prefix('/fitnes-uslugi/')->middleware('firstvisit')->group(function(){
    Route::get('/', 'FitnesController@index')->name('fitnes-index');
    Route::get('{code}', 'FitnesController@uslugi')->name('uslugi');
    Route::get('{code}/{url}', 'FitnesController@training')->name('training');
});
//Клубы
Route::prefix('/clubs/')->group(function(){
    Route::get('/', 'ClubsController@index')->name('clubs');
    Route::get('{code}', 'ClubsController@club')->name('club');
//    Route::get('{code}/{url}', 'FitnesController@training')->name('training');
});
//Новости
Route::prefix('/uncos/')->group(function(){
    Route::get('/', 'UncosController@index')->name('uncos');
    Route::get('/{code}/', 'UncosController@show')->name('uncos.code');
});
//Клубные карты
Route::get('cards', 'CardsController@index')->middleware('firstvisit')->name('cards');

//О нас
Route::prefix('/aboutus/')->middleware('firstvisit')->group(function(){
    Route::get('mission', 'AboutusController@mission')->name('mission');
//    Route::get('boss', 'AboutusController@boss')->name('boss');
    Route::get('vacancies', 'AboutusController@vacancies')->name('vacancies');
    Route::get('press', 'AboutusController@press')->name('press');
    Route::get('frachise', 'AboutusController@franchise')->name('franchise');
    Route::get('corporate', 'AboutusController@corporate')->name('corporate');
    Route::get('payment', 'AboutusController@payment')->name('payment');
});

//Расписание
Route::prefix('/schedule/')->middleware('firstvisit')->group(function(){
    Route::get('/', 'ScheduleController@index')->name('schedule');
    Route::post('/{id}/{club_id}/', 'ScheduleController@age')->name('schedule.age');
    Route::get('/pdf/', 'ScheduleController@TimeTableDownLoad')->name('schedule.pdf');
});

//Галерея
Route::prefix('/gallery')->middleware('firstvisit')->group(function(){
    Route::get('/', 'SlidersController@gallery')->name('gallery');
});

//Выполнить сервис
Route::prefix('join')->group(function(){
    Route::get('/', 'JoinController@index')->middleware('firstvisit')->name('join');
    Route::post('feedback', 'JoinController@feedback')->name('join_feedback');
    Route::post('vacancies', 'JoinController@vacancies')->name('join_vacancies');
    Route::post('cards', 'JoinController@cards')->name('join_cards');
    Route::post('training', 'JoinController@training')->name('join_training');
    Route::post('trainer', 'JoinController@trainer')->name('join_trainer');
    Route::post('join', 'JoinController@join')->name('join_join');
    Route::post('corporate', 'JoinController@corporate')->name('join_corporate');
    Route::post('special', 'JoinController@special')->name('join_special');
});

//ПОЛИТИКА ЗАЩИТЫ И ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ
Route::get('/policy/', 'PolicyController@index')->name('policy');

Route::get('proba', 'HomeController@proba')->name('ppp');

Auth::routes();

//Личный кабинет
Route::prefix('cabinet')->middleware(['web', 'auth'])->group(function(){
    Route::get('/', 'CabinetController@index')->name('cabinet.index');

    Route::prefix('cart')->group(function(){
        Route::get('/', 'CabinetController@cart')->name('cabinet.cart');
        Route::prefix('extend')->group(function(){
            Route::get('/', 'CabinetController@cart_extend')->name('cabinet.cart.extend');
            Route::get('buy', 'CabinetController@cart_extend_buy')->name('cabinet.cart.extend.buy');
        });
        Route::prefix('buy')->group(function(){
            Route::get('/', 'CabinetController@cart_buy')->name('cabinet.cart.buy');
            Route::get('new', 'CabinetController@cart_buy_new')->name('cabinet.cart.buy.new');
        });
    });

    Route::prefix('schedule')->group(function(){
        Route::get('/', 'CabinetController@schedule')->name('cabinet.schedule');
        Route::get('{id_trainer}', 'CabinetController@schedule_trainer')->name('cabinet.schedule.trainer');
    });

    Route::prefix('calendar')->group(function(){
        Route::get('/', 'CabinetController@calendar')->name('cabinet.calendar');
    });

    Route::get('/active', 'CabinetController@active')->name('cabinet.active');
    Route::prefix('deposit')->group(function(){
        Route::get('/', 'CabinetController@deposit')->name('cabinet.deposit');
        Route::get('replenish', 'CabinetController@deposit_replenish')->name('cabinet.deposit.replenish');
        Route::get('payment_from_deposit', 'CabinetController@deposit_payment_from')->name('cabinet.deposit.payment_from_deposit');
    });

    Route::prefix('service')->group(function(){
        Route::get('/', 'CabinetController@service')->name('cabinet.service');
    });

    Route::prefix('bonus')->group(function(){
        Route::get('/', 'CabinetController@bonus')->name('cabinet.bonus');
    });

    Route::get('/trainer', 'CabinetController@trainer')->name('cabinet.trainer');

    Route::prefix('news')->group(function(){
        Route::get('/', 'CabinetController@news')->name('cabinet.news');
    });

    Route::get('/messages', 'CabinetController@messages')->name('cabinet.messages');

    Route::prefix('feedback')->group(function() {
        Route::get('/', 'CabinetController@feedback')->name('cabinet.feedback');
    });
});

//Административная панель
Route::prefix('/admin/')->middleware(['web', 'auth', 'can:adminpanel'])->group(function(){
//Route::prefix('/admin/')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/slider/', 'Admin\AdminController@slider')->name('slider');
    Route::get('/fitnes/', 'Admin\AdminController@fitnes')->name('fitnes');
    Route::get('/fitnes/{id}', 'Admin\AdminController@fitnes_id')->name('fitnes_id');
    Route::get('/trainer/clubs/itogo', 'Admin\TrainerController@clubs')->name('trainer_clubs_itogo');
    Route::get('/trainer/type/itogo/{code}/', 'Admin\TrainerController@type_trainer')->name('type_trainer_itogo');
    Route::get('/calendar/{id}', 'Admin\ScheduleController@calendar')->name('calendar');
    Route::get('/schedule/{id}/create', 'Admin\ScheduleController@create')->name('sch_create');
    Route::get('/schedule/{id}/{date}/{to}/copy', 'Admin\ScheduleController@copy')->name('sch_copy');
    Route::get('/schedule/{id}/{date}/erase', 'Admin\ScheduleController@erase')->name('sch_erase');

    Route::resources([
        'pages' => 'Admin\PageController',
        'clubs' => 'Admin\ClubController',
        'images' => 'Admin\ImageController',
        'sliders' => 'Admin\SliderController',
        'categories' => 'Admin\CategoryController',
        'trainings' => 'Admin\TrainingController',
        'doings' => 'Admin\DoingController',
        'infrastructures' => 'Admin\InfrastructureController',
        'uncos' => 'Admin\UncosController',
        'trainer' => 'Admin\TrainerController',
        'rooms' => 'Admin\RoomsController',
        'schedule' => 'Admin\ScheduleController',
        'users' => 'Admin\UserController',
        'roles' => 'Admin\RoleController',
        'special' => 'Admin\SpecialController'
    ]);
});

Route::post('cb/{table}/{field}/{onoff}/{id}', 'Admin\DoingController@changeCB')->middleware('can:adminpanel')->name('cb');
