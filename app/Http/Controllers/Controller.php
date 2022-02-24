<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     public  function sendSms($mb, $message_text)
    {
        $user          = "illuminatijewellers"; //your username
        $password      = urlencode("illuminati@123"); //your password
        $mobilenumbers = $mb; //enter Mobile numbers comma seperated
        $senderid      = "IALERT"; //Your senderid
        $url           = "http://admagister.net/api/mt/SendSMS";
        //domain name: Domain name Replace With Your Domain 
        $message       = urlencode($message_text);
        $qry_str=  "?user=illuminatijewellers&password=illuminati@123&senderid=IALERT&channel=Trans&DCS=0&flashsms=0&number=". $mobilenumbers."&text=".$message."&route=11 ";
        //$qry_str       = "?user=" . $user . "&password=" . $password . "&senderid=" . $senderid . "&channel=Trans&DCS=0&flashsms=0&number=" . $mobilenumbers . "&text=" . $message . "&route=11";
       
        $ch            = curl_init();
        //dd($qry_str1);
        // Set query data here with the URL
        curl_setopt($ch, CURLOPT_URL,$url. $qry_str);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '3');
        $content = trim(curl_exec($ch));
        curl_close($ch);
       
        return $content;
       
    }

}
