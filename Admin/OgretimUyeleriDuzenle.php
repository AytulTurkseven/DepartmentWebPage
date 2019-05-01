<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>

                    <form action = "includes/islem.php" method ="POST">

                                    <div class="form-group">
                                        <label>Sayfa Başlığı Giriniz: </label>

                                        <input class="form-control" type="text" name="ogretimuyeleribaslik_baslik" value="<?php echo $ogretimuyeleribaslikduzenle['ogretimuyeleribaslik_baslik']; ?>">
                                    </div>

                                      <div class = "form-group">
                                      <input class = "btn btn-success" type="submit" name="ogretimuyeleribaslikekle" value="Değişiklikleri Kaydet">

                                  </div>

                                </form>



                <div class = "col-lg-12">
                  <div class = "form-group">
                  <a href="OgretimUyeleriEkle.php"><input class = "btn btn-success" type="submit" name="ogretimuyeleriekle" value="Eğitmen Ekle"></a>
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
                            <th>Eğitmen Adı</th>
                            <th>Eğitmen Resmi</th>
                            <th>Ana Bilim Dalı</th>
                            <th>Oda</th>
                            <th>Eposta</th>
                            <th>Telefon</th>
                            <th>Araştırma Alanları</th>
                            <th>Sıra</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $ogretimuyelerisor=mysql_query("select * from Ogretimuyeleri");
                          while($ogretimuyeleriduzenle=mysql_fetch_assoc($ogretimuyelerisor)) {?>

                            <tr>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_id']; ?> </td>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_kisi']; ?> </td>
                              <td>
                                <img style = "width:250px;" src="Uploads/<?php echo $ogretimuyeleriduzenle['ogretimuyeleri_resim']; ?>">

                              </td>


                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_anabilim']; ?> </td>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_oda']; ?> </td>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_mail']; ?> </td>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_telefon']; ?> </td>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_arastirma']; ?> </td>
                              <td> <?php echo $ogretimuyeleriduzenle['ogretimuyeleri_sira']; ?> </td>



                              <td><a href="OgretimUyeleriResimGuncelle.php?ogretimuyeleri_id=<?php echo $ogretimuyeleriduzenle['ogretimuyeleri_id'];?>&ogretimuyelerisil=ok">
                                <button class = "btn btn-default" name="ogretimuyeleriresimguncelle" type="submit">Resim Düzenle</button></a></td>

                              <td><a href="OgretimUyeleriGuncelle.php?ogretimuyeleri_id=<?php echo $ogretimuyeleriduzenle['ogretimuyeleri_id'];?>&ogretimuyelerisil=ok">
                                <button class = "btn btn-primary" name="ogretimuyeleriguncelle" type="submit">Düzenle</button></a></td>


                              <td><a href="includes/islem.php?ogretimuyeleri_id=<?php echo $ogretimuyeleriduzenle['ogretimuyeleri_id'];?>&ogretimuyelerisil=ok">
                                <button class = "btn btn-danger" name="ogretimuyelerisil" type="submit">Sil</button></a></td>

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
