<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>

<?php

$dersnotlari_id=$_GET['dersnotlari_id'];
$dersnotlarisorr = mysql_query("select * from Dersnotlari where dersnotlari_id='$dersnotlari_id'");
$dersnotlariguncel=mysql_fetch_assoc($dersnotlarisorr);




?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">
                    <input class="form-control" type="hidden" name="dersnotlari_id" value="<?php echo $dersnotlariguncel['dersnotlari_id']?>">

                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="dersnotlari_kisi" value="<?php echo $dersnotlariguncel['dersnotlari_kisi']?>">
                  </div>
                  <label>Duyuru Başlığı: </label>

                  <input class="form-control" type="text" name="dersnotlari_baslik" value="<?php echo $dersnotlariguncel['dersnotlari_baslik']?>">
              </div>
              <div class="form-group col-lg-8">
                  <label>Duyuru İçeriği: </label>
                  <textarea name="dersnotlari_icerik" class = "ckeditor"><?php echo $dersnotlariguncel['dersnotlari_icerik']?> </textarea>


              </div>

              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="dersnotlariguncel" value="Duyuru Ekle">
              </div>
            </div>



              </div>
            </div>















                </form>

                <!-- /. ROW  -->
</div>
            <!-- /. PAGE INNER  -->

        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
