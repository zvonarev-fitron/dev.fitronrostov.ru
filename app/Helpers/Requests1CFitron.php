<?php

namespace app\Helpers;

class Requests1CFitron
{
    public static function Send($send)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env('HOST_1C_URL'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);





        $response = curl_exec($ch);
        curl_close($ch);
        return $response;   // env('HOST_1C_IP');
    }

}