<?php
// KONTROL UNTUK MENDAPATKAN ZONA WAKTU (Makassar)
date_default_timezone_set('Asia/Makassar');
$useragent = $_SERVER['HTTP_USER_AGENT'];
$yogasend = 'From: Nextnesia - Dunia Games <yumekodeveloper@gmail.com>';
$date = date('l, d-m-Y h:i:s');

// FUNCTION GET IP
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
}

// GET IP BY GETENV  
$ipaddr = get_client_ip();
?>