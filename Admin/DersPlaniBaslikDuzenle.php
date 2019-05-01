<?php include("includes/header.php");?>

<?php include("includes/sidebar.php");?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


                    </div>



                </div>

  <form action = "includes/islem.php" method ="POST">



                <div class = "col-lg-6">


                    <div class="form-group">
                      <label>Sayfa Başlığı Giriniz: </label>

                      <input class="form-control" type="text" name="dersplanibaslik_ana" value="<?php echo $dersplanibaslikduzenle['dersplanibaslik_ana']; ?>">
                  </div>
                  <label>Sayfanın Alt Başlığını Giriniz:</label>

                  <input class="form-control" type="text" name="dersplanibaslik_alt" value="<?php echo $dersplanibaslikduzenle['dersplanibaslik_alt']; ?>">
                  <br/><br/>
              </div>


              <div class = "col-lg-12">
                <div class = "form-group">
                <input class = "btn btn-success" type="submit" name="dersplani" value="Güncelle">
              </div>
            </div>


                </form>


              <form action = "DersPlaniEkle.php" method ="POST">

                <div class = "col-lg-12">
                  <div class = "form-group">
                  <input class = "btn btn-danger" type="submit" name="dersplaniekle" value="Ders Plani Bilgisi Eklemek İçin Tıklayınız">
                </div>





              </div>




                </form><!-- /. ROW  -->

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
                            <th>Yarıyıl</th>
                            <th>Ders Kodu</th>
                            <th>Ders Adı</th>
                            <th>Zor/Seç</th>
                            <th>Ders Dili</th>
                            <th>T</th>
                            <th>L</th>
                            <th>U</th>
                            <th>Ders Saati</th>
                            <th>AKTS</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          $dersplanisor=mysql_query("select * from Dersplani  order by dersplani_yariyilbaslik ASC");
                          while($dersplaniekle=mysql_fetch_assoc($dersplanisor)){?>

                            <tr>
                              <td> <?php echo $dersplaniekle['dersplani_id']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_kod']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_ad']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_tur']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_dil']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_t']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_l']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_u']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_saat']; ?> </td>
                              <td> <?php echo $dersplaniekle['dersplani_akts']; ?> </td>


                              <td><a href="DersPlaniDuzenle.php?dersplani_id=<?php echo $dersplaniekle['dersplani_id'];?>&dersplaniguncel=ok">
                                <button class = "btn btn-primary" name="dersplaniguncel" type="submit">Düzenle</button></a></td>


                              <td><a href="includes/islem.php?dersplani_id=<?php echo $dersplaniekle['dersplani_id'];?>&dersplanisil=ok">
                                <button class = "btn btn-danger" name="dersplanisil" type="submit">Sil</button></a></td>



                            </tr>
                        <?php  } ?>

                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>


        </div>





    </div>
<?php include("includes/footer.php");?>
