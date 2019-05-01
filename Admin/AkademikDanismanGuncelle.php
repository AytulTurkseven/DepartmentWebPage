<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>



<?php

$akademikdanisman_id=$_GET['akademikdanisman_id'];
$akademikdanismansorr = mysql_query("select * from Akademikdanisman where akademikdanisman_id='$akademikdanisman_id'");
$akademikdanismanguncel=mysql_fetch_assoc($akademikdanismansorr);




?>



        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-12">


                <input class="form-control" type="hidden" name="akademikdanisman_id" value="<?php echo $akademikdanismanguncel['akademikdanisman_id']?>">


                    <div class="form-group col-lg-5">

                      <label>Sınıf Giriniz: </label>

                      <input class="form-control" type="number" name="akademikdanisman_sinif" value="<?php echo $akademikdanismanguncel['akademikdanisman_sinif'];?>">
                  </div>

            </div>




                            <div class="form-group col-lg-7">
                                <label>Akademik Danışmanları Giriniz: </label>
                                <textarea name="akademikdanisman_akademik" class = "ckeditor"><?php echo $akademikdanismanguncel['akademikdanisman_akademik'];?></textarea>


                            </div>

                            <div class="form-group col-lg-7">
                                <label>Kayıt Danışmanları Giriniz: </label>
                                <textarea name="akademikdanisman_kayit" class = "ckeditor"><?php echo $akademikdanismanguncel['akademikdanisman_kayit'];?></textarea>


                            </div>








              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="akademikdanismanguncel" value="Güncelle">
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
