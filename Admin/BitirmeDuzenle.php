<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


<?php

$bitirmetabloicerik_id=$_GET['bitirmetabloicerik_id'];
$bitirmetabloicerikssor = mysql_query("select * from Bitirmetabloicerik where bitirmetabloicerik_id='$bitirmetabloicerik_id'");
$bitirmetabloicerikduzenle=mysql_fetch_assoc($bitirmetabloicerikssor);




?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>





  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-12">




                  </div>
                    <input class="form-control" type="hidden" name="bitirmetabloicerik_id" value="<?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_id']?>">
                  <div class="form-group col-lg-5">
                    <label>Sıra Giriniz: </label>

                    <input class="form-control" type="number" name="bitirmetabloicerik_sira" value="<?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_sira']?>">
                  </div>

                    <div class="form-group col-lg-5">
                      <label>Eğitmen Adı: </label>

                      <input class="form-control" type="text" name="bitirmetabloicerik_kisi" value="<?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_kisi']?>">
                  </div>






                            <div class="form-group col-lg-7">
                                <label>Proje Tabloları </label>
                                <textarea name="bitirmetabloicerik_icerik" class = "ckeditor"><?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_icerik']?></textarea>


                            </div>










              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="projeduzenle" value="Kaydet">
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
