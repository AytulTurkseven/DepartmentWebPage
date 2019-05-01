<?php

ob_start();
session_start();

?>



<?php

$db_adres = "localhost";
$db_user = "root";
$db_pass = "";
$db_tablo = "veritabani";


$baglan = mysql_connect($db_adres, $db_user, $db_pass);
mysql_query("SET NAMES UTF8");
if(!$baglan){
  mysql_close($baglan);
  echo "Bağlantı Hatası";
  exit();

}

$db = mysql_select_db($db_tablo);
if(!$db){
  echo "Bağlantı Hatası";
  exit();
}





?>
