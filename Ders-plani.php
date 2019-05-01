<?php require_once("includes/config.php");?>
<?php include("includes/header.php");?>


<div class="container">

  <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header"><?php echo $dersplanibaslikduzenle['dersplanibaslik_ana']; ?></h2>
                  <div class="icerik">

                  <h4 class = "iletisimtasarim" style = "text-align:center; padding-bottom: 20px; margin-top:-25px;"><?php echo $dersplanibaslikduzenle['dersplanibaslik_alt']; ?></h4>


                  <h5><strong>T:</strong>Teori <strong>L:</strong>Laboratuvar <strong>U:</strong>Uygulama</h5>



                  </div>


                   <div class="panel panel-default">

                   <div class="panel-heading"><h3>1. Yarıyıl</h3></div>
                   <div class="panel-body">
       <table class="table table-condensed" style="border-collapse:collapse;">
           <thead>
               <tr><th> </th>
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
                 $dersplanisor = mysql_query("select * from Dersplani");
                  while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
                   if($dersplaniekle['dersplani_yariyilbaslik']==1){
                   ?>
                   <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
                   <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
                   <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
                   <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
                   </tr>
                   <tr>
                       <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
                         <table class="table table-striped">
                                 <thead>
                                   <tr><th></th></tr>
                                 </thead>
                                 <tbody>
                                   <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                                 </tbody>
                          	</table>
                         </div> </td>
                   </tr>
              <?php } }?>
               <tr>
                       <td></td>
                       <td></td>
                       <td>Zorunlu Ders AKTS Toplamı</td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td>30</td>
               </tr>
               <tr>
                   <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
               </tr>
               <tr>
                   <td></td>
                   <td></td>
                   <td>Zorunlu Ders AKTS Toplamı</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>30</td>
               </tr>
               <tr>
                   <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
               </tr>
           </tbody>
       </table>
                   </div>
                 </div>





                 <div class="panel panel-default">

                 <div class="panel-heading"><h3>2. Yarıyıl</h3></div>
                 <div class="panel-body">
     <table class="table table-condensed" style="border-collapse:collapse;">
         <thead>
             <tr><th> </th>
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
               $dersplanisor = mysql_query("select * from Dersplani");
                while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
                 if($dersplaniekle['dersplani_yariyilbaslik']==2){
                 ?>
                 <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
                 <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
                 <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
                 <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
                 </tr>
                 <tr>
                     <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
                       <table class="table table-striped">
                               <thead>
                                 <tr><th></th></tr>
                               </thead>
                               <tbody>
                                 <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                               </tbody>
                          </table>
                       </div> </td>
                 </tr>
            <?php } }?>
             <tr>
                     <td></td>
                     <td></td>
                     <td>Zorunlu Ders AKTS Toplamı</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>30</td>
             </tr>
             <tr>
                 <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
             </tr>
             <tr>
                 <td></td>
                 <td></td>
                 <td>Zorunlu Ders AKTS Toplamı</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>30</td>
             </tr>
             <tr>
                 <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
             </tr>
         </tbody>
     </table>
                 </div>
               </div>






               <div class="panel panel-default">

               <div class="panel-heading"><h3>3. Yarıyıl</h3></div>
               <div class="panel-body">
   <table class="table table-condensed" style="border-collapse:collapse;">
       <thead>
           <tr><th> </th>
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
             $dersplanisor = mysql_query("select * from Dersplani");
              while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
               if($dersplaniekle['dersplani_yariyilbaslik']==3){
               ?>
               <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
               <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
               <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
               <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
               </tr>
               <tr>
                   <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
                     <table class="table table-striped">
                             <thead>
                               <tr><th></th></tr>
                             </thead>
                             <tbody>
                               <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                             </tbody>
                        </table>
                     </div> </td>
               </tr>
          <?php } }?>
           <tr>
                   <td></td>
                   <td></td>
                   <td>Zorunlu Ders AKTS Toplamı</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td>30</td>
           </tr>
           <tr>
               <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
           </tr>
           <tr>
               <td></td>
               <td></td>
               <td>Zorunlu Ders AKTS Toplamı</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>30</td>
           </tr>
           <tr>
               <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
           </tr>
       </tbody>
   </table>
               </div>
             </div>






             <div class="panel panel-default">

             <div class="panel-heading"><h3>4. Yarıyıl</h3></div>
             <div class="panel-body">
 <table class="table table-condensed" style="border-collapse:collapse;">
     <thead>
         <tr><th> </th>
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
           $dersplanisor = mysql_query("select * from Dersplani");
            while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
             if($dersplaniekle['dersplani_yariyilbaslik']==4){
             ?>
             <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
             <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
             <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
             <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
             </tr>
             <tr>
                 <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
                   <table class="table table-striped">
                           <thead>
                             <tr><th></th></tr>
                           </thead>
                           <tbody>
                             <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                           </tbody>
                      </table>
                   </div> </td>
             </tr>
        <?php } }?>
         <tr>
                 <td></td>
                 <td></td>
                 <td>Zorunlu Ders AKTS Toplamı</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>30</td>
         </tr>
         <tr>
             <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
         </tr>
         <tr>
             <td></td>
             <td></td>
             <td>Zorunlu Ders AKTS Toplamı</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td>30</td>
         </tr>
         <tr>
             <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
         </tr>
     </tbody>
 </table>
             </div>
           </div>





           <div class="panel panel-default">

           <div class="panel-heading"><h3>5. Yarıyıl</h3></div>
           <div class="panel-body">
<table class="table table-condensed" style="border-collapse:collapse;">
   <thead>
       <tr><th> </th>
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
         $dersplanisor = mysql_query("select * from Dersplani");
          while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
           if($dersplaniekle['dersplani_yariyilbaslik']==5){
           ?>
           <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
           <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
           <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
           <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
           </tr>
           <tr>
               <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
                 <table class="table table-striped">
                         <thead>
                           <tr><th></th></tr>
                         </thead>
                         <tbody>
                           <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                         </tbody>
                    </table>
                 </div> </td>
           </tr>
      <?php } }?>
       <tr>
               <td></td>
               <td></td>
               <td>Zorunlu Ders AKTS Toplamı</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>30</td>
       </tr>
       <tr>
           <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
       </tr>
       <tr>
           <td></td>
           <td></td>
           <td>Zorunlu Ders AKTS Toplamı</td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td>30</td>
       </tr>
       <tr>
           <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
       </tr>
   </tbody>
</table>
           </div>
         </div>






         <div class="panel panel-default">

         <div class="panel-heading"><h3>6. Yarıyıl</h3></div>
         <div class="panel-body">
<table class="table table-condensed" style="border-collapse:collapse;">
 <thead>
     <tr><th> </th>
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
       $dersplanisor = mysql_query("select * from Dersplani");
        while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
         if($dersplaniekle['dersplani_yariyilbaslik']==6){
         ?>
         <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
         <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
         <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
         <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
         </tr>
         <tr>
             <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
               <table class="table table-striped">
                       <thead>
                         <tr><th></th></tr>
                       </thead>
                       <tbody>
                         <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                       </tbody>
                  </table>
               </div> </td>
         </tr>
    <?php } }?>
     <tr>
             <td></td>
             <td></td>
             <td>Zorunlu Ders AKTS Toplamı</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td>30</td>
     </tr>
     <tr>
         <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
     </tr>
     <tr>
         <td></td>
         <td></td>
         <td>Zorunlu Ders AKTS Toplamı</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>30</td>
     </tr>
     <tr>
         <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
     </tr>
 </tbody>
</table>
         </div>
       </div>






       <div class="panel panel-default">

       <div class="panel-heading"><h3>7. Yarıyıl</h3></div>
       <div class="panel-body">
<table class="table table-condensed" style="border-collapse:collapse;">
<thead>
   <tr><th> </th>
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
     $dersplanisor = mysql_query("select * from Dersplani");
      while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
       if($dersplaniekle['dersplani_yariyilbaslik']==7){
       ?>
       <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
       <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
       <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
       <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
       </tr>
       <tr>
           <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
             <table class="table table-striped">
                     <thead>
                       <tr><th></th></tr>
                     </thead>
                     <tbody>
                       <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                     </tbody>
                </table>
             </div> </td>
       </tr>
  <?php } }?>
   <tr>
           <td></td>
           <td></td>
           <td>Zorunlu Ders AKTS Toplamı</td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td>30</td>
   </tr>
   <tr>
       <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
   </tr>
   <tr>
       <td></td>
       <td></td>
       <td>Zorunlu Ders AKTS Toplamı</td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td>30</td>
   </tr>
   <tr>
       <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
   </tr>
</tbody>
</table>
       </div>
     </div>






     <div class="panel panel-default">

     <div class="panel-heading"><h3>8. Yarıyıl</h3></div>
     <div class="panel-body">
<table class="table table-condensed" style="border-collapse:collapse;">
<thead>
 <tr><th> </th>
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
   $dersplanisor = mysql_query("select * from Dersplani");
    while ($dersplaniekle=mysql_fetch_assoc($dersplanisor)) {
     if($dersplaniekle['dersplani_yariyilbaslik']==8){
     ?>
     <tr data-toggle="collapse" data-target="#<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>" class="accordion-toggle">
     <td><button class="btn btn-primary"><span>Ders İçeriği</span></button></td>
     <td><?php echo $dersplaniekle['dersplani_kod']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_ad']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_tur']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_dil']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_t']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_l']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_u']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_saat']; ?></td>
     <td><?php echo $dersplaniekle['dersplani_akts']; ?></td>
     </tr>
     <tr>
         <td colspan="6" class="hiddenRow"><div class="accordian-body collapse" id="<?php echo $dersplaniekle['dersplani_yariyilbaslik']; ?>yariyil<?php echo $dersplaniekle['dersplani_id']; ?>">
           <table class="table table-striped">
                   <thead>
                     <tr><th></th></tr>
                   </thead>
                   <tbody>
                     <tr><td><?php echo $dersplaniekle['dersplani_icerik']; ?></td></tr>
                   </tbody>
              </table>
           </div> </td>
     </tr>
<?php } }?>
 <tr>
         <td></td>
         <td></td>
         <td>Zorunlu Ders AKTS Toplamı</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>30</td>
 </tr>
 <tr>
     <td colspan="12" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
 </tr>
 <tr>
     <td></td>
     <td></td>
     <td>Zorunlu Ders AKTS Toplamı</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td>30</td>
 </tr>
 <tr>
     <td colspan="12" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
 </tr>
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
