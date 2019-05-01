
<?php


require_once'includes/config.php';
$tarihcesor = mysql_query("select * from Tarihce");
$tarihceduzenle=mysql_fetch_assoc($tarihcesor);

$hakkimizdasor = mysql_query("select * from Hakkimizda");
$hakkimizdaduzenle=mysql_fetch_assoc($hakkimizdasor);

$misyonsor = mysql_query("select * from Misyon");
$misyonduzenle=mysql_fetch_assoc($misyonsor);

$vizyonsor = mysql_query("select * from Vizyon");
$vizyonduzenle=mysql_fetch_assoc($vizyonsor);

$programciktilarisor = mysql_query("select * from Programciktilari");
$programciktilariduzenle=mysql_fetch_assoc($programciktilarisor);

$projelersor = mysql_query("select * from Projeler");
$projelerduzenle=mysql_fetch_assoc($projelersor);


$calismaalanlarisor = mysql_query("select * from Calismaalanlari");
$calismaalanlariduzenle=mysql_fetch_assoc($calismaalanlarisor);

$dersplanibasliksor = mysql_query("select * from Dersplanibaslik");
$dersplanibaslikduzenle=mysql_fetch_assoc($dersplanibasliksor);



$dersplanisor = mysql_query("select * from Dersplani ");
$dersplaniduzenle=mysql_fetch_assoc($dersplanisor);

$bitirmebasliksor = mysql_query("select * from Bitirmebaslik ");
$bitirmebaslikduzenle=mysql_fetch_assoc($bitirmebasliksor);

$anabilimdallarisor = mysql_query("select * from Anabilimdallari");
$anabilimdallariduzenle=mysql_fetch_assoc($anabilimdallarisor);

$yonetimbasliksor = mysql_query("select * from Yonetimbaslik");
$yonetimbaslikduzenle=mysql_fetch_assoc($yonetimbasliksor);

$ogretimuyeleribasliksor = mysql_query("select * from Ogretimuyeleribaslik");
$ogretimuyeleribaslikduzenle=mysql_fetch_assoc($ogretimuyeleribasliksor);

$ogretimelemanlaribasliksor = mysql_query("select * from Ogretimelemanlaribaslik");
$ogretimelemanlaribaslikduzenle=mysql_fetch_assoc($ogretimelemanlaribasliksor);

$idaripersonelbasliksor = mysql_query("select * from Idaripersonelbaslik");
$idaripersonelbaslikduzenle=mysql_fetch_assoc($idaripersonelbasliksor);

$akademikdanismanbasliksor = mysql_query("select * from Akademikdanismanbaslik");
$akademikdanismanbaslikduzenle=mysql_fetch_assoc($akademikdanismanbasliksor);

$yukseklisansdersbasliksor = mysql_query("select * from Yukseklisansdersbaslik");
$yukseklisansdersbaslikduzenle=mysql_fetch_assoc($yukseklisansdersbasliksor);


$mudeksor = mysql_query("select * from Mudek");
$mudekduzenle=mysql_fetch_assoc($mudeksor);

$sayfasor = mysql_query("select * from Sayfalar");
$sayfaduzenle=mysql_fetch_assoc($sayfasor);


if(!isset($_SESSION['admingiris_kadi'])){

  header('Location:login.php');
}



?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Paneli</a>
            </div>

            <div class="header-right">

                <a href="login.php" class="btn btn-danger" title="Logout" ><i class="fa fa-exclamation-circle">Çıkış</i></a>

            </div>
        </nav>
