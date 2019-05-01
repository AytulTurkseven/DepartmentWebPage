<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>

<?php

$bolum_id=$_GET['bolum_id'];
$bolumduyurularsorr = mysql_query("select * from BolumDuyurular where bolum_id='$bolum_id'");
$bolumduyurularguncel=mysql_fetch_assoc($bolumduyurularsorr);




?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">
                    <input class="form-control" type="hidden" name="bolum_id" value="<?php echo $bolumduyurularguncel['bolum_id']?>">

                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="bolum_kisi" value="<?php echo $bolumduyurularguncel['bolum_kisi']?>">
                  </div>
                  <label>Duyuru Başlığı: </label>

                  <input class="form-control" type="text" name="bolum_baslik" value="<?php echo $bolumduyurularguncel['bolum_baslik']?>">
              </div>
              <div class="form-group col-lg-8">
                  <label>Duyuru İçeriği: </label>
                  <textarea name="bolum_icerik" class = "ckeditor"><?php echo $bolumduyurularguncel['bolum_icerik']?> </textarea>


              </div>

              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="bolumduyurularguncel" value="Duyuru Ekle">
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
