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

                        <td>      <span class="btn btn-file btn-danger">
                                  <span class="fileupload-new" >Resim Değiştir</span>
                                  <span class="fileupload-exists">Değiştir</span>
                                  <input type="file" name="slidergorsel" >
                                </span> </td>

                      <input class = "btn btn-success" type="submit" name="resimduzenle" value="Slider Kaydet">
                    </div>

                    <div class="form-group">

                            <div class="fileupload fileupload-new" data-provides="fileupload" >

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
