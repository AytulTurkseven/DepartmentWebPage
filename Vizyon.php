<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $vizyonduzenle['vizyon_baslik']; ?></h2>
                  <div class="icerik">
                    <?php echo $vizyonduzenle['vizyon_icerik']; ?>

                  </div>
                  <div class="page-header"></div>
              </div>



</div>
</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
