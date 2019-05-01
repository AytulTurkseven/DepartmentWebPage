<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





                    <div class = "col-lg-12">
                      <div class = "form-group">
                      <a href="AnabilimDaliEkle.php"><input class = "btn btn-success" type="submit" name="anabilimdaliekle" value="Eğitmen Ekle"></a>
                    </div>
                    </div>



                <div class = "col-lg-6">
                  <div class="form-group">
                      <label>Sayfa Başlığı Giriniz: </label>

                      <input class="form-control" type="text" name="anabilimdallari_baslik" value="<?php echo $anabilimdallariduzenle['anabilimdallari_baslik']; ?>">
                  </div>
                  </div>


                <div class = "col-lg-12">
                  <div class = "form-group">
                  <input class = "btn btn-success" type="submit" name="anabilimkaydet" value="Değişiklikleri Kaydet">
                </div>
              </div>





              <div class = "col-lg-12">
                <div class = "panel panel-default">
                  <div class = "panel-heading">
                    Ekli Olan Sliderlar
                  </div>
                  <div class = "panel-body">
                  <div class = "table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tablo Adı</th>
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

                        $anabilimdaliceriksor=mysql_query("select * from Anabilimdallaricerik");
                        while($anabilimdalicerikduzenle=mysql_fetch_assoc($anabilimdaliceriksor)){ ?>

                          <tr>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_id']; ?> </td>
                            <td> <?php if($anabilimdalicerikduzenle['anabilimdallariicerik_sec']==1)
                            echo "Bilgisayar Yazilim";
                            if($anabilimdalicerikduzenle['anabilimdallariicerik_sec']==2)
                            echo "Bilgisayar Donanim";
                            if($anabilimdalicerikduzenle['anabilimdallariicerik_sec']==3)
                            echo "Bilgisayar Bilimleri"; ?> </td>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_kisi']; ?> </td>
                            <td>
                              <img style = "width:250px;" src="Uploads/<?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_resim']; ?>">

                            </td>


                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_anabilim']; ?> </td>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_oda']; ?> </td>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_mail']; ?> </td>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_telefon']; ?> </td>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_arastirma']; ?> </td>
                            <td> <?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_sira']; ?> </td>

                            <td><a href="Anabilimdallariresim.php?anabilimdallariicerik_id=<?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_id'];?>&anabilimdaliceriksil=ok">
                              <button class = "btn btn-default" name="anabilimdalicerikresimguncelle" type="submit">Resim Düzenle</button></a></td>

                            <td><a href="AnabilimDaliGuncelle.php?anabilimdallariicerik_id=<?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_id'];?>&anabilimdalicerikguncelle=ok">
                              <button class = "btn btn-primary" name="anabilimdalicerikguncelle" type="submit">Düzenle</button></a></td>


                              <td><a href="includes/islem.php?anabilimdallariicerik_id=<?php echo $anabilimdalicerikduzenle['anabilimdallariicerik_id'];?>&anabilimdallariceriksil=ok">
                                <button class = "btn btn-danger" name="anabilimdallariceriksil" type="submit">Sil</button></a></td>

                          </tr>
                      <?php  } ?>

                    </tbody>
                  </table>


                </div>
              </div>
            </div>
          </div>





                <!-- /. ROW  -->
              </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
