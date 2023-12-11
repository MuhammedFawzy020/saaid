<?php

namespace App\Services\SMS;

use Illuminate\Support\Facades\Http;

trait MesgatSMS
{

    function sendSMS($phone,$msg)
    {
        if (substr($phone, 0, 2) == '05')
        {
            $phone = ltrim($phone,'0');
        }elseif(substr($phone, 0, 4) == '9660')
        {
            $phone = ltrim($phone,'9660');
        }
        $phone='966'.$phone;



        $ch = curl_init(config('msegat.msegat_url'));
        $data = array(
            'userName'=>config('msegat.userName'),
            'apiKey' => config('msegat.apiKey'),
            'numbers' => $phone,
            'userSender' => config('msegat.userSender'),
            'msgEncoding' => config('msegat.msgEncoding'),
            'msg' => $msg
        );


        $result = Http::withOptions([
            'verify' => false,
        ])->post(config('msegat.msegat_url'),$data);
        return $result;

    }


}
