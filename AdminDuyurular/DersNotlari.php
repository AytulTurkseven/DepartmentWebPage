<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>






                <div class = "col-lg-12">
                  <div class = "form-group">
                  <a href="DersNotlariEkle.php"><button class = "btn btn-success" type="submit">Duyuru Ekle</button></a>
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

                          $dersnotlarisor=mysql_query("select * from Dersnotlari");
                          while($dersnotlariduzenle=mysql_fetch_assoc($dersnotlarisor)) {?>

                            <tr>
                              <td> <?php echo $dersnotlariduzenle['dersnotlari_id']; ?> </td>
                              <td> <?php echo $dersnotlariduzenle['dersnotlari_kisi']; ?> </td>
                              <td> <?php echo $dersnotlariduzenle['dersnotlari_baslik']; ?> </td>
                              <td> <?php echo $dersnotlariduzenle['dersnotlari_icerik']; ?> </td>


                              <td><a href="DersNotlariDuzenle.php?dersnotlari_id=<?php echo $dersnotlariduzenle['dersnotlari_id'];?>&dersnotlariguncel=ok">
                                <button class = "btn btn-primary" name="dersnotlariguncel" type="submit">Düzenle</button></a></td>


                              <td><a href="includes/islem.php?dersnotlari_id=<?php echo $dersnotlariduzenle['dersnotlari_id'];?>&dersnotlarisil=ok">
                                <button class = "btn btn-danger" name="dersnotlarisil" type="submit">Sil</button></a></td>

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
