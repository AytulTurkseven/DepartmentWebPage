<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


<?php

$ogretimuyeleri_id=$_GET['ogretimuyeleri_id'];
$ogretimuyelerisorr = mysql_query("select * from Ogretimuyeleri where ogretimuyeleri_id='$ogretimuyeleri_id'");
$ogretimuyeleriduzenle=mysql_fetch_assoc($ogretimuyelerisorr);

?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>










                <form action = "includes/islem.php" enctype ="multipart/form-data" method ="POST">

                <div class = "col-lg-6">
                  <div class="form-group">
                      <input class="form-control" type="hidden" name="ogretimuyeleri_id" value="<?php echo $ogretimuyeleriduzenle['ogretimuyeleri_id'];?>">

                    <div class = "col-lg-12">





                      <div class = "form-group">
                      <input class = "btn btn-success" type="submit" name="ogretimuyeleriguncelle" value="Eğitmen Düzenle">
                    </div>

                    <div class="form-group">
                      <label>Sırasını Giriniz: </label>

                      <input class="form-control" type="number" name="ogretimuyeleri_sira" value=" <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_sira']?> ">
                </div>


                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="ogretimuyeleri_kisi" value=" <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_kisi']?> ">
                </div>

                <div class="form-group">
                  <label>Ana Bilim Dalı: </label>

                  <input class="form-control" type="text" name="ogretimuyeleri_anabilim" value=" <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_anabilim']?> ">
            </div>

            <div class="form-group">
              <label>Oda Numarası: </label>

              <input class="form-control" type="text" name="ogretimuyeleri_oda" value=" <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_oda']?> ">
        </div>


        <div class="form-group">
          <label>Eposta Adresi: </label>

          <input class="form-control" type="text" name="ogretimuyeleri_mail" value=" <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_mail']?> ">
    </div>



    <div class="form-group">
      <label>Telefon Numarası: </label>

      <input class="form-control" type="text" name="ogretimuyeleri_telefon" value=" <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_telefon']?> ">
</div>




                </div>
                </div>



                  </div>


                  <div class="form-group col-lg-8">
                      <label>Diğer Bilgiler: </label>
                      <textarea name="ogretimuyeleri_diger" class = "ckeditor"> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_diger']?></textarea>


                  </div>


                  <div class="form-group col-lg-8">
                      <label>Araştırma Alanları: </label>
                      <textarea name="ogretimuyeleri_arastirma" class = "ckeditor"> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_arastirma']?> </textarea>


                  </div>







                </form>

                <!-- /. ROW  -->
</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
