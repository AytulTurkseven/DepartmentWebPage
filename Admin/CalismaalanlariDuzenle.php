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
                      <label>Sayfa Başlığı Giriniz: </label>

                      <input class="form-control" type="text" name="Calismaalanlari_baslik" value="<?php echo $calismaalanlariduzenle['Calismaalanlari_baslik']; ?>">
                  </div>
                  </div>

                  <div class="form-group col-lg-8">
                      <label>Sayfa İçeriği: </label>
                      <textarea name="Calismaalanlari_icerik" class = "ckeditor"> <?php echo $calismaalanlariduzenle['Calismaalanlari_icerik']; ?> </textarea>


                  </div>

                <div class = "col-lg-12">
                  <div class = "form-group">
                  <input class = "btn btn-success" type="submit" name="calismaalanlarikaydet" value="Değişiklikleri Kaydet">
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
