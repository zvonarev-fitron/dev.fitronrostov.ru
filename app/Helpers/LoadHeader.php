<?php
/**
 * Created by PhpStorm.
 * User: a.zvon
 * Date: 08.08.2018
 * Time: 17:27
 */

namespace app\Helpers;

use Request as HttpRequest;

class LoadHeader
{
    protected static $params;

    //Начальная загрузка
    public static function Start($main_page_id)
    {
        $request = HttpRequest::instance();
        $select_club_id = ($request->cookie('select_club_id') ? $request->cookie('select_club_id') : 5);
        $clubs = \App\Club::all();
        self::$params['select_club'] = $clubs->only($select_club_id)->first();
        self::$params['clubs'] = $clubs->except($select_club_id);
        self::$params['pages'] = \App\Page::where('active', true)->orderBy('sort')->get();
        self::$params['main_page_id'] = $main_page_id;

        switch($main_page_id){
            case 11:    // Главная страница
                $slider = \App\Slider::find($main_page_id);
                $date = new \DateTime(date('Y-m-d'));
                self::$params['images'] = $slider->images->filter(function(\App\Image $image) use ($date){
                    $start = is_null($image->start_time) ? true : (new \DateTime($image->start_time)) < $date;
                    $end = is_null($image->end_time) ? true : (new \DateTime($image->end_time)) > $date;
                    return $image->active && $start && $end;
                });
                break;
//            case 21:    //Личный кабинет
            case 2:     // О Нас
                self::$params['all_clubs'] = $clubs;
            case 6:     //Вступить в фитрон
            case 14:    //Галлерея
            case 13:    // Авторизация
            case 3:     // Политики
            case 1:     // Фитнес услуги
            case 12:    // Новости
            case 9:     // События
            case 17:    //Контакты
            case 16:    // Тренеры
            case 18:    // Акции
                self::$params['page'] = \App\Page::find(self::$params['main_page_id']);
                break;
            case 8:     // Клубные карты
                self::$params['page'] = self::$params['pages']->only(['id' => self::$params['main_page_id']])->first();
                break;
            case 21:    //Личный кабинет
            case 7:     // Клубы
                self::$params['all_clubs'] = $clubs;
                self::$params['page'] = \App\Page::where(['id' => self::$params['main_page_id']])->first();
                //self::$params['page'] = self::$params['pages']->only(['id' => self::$params['main_page_id']])->first();
                break;
            default:
                break;
        }
        return self::$params;
    }
}
