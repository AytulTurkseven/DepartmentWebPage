<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $yukseklisansdersbaslikduzenle['yukseklisansdersbaslik_baslik'] ?></h2>
                  <div class="icerik">





                  </div>
<div class = "col-lg-2"></div>
                  <div class = "col-lg-8">
                   <div class="panel panel-default">
                   <div class="panel-heading"><h3>1. Yarıyıl</h3></div>
                   <div class="panel-body">
       <table class="table table-condensed" style="border-collapse:collapse;">

           <thead>
               <tr><th> </th>
                   <th>Ders Adı</th>


               </tr>
           </thead>

           <?php
           $yukseklisansderssor = mysql_query("select * from Yukseklisansders");
            while ($yukseklisansdersduzenle=mysql_fetch_assoc($yukseklisansderssor)) { ?>


           <tbody>
               <tr data-toggle="collapse" data-target="#yukseklisansders<?php echo $yukseklisansdersduzenle['yukseklisansders_ad']?>" class="accordion-toggle">
                         <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>


                   <td><?php echo $yukseklisansdersduzenle['yukseklisansders_ad'] ?></td>

               </tr>
               <tr>
                   <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="yukseklisansders<?php echo $yukseklisansdersduzenle['yukseklisansders_ad']?>">
                     <table class="table table-striped">
                             <thead>
                               <tr><th></th></tr>
                             </thead>
                             <tbody>
                               <tr><td><?php echo $yukseklisansdersduzenle['yukseklisansders_icerik'] ?></td></tr>




                             </tbody>
                      	</table>

                     </div> </td>
               </tr>






           </tbody>


            <?php } ?>


       </table>
                   </div>

                 </div>

             </div>
           </div>














                  </div>





</div>
<div class="page-header"></div>

</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
