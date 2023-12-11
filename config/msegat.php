<?php

return [
    "msegat_url"=>env('MSEGAT_URL','https://www.msegat.com/gw/sendsms.php'),
    "userName"=>env('MSEGAT_USERNAME','motanrec'),
    "apiKey"=>env('MSEGAT_API_KEY','a448be4b36d7ddf9cbb8ac0ea03ec74d'),
    'userSender'=>env('MSEGAT_SENDER','MOTAN REC'),
    'msgEncoding'=>env('MSEGAT_ENCODING','UTF8')
];
