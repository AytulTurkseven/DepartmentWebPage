<?php include 'config.php';

if(isset($_POST['sliderekle'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['slidergorsel']["tmp_name"];
  @$name = $_FILES['slidergorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $sliderekle=mysql_query("insert into Slider (slider_resim_yol, slider_resim_url, slider_sira, slider_baslik, slider_icerik)
  VALUES('".$resimyol."','".$_POST[slider_resim_url]."','".$_POST[slider_sira]."','".$_POST[slider_baslik]."','".$_POST[slider_icerik]."')");



if(mysql_affected_rows()){

  header("Location:../Slider.php");
}
else{
  header("Location:../Slider.php");
}
}


if(isset($_POST['sliderduzenle'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['slidergorsel']["tmp_name"];
  @$name = $_FILES['slidergorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $slider_id =$_POST['slider_id'];

  $sliderduzenle=mysql_query("update Slider set slider_resim_url ='".$_POST['slider_resim_url']."',slider_sira='".$_POST['slider_sira']."',
  slider_baslik='".$_POST['slider_baslik']."',slider_icerik='".$_POST['slider_icerik']."' where slider_id='$slider_id'");



if(mysql_affected_rows()){

  header("Location:../Slider.php");
}
else{
  header("Location:../Slider.php");
}
}



if(isset($_POST['resimduzenle'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['slidergorsel']["tmp_name"];
  @$name = $_FILES['slidergorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $slider_id =$_POST['slider_id'];

  $sliderduzenle=mysql_query("update Slider set slider_resim_yol ='".$resimyol."' where slider_id='$slider_id'");



if(mysql_affected_rows()){

  header("Location:../Slider.php");
}
else{
  header("Location:../Slider.php");
}
}



if($_GET['slidersil']=="ok"){


  $slidersil = mysql_query("delete from Slider where slider_id='".$_GET['slider_id']."'");

if(mysql_affected_rows()){

  header("Location:../Slider.php?durum=ok");
}
else
{

  header("Location:../Slider.php?durum=no");
}
}


if(isset($_POST['duyuruekle'])){

$zaman=date('Y-m-d');
  $duyuruekle=mysql_query("insert into Genelduyurular (genel_kisi,genel_baslik,genel_icerik,genel_tarih)
  VALUES('".$_POST[genel_kisi]."','".$_POST[genel_baslik]."','".$_POST[genel_icerik]."','".$zaman."')");

if(mysql_affected_rows()){

  header("Location:../GenelDuyurular.php");
}
else{
  header("Location:../GenelDuyurular.php");
}
}


if($_GET['genelduyurularsil']=="ok"){


  $genelduyurularsil = mysql_query("delete from Genelduyurular where genel_id='".$_GET['genel_id']."'");

if(mysql_affected_rows()){

  header("Location:../GenelDuyurular.php?durum=ok");
}
else
{

  header("Location:../GenelDuyurular.php?durum=no");
}
}



if(isset($_POST['bolumduyuruekle'])){

$zaman=date('Y-m-d H:i');
  $bolumduyuruekle=mysql_query("insert into BolumDuyurular (bolum_kisi,bolum_baslik,bolum_icerik,bolum_tarih)
  VALUES('".$_POST[bolum_kisi]."','".$_POST[bolum_baslik]."','".$_POST[bolum_icerik]."','".$zaman."')");

if(mysql_affected_rows()){

  header("Location:../BolumDuyurular.php");
}
else{
  header("Location:../BolumDuyurular.php");
}
}



if($_GET['bolumduyurularsil']=="ok"){


  $bolumduyurularsil = mysql_query("delete from BolumDuyurular where bolum_id='".$_GET['bolum_id']."'");

if(mysql_affected_rows()){

  header("Location:../BolumDuyurular.php?durum=ok");
}
else
{

  header("Location:../BolumDuyurular.php?durum=no");
}
}



if($_GET['haberveetkinliksil']=="ok"){


  $haberveetkinliksil = mysql_query("delete from Haberveetkinlik where haberveetkinlik_id='".$_GET['haberveetkinlik_id']."'");

if(mysql_affected_rows()){

  header("Location:../HaberVeEtkinlik.php?durum=ok");
}
else
{

  header("Location:../HaberVeEtkinlik.php?durum=no");
}
}


if(isset($_POST['haberveetkinlikekle'])){

$zaman=date('Y-m-d H:i');
  $duyuruekle=mysql_query("insert into Haberveetkinlik (haberveetkinlik_kisi,haberveetkinlik_baslik,haberveetkinlik_icerik,haberveetkinlik_tarih)
  VALUES('".$_POST[haberveetkinlik_kisi]."','".$_POST[haberveetkinlik_baslik]."','".$_POST[haberveetkinlik_icerik]."','".$zaman."')");

if(mysql_affected_rows()){

  header("Location:../HaberVeEtkinlik.php");
}
else{
  header("Location:../HaberVeEtkinlik.php");
}
}


if(isset($_POST['dersnotlariekle'])){

$zaman=date('Y-m-d H:i');
  $dersnotlariekle=mysql_query("insert into Dersnotlari (dersnotlari_kisi,dersnotlari_baslik,dersnotlari_icerik,dersnotlari_tarih)
  VALUES('".$_POST[dersnotlari_kisi]."','".$_POST[dersnotlari_baslik]."','".$_POST[dersnotlari_icerik]."','".$zaman."')");

if(mysql_affected_rows()){

  header("Location:../DersNotlari.php");
}
else{
  header("Location:../DersNotlari.php");
}
}




if($_GET['dersnotlarisil']=="ok"){


  $slidersil = mysql_query("delete from Dersnotlari where dersnotlari_id='".$_GET['dersnotlari_id']."'");

if(mysql_affected_rows()){

  header("Location:../DersNotlari.php?durum=ok");
}
else
{

  header("Location:../DersNotlari.php?durum=no");
}
}



if(isset($_POST['genelduyurularguncel'])){

$genel_id =$_POST['genel_id'];


  $genelduyurularguncell = mysql_query("update Genelduyurular set genel_kisi ='".$_POST['genel_kisi']."',
  genel_baslik ='".$_POST['genel_baslik']."',genel_icerik='".$_POST['genel_icerik']."',
  genel_tarih='".$_POST['genel_tarih']."' where genel_id='$genel_id'");

if(mysql_affected_rows()){

  header("Location:../GenelDuyurular.php");
}
else{
  header("Location:../GenelDuyurular.php");
}
}

if(isset($_POST['dersnotlariguncel'])){

$dersnotlari_id =$_POST['dersnotlari_id'];


  $dersnotlariguncell = mysql_query("update Dersnotlari set dersnotlari_kisi ='".$_POST['dersnotlari_kisi']."',
  dersnotlari_baslik ='".$_POST['dersnotlari_baslik']."',dersnotlari_icerik='".$_POST['dersnotlari_icerik']."',
  dersnotlari_tarih='".$_POST['dersnotlari_tarih']."' where dersnotlari_id='$dersnotlari_id'");

if(mysql_affected_rows()){

  header("Location:../DersNotlari.php");
}
else{
  header("Location:../DersNotlari.php");
}
}



if(isset($_POST['haberveetkinlikguncel'])){

$haberveetkinlik_id =$_POST['haberveetkinlik_id'];


  $haberveetkinlikguncell = mysql_query("update Haberveetkinlik set haberveetkinlik_kisi ='".$_POST['haberveetkinlik_kisi']."',
  haberveetkinlik_baslik ='".$_POST['haberveetkinlik_baslik']."',haberveetkinlik_icerik='".$_POST['haberveetkinlik_icerik']."',
  haberveetkinlik_tarih='".$_POST['haberveetkinlik_tarih']."' where haberveetkinlik_id='$haberveetkinlik_id'");

if(mysql_affected_rows()){

  header("Location:../HaberVeEtkinlik.php");
}
else{
  header("Location:../HaberVeEtkinlik.php");
}
}


if(isset($_POST['bolumduyurularguncel'])){

$bolum_id =$_POST['bolum_id'];


  $bolumduyurularguncell = mysql_query("update BolumDuyurular set bolum_kisi ='".$_POST['bolum_kisi']."',
  bolum_baslik ='".$_POST['bolum_baslik']."',bolum_icerik='".$_POST['bolum_icerik']."',
  bolum_tarih='".$_POST['bolum_tarih']."' where bolum_id='$bolum_id'");

if(mysql_affected_rows()){

  header("Location:../BolumDuyurular.php");
}
else{
  header("Location:../BolumDuyurular.php");
}
}


if(isset($_POST['duyurulargiris'])) {

$adminduyurulargiris_kadi=$_POST['adminduyurulargiris_kadi'];
$adminduyurulargiris_sifre=$_POST['adminduyurulargiris_sifre'];




  if($adminduyurulargiris_kadi && $adminduyurulargiris_sifre){

    $sorguladuyurular = mysql_query("select * from Adminduyurulargiris where adminduyurulargiris_kadi='$adminduyurulargiris_kadi' and adminduyurulargiris_sifre='$adminduyurulargiris_sifre'");
    $veriduyurularsay = mysql_num_rows($sorguladuyurular);

    if($veriduyurularsay>0){
      $_SESSION['adminduyurulargiris_kadi'] = $adminduyurulargiris_kadi;

      header('Location:../index.php');
    }
    else{
        header('Location:../SistemeGiris.php?SistemeGiris=no');

    }

}

  if(empty($adminduyurulargiris_kadi) || empty($adminduyurulargiris_sifre))
  header('Location:../SistemeGiris.php?SistemeGiris=no');

}







 ?>
