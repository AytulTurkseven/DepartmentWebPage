<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


<?php

$slider_id=$_GET['slider_id'];
$slidersorr = mysql_query("select * from Slider where slider_id='$slider_id'");
$sliderduzenle=mysql_fetch_assoc($slidersorr);




?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>










                <form action = "includes/islem.php" enctype ="multipart/form-data" method ="POST">
                <div class = "col-lg-6">
                  <div class="form-group">
                      <input class="form-control" type="hidden" name="slider_id" value="<?php echo $sliderduzenle['slider_id'];?>">

                    <div class = "col-lg-12">





                      <div class = "form-group">
                      <input class = "btn btn-success" type="submit" name="sliderduzenle" value="Slider Kaydet">
                    </div>

                    <div class="form-group">

                            <div class="fileupload fileupload-new" data-provides="fileupload" >

                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>

                    </div>


                    <div class="form-group">
                      <label>Slider Başlığı Giriniz: </label>

                      <input class="form-control" type="text" name="slider_baslik" value="<?php echo $sliderduzenle['slider_baslik']; ?>">
                </div>

                <div class="form-group">
                  <label>Slider Urlsi Giriniz: </label>

                  <input class="form-control" type="text" name="slider_resim_url" value="<?php echo $sliderduzenle['slider_resim_url']; ?>">
            </div>

            <div class="form-group">
              <label>Slider Sırasını Giriniz: </label>

              <input class="form-control" type="text" name="slider_sira" value="<?php echo $sliderduzenle['slider_sira']; ?>" >
        </div>

                </div>
                </div>



                  </div>


                  <div class="form-group col-lg-8">
                      <label>Slider İçeriği: </label>
                      <textarea name="slider_icerik" class = "ckeditor"> <?php echo $sliderduzenle['slider_icerik']; ?> </textarea>


                  </div>







                </form>

                <!-- /. ROW  -->
  </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
