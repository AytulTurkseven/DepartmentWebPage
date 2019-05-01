

<?php include 'config.php';


if(isset($_POST['mesajlarekle'])){

  $mesajlarekle=mysql_query("insert into Mesajlar (mesajlar_ad, mesajlar_telefon, mesajlar_mail, mesajlar_mesaj)
  VALUES('".$_POST[mesajlar_ad]."','".$_POST[mesajlar_telefon]."','".$_POST[mesajlar_mail]."','".$_POST[mesajlar_mesaj]."')");

if(mysql_affected_rows()){

  header("Location:../Iletisim-ulasim.php");
}
else{
  header("Location:../Iletisim-ulasim.php");

}
}


?>
