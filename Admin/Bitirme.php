<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>






                <div class = "col-lg-12">


                  <form action = "includes/islem.php" method ="POST">
                  <div class = "col-lg-6">
                    <div class="form-group">
                        <label>Sayfa Başlığı Giriniz: </label>

                        <input class="form-control" type="text" name="bitirmebaslik_baslik" value="<?php echo $bitirmebaslikduzenle['bitirmebaslik_baslik']; ?>">
                    </div>
                    </div>

                    <div class="form-group col-lg-8">
                        <label>Sayfa İçeriği: </label>
                        <textarea name="bitirmebaslik_icerik" class = "ckeditor"> <?php echo $bitirmebaslikduzenle['bitirmebaslik_icerik']; ?> </textarea>


                    </div>

                  <div class = "col-lg-12">
                    <div class = "form-group">
                    <input class = "btn btn-success" type="submit" name="bitirmekaydet" value="Değişiklikleri Kaydet">
                  </div>
                </div>


                  </form>



                  <div class = "form-group">
                     <div class = "col-lg-12">
                  <a href="BitirmeEkle.php"><button class = "btn btn-success" type="submit">Ekle</button></a>
                  </div>
                </div>
</div>


                <div class = "col-lg-12">
                  <div class = "panel panel-default">
                    <div class = "panel-heading">
                    </div>
                    <div class = "panel-body">
                    <div class = "table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Sıra</th>
                            <th>Eğitmen adı</th>
                            <th>Projeleri</th>


                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $bitirmetabloicerikssor=mysql_query("select * from Bitirmetabloicerik");
                          while($bitirmetabloicerikduzenle=mysql_fetch_assoc($bitirmetabloicerikssor)) {?>

                            <tr>
                              <td> <?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_id']; ?> </td>
                              <td> <?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_sira']; ?> </td>
                              <td> <?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_kisi']; ?> </td>
                              <td> <?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_icerik']; ?> </td>





                              <td><a href="BitirmeDuzenle.php?bitirmetabloicerik_id=<?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_id']; ?>&bitirmedüzenle=ok">
                                <button class = "btn btn-primary" name="bitirmetabloicerikguncel" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?bitirmetabloicerik_id=<?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_id']; ?>&bitirmetabloiceriksil=ok">
                                <button class = "btn btn-danger" name="bitirmetabloiceriksil" type="submit">Sil</button></a></td>



                            </tr>
                        <?php  } ?>

                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>






                <form action = "includes/islem.php" method ="POST">








                <div class = "col-lg-6">



                  </div>



                </form>

                <!-- /. ROW  -->
  </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
