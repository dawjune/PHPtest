<?php
header("Content-Type: text/html;charset=utf-8");
    $host = "https://ali-beian.showapi.com";
    $path = "/beian";
    $method = "GET";
    $appcode = "7f7e990e04b244e5af06915cc47f571c";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "domain=fastfish.tk";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    //curl_exec($curl);
	$stream = fopen('yuming.txt', "w+");
	fwrite($stream, $querys.curl_exec($curl)."\r\n");
?>