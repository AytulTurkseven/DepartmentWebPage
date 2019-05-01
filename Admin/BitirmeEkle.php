<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-12">




                  </div>

                  <div class="form-group col-lg-5">
                    <label>Sıra Giriniz: </label>

                    <input class="form-control" type="number" name="bitirmetabloicerik_sira">
                  </div>

                    <div class="form-group col-lg-5">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="bitirmetabloicerik_kisi">
                  </div>






                            <div class="form-group col-lg-7">
                                <label>Proje Tabloları </label>
                                <textarea name="bitirmetabloicerik_icerik" class = "ckeditor"> </textarea>


                            </div>










              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="projeekle" value="Ekle">
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
