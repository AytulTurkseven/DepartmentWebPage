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

$dersplanieklesor = mysql_query("select * from Dersplani");
$dersplaniekle=mysql_fetch_assoc($dersplanieklesor);


$iletisimsor = mysql_query("select * from Iletisim");
$iletisimduzenle=mysql_fetch_assoc($iletisimsor);

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
?>


<!DOCTYPE html>

<html>
<head>
<link href="css/bootstrap.css" rel = "stylesheet" >
<link href="css/modern-business.css" rel="stylesheet">
<link href="css/style.css" rel = "stylesheet" >
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<title>Kocaeli Üniversitesi</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<meta http-equiv="content-type" content="text/html; charset=utf-8"> <!-- TÜrkçe Karakter sorunu için -->
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img src="/YazLab/img/Y4mkLZ.png" style='width:60%;' border="0" alt="Null">

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
              <a href="Anasayfa.php">Anasayfa</a>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hakkımızda <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li>
                      <a href="Tarihce.php">Tarihçe</a>
                  </li>
                  <li>
                      <a href="Hakkimizda.php">Hakkımızda</a>
                  </li>
                  <li>
                      <a href="Misyon.php">Misyon</a>
                  </li>
                  <li>
                      <a href="Vizyon.php">Vizyon</a>
                  </li>
                  <li>
                      <a href="Ana-bilim-dallari.php">Ana Bilim Dalları</a>
                  </li>
                  <li>
                      <a href="Program-ciktilari.php">Program Çıktıları</a>
                  </li>

              </ul>
          </li>
                                <li>
                <a href="Yonetim.php">Yönetim</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Araştırma <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="http://bilgisayar.kocaeli.edu.tr/akilli_sistemler_lab/">Akıllı Sistemler Araştırma Laboratuvarı</a>
                    </li>
                    <li>
                        <a href="http://bilgisayar.kocaeli.edu.tr/comnet/">Bilgisayar Ağları ve Haberleşme Araştırma Laboratuvarı</a>
                    </li>
                    <li>
                        <a href="http://embedded.kocaeli.edu.tr/">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı</a>
                    </li>
                    <li>
                        <a href="http://ipcv.kocaeli.edu.tr/wp/">Görüntü İşleme Araştırma Laboratuvarı</a>
                    </li>
                    <li>
                        <a href="http://ibel.kocaeli.edu.tr/">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a>
                    </li>
                    <li>
                        <a href="http://yapbenzet.kocaeli.edu.tr/">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a>
                    </li>
                    <li>
                        <a href="Projeler.php">Projeler</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personel <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="Ogretim-uyeleri.php">Öğretim Üyeleri</a>
                    </li>
                    <li>
                        <a href="Ogretim-elemanlari.php">Öğretim Elemanları</a>
                    </li>
                    <li>
                        <a href="Idari-personel.php">İdari Personel</a>
                    </li>
                    <li>
                        <a href="AdminDuyurular/SistemeGiris.php">Sisteme Giriş</a>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Lisans <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                        <a href="http://mf.kocaeli.edu.tr/ogrenci/formlar.php"> Öğrenci Dilekçe ve Formları </a>
                      </li>
                      <li>
                        <a href="Ders-plani.php">Ders Planı ve İçeriği</a>
                      </li>
                      <li>
                        <a href="http://bilgisayar.kocaeli.edu.tr/files/208_Ders_Programi.zip">Ders Programı</a>
                      </li>
                      <li>
                        <a href="Akademik-danismanlar.php">Akademik Danışmanlar</a>
                      </li>
                      <li>
                        <a href="Proje-bitirme.php">Araştırma Problemleri ve Bitirme</a>
                      </li>
                      <li>
                        <a href="http://odb.kocaeli.edu.tr/akademik_takvim.php">Akademik Takvim</a>
                      </li>
                      <li>
                        <a href="Mudek.php">MÜDEK</a>
                      </li>
                      <li>
                        <a href="Diploma-sorgulama.php">Diploma Sorgulama</a>
                      </li>
                      <li>
                        <a href="http://mf.kocaeli.edu.tr/ogrenci/staj.php">Staj</a>
                      </li>

              </ul>
</li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Y.Lisans/Doktora <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="Calisma-alanlari.php">Çalışma Alanları</a>
                </li>
                <li>
                  <a href="Ders-listesi.php">Ders Listesi</a>
                </li>
                <li>
                  <a href="http://bilgisayar.kocaeli.edu.tr/files/2016-2017_Guz_Lisansustu.pdf">Ders Programı</a>
                </li>
                <li>
                  <a href="#">Tezler</a>
                </li>

            </ul>
          </li>

          <li>
            <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F25429857332%2F">Mezunlar </a>

            <li>
                <a href="Iletisim-ulasim.php">İletişim/Ulaşım</a>
            </li>

          <?php
            $sayfalarsor = mysql_query("select * from Sayfalar");
            while($sayfalarduzenle=mysql_fetch_assoc($sayfalarsor)){
            ?>



            <li>
                <a href="Sayfalar.php?id=<?php echo $sayfalarduzenle['id']; ?>"><?php echo $sayfalarduzenle['menuad']; ?></a>
            </li>

            <?php  } ?>


        </ul>



      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
