<?php
/**
 * Created by PhpStorm.
 * User: a.zvon
 * Date: 02.08.2018
 * Time: 12:15
 */

namespace app\Helpers;


class CUtils
{
    //Изменить размер графического файла
    public static function ImageResize($file, $width, $height, $quality=80 )
    {
        /*
        1	IMAGETYPE_GIF
        2	IMAGETYPE_JPEG
        3	IMAGETYPE_PNG
        4	IMAGETYPE_SWF
        5	IMAGETYPE_PSD
        6	IMAGETYPE_BMP
        7	IMAGETYPE_TIFF_II (порядок байт intel)
        8	IMAGETYPE_TIFF_MM (порядок байт motorola)
        9	IMAGETYPE_JPC
        10	IMAGETYPE_JP2
        11	IMAGETYPE_JPX
        12	IMAGETYPE_JB2
        13	IMAGETYPE_SWC
        14	IMAGETYPE_IFF
        15	IMAGETYPE_WBMP
        16	IMAGETYPE_XBM
        17	IMAGETYPE_ICO
        18	IMAGETYPE_WEBP
          */
        $type = exif_imagetype($file);
        switch($type){
            case 1:
                $scr_img = imageCreateFromGif($file);
                break;
            case 2:
                $scr_img = ImageCreateFromJpeg($file);
                break;
            case 3:
                $scr_img = imageCreateFromPng($file);
                break;
            case 6:
                $scr_img = imageCreateFromBmp($file);
                break;
            default:
                dd('Неизвестный тип изображения - ', $type);
                break;
        }
        $size = GetImageSize($file);
        $scr_width = $size[0];
        $scr_height = $size[1];
        $dest_height = $height;
        $dest_width = $width;
        $dest_img = ImageCreateTrueColor($dest_width, $dest_height);
        ImageCopyResampled($dest_img, $scr_img, 0, 0, 0, 0, $dest_width, $dest_height, $scr_width, $scr_height);
        ImageJpeg($dest_img, $file, $quality);
        ImageDestroy($dest_img);
    }

    /**
     * @param $c - Количество
     * @param $w - Слово
     * @param $n - Окончание - (нет)
     * @param $o - Окончание - (одна)
     * @param $m - Окончание - (много)
     */
    public static function Declension($c, $w, $n, $o, $m)
    {
        if(2 < strlen($c)) $c = substr($c, -2);
        if(11 == $c || 12 == $c || 13 == $c || 14 == $c){
            return $w . $m;
        }
        switch(substr($c, -1)){
            case 1:
                return $w . $o;
            case 2:
            case 3:
            case 4:
                return $w . $n;
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 0:
                return $w . $m;
        }
    }

    /**
     * @param $n - Номер месяца с 1 .. 12
     */
    public static function RusMonth($n)
    {
        $n = --$n;
        $rus_month = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
        return isset($rus_month[$n]) ? $rus_month[$n] : 'Неизветный номер месяца - ' . $n;
    }

    /**
     * @param $n - Номер месяца с 1 .. 12
     */
    public static function RusMonthChisl($n)
    {
        $n = --$n;
        $rus_month = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];
        return isset($rus_month[$n]) ? $rus_month[$n] : 'Неизветный номер месяца - ' . $n;
    }

    /**
     * @param $w - Номер недели
     * @return string
     */
    public static function RusWeek($w)
    {
        $w = (int)$w;
        $rus_week = ['Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
        return isset($rus_week[$w]) ? $rus_week[$w] : 'Неизвестный номер недели - ' . $w;
    }
}
