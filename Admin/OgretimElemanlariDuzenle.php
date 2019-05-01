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

                                      <input class="form-control" type="text" name="ogretimelemanlaribaslik_baslik" value="<?php echo $ogretimelemanlaribaslikduzenle['ogretimelemanlaribaslik_baslik']; ?>">
                                  </div>

                                    <div class = "form-group">
                                    <input class = "btn btn-success" type="submit" name="ogretimelemanlaribaslikekle" value="Değişiklikleri Kaydet">

                                </div>

                              </form>
                  <div class = "form-group">
                  <a href="OgretimElemanlariEkle.php"><input class = "btn btn-success" type="submit" name="ogretimelemanlariekle" value="Eğitmen Ekle"></a>
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

                          $ogretimelemanlarisor=mysql_query("select * from Ogretimelemanlari");
                          while($ogretimelemanlariduzenle=mysql_fetch_assoc($ogretimelemanlarisor)) {?>

                            <tr>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_id']; ?> </td>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_kisi']; ?> </td>
                              <td>
                                <img style = "width:250px;" src="Uploads/<?php echo $ogretimelemanlariduzenle['ogretimelemanlari_resim']; ?>">

                              </td>


                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_anabilim']; ?> </td>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_oda']; ?> </td>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_mail']; ?> </td>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_telefon']; ?> </td>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_arastirma']; ?> </td>
                              <td> <?php echo $ogretimelemanlariduzenle['ogretimelemanlari_sira']; ?> </td>

                              <td><a href="OgretimElemanlariResimGuncelle.php?ogretimelemanlari_id=<?php echo $ogretimelemanlariduzenle['ogretimelemanlari_id'];?>&ogretimelemanlarisil=ok">
                                <button class = "btn btn-default" name="ogretimelemanlariresimguncelle" type="submit">Resim Düzenle</button></a></td>

                              <td><a href="OgretimElemanlariGuncelle.php?ogretimelemanlari_id=<?php echo $ogretimelemanlariduzenle['ogretimelemanlari_id'];?>&ogretimelemanlarisil=ok">
                                <button class = "btn btn-primary" name="ogretimelemanlariguncelle" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?ogretimelemanlari_id=<?php echo $ogretimelemanlariduzenle['ogretimelemanlari_id'];?>&ogretimelemanlarisil=ok">
                                <button class = "btn btn-danger" name="ogretimelemanlarisil" type="submit">Sil</button></a></td>

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
