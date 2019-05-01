<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>



<?php


$iletisimsor = mysql_query("select * from Iletisim");
$iletisimduzenle=mysql_fetch_assoc($iletisimsor);



 ?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>






                <form action = "includes/islem.php" method ="POST">
                <div class = "col-lg-6">
                  <div class="form-group">
                      <label>Sayfanın Ana Başlığı Giriniz: </label>

                      <input class="form-control" type="text" name="iletisim_baslik" value="<?php echo $iletisimduzenle['iletisim_baslik']; ?>">
                  </div>


                  <div class="form-group">
                      <label>Sayfanın Alt Başlığını Giriniz: </label>

                      <input class="form-control" type="text" name="iletisim_altbaslik" value="<?php echo $iletisimduzenle['iletisim_altbaslik']; ?>">
                  </div>


                  <div class="form-group">
                      <label>Adres Bilgisi Giriniz: </label>

                      <input class="form-control" type="text" name="iletisim_adres" value="<?php echo $iletisimduzenle['iletisim_adres']; ?>">
                  </div>


                  <div class="form-group">
                      <label>Telefon Giriniz: </label>

                      <input class="form-control" type="text" name="iletisim_telefon" value="<?php echo $iletisimduzenle['iletisim_telefon']; ?>">
                  </div>


                  <div class="form-group">
                      <label>Mail Giriniz: </label>

                      <input class="form-control" type="text" name="iletisim_mail" value="<?php echo $iletisimduzenle['iletisim_mail']; ?>">
                  </div>






                  </div>



                <div class = "col-lg-12">
                  <div class = "form-group">
                  <input class = "btn btn-success" type="submit" name="iletisimekle" value="Kaydet">
                </div>
              </div>


                </form>

                <!-- /. ROW  -->
</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
