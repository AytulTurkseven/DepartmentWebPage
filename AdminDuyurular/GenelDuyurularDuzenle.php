<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>

<?php

$genel_id=$_GET['genel_id'];
$genelduyurularsorr = mysql_query("select * from Genelduyurular where genel_id='$genel_id'");
$genelduyurularguncel=mysql_fetch_assoc($genelduyurularsorr);




?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">
                    <input class="form-control" type="hidden" name="genel_id" value="<?php echo $genelduyurularguncel['genel_id']?>">

                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="genel_kisi" value="<?php echo $genelduyurularguncel['genel_kisi']?>">
                  </div>
                  <label>Duyuru Başlığı: </label>

                  <input class="form-control" type="text" name="genel_baslik" value="<?php echo $genelduyurularguncel['genel_baslik']?>">
              </div>
              <div class="form-group col-lg-8">
                  <label>Duyuru İçeriği: </label>
                  <textarea name="genel_icerik" class = "ckeditor"><?php echo $genelduyurularguncel['genel_icerik']?> </textarea>


              </div>

              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="genelduyurularguncel" value="Duyuru Ekle">
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
