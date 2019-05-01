<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $akademikdanismanbaslikduzenle['akademikdanismanbaslik_baslik']; ?></h2>



                   <div class="panel panel-default">
                   <div class="panel-heading"><h3><?php echo $akademikdanismanbaslikduzenle['akademikdanismanbaslik_altbaslik']; ?></h3></div>
                   <div class="panel-body">
       <table class="table table-condensed" style="border-collapse:collapse;">

           <thead>
               <tr>
                   <th class = "col-lg-2"></th>
                   <th class = "col-lg-5">Akademik Danışmanlar</th>
                   <th class = "col-lg-5">Kayıt Danışmanları</th>

               </tr>
           </thead>

           <tbody>
            <?php $akademikdanismansor=mysql_query("select * from Akademikdanisman");
             while($akademikdanismanduzenle=mysql_fetch_assoc($akademikdanismansor)) {?>
               <tr>
                       <td><?php echo $akademikdanismanduzenle['akademikdanisman_sinif']; ?>.Sınıf</td>

                       <td><?php echo $akademikdanismanduzenle['akademikdanisman_akademik']; ?> </td>
                       <td><?php echo $akademikdanismanduzenle['akademikdanisman_kayit']; ?> </td>

               </tr>
               <?php }?>

           </tbody>
       </table>
                   </div>

                 </div>

             </div>










</div>
<div class="page-header"></div>

</div>
<?php include("includes/footer.php");?>
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
