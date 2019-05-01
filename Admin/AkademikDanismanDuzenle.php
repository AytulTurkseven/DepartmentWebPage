<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





                <div class = "col-lg-12">

                  <form action = "includes/islem.php" method ="POST">

                                  <div class="form-group">
                                      <label>Sayfa Başlığı Giriniz: </label>

                                      <input class="form-control" type="text" name="akademikdanismanbaslik_baslik" value="<?php echo $akademikdanismanbaslikduzenle['akademikdanismanbaslik_baslik']; ?>">
                                  </div>

                                  <div class="form-group">
                                      <label>Sayfa Alt Başlığı Giriniz: </label>

                                      <input class="form-control" type="text" name="akademikdanismanbaslik_altbaslik" value="<?php echo $akademikdanismanbaslikduzenle['akademikdanismanbaslik_altbaslik']; ?>">
                                  </div>


                                    <div class = "form-group">
                                    <input class = "btn btn-success" type="submit" name="akademikdanismanbaslikekle" value="Değişiklikleri Kaydet">

                                </div>

                              </form>
                  <div class = "form-group">
                  <a href="AkademikDanismanEkle.php"><input class = "btn btn-success" type="submit" name="akademikdanismanekle" value="Danışman Kayıt Ekle"></a>
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
                            <th>Sınıf</th>
                            <th>Akademik Danışmanlar</th>
                            <th>Kayıt Danışmanları</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $akademikdanismansor=mysql_query("select * from Akademikdanisman");
                          while($akademikdanismanduzenle=mysql_fetch_assoc($akademikdanismansor)) {?>

                            <tr>
                              <td> <?php echo $akademikdanismanduzenle['akademikdanisman_id']; ?> </td>
                                <td> <?php echo $akademikdanismanduzenle['akademikdanisman_sinif']; ?> </td>
                              <td> <?php echo $akademikdanismanduzenle['akademikdanisman_akademik']; ?> </td>
                              <td> <?php echo $akademikdanismanduzenle['akademikdanisman_kayit']; ?> </td>

                              <td><a href="AkademikDanismanGuncelle.php?akademikdanisman_id=<?php echo $akademikdanismanduzenle['akademikdanisman_id'];?>&akademikdanismanguncel=ok">
                                <button class = "btn btn-primary" name="akademikdanismanguncel" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?akademikdanisman_id=<?php echo $akademikdanismanduzenle['akademikdanisman_id'];?>&akademikdanismansil=ok">
                                <button class = "btn btn-danger" name="akademikdanismansil" type="submit">Sil</button></a></td>

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
