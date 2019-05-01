<?php include 'config.php';

if(isset($_POST['tarihkaydet'])){
  $id=1;

  $tarihkaydet = mysql_query("update Tarihce set tarihce_baslik ='".$_POST['tarihce_baslik']."', tarihce_icerik ='".$_POST['tarihce_icerik']."'  where tarihce_id='$id'");

if(mysql_affected_rows()){

  header("Location:../TarihceDuzenle.php");
}
else{
  header("Location:../TarihceDuzenle.php");
}
}


if(isset($_POST['hakkimizdakaydet'])){
  $id=1;

  $hakkimizdakaydet = mysql_query("update Hakkimizda set hakkimizda_baslik ='".$_POST['hakkimizda_baslik']."', hakkimizda_icerik ='".$_POST['hakkimizda_icerik']."'  where hakkimizda_id='$id'");

if(mysql_affected_rows()){

  header("Location:../HakkimizdaDuzenle.php");
}
else{
  header("Location:../HakkimizdaDuzenle.php");
}
}


if(isset($_POST['misyonkaydet'])){
  $id=1;

  $misyonkaydet = mysql_query("update Misyon set misyon_baslik ='".$_POST['misyon_baslik']."', misyon_icerik ='".$_POST['misyon_icerik']."'  where misyon_id='$id'");

if(mysql_affected_rows()){

  header("Location:../MisyonDuzenle.php");
}
else{
  header("Location:../MisyonDuzenle.php");
}
}




if(isset($_POST['vizyonkaydet'])){
  $id=1;

  $vizyonkaydet = mysql_query("update Vizyon set vizyon_baslik ='".$_POST['vizyon_baslik']."', vizyon_icerik ='".$_POST['vizyon_icerik']."'  where vizyon_id='$id'");

if(mysql_affected_rows()){

  header("Location:../VizyonDuzenle.php");
}
else{
  header("Location:../VizyonDuzenle.php");
}
}

if(isset($_POST['mudekkaydet'])){
  $id=1;

  $mudekkaydet = mysql_query("update Mudek set mudek_baslik ='".$_POST['mudek_baslik']."', mudek_icerik ='".$_POST['mudek_icerik']."'  where mudek_id='$id'");

if(mysql_affected_rows()){

  header("Location:../MudekDuzenle.php");
}
else{
  header("Location:../MudekDuzenle.php");
}
}




if(isset($_POST['programciktilarikaydet'])){
  $id=1;

  $programciktilarikaydet = mysql_query("update Programciktilari set programciktilari_baslik ='".$_POST['programciktilari_baslik']."', programciktilari_icerik ='".$_POST['programciktilari_icerik']."'  where programciktilari_id='$id'");

if(mysql_affected_rows()){

  header("Location:../ProgramciktilariDuzenle.php");
}
else{
  header("Location:../ProgramciktilariDuzenle.php");
}
}




if(isset($_POST['projelerkaydet'])){
  $id=1;

  $projelerkaydet = mysql_query("update Projeler set projeler_baslik ='".$_POST['projeler_baslik']."', projeler_icerik ='".$_POST['projeler_icerik']."'  where projeler_id='$id'");

if(mysql_affected_rows()){

  header("Location:../ProjelerDuzenle.php");
}
else{
  header("Location:../ProjelerDuzenle.php");
}
}






if(isset($_POST['calismaalanlarikaydet'])){
  $id=1;

  $calismaalanlarikaydet = mysql_query("update Calismaalanlari set Calismaalanlari_baslik ='".$_POST['Calismaalanlari_baslik']."', Calismaalanlari_icerik ='".$_POST['Calismaalanlari_icerik']."'  where Calismaalanlari_id='$id'");

if(mysql_affected_rows()){

  header("Location:../CalismaalanlariDuzenle.php");
}
else{
  header("Location:../CalismaalanlariDuzenle.php");
}
}


if(isset($_POST['dersplani'])){
  $id=1;

  $dersplani = mysql_query("update Dersplanibaslik set dersplanibaslik_ana ='".$_POST['dersplanibaslik_ana']."', dersplanibaslik_alt ='".$_POST['dersplanibaslik_alt']."' where dersplanibaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../DersPlaniBaslikDuzenle.php");
}
else{
  header("Location:../DersPlaniBaslikDuzenle.php");
}
}


if(isset($_POST['dersplaniekle'])){

  $dersplaniekle=mysql_query("insert into Dersplani (dersplani_yariyilbaslik, dersplani_icerik, dersplani_kod, dersplani_ad, dersplani_tur,
  dersplani_dil, dersplani_t, dersplani_l, dersplani_u, dersplani_saat, dersplani_akts)
  VALUES('".$_POST[dersplani_yariyilbaslik]."','".$_POST[dersplani_icerik]."','".$_POST[dersplani_kod]."','".$_POST[dersplani_ad]."',
  '".$_POST[dersplani_tur]."', '".$_POST[dersplani_dil]."', '".$_POST[dersplani_t]."', '".$_POST[dersplani_l]."', '".$_POST[dersplani_u]."',
  '".$_POST[dersplani_saat]."', '".$_POST[dersplani_akts]."')");

if(mysql_affected_rows()){

  header("Location:../DersPlaniEkle.php");
}
else{
  header("Location:../DersPlaniEkle.php");
}
}



if(isset($_POST['dersplaniguncel'])){

$dersplani_id =$_POST['dersplani_id'];


  $dersplaniguncell = mysql_query("update Dersplani set dersplani_yariyilbaslik ='".$_POST['dersplani_yariyilbaslik']."',
  dersplani_icerik ='".$_POST['dersplani_icerik']."', dersplani_kod ='".$_POST['dersplani_kod']."',
  dersplani_ad ='".$_POST['dersplani_ad']."', dersplani_tur ='".$_POST['dersplani_tur']."',
  dersplani_dil ='".$_POST['dersplani_dil']."', dersplani_t ='".$_POST['dersplani_t']."',
  dersplani_l ='".$_POST['dersplani_l']."', dersplani_u ='".$_POST['dersplani_u']."', dersplani_saat ='".$_POST['dersplani_saat']."',
  dersplani_akts ='".$_POST['dersplani_akts']."' where dersplani_id ='$dersplani_id'");

if(mysql_affected_rows()){

  header("Location:../DersPlaniBaslikDuzenle.php");
}
else{
  header("Location:../DersPlaniBaslikDuzenle.php");
}
}



if($_GET['dersplanisil']=="ok"){


  $slidersil = mysql_query("delete from Dersplani where dersplani_id='".$_GET['dersplani_id']."'");

if(mysql_affected_rows()){

  header("Location:../DersPlaniBaslikDuzenle.php?durum=ok");
}
else
{

  header("Location:../DersPlaniBaslikDuzenle.php?durum=no");
}
}



if(isset($_POST['yonetimekle'])){


  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['yonetimgorsel']["tmp_name"];
  @$name = $_FILES['yonetimgorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $yonetimekle=mysql_query("insert into Yonetim (yonetim_kisi, yonetim_resim, yonetim_anabilim, yonetim_oda,
  yonetim_mail, yonetim_telefon, yonetim_diger, yonetim_arastirma, yonetim_sira, yonetim_pozisyon)
  VALUES('".$_POST[yonetim_kisi]."','".$resimyol."','".$_POST[yonetim_anabilim]."','".$_POST[yonetim_oda]."',
  '".$_POST[yonetim_mail]."', '".$_POST[yonetim_telefon]."', '".$_POST[yonetim_diger]."', '".$_POST[yonetim_arastirma]."', '".$_POST[yonetim_sira]."', '".$_POST[yonetim_pozisyon]."')");

if(mysql_affected_rows()){

  header("Location:../YonetimDuzenle.php");
}
else{
  header("Location:../YonetimDuzenle.php");
}
}



if(isset($_POST['yonetimguncelle'])){

$yonetim_id =$_POST['yonetim_id'];


  $yonetimguncell = mysql_query("update Yonetim set yonetim_diger ='".$_POST['yonetim_diger']."',
 yonetim_kisi ='".$_POST['yonetim_kisi']."', yonetim_anabilim ='".$_POST['yonetim_anabilim']."', yonetim_oda ='".$_POST['yonetim_oda']."',
 yonetim_mail ='".$_POST['yonetim_mail']."', yonetim_telefon ='".$_POST['yonetim_telefon']."', yonetim_arastirma ='".$_POST['yonetim_arastirma']."', yonetim_sira ='".$_POST['yonetim_sira']."', yonetim_pozisyon ='".$_POST['yonetim_pozisyon']."'
 where yonetim_id='$yonetim_id'");

if(mysql_affected_rows()){

  header("Location:../YonetimDuzenle.php");
}
else{
  header("Location:../YonetimDuzenle.php");
}
}


if(isset($_POST['yonetimresimdegistir'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['yonetimgorsel']["tmp_name"];
  @$name = $_FILES['yonetimgorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $yonetim_id =$_POST['yonetim_id'];

  $yonetimduzenle=mysql_query("update Yonetim set yonetim_resim ='".$resimyol."' where yonetim_id='$yonetim_id'");



if(mysql_affected_rows()){

  header("Location:../YonetimDuzenle.php");
}
else{
  header("Location:../YonetimDuzenle.php");
}
}


if($_GET['yonetimsil']=="ok"){


  $yonetimsil = mysql_query("delete from Yonetim where yonetim_id='".$_GET['yonetim_id']."'");

if(mysql_affected_rows()){

  header("Location:../YonetimDuzenle.php?durum=ok");
}
else
{

  header("Location:../YonetimDuzenle.php?durum=no");
}
}



if(isset($_POST['ogretimuyeleriekle'])){


  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['ogretimuyelerigorsel']["tmp_name"];
  @$name = $_FILES['ogretimuyelerigorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $ogretimuyeleriekle=mysql_query("insert into Ogretimuyeleri (ogretimuyeleri_kisi, ogretimuyeleri_resim, ogretimuyeleri_anabilim,
  ogretimuyeleri_oda, ogretimuyeleri_mail, ogretimuyeleri_telefon, ogretimuyeleri_diger, ogretimuyeleri_arastirma, ogretimuyeleri_sira)
  VALUES('".$_POST[ogretimuyeleri_kisi]."','".$resimyol."','".$_POST[ogretimuyeleri_anabilim]."','".$_POST[ogretimuyeleri_oda]."',
  '".$_POST[ogretimuyeleri_mail]."', '".$_POST[ogretimuyeleri_telefon]."',
  '".$_POST[ogretimuyeleri_diger]."', '".$_POST[ogretimuyeleri_arastirma]."', '".$_POST[ogretimuyeleri_sira]."')");

if(mysql_affected_rows()){

  header("Location:../OgretimUyeleriDuzenle.php");
}
else{
  header("Location:../OgretimUyeleriDuzenle.php");
}
}


if(isset($_POST['ogretimuyeleriguncelle'])){

$ogretimuyeleri_id =$_POST['ogretimuyeleri_id'];


  $ogretimuyeleriguncell = mysql_query("update Ogretimuyeleri set ogretimuyeleri_diger ='".$_POST['ogretimuyeleri_diger']."',
 ogretimuyeleri_kisi ='".$_POST['ogretimuyeleri_kisi']."', ogretimuyeleri_anabilim ='".$_POST['ogretimuyeleri_anabilim']."', ogretimuyeleri_oda ='".$_POST['ogretimuyeleri_oda']."',
 ogretimuyeleri_mail ='".$_POST['ogretimuyeleri_mail']."', ogretimuyeleri_telefon ='".$_POST['ogretimuyeleri_telefon']."', ogretimuyeleri_arastirma ='".$_POST['ogretimuyeleri_arastirma']."', ogretimuyeleri_sira ='".$_POST['ogretimuyeleri_sira']."'
 where ogretimuyeleri_id='$ogretimuyeleri_id'");

if(mysql_affected_rows()){

  header("Location:../OgretimUyeleriDuzenle.php");
}
else{
  header("Location:../OgretimUyeleriDuzenle.php");
}
}


if(isset($_POST['ogretimuyeleriresimdegistir'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['ogretimuyelerigorsel']["tmp_name"];
  @$name = $_FILES['ogretimuyelerigorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $ogretimuyeleri_id =$_POST['ogretimuyeleri_id'];

  $ogretimuyeleriduzenle=mysql_query("update Ogretimuyeleri set ogretimuyeleri_resim ='".$resimyol."' where ogretimuyeleri_id='$ogretimuyeleri_id'");



if(mysql_affected_rows()){

  header("Location:../OgretimUyeleriDuzenle.php");
}
else{
  header("Location:../OgretimUyeleriDuzenle.php");
}
}


if($_GET['ogretimuyelerisil']=="ok"){


  $ogretimuyelerisil = mysql_query("delete from Ogretimuyeleri where ogretimuyeleri_id='".$_GET['ogretimuyeleri_id']."'");

if(mysql_affected_rows()){

  header("Location:../OgretimUyeleriDuzenle.php?durum=ok");
}
else
{

  header("Location:../OgretimUyeleriDuzenle.php?durum=no");
}
}



if(isset($_POST['ogretimelemanlariekle'])){


  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['ogretimelemanlarigorsel']["tmp_name"];
  @$name = $_FILES['ogretimelemanlarigorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $ogretimelemanlariekle=mysql_query("insert into Ogretimelemanlari (ogretimelemanlari_kisi, ogretimelemanlari_resim, ogretimelemanlari_anabilim,
  ogretimelemanlari_oda, ogretimelemanlari_mail, ogretimelemanlari_telefon, ogretimelemanlari_diger, ogretimelemanlari_arastirma, ogretimelemanlari_sira)
  VALUES('".$_POST[ogretimelemanlari_kisi]."','".$resimyol."','".$_POST[ogretimelemanlari_anabilim]."','".$_POST[ogretimelemanlari_oda]."',
  '".$_POST[ogretimelemanlari_mail]."', '".$_POST[ogretimelemanlari_telefon]."',
  '".$_POST[ogretimelemanlari_diger]."', '".$_POST[ogretimelemanlari_arastirma]."','".$_POST[ogretimelemanlari_sira]."')");

if(mysql_affected_rows()){

  header("Location:../OgretimElemanlariDuzenle.php");
}
else{
  header("Location:../OgretimElemanlariDuzenle.php");
}
}


if(isset($_POST['ogretimelemanlariguncelle'])){

$ogretimelemanlari_id =$_POST['ogretimelemanlari_id'];


  $ogretimelemanlariguncell = mysql_query("update Ogretimelemanlari set ogretimelemanlari_diger ='".$_POST['ogretimelemanlari_diger']."',
 ogretimelemanlari_kisi ='".$_POST['ogretimelemanlari_kisi']."', ogretimelemanlari_anabilim ='".$_POST['ogretimelemanlari_anabilim']."', ogretimelemanlari_oda ='".$_POST['ogretimelemanlari_oda']."',
 ogretimelemanlari_mail ='".$_POST['ogretimelemanlari_mail']."', ogretimelemanlari_telefon ='".$_POST['ogretimelemanlari_telefon']."', ogretimelemanlari_arastirma ='".$_POST['ogretimelemanlari_arastirma']."', ogretimelemanlari_sira ='".$_POST['ogretimelemanlari_sira']."'
 where ogretimelemanlari_id='$ogretimelemanlari_id'");

if(mysql_affected_rows()){

  header("Location:../OgretimElemanlariDuzenle.php");
}
else{
  header("Location:../OgretimElemanlariDuzenle.php");
}
}


if(isset($_POST['ogretimelemanlariresimdegistir'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['ogretimelemanlarigorsel']["tmp_name"];
  @$name = $_FILES['ogretimelemanlarigorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $ogretimelemanlari_id =$_POST['ogretimelemanlari_id'];

  $ogretimelemanlariduzenle=mysql_query("update Ogretimelemanlari set ogretimelemanlari_resim ='".$resimyol."' where ogretimelemanlari_id='$ogretimelemanlari_id'");



if(mysql_affected_rows()){

  header("Location:../OgretimElemanlariDuzenle.php");
}
else{
  header("Location:../OgretimElemanlariDuzenle.php");
}
}



if($_GET['ogretimelemanlarisil']=="ok"){


  $ogretimelemanlarisil = mysql_query("delete from Ogretimelemanlari where ogretimelemanlari_id='".$_GET['ogretimelemanlari_id']."'");

if(mysql_affected_rows()){

  header("Location:../OgretimElemanlariDuzenle.php?durum=ok");
}
else
{

  header("Location:../OgretimElemanlariDuzenle.php?durum=no");
}
}



if(isset($_POST['idaripersonelekle'])){


  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['idaripersonelgorsel']["tmp_name"];
  @$name = $_FILES['idaripersonelgorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $idaripersonelekle=mysql_query("insert into Idaripersonel (idaripersonel_kisi, idaripersonel_resim, idaripersonel_anabilim,
  idaripersonel_oda, idaripersonel_mail, idaripersonel_telefon, idaripersonel_diger, idaripersonel_arastirma, idaripersonel_sira)
  VALUES('".$_POST[idaripersonel_kisi]."','".$resimyol."','".$_POST[idaripersonel_anabilim]."','".$_POST[idaripersonel_oda]."',
  '".$_POST[idaripersonel_mail]."', '".$_POST[idaripersonel_telefon]."',
  '".$_POST[idaripersonel_diger]."', '".$_POST[idaripersonel_arastirma]."', '".$_POST[idaripersonel_sira]."')");

if(mysql_affected_rows()){

  header("Location:../IdariPersonelDuzenle.php");
}
else{
  header("Location:../IdariPersonelDuzenle.php");
}
}

if(isset($_POST['idaripersonelguncelle'])){

$idaripersonel_id =$_POST['idaripersonel_id'];


  $idaripersonelguncell = mysql_query("update Idaripersonel set idaripersonel_diger ='".$_POST['idaripersonel_diger']."',
 idaripersonel_kisi ='".$_POST['idaripersonel_kisi']."', idaripersonel_anabilim ='".$_POST['idaripersonel_anabilim']."', idaripersonel_oda ='".$_POST['idaripersonel_oda']."',
 idaripersonel_mail ='".$_POST['idaripersonel_mail']."', idaripersonel_telefon ='".$_POST['idaripersonel_telefon']."', idaripersonel_arastirma ='".$_POST['idaripersonel_arastirma']."', idaripersonel_sira ='".$_POST['idaripersonel_sira']."'
 where idaripersonel_id='$idaripersonel_id'");

if(mysql_affected_rows()){

  header("Location:../IdariPersonelDuzenle.php");
}
else{
  header("Location:../IdariPersonelDuzenle.php");
}
}


if(isset($_POST['idaripersonelresimdegistir'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['idaripersonelgorsel']["tmp_name"];
  @$name = $_FILES['idaripersonelgorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $idaripersonel_id =$_POST['idaripersonel_id'];

  $idaripersonelduzenle=mysql_query("update Idaripersonel set idaripersonel_resim ='".$resimyol."' where idaripersonel_id='$idaripersonel_id'");



if(mysql_affected_rows()){

  header("Location:../IdariPersonelDuzenle.php");
}
else{
  header("Location:../IdariPersonelDuzenle.php");
}
}



if($_GET['idaripersonelsil']=="ok"){


  $idaripersonelsil = mysql_query("delete from Idaripersonel where idaripersonel_id='".$_GET['idaripersonel_id']."'");

if(mysql_affected_rows()){

  header("Location:../IdariPersonelDuzenle.php?durum=ok");
}
else
{

  header("Location:../IdariPersonelDuzenle.php?durum=no");
}
}


if(isset($_POST['danismanekle'])){

  $dersplaniekle=mysql_query("insert into Akademikdanisman (akademikdanisman_sinif, akademikdanisman_akademik, akademikdanisman_kayit)
  VALUES('".$_POST[akademikdanisman_sinif]."','".$_POST[akademikdanisman_akademik]."','".$_POST[akademikdanisman_kayit]."')");

if(mysql_affected_rows()){

  header("Location:../AkademikDanismanEkle.php");
}
else{
  header("Location:../AkademikDanismanEkle.php");
}
}


if($_GET['akademikdanismansil']=="ok"){


  $idaripersonelsil = mysql_query("delete from Akademikdanisman where akademikdanisman_id='".$_GET['akademikdanisman_id']."'");

if(mysql_affected_rows()){

  header("Location:../AkademikDanismanDuzenle.php?durum=ok");
}
else
{

  header("Location:../AkademikDanismanDuzenle.php?durum=no");
}
}




if(isset($_POST['yukseklisansdersekle'])){

  $yukseklisansdersekle=mysql_query("insert into Yukseklisansders (yukseklisansders_ad, yukseklisansders_icerik)
  VALUES('".$_POST[yukseklisansders_ad]."','".$_POST[yukseklisansders_icerik]."')");

if(mysql_affected_rows()){

  header("Location:../YuksekLisansDers.php");
}
else{
  header("Location:../YuksekLisansDers.php");

}
}



if($_GET['yukseklisansderssil']=="ok"){


  $yukseklisansderssil = mysql_query("delete from Yukseklisansders where yukseklisansders_id='".$_GET['yukseklisansders_id']."'");

if(mysql_affected_rows()){

  header("Location:../YuksekLisansDers.php?durum=ok");
}
else
{

  header("Location:../YuksekLisansDers.php?durum=no");
}
}




if(isset($_POST['akademikdanismanguncel'])){

$akademikdanisman_id =$_POST['akademikdanisman_id'];


  $akademikdanismanguncell = mysql_query("update Akademikdanisman set akademikdanisman_sinif ='".$_POST['akademikdanisman_sinif']."',
 akademikdanisman_akademik ='".$_POST['akademikdanisman_akademik']."', akademikdanisman_kayit ='".$_POST['akademikdanisman_kayit']."'
 where akademikdanisman_id='$akademikdanisman_id'");

if(mysql_affected_rows()){

  header("Location:../AkademikDanismanDuzenle.php");
}
else{
  header("Location:../AkademikDanismanDuzenle.php");
}
}




if(isset($_POST['yukseklisansdersguncel'])){

$yukseklisansders_id =$_POST['yukseklisansders_id'];


  $yukseklisansdersguncell = mysql_query("update Yukseklisansders set yukseklisansders_ad ='".$_POST['yukseklisansders_ad']."',
  yukseklisansders_icerik ='".$_POST['yukseklisansders_icerik']."' where yukseklisansders_id ='$yukseklisansders_id'");

if(mysql_affected_rows()){

  header("Location:../YuksekLisansDers.php");
}
else{
  header("Location:../YuksekLisansDers.php");
}
}



if(isset($_POST['iletisimekle'])){
  $id=1;

  $iletisimekle = mysql_query("update Iletisim set iletisim_baslik ='".$_POST['iletisim_baslik']."', iletisim_altbaslik ='".$_POST['iletisim_altbaslik']."',
  iletisim_adres ='".$_POST['iletisim_adres']."',iletisim_telefon ='".$_POST['iletisim_telefon']."',iletisim_mail ='".$_POST['iletisim_mail']."'  where iletisim_id='$id'");

if(mysql_affected_rows()){

  header("Location:../IletisimDuzenle.php");
}
else{
  header("Location:../IletisimDuzenle.php");
}
}


if(isset($_POST['projeekle'])){

  $projeiekle=mysql_query("insert into Bitirmetabloicerik (bitirmetabloicerik_kisi, bitirmetabloicerik_icerik, bitirmetabloicerik_sira)
  VALUES('".$_POST[bitirmetabloicerik_kisi]."','".$_POST[bitirmetabloicerik_icerik]."','".$_POST[bitirmetabloicerik_sira]."')");

if(mysql_affected_rows()){

  header("Location:../Bitirme.php");
}
else{
  header("Location:../Bitirme.php");
}
}

if(isset($_POST['projeduzenle'])){

$bitirmetabloicerik_id =$_POST['bitirmetabloicerik_id'];


  $yukseklisansdersguncell = mysql_query("update Bitirmetabloicerik set bitirmetabloicerik_kisi ='".$_POST['bitirmetabloicerik_kisi']."',
  bitirmetabloicerik_icerik ='".$_POST['bitirmetabloicerik_icerik']."',  bitirmetabloicerik_sira ='".$_POST['bitirmetabloicerik_sira']."' where bitirmetabloicerik_id ='$bitirmetabloicerik_id'");

if(mysql_affected_rows()){

  header("Location:../Bitirme.php");
}
else{
  header("Location:../Bitirme.php");
}
}

if($_GET['bitirmetabloiceriksil']=="ok"){


  $bitirmetabloiceriksil = mysql_query("delete from Bitirmetabloicerik where bitirmetabloicerik_id='".$_GET['bitirmetabloicerik_id']."'");

if(mysql_affected_rows()){

  header("Location:../Bitirme.php?durum=ok");
}
else
{

  header("Location:../Bitirme.php?durum=no");
}
}

if(isset($_POST['bitirmekaydet'])){
  $id=1;

  $tarihkaydet = mysql_query("update Bitirmebaslik set bitirmebaslik_baslik ='".$_POST['bitirmebaslik_baslik']."', bitirmebaslik_icerik ='".$_POST['bitirmebaslik_icerik']."'  where bitirmebaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../Bitirme.php");
}
else{
  header("Location:../Bitirme.php");
}
}


if(isset($_POST['anabilimkaydet'])){
  $id=1;

  $anabilimkaydet = mysql_query("update Anabilimdallari set anabilimdallari_baslik ='".$_POST['anabilimdallari_baslik']."', anabilimdallari_icerik ='".$_POST['anabilimdallari_icerik']."'  where anabilimdallari_id='$id'");

if(mysql_affected_rows()){

  header("Location:../Anabilimdallariduzenle.php");
}
else{
  header("Location:../Anabilimdallariduzenle.php");
}
}

if(isset($_POST['anabilimdallariicerikekle'])){


  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['anabilimdallariicerikgorsel']["tmp_name"];
  @$name = $_FILES['anabilimdallariicerikgorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $anabilimekle=mysql_query("insert into Anabilimdallaricerik (anabilimdallariicerik_sec, anabilimdallariicerik_resim, anabilimdallariicerik_kisi,
  anabilimdallariicerik_sira, anabilimdallariicerik_anabilim, anabilimdallariicerik_oda, anabilimdallariicerik_mail, anabilimdallariicerik_telefon, anabilimdallariicerik_diger,anabilimdallariicerik_arastirma)
  VALUES('".$_POST[anabilimdallariicerik_sec]."','".$resimyol."','".$_POST[anabilimdallariicerik_kisi]."','".$_POST[anabilimdallariicerik_sira]."',
  '".$_POST[anabilimdallariicerik_anabilim]."', '".$_POST[anabilimdallariicerik_oda]."',
  '".$_POST[anabilimdallariicerik_mail]."', '".$_POST[anabilimdallariicerik_telefon]."', '".$_POST[anabilimdallariicerik_diger]."', '".$_POST[anabilimdallariicerik_arastirma]."')");

if(mysql_affected_rows()){

  header("Location:../Anabilimdallariduzenle.php");
}
else{
  header("Location:../Anabilimdallariduzenle.php");
}
}


if(isset($_POST['anabilimdallariicerikguncelle'])){

$anabilimdallariicerik_id =$_POST['anabilimdallariicerik_id'];


  $anabilimguncell = mysql_query("update Anabilimdallaricerik set anabilimdallariicerik_sec ='".$_POST['anabilimdallariicerik_sec']."',
 anabilimdallariicerik_kisi ='".$_POST['anabilimdallariicerik_kisi']."', anabilimdallariicerik_sira ='".$_POST['anabilimdallariicerik_sira']."', anabilimdallariicerik_anabilim ='".$_POST['anabilimdallariicerik_anabilim']."',
 anabilimdallariicerik_oda ='".$_POST['anabilimdallariicerik_oda']."', anabilimdallariicerik_mail ='".$_POST['anabilimdallariicerik_mail']."',
 anabilimdallariicerik_telefon ='".$_POST['anabilimdallariicerik_telefon']."',
 anabilimdallariicerik_diger ='".$_POST['anabilimdallariicerik_diger']."',
 anabilimdallariicerik_arastirma ='".$_POST['anabilimdallariicerik_arastirma']."'
 where anabilimdallariicerik_id='$anabilimdallariicerik_id'");

if(mysql_affected_rows()){

  header("Location:../Anabilimdallariduzenle.php");
}
else{
  header("Location:../Anabilimdallariduzenle.php");
}
}




if($_GET['anabilimdallariceriksil']=="ok"){


  $anabilimsil = mysql_query("delete from Anabilimdallaricerik where anabilimdallariicerik_id='".$_GET['anabilimdallariicerik_id']."'");

if(mysql_affected_rows()){

  header("Location:../Anabilimdallariduzenle.php?durum=ok");
}
else
{

  header("Location:../Anabilimdallariduzenle.php?durum=no");
}
}


if(isset($_POST['anabilimdallariicerikresimdegistir'])){



  $uploads_dir = '../Uploads';

  @$tmp_name = $_FILES['anabilimdallariicerikgorsel']["tmp_name"];
  @$name = $_FILES['anabilimdallariicerikgorsel']["name"];
  $randomsayi1 = rand(10000 , 99999);
  $randomsayi2 = rand(10000 , 99999);
  $randomsayi3 = rand(10000 , 99999);
  $randomsayi4 = rand(10000 , 99999);
  $randomadi = $randomsayi1.$randomsayi2.$randomsayi3.$randomsayi4;

  $resimyol = substr($tmp_name, $uploads_dir,3)."/".$randomadi.$name;

  @move_uploaded_file($tmp_name, "$uploads_dir/$randomadi$name");

  $anabilimdallariicerik_id =$_POST['anabilimdallariicerik_id'];

  $anabilimdallariicerikduzenle=mysql_query("update Anabilimdallaricerik set anabilimdallariicerik_resim ='".$resimyol."' where anabilimdallariicerik_id='$anabilimdallariicerik_id'");



if(mysql_affected_rows()){

  header("Location:../Anabilimdallariduzenle.php");
}
else{
  header("Location:../Anabilimdallariduzenle.php");
}
}



if(isset($_POST['yonetimbaslikekle'])){
  $id=1;

  $yonetimbaslikkaydet = mysql_query("update Yonetimbaslik set yonetimbaslik_baslik ='".$_POST['yonetimbaslik_baslik']."'  where yonetimbaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../YonetimDuzenle.php");
}
else{
  header("Location:../YonetimDuzenle.php");
}
}


if(isset($_POST['ogretimuyeleribaslikekle'])){
  $id=1;

  $ogretimuyeleribaslikkaydet = mysql_query("update Ogretimuyeleribaslik set ogretimuyeleribaslik_baslik ='".$_POST['ogretimuyeleribaslik_baslik']."'  where ogretimuyeleribaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../OgretimUyeleriDuzenle.php");
}
else{
  header("Location:../OgretimUyeleriDuzenle.php");
}
}

if(isset($_POST['ogretimelemanlaribaslikekle'])){
  $id=1;

  $ogretimelemanlaribaslikkaydet = mysql_query("update Ogretimelemanlaribaslik set ogretimelemanlaribaslik_baslik ='".$_POST['ogretimelemanlaribaslik_baslik']."'  where ogretimelemanlaribaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../OgretimElemanlariDuzenle.php");
}
else{
  header("Location:../OgretimElemanlariDuzenle.php");
}
}


if(isset($_POST['idaripersonelbaslikekle'])){
  $id=1;

  $idaripersonelbaslikkaydet = mysql_query("update Idaripersonelbaslik set idaripersonelbaslik_baslik ='".$_POST['idaripersonelbaslik_baslik']."'  where idaripersonelbaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../IdariPersonelDuzenle.php");
}
else{
  header("Location:../IdariPersonelDuzenle.php");
}
}

if(isset($_POST['akademikdanismanbaslikekle'])){
  $id=1;

  $akademikdanismanbaslikkaydet = mysql_query("update Akademikdanismanbaslik set akademikdanismanbaslik_baslik ='".$_POST['akademikdanismanbaslik_baslik']."', akademikdanismanbaslik_altbaslik ='".$_POST['akademikdanismanbaslik_altbaslik']."' where akademikdanismanbaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../AkademikDanismanDuzenle.php");
}
else{
  header("Location:../AkademikDanismanDuzenle.php");
}
}

if(isset($_POST['yukseklisansdersbaslikekle'])){
  $id=1;

  $yukseklisansdersbaslikkaydet = mysql_query("update Yukseklisansdersbaslik set yukseklisansdersbaslik_baslik ='".$_POST['yukseklisansdersbaslik_baslik']."' where yukseklisansdersbaslik_id='$id'");

if(mysql_affected_rows()){

  header("Location:../YuksekLisansDers.php");
}
else{
  header("Location:../YuksekLisansDers.php");
}
}


if(isset($_POST['sayfaekle'])){

  $sayfaekle=mysql_query("insert into Sayfalar (baslik, icerik,menuad)
  VALUES('".$_POST[baslik]."','".$_POST[icerik]."','".$_POST[menuad]."')");

if(mysql_affected_rows()){

  header("Location:../sayfaekle.php");
}
else{
  header("Location:../sayfaekle.php");
}
}

if(isset($_POST['sayfakaydet'])){

$id =$_POST['id'];


  $sayfa = mysql_query("update Sayfalar set baslik ='".$_POST['baslik']."', icerik ='".$_POST['icerik']."', menuad ='".$_POST['menuad']."' where id='$id'");

if(mysql_affected_rows()){

  header("Location:../Sayfalar.php");
}
else{
  header("Location:../sayfaekle.php");
}
}

if($_GET['sayfasil']=="ok"){


  $sayfasil = mysql_query("delete from Sayfalar where id='".$_GET['id']."'");

if(mysql_affected_rows()){

  header("Location:../Sayfalar.php?durum=ok");
}
else
{

  header("Location:../Sayfalar.php?durum=no");
}
}

if(isset($_POST['giris'])) {

$admingiris_kadi=$_POST['admingiris_kadi'];
$admingiris_sifre=$_POST['admingiris_sifre'];




  if($admingiris_kadi && $admingiris_sifre){

    $sorgula = mysql_query("select * from Admingiris where admingiris_kadi='$admingiris_kadi' and admingiris_sifre='$admingiris_sifre'");
    $verisay = mysql_num_rows($sorgula);

    if($verisay>0){
      $_SESSION['admingiris_kadi'] = $admingiris_kadi;

      header('Location:../index.php');
    }
    else{
        header('Location:../login.php?login=no');

    }

}

  if(empty($admingiris_kadi) || empty($admingiris_sifre))
  header('Location:../login.php?login=no');

}





 ?>
