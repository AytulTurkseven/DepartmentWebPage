<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>






                <div class = "col-lg-12">
                  <div class = "form-group">
                  <a href="SliderEkle.php"><button class = "btn btn-success" type="submit">Slider Ekle</button></a>
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
                            <th style="width:400px;">Slider Adı</th>
                            <th>Slider Resmi</th>
                            <th>Slider Sıra</th>
                            <th style="width:20px"></th>
                            <th style="width:20px"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $slidersor=mysql_query("select * from Slider");
                          while($sliderduzenle=mysql_fetch_assoc($slidersor)) {?>

                            <tr>
                              <td> <?php echo $sliderduzenle['slider_id']; ?> </td>
                              <td> <?php echo $sliderduzenle['slider_baslik']; ?> </td>
                              <td>
                                <img style = "width:250px;" src="Uploads/<?php echo $sliderduzenle['slider_resim_yol']; ?>">

                              </td>


                              <td><?php echo $sliderduzenle['slider_sira'];?></td>

                              <td><a href="SliderResimDuzenle.php?slider_id=<?php echo $sliderduzenle['slider_id'];?>&sliderduzenle=ok">
                                <button class = "btn btn-primary" name="sliderresimduzenle" type="submit">Resim Düzenle</button></a></td>

                              <td><a href="SliderDuzenle.php?slider_id=<?php echo $sliderduzenle['slider_id'];?>&sliderduzenle=ok">
                                <button class = "btn btn-primary" name="sliderduzenle" type="submit">Düzenle</button></a></td>

                              <td><a href="includes/islem.php?slider_id=<?php echo $sliderduzenle['slider_id'];?>&slidersil=ok">
                                <button class = "btn btn-danger" name="slidersil" type="submit">Sil</button></a></td>

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
