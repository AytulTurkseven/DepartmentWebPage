<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


<?php

$yonetim_id=$_GET['yonetim_id'];
$yonetimsorr = mysql_query("select * from Yonetim where yonetim_id='$yonetim_id'");
$yonetimduzenle=mysql_fetch_assoc($yonetimsorr);

?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>










                <form action = "includes/islem.php" enctype ="multipart/form-data" method ="POST">

                <div class = "col-lg-6">
                  <div class="form-group">
                      <input class="form-control" type="hidden" name="yonetim_id" value="<?php echo $yonetimduzenle['yonetim_id'];?>">

                    <div class = "col-lg-12">





                      <div class = "form-group">
                      <input class = "btn btn-success" type="submit" name="yonetimguncelle" value="Eğitmen Düzenle">
                    </div>


                    <div class="form-group">
                      <label>Sıra Giriniz: </label>

                      <input class="form-control" type="text" name="yonetim_sira" value=" <?php echo $yonetimduzenle['yonetim_sira']?> ">
                </div>

                <div class="form-group">
                  <label>Pozisyon: </label>

                  <input class="form-control" type="text" name="yonetim_pozisyon" value=" <?php echo $yonetimduzenle['yonetim_pozisyon']?> ">
            </div>


                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="yonetim_kisi" value=" <?php echo $yonetimduzenle['yonetim_kisi']?> ">
                </div>

                <div class="form-group">
                  <label>Ana Bilim Dalı: </label>

                  <input class="form-control" type="text" name="yonetim_anabilim" value=" <?php echo $yonetimduzenle['yonetim_anabilim']?> ">
            </div>

            <div class="form-group">
              <label>Oda Numarası: </label>

              <input class="form-control" type="text" name="yonetim_oda" value=" <?php echo $yonetimduzenle['yonetim_oda']?> ">
        </div>


        <div class="form-group">
          <label>Eposta Adresi: </label>

          <input class="form-control" type="text" name="yonetim_mail" value=" <?php echo $yonetimduzenle['yonetim_mail']?> ">
    </div>



    <div class="form-group">
      <label>Telefon Numarası: </label>

      <input class="form-control" type="text" name="yonetim_telefon" value=" <?php echo $yonetimduzenle['yonetim_telefon']?> ">
</div>




                </div>
                </div>



                  </div>


                  <div class="form-group col-lg-8">
                      <label>Diğer Bilgiler: </label>
                      <textarea name="yonetim_diger" class = "ckeditor"> <?php echo $yonetimduzenle['yonetim_diger']?></textarea>


                  </div>


                  <div class="form-group col-lg-8">
                      <label>Araştırma Alanları: </label>
                      <textarea name="yonetim_arastirma" class = "ckeditor"> <?php echo $yonetimduzenle['yonetim_arastirma']?> </textarea>


                  </div>







                </form>

                <!-- /. ROW  -->
</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
