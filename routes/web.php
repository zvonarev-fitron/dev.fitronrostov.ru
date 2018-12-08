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
    Route::get('boss', 'AboutusController@boss')->name('boss');
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
});

//ПОЛИТИКА ЗАЩИТЫ И ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ
Route::get('/policy/', 'PolicyController@index')->name('policy');

Route::get('proba', 'HomeController@proba')->name('ppp');

Auth::routes();

//Административная панель
Route::prefix('/admin/')->middleware(['web', 'auth', 'can:admin'])->group(function(){
//Route::prefix('/admin/')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/slider/', 'Admin\AdminController@slider')->name('slider');
    Route::get('/fitnes/', 'Admin\AdminController@fitnes')->name('fitnes');
    Route::get('/fitnes/{id}', 'Admin\AdminController@fitnes_id')->name('fitnes_id');
    Route::get('/trainer/clubs/itogo', 'Admin\TrainerController@clubs')->name('trainer_clubs_itogo');
    Route::get('/trainer/type/itogo/{code}/', 'Admin\TrainerController@type_trainer')->name('type_trainer_itogo');
    Route::get('/calendar/{id}', 'Admin\ScheduleController@calendar')->name('calendar');
    Route::get('/schedule/{id}/create', 'Admin\ScheduleController@create')->name('sch_create');

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
