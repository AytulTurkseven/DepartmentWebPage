<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $bitirmebaslikduzenle['bitirmebaslik_baslik']; ?></h2>
                  <div class="icerik">

                <?php echo $bitirmebaslikduzenle['bitirmebaslik_icerik']; ?>



                  </div>


                   <div class="panel panel-default">
                   <div class="panel-heading"><h3></h3></div>
                   <div class="panel-body">
       <table class="table table-condensed" style="border-collapse:collapse;">

           <thead>
               <tr>
                   <th class = "col-lg-3"> Eğitmen Adı</th>
                   <th class = "col-lg-9">  </th>


               </tr>
           </thead>

           <tbody>
            <?php $bitirmetabloicerikssor=mysql_query("select * from Bitirmetabloicerik");
             while($bitirmetabloicerikduzenle=mysql_fetch_assoc($bitirmetabloicerikssor)) {?>
               <tr>
                      <td> <h5><strong><?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_kisi']; ?></strong></h5></td>

                       <td><?php echo $bitirmetabloicerikduzenle['bitirmetabloicerik_icerik']; ?> </td>


               </tr>
               <?php }?>

           </tbody>
       </table>
                   </div>

                 </div>

             </div>














                  </div>





</div>
<div class="page-header"></div>

</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
