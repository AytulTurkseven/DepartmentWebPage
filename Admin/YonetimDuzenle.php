<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





                <div class = "col-lg-12">
                  <div class = "form-group">
      <form action = "includes/islem.php" method ="POST">

                      <div class="form-group">
                          <label>Sayfa Başlığı Giriniz: </label>

                          <input class="form-control" type="text" name="yonetimbaslik_baslik" value="<?php echo $yonetimbaslikduzenle['yonetimbaslik_baslik']; ?>">
                      </div>

                        <div class = "form-group">
                        <input class = "btn btn-success" type="submit" name="yonetimbaslikekle" value="Değişiklikleri Kaydet">

                    </div>

                  </form>

                  <a href="YonetimEkle.php"><input class = "btn btn-success" type="submit" name="yonetimekle" value="Eğitmen Ekle"></a>
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
                            <th>Pozisyon</th>
                            <th>Sıra</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $yonetimsor=mysql_query("select * from Yonetim");
                          while($yonetimduzenle=mysql_fetch_assoc($yonetimsor)) {?>

                            <tr>
                              <td> <?php echo $yonetimduzenle['yonetim_id']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_kisi']; ?> </td>
                              <td>
                                <img style = "width:250px;" src="Uploads/<?php echo $yonetimduzenle['yonetim_resim']; ?>">

                              </td>


                              <td> <?php echo $yonetimduzenle['yonetim_anabilim']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_oda']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_mail']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_telefon']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_arastirma']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_pozisyon']; ?> </td>
                              <td> <?php echo $yonetimduzenle['yonetim_sira']; ?> </td>

                              <td><a href="YonetimResimGuncelle.php?yonetim_id=<?php echo $yonetimduzenle['yonetim_id'];?>&yonetimsil=ok">
                                <button class = "btn btn-default" name="yonetimresimguncelle" type="submit">Resim Düzenle</button></a></td>

                              <td><a href="YonetimGuncelle.php?yonetim_id=<?php echo $yonetimduzenle['yonetim_id'];?>&yonetimsil=ok">
                                <button class = "btn btn-primary" name="yonetimguncelle" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?yonetim_id=<?php echo $yonetimduzenle['yonetim_id'];?>&yonetimsil=ok">
                                <button class = "btn btn-danger" name="yonetimsil" type="submit">Sil</button></a></td>

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
