<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $yonetimbaslikduzenle['yonetimbaslik_baslik']; ?></h2>
                  <div class="icerik">

                <?php
                $yonetimsor=mysql_query("select * from Yonetim  order by yonetim_sira ASC");
                while($yonetimduzenle=mysql_fetch_assoc($yonetimsor)) {?>
                    <div class="col-lg-3">

                    <div class="span3 well">
    <center>
    <a href="#aboutModal" data-toggle="modal" data-target="#myModal<?php echo $yonetimduzenle['yonetim_id']?>"><img src="Admin/Uploads/<?php echo $yonetimduzenle['yonetim_resim']?>" name="aboutme" width="180" height="140" class="img-circle"></a>
    <h4><?php echo $yonetimduzenle['yonetim_kisi']?></h4>
    <em><?php echo $yonetimduzenle['yonetim_pozisyon']?></em>
</center>
</div>
</div>

<?php } ?>
<?php
$yonetimsor=mysql_query("select * from Yonetim  order by yonetim_id DESC");
while($yonetimduzenle=mysql_fetch_assoc($yonetimsor)) {?>

<div class="modal fade" id="myModal<?php echo $yonetimduzenle['yonetim_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $yonetimduzenle['yonetim_kisi']?>Hakkında</h4>
                </div>
            <div class="modal-body">
                <center>
                <img src="Admin/Uploads/<?php echo $yonetimduzenle['yonetim_resim']?>" name="aboutme" width="180" height="140" border="0" class="img-circle"></a>
                <h3 class="media-heading"><?php echo $yonetimduzenle['yonetim_kisi']?></h3>
                <div class = "kisiseliletisim">
                <p><strong>Ana Bilim Dalı:</strong> <?php echo $yonetimduzenle['yonetim_anabilim']?></p>
                <p><strong>Oda No:</strong><?php echo $yonetimduzenle['yonetim_oda']?></p>

                    <p><i class="fa fa-envelope-o"></i>
                        <abbr title="Email"></abbr>: <?php echo $yonetimduzenle['yonetim_mail']?>
                    </p>

                    <p><i class="fa fa-phone"></i>
                        <abbr title="Phone"></abbr>: <?php echo $yonetimduzenle['yonetim_telefon']?></p>
                      </div>
                </center>
                <hr>
                <center>
                <p class="text-left"><strong>Araştırma Alanları: </strong><br>
                <?php echo $yonetimduzenle['yonetim_arastirma']?></p>

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

<?php } ?>














                  </div>

              </div>



</div>
<div class="page-header"></div>
</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
