<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>




  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-12">


                  <div class="form-group col-lg-2">
                                  <label>Yarıyılı Seçiniz: </label>
                                <input class="form-control" type="number" name="dersplani_yariyilbaslik">
                              </div>


                    <div class="form-group col-lg-5">
                      <label>Dersin Kodunu Giriniz: </label>

                      <input class="form-control" type="text" name="dersplani_kod">
                  </div>
                  <div class="form-group col-lg-5">
                  <label>Ders Adı Giriniz: </label>

                  <input class="form-control" type="text" name="dersplani_ad">
              </div>
            </div>

                <div class = "col-lg-12">

              <div class="form-group col-lg-3">
                              <label>Zor/Seç: </label>
                              <input class="form-control" type="text" name="dersplani_tur">
                          </div>

                          <div class="form-group col-lg-3">
                                          <label>Dil: </label>
                                          <input class="form-control" type="text" name="dersplani_dil">
                                      </div>


                                      <div class="form-group col-lg-2">
                                        <label>Teori: </label>

                                        <input class="form-control" type="number" name="dersplani_t">
                                    </div>


                                    <div class="form-group col-lg-2">
                                      <label>Laboratuvar: </label>

                                      <input class="form-control" type="number" name="dersplani_l">
                                  </div>


                                  <div class="form-group col-lg-2">
                                    <label>Uygulama: </label>

                                    <input class="form-control" type="number" name="dersplani_u">
                                </div>
                              </div>

                              <div class = "col-lg-12">

                                <div class="form-group col-lg-3">
                                  <label>Ders Saati: </label>

                                  <input class="form-control" type="number" name="dersplani_saat">
                              </div>

                              <div class="form-group col-lg-3">
                                <label>AKTS: </label>

                                <input class="form-control" type="number" name="dersplani_akts">
                            </div>

                            </div>

                            <div class="form-group col-lg-6">
                                <label>Ders Bilgisi İçeriği: </label>
                                <textarea name="dersplani_icerik" class = "ckeditor"> </textarea>


                            </div>








              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="dersplaniekle" value="Ders Bilgisini Ekle">
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
