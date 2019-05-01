<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-12">





                    <div class="form-group col-lg-5">
                      <label>Sınıf Giriniz: </label>

                      <input class="form-control" type="number" name="akademikdanisman_sinif">
                  </div>

            </div>




                            <div class="form-group col-lg-7">
                                <label>Akademik Danışmanları Giriniz: </label>
                                <textarea name="akademikdanisman_akademik" class = "ckeditor"> </textarea>


                            </div>

                            <div class="form-group col-lg-7">
                                <label>Kayıt Danışmanları Giriniz: </label>
                                <textarea name="akademikdanisman_kayit" class = "ckeditor"> </textarea>


                            </div>








              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="danismanekle" value="Ekle">
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
