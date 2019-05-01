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

                                      <input class="form-control" type="text" name="idaripersonelbaslik_baslik" value="<?php echo $idaripersonelbaslikduzenle['idaripersonelbaslik_baslik']; ?>">
                                  </div>

                                    <div class = "form-group">
                                    <input class = "btn btn-success" type="submit" name="idaripersonelbaslikekle" value="Değişiklikleri Kaydet">

                                </div>

                              </form>
                  <div class = "form-group">
                  <a href="IdariPersonelEkle.php"><input class = "btn btn-success" type="submit" name="idaripersonelekle" value="Eğitmen Ekle"></a>
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

                          $idaripersonelsor=mysql_query("select * from Idaripersonel");
                          while($idaripersonelduzenle=mysql_fetch_assoc($idaripersonelsor)) {?>

                            <tr>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_id']; ?> </td>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_kisi']; ?> </td>
                              <td>
                                <img style = "width:250px;" src="Uploads/<?php echo $idaripersonelduzenle['idaripersonel_resim']; ?>">

                              </td>


                              <td> <?php echo $idaripersonelduzenle['idaripersonel_anabilim']; ?> </td>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_oda']; ?> </td>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_mail']; ?> </td>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_telefon']; ?> </td>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_arastirma']; ?> </td>
                              <td> <?php echo $idaripersonelduzenle['idaripersonel_sira']; ?> </td>

                              <td><a href="IdariPersonelResimGuncelle.php?idaripersonel_id=<?php echo $idaripersonelduzenle['idaripersonel_id'];?>&idaripersonelsil=ok">
                                <button class = "btn btn-default" name="idaripersonelresimguncelle" type="submit">Resim Düzenle</button></a></td>

                              <td><a href="IdariPersonelGuncelle.php?idaripersonel_id=<?php echo $idaripersonelduzenle['idaripersonel_id'];?>&idaripersonelsil=ok">
                                <button class = "btn btn-primary" name="idaripersonelguncelle" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?idaripersonel_id=<?php echo $idaripersonelduzenle['idaripersonel_id'];?>&idaripersonelsil=ok">
                                <button class = "btn btn-danger" name="idaripersonelsil" type="submit">Sil</button></a></td>

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

                  </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
