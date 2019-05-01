<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">


                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="haberveetkinlik_kisi">
                  </div>
                  <label>Duyuru Başlığı: </label>

                  <input class="form-control" type="text" name="haberveetkinlik_baslik">
              </div>
              <div class="form-group col-lg-8">
                  <label>Duyuru İçeriği: </label>
                  <textarea name="haberveetkinlik_icerik" class = "ckeditor"> </textarea>


              </div>

              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="haberveetkinlikekle" value="Duyuru Ekle">
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
