<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('www.facebook.com/nextnesia');
die();
}
// Join telegram kami biar ngga ketinggalan Info2 Script Update Terbaru
// Telegram: @nextnesiasc
// FB: Nextnesia Hosting
$email = 'yogatebar7@gmail.com'; // Ganti Email Kamu Di Sini
$crateby = 'nextnesia'; // Jangan Dirubah biar ga error
?>