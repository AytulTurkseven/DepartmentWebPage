<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>

<?php

$haberveetkinlik_id=$_GET['haberveetkinlik_id'];
$haberveetkinliksorr = mysql_query("select * from Haberveetkinlik where haberveetkinlik_id='$haberveetkinlik_id'");
$haberveetkinlikguncel=mysql_fetch_assoc($haberveetkinliksorr);




?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">
                    <input class="form-control" type="hidden" name="haberveetkinlik_id" value="<?php echo $haberveetkinlikguncel['haberveetkinlik_id']?>">

                    <div class="form-group">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="haberveetkinlik_kisi" value="<?php echo $haberveetkinlikguncel['haberveetkinlik_kisi']?>">
                  </div>
                  <label>Duyuru Başlığı: </label>

                  <input class="form-control" type="text" name="haberveetkinlik_baslik" value="<?php echo $haberveetkinlikguncel['haberveetkinlik_baslik']?>">
              </div>
              <div class="form-group col-lg-8">
                  <label>Duyuru İçeriği: </label>
                  <textarea name="haberveetkinlik_icerik" class = "ckeditor"><?php echo $haberveetkinlikguncel['haberveetkinlik_icerik']?> </textarea>


              </div>

              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="haberveetkinlikguncel" value="Duyuru Ekle">
              </div>
            </div>



              </div>
            </div>















                </form>

                <!-- /. ROW  -->
</div>
            <!-- /. PAGE INNER  -->

        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include("includes/footer.php");?>
