<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>
<?php
$id=$_GET['id'];
$sayfalarsor = mysql_query("select * from Sayfalar where id='$id'");
$sayfalarduzenle=mysql_fetch_assoc($sayfalarsor);

?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $sayfalarduzenle['baslik']; ?></h2>
                  <div class="icerik">

                  <?php echo $sayfalarduzenle['icerik']; ?>

                  </div>
                  <div class="page-header"></div>
              </div>



</div>
</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
