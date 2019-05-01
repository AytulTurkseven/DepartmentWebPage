<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header">Bölüm Duyuruları</h2>
                  <div class="icerik">

                    <?php

                    $bolumduyurularsor=mysql_query("select * from BolumDuyurular order by bolum_id DESC ");
                    while($bolumduyurularduzenle=mysql_fetch_assoc($bolumduyurularsor)) {?>
                    <div class="col-md-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading" >
            <a target="_self" href="#">
                        <img src="/YazLab/img/kocaeli-universitesi.png"  style='width:50%;' > </br> </br>  </a>
    <div class="calendar-haber" >
                <span class="s-month"><?php echo $bolumduyurularduzenle['bolum_tarih']; ?></span>
                          </div>


            </div>
              <div class="panel-body" style="height:175px;">
                  <h4><?php echo $bolumduyurularduzenle['bolum_kisi']; ?></h4>
                  <p><?php echo $bolumduyurularduzenle['bolum_baslik']; ?></p>

              </div>
              <div class="butonkonum" style="margin-bottom:15px;">

                      <a href="#aboutModal" data-toggle="modal"  data-target="#myModalbolum<?php echo $bolumduyurularduzenle['bolum_id']; ?>" class="btn btn-primary">Devamını Oku</a>
                  <div class="modal fade" id="myModalbolum<?php echo $bolumduyurularduzenle['bolum_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                  <h4 class="modal-title" id="myModalLabel"><?php echo $bolumduyurularduzenle['bolum_baslik']; ?></h4>
                                  </div>
                              <div class="modal-body">
                                  <center>

                                  <hr>
                                  <center>
                                  <p class="text-left"><?php echo $bolumduyurularduzenle['bolum_icerik']; ?> </p>

                                  </center>

                              </div>
                              <div class="modal-footer">
                                  <center>
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Kapat</button>
                                  </center>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

              </div>
              </div>
              <?php } ?>

</div>




                  </div>

              </div>
        <div class="page-header"></div>


</div>




<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
