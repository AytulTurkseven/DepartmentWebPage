<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>




<div class="container">

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header"><?php echo $iletisimduzenle['iletisim_baslik'];?></h2>

      </div>
  </div>
  <!-- /.row -->

  <!-- Content Row -->
  <div class="row">
    <div class = "icerik">
      <div class="col-md-8">

          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=40.821850,29.922814&amp;spn=40.821753,29.924381&amp;t=m&amp;z=16&amp;output=embed"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-md-4">
          <h3 class = "iletisimtasarim"><?php echo $iletisimduzenle['iletisim_altbaslik']; ?></h3>

          <p>
               	<?php echo $iletisimduzenle['iletisim_adres']; ?><br>
          </p>
          <p><i class="fa fa-phone"></i>
              <abbr title="Phone"></abbr>: <?php echo $iletisimduzenle['iletisim_telefon']; ?></p>
          <p><i class="fa fa-envelope-o"></i>
              <abbr title="Email"></abbr>: <?php echo $iletisimduzenle['iletisim_mail']; ?> <a href="mailto:saitbahcivanlar@gmail.com"></a>
          </p>
          <h3 class = "iletisimtasarim"></h3>
      </div>

  <!-- /.row -->

  <!-- Contact Form -->
  <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->




  </div>
  <!-- /.row -->

</div>
<div class=page-header></div>
</div>

<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
