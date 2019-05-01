<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


<?php

$idaripersonel_id=$_GET['idaripersonel_id'];
$idaripersonelsorr = mysql_query("select * from Idaripersonel where idaripersonel_id='$idaripersonel_id'");
$idaripersonelduzenle=mysql_fetch_assoc($idaripersonelsorr);

?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>









                <form action = "includes/islem.php" enctype ="multipart/form-data" method ="POST">

                <div class = "col-lg-6">
                  <div class="form-group">
                      <input class="form-control" type="hidden" name="idaripersonel_id" value="<?php echo $idaripersonelduzenle['idaripersonel_id'];?>">

                    <div class = "col-lg-12">





                      <div class = "form-group">
                      <input class = "btn btn-success" type="submit" name="idaripersonelguncelle" value="Eğitmen Düzenle">
                    </div>

                    <div class="form-group">
                      <label>Sırasını Giriniz: </label>

                      <input class="form-control" type="number" name="idaripersonel_sira" value=" <?php echo $idaripersonelduzenle['idaripersonel_sira']?> ">
                </div>


                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="idaripersonel_kisi" value=" <?php echo $idaripersonelduzenle['idaripersonel_kisi']?> ">
                </div>

                <div class="form-group">
                  <label>Ana Bilim Dalı: </label>

                  <input class="form-control" type="text" name="idaripersonel_anabilim" value=" <?php echo $idaripersonelduzenle['idaripersonel_anabilim']?> ">
            </div>

            <div class="form-group">
              <label>Oda Numarası: </label>

              <input class="form-control" type="text" name="idaripersonel_oda" value=" <?php echo $idaripersonelduzenle['idaripersonel_oda']?> ">
        </div>


        <div class="form-group">
          <label>Eposta Adresi: </label>

          <input class="form-control" type="text" name="idaripersonel_mail" value=" <?php echo $idaripersonelduzenle['idaripersonel_mail']?> ">
    </div>



    <div class="form-group">
      <label>Telefon Numarası: </label>

      <input class="form-control" type="text" name="idaripersonel_telefon" value=" <?php echo $idaripersonelduzenle['idaripersonel_telefon']?> ">
</div>




                </div>
                </div>



                  </div>


                  <div class="form-group col-lg-8">
                      <label>Diğer Bilgiler: </label>
                      <textarea name="idaripersonel_diger" class = "ckeditor"> <?php echo $idaripersonelduzenle['idaripersonel_diger']?></textarea>


                  </div>


                  <div class="form-group col-lg-8">
                      <label>Araştırma Alanları: </label>
                      <textarea name="idaripersonel_arastirma" class = "ckeditor"> <?php echo $idaripersonelduzenle['idaripersonel_arastirma']?> </textarea>


                  </div>







                </form>

                <!-- /. ROW  -->
              </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
