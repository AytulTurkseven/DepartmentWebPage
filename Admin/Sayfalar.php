<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>






                <div class = "col-lg-12">



                  <div class = "form-group">
                  <a href="sayfaekle.php"><button class = "btn btn-success" type="submit">Ders Ekle</button></a>
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
                            <th>Sayfa Başlığı</th>



                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $sayfasor=mysql_query("select * from Sayfalar");
                          while($sayfaduzenle=mysql_fetch_assoc($sayfasor)) {?>

                            <tr>
                              <td> <?php echo $sayfaduzenle['id']; ?> </td>
                              <td> <?php echo $sayfaduzenle['baslik']; ?> </td>





                              <td><a href="Sayfaduzenle.php?id=<?php echo $sayfaduzenle['id']; ?>&sayfaguncel=ok">
                                <button class = "btn btn-primary" name="sayfaguncel" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?id=<?php echo $sayfaduzenle['id']; ?>&sayfasil=ok">
                                <button class = "btn btn-danger" name="sayfasil" type="submit">Sil</button></a></td>



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
