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

                                      <input class="form-control" type="text" name="yukseklisansdersbaslik_baslik" value="<?php echo $yukseklisansdersbaslikduzenle['yukseklisansdersbaslik_baslik']; ?>">
                                  </div>




                                    <div class = "form-group">
                                    <input class = "btn btn-success" type="submit" name="yukseklisansdersbaslikekle" value="Değişiklikleri Kaydet">

                                </div>

                              </form>
                  <div class = "form-group">
                  <a href="YuksekLisansDersEkle.php"><button class = "btn btn-success" type="submit">Ders Ekle</button></a>
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
                            <th>Ders Adı</th>
                            <th>Ders İçeriği</th>


                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $yukseklisansderssor=mysql_query("select * from Yukseklisansders");
                          while($yukseklisansdersduzenle=mysql_fetch_assoc($yukseklisansderssor)) {?>

                            <tr>
                              <td> <?php echo $yukseklisansdersduzenle['yukseklisansders_id']; ?> </td>
                              <td> <?php echo $yukseklisansdersduzenle['yukseklisansders_ad']; ?> </td>
                              <td> <?php echo $yukseklisansdersduzenle['yukseklisansders_icerik']; ?> </td>




                              <td><a href="YuksekLisansDersDuzenle.php?yukseklisansders_id=<?php echo $yukseklisansdersduzenle['yukseklisansders_id'];?>&yukseklisansdersguncel=ok">
                                <button class = "btn btn-primary" name="yukseklisansdersguncel" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?yukseklisansders_id=<?php echo $yukseklisansdersduzenle['yukseklisansders_id'];?>&yukseklisansderssil=ok">
                                <button class = "btn btn-danger" name="yukseklisansderssil" type="submit">Sil</button></a></td>



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
