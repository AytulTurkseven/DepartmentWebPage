<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>

<?php

$yukseklisansders_id=$_GET['yukseklisansders_id'];
$yukseklisansderssorr = mysql_query("select * from Yukseklisansders where yukseklisansders_id='$yukseklisansders_id'");
$yukseklisansdersguncel=mysql_fetch_assoc($yukseklisansderssorr);




?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">
                  <input class="form-control" type="hidden" name="yukseklisansders_id" value="<?php echo $yukseklisansdersguncel['yukseklisansders_id']?>">

                    <div class="form-group">
                      <label>Ders Adı: </label>

                      <input class="form-control" type="text" name="yukseklisansders_ad" value="<?php echo $yukseklisansdersguncel['yukseklisansders_ad']?>">
                  </div>

              </div>
              <div class="form-group col-lg-8">
                  <label>Ders İçeriği: </label>
                  <textarea name="yukseklisansders_icerik" class = "ckeditor"><?php echo $yukseklisansdersguncel['yukseklisansders_icerik']?></textarea>


              </div>

              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="yukseklisansdersguncel" value="Ders Ekle">
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
