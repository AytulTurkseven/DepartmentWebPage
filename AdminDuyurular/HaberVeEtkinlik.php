<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>






                <div class = "col-lg-12">
                  <div class = "form-group">
                  <a href="HaberVeEtkinlikEkle.php"><button class = "btn btn-success"  type="submit">Duyuru Ekle</button></a>
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
                            <th>Duyuru Başlığı</th>
                            <th>Duyuru İçeriği</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $haberveetkinliksor=mysql_query("select * from Haberveetkinlik");
                          while($haberveetkinlikduzenle=mysql_fetch_assoc($haberveetkinliksor)) {?>

                            <tr>
                              <td> <?php echo $haberveetkinlikduzenle['haberveetkinlik_id']; ?> </td>
                              <td> <?php echo $haberveetkinlikduzenle['haberveetkinlik_kisi']; ?> </td>
                              <td> <?php echo $haberveetkinlikduzenle['haberveetkinlik_baslik']; ?> </td>
                              <td> <?php echo $haberveetkinlikduzenle['haberveetkinlik_icerik']; ?> </td>


                              <td><a href="HaberVeEtkinlikDuzenle.php?haberveetkinlik_id=<?php echo $haberveetkinlikduzenle['haberveetkinlik_id'];?>&haberveetkinlikguncel=ok">
                                <button class = "btn btn-primary" name="haberveetkinlikguncel" type="submit">Düzenle</button></a></td>


                              <td><a href="includes/islem.php?haberveetkinlik_id=<?php echo $haberveetkinlikduzenle['haberveetkinlik_id'];?>&haberveetkinliksil=ok">
                                <button class = "btn btn-danger" name="haberveetkinliksil" type="submit">Sil</button></a></td>

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
