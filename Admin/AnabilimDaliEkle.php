<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>










                <form action = "includes/islem.php" enctype ="multipart/form-data" method ="POST">
                <div class = "col-lg-6">
                  <div class="form-group">


                    <div class = "col-lg-12">





                      <div class = "form-group">
                      <input class = "btn btn-success" type="submit" name="anabilimdallariicerikekle" value="Eğitmen Ekle">
                    </div>

                    <div class="form-group">

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-danger">
                                    <span class="fileupload-new">Resim Seçiniz</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="anabilimdallariicerikgorsel">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>

                    </div>



                <div class="form-group">
                  <label>Tablo Seç(1=Bilgisayar Yazilim 2=Bilgisayar Donanım 3=Bilgisayar Bilimleri): </label>

                  <input class="form-control" type="number" name="anabilimdallariicerik_sec">
            </div>

                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="anabilimdallariicerik_kisi">
                </div>

                <div class="form-group">
                  <label>Sıra Giriniz: </label>

                  <input class="form-control" type="number" name="anabilimdallariicerik_sira">
            </div>
                  <label>Ana Bilim Dalı: </label>

                  <input class="form-control" type="text" name="anabilimdallariicerik_anabilim">
            </div>

            <div class="form-group">
              <label>Oda Numarası: </label>

              <input class="form-control" type="text" name="anabilimdallariicerik_oda">
        </div>


        <div class="form-group">
          <label>Eposta Adresi: </label>

          <input class="form-control" type="text" name="anabilimdallariicerik_mail">
    </div>



    <div class="form-group">
      <label>Telefon Numarası: </label>

      <input class="form-control" type="text" name="anabilimdallariicerik_telefon">
</div>




                </div>
                </div>

                <div class="form-group col-lg-8">
                    <label>Diğer Bilgiler: </label>
                    <textarea name="anabilimdallariicerik_diger" class = "ckeditor"> </textarea>


                </div>


                <div class="form-group col-lg-8">
                    <label>Araştırma Alanları: </label>
                    <textarea name="anabilimdallariicerik_arastirma" class = "ckeditor"> </textarea>


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
