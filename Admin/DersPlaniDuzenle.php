<?php include("includes/header.php");

include("includes/sidebar.php");


$dersplani_id=$_GET['dersplani_id'];
$dersplanisorr = mysql_query("select * from Dersplani where dersplani_id='$dersplani_id'");
$dersplaniguncel=mysql_fetch_assoc($dersplanisorr);




?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-12">
  <input class="form-control" type="hidden" name="dersplani_id" value="<?php echo $dersplaniguncel['dersplani_id']?>">

                  <div class="form-group col-lg-2">
                                  <label>Yarıyılı Seçiniz: </label>
                                  <input class="form-control" type="number" name="dersplani_yariyilbaslik"  value="<?php echo $dersplaniguncel['dersplani_yariyilbaslik'];?>">
                              </div>


                    <div class="form-group col-lg-5">
                      <label>Dersin Kodunu Giriniz: </label>

                      <input class="form-control" type="text" name="dersplani_kod"  value="<?php echo $dersplaniguncel['dersplani_kod'];?>">
                  </div>
                  <div class="form-group col-lg-5">
                  <label>Ders Adı Giriniz: </label>

                  <input class="form-control" type="text" name="dersplani_ad" value="<?php echo $dersplaniguncel['dersplani_ad'];?>">
              </div>
            </div>

                <div class = "col-lg-12">

              <div class="form-group col-lg-3">
                              <label>Zor/Seç: </label>
                                <input class="form-control" type="text" name="dersplani_tur" value="<?php echo $dersplaniguncel['dersplani_tur'];?>">
                          </div>

                          <div class="form-group col-lg-3">
                                          <label>Dil: </label>
                                          <input class="form-control" type="text" name="dersplani_dil" value="<?php echo $dersplaniguncel['dersplani_dil'];?>">
                                      </div>


                                      <div class="form-group col-lg-2">
                                        <label>Teori: </label>

                                        <input class="form-control" type="number" name="dersplani_t" value="<?php echo $dersplaniguncel['dersplani_t'];?>">
                                    </div>


                                    <div class="form-group col-lg-2">
                                      <label>Laboratuvar: </label>

                                      <input class="form-control" type="number" name="dersplani_l" value="<?php echo $dersplaniguncel['dersplani_l'];?>">
                                  </div>


                                  <div class="form-group col-lg-2">
                                    <label>Uygulama: </label>

                                    <input class="form-control" type="number" name="dersplani_u" value="<?php echo $dersplaniguncel['dersplani_u'];?>">
                                </div>
                              </div>

                              <div class = "col-lg-12">

                                <div class="form-group col-lg-3">
                                  <label>Ders Saati: </label>

                                  <input class="form-control" type="number" name="dersplani_saat" value="<?php echo $dersplaniguncel['dersplani_saat'];?>">
                              </div>

                              <div class="form-group col-lg-3">
                                <label>AKTS: </label>

                                <input class="form-control" type="number" name="dersplani_akts" value="<?php echo $dersplaniguncel['dersplani_akts'];?>">
                            </div>

                            </div>

                            <div class="form-group col-lg-6">
                                <label>Ders Bilgisi İçeriği: </label>
                                <textarea name="dersplani_icerik" class = "ckeditor"><?php echo $dersplaniguncel['dersplani_icerik'];?></textarea>


                            </div>








              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="dersplaniguncel" value="Ders Bilgisini Düzenle">
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
