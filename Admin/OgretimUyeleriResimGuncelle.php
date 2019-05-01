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
                      <input class = "btn btn-success" type="submit" name="ogretimuyeleriresimdegistir" value="Eğitmen Ekle">
                    </div>

                    <div class="form-group">

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-danger">
                                    <span class="fileupload-new">Resim Seçiniz</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="ogretimuyelerigorsel">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>

                    </div>



                </div>
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
