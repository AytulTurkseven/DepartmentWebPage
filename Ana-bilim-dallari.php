<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $anabilimdallariduzenle['anabilimdallari_baslik']; ?></h2>
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          BİLGİSAYAR  YAZILIM
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php
        $anabilimdallariiceriksor=mysql_query("select * from Anabilimdallaricerik  order by anabilimdallariicerik_sira ASC");
        while($anabilimdallariicerikduzenle=mysql_fetch_assoc($anabilimdallariiceriksor)) {
        if($anabilimdallariicerikduzenle['anabilimdallariicerik_sec']==1) {?>
            <div class="col-lg-3">

            <div class="span3 well">
<center>
<a href="#aboutModal" data-toggle="modal" data-target="#myModalana1<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_id']?>">
<img src="Admin/Uploads/<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_resim']?>" name="aboutme" width="180" height="140" class="img-circle"></a>
<h4><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?></h4>
<em>Hakkında</em>
</center>
</div>
</div>

<?php }} ?>
<?php
$anabilimdallariiceriksor=mysql_query("select * from Anabilimdallaricerik  order by anabilimdallariicerik_sira ASC");
while($anabilimdallariicerikduzenle=mysql_fetch_assoc($anabilimdallariiceriksor)){
if($anabilimdallariicerikduzenle['anabilimdallariicerik_sec']==1){?>

<div class="modal fade" id="myModalana1<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?> Hakkında</h4>
        </div>
    <div class="modal-body">
        <center>
        <img src="Admin/Uploads/<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_resim']?>" name="aboutme" width="180" height="140" border="0" class="img-circle"></a>
        <h3 class="media-heading"><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?></h3>
        <div class = "kisiseliletisim">
        <p><strong>Ana Bilim Dalı:</strong> <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_anabilim']?></p>
        <p><strong>Oda No:</strong><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_oda']?></p>

            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email"></abbr>: <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_mail']?>
            </p>

            <p><i class="fa fa-phone"></i>
                <abbr title="Phone"></abbr>: <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_telefon']?></p>
              </div>
        </center>
        <hr>
        <center>
        <p class="text-left"><strong>Araştırma Alanları: </strong><br>
        <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_arastirma']?></p>

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

<?php } } ?>

    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           BİLGİSAYAR  DONANIM
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php
        $anabilimdallariiceriksor=mysql_query("select * from Anabilimdallaricerik  order by anabilimdallariicerik_sira ASC");
        while($anabilimdallariicerikduzenle=mysql_fetch_assoc($anabilimdallariiceriksor)) {
        if($anabilimdallariicerikduzenle['anabilimdallariicerik_sec']==2) {?>
            <div class="col-lg-3">

            <div class="span3 well">
<center>
<a href="#aboutModal" data-toggle="modal" data-target="#myModalana2<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_id']?>">
<img src="Admin/Uploads/<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_resim']?>" name="aboutme" width="180" height="140" class="img-circle"></a>
<h4><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?></h4>
<em>Hakkında</em>
</center>
</div>
</div>

<?php }} ?>
<?php
$anabilimdallariiceriksor=mysql_query("select * from Anabilimdallaricerik  order by anabilimdallariicerik_sira ASC");
while($anabilimdallariicerikduzenle=mysql_fetch_assoc($anabilimdallariiceriksor)){
if($anabilimdallariicerikduzenle['anabilimdallariicerik_sec']==2){?>

<div class="modal fade" id="myModalana2<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?> Hakkında</h4>
        </div>
    <div class="modal-body">
        <center>
        <img src="Admin/Uploads/<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_resim']?>" name="aboutme" width="180" height="140" border="0" class="img-circle"></a>
        <h3 class="media-heading"><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?></h3>
        <div class = "kisiseliletisim">
        <p><strong>Ana Bilim Dalı:</strong> <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_anabilim']?></p>
        <p><strong>Oda No:</strong><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_oda']?></p>

            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email"></abbr>: <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_mail']?>
            </p>

            <p><i class="fa fa-phone"></i>
                <abbr title="Phone"></abbr>: <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_telefon']?></p>
              </div>
        </center>
        <hr>
        <center>
        <p class="text-left"><strong>Araştırma Alanları: </strong><br>
        <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_arastirma']?></p>

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

<?php } } ?>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          BİLGİSAYAR  BİLİMLERİ
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php
        $anabilimdallariiceriksor=mysql_query("select * from Anabilimdallaricerik  order by anabilimdallariicerik_sira ASC");
        while($anabilimdallariicerikduzenle=mysql_fetch_assoc($anabilimdallariiceriksor)) {
        if($anabilimdallariicerikduzenle['anabilimdallariicerik_sec']==3) {?>
            <div class="col-lg-3">

            <div class="span3 well">
    <center>
    <a href="#aboutModal" data-toggle="modal" data-target="#myModalana<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_id']?>">
    <img src="Admin/Uploads/<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_resim']?>" name="aboutme" width="180" height="140" class="img-circle"></a>
    <h4><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?></h4>
    <em>Hakkında</em>
    </center>
    </div>
    </div>

    <?php } }?>
    <?php
    $anabilimdallariiceriksor=mysql_query("select * from Anabilimdallaricerik  order by anabilimdallariicerik_sira ASC");
    while($anabilimdallariicerikduzenle=mysql_fetch_assoc($anabilimdallariiceriksor)){
    if($anabilimdallariicerikduzenle['anabilimdallariicerik_sec']==3){
    ?>

    <div class="modal fade" id="myModalana<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?> Hakkında</h4>
        </div>
    <div class="modal-body">
        <center>
        <img src="Admin/Uploads/<?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_resim']?>" name="aboutme" width="180" height="140" border="0" class="img-circle"></a>
        <h3 class="media-heading"><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_kisi']?></h3>
        <div class = "kisiseliletisim">
        <p><strong>Ana Bilim Dalı:</strong> <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_anabilim']?></p>
        <p><strong>Oda No:</strong><?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_oda']?></p>

            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email"></abbr>: <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_mail']?>
            </p>

            <p><i class="fa fa-phone"></i>
                <abbr title="Phone"></abbr>: <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_telefon']?></p>
              </div>
        </center>
        <hr>
        <center>
        <p class="text-left"><strong>Araştırma Alanları: </strong><br>
        <?php echo $anabilimdallariicerikduzenle['anabilimdallariicerik_arastirma']?></p>

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

    <?php } } ?>

      </div>
    </div>
  </div>
</div>
                  <div class="page-header"></div>
              </div>



</div>
</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
