<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


<?php

$ogretimelemanlari_id=$_GET['ogretimelemanlari_id'];
$ogretimelemanlarisorr = mysql_query("select * from Ogretimelemanlari where ogretimelemanlari_id='$ogretimelemanlari_id'");
$ogretimelemanlariduzenle=mysql_fetch_assoc($ogretimelemanlarisorr);

?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>










                <form action = "includes/islem.php" enctype ="multipart/form-data" method ="POST">



                <div class = "col-lg-6">
                  <div class="form-group">
                      <input class="form-control" type="hidden" name="ogretimelemanlari_id" value="<?php echo $ogretimelemanlariduzenle['ogretimelemanlari_id'];?>">

                    <div class = "col-lg-12">





                      <div class = "form-group">
                      <input class = "btn btn-success" type="submit" name="ogretimelemanlariguncelle" value="Eğitmen Düzenle">
                    </div>


                    <div class="form-group">
                      <label>Sırasını Giriniz: </label>

                      <input class="form-control" type="number" name="ogretimelemanlari_sira" value=" <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_sira']?> ">
                </div>


                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="ogretimelemanlari_kisi" value=" <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_kisi']?> ">
                </div>

                <div class="form-group">
                  <label>Ana Bilim Dalı: </label>

                  <input class="form-control" type="text" name="ogretimelemanlari_anabilim" value=" <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_anabilim']?> ">
            </div>

            <div class="form-group">
              <label>Oda Numarası: </label>

              <input class="form-control" type="text" name="ogretimelemanlari_oda" value=" <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_oda']?> ">
        </div>


        <div class="form-group">
          <label>Eposta Adresi: </label>

          <input class="form-control" type="text" name="ogretimelemanlari_mail" value=" <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_mail']?> ">
    </div>



    <div class="form-group">
      <label>Telefon Numarası: </label>

      <input class="form-control" type="text" name="ogretimelemanlari_telefon" value=" <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_telefon']?> ">
</div>




                </div>
                </div>



                  </div>


                  <div class="form-group col-lg-8">
                      <label>Diğer Bilgiler: </label>
                      <textarea name="ogretimelemanlari_diger" class = "ckeditor"> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_diger']?></textarea>


                  </div>


                  <div class="form-group col-lg-8">
                      <label>Araştırma Alanları: </label>
                      <textarea name="ogretimelemanlari_arastirma" class = "ckeditor"> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_arastirma']?> </textarea>


                  </div>







                </form>

                <!-- /. ROW  -->
  </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
