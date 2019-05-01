<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
body {
  background-image: url('https://i.ytimg.com/vi/-Yww7BQv4sA/maxresdefault.jpg');
  background-repeat: no-repeat;

  background-size: cover;

}
  </style>
</head>
<body >
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="/YazLab/img/kocaeli-universitesi.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div style="color:white;" class="panel-body">
                    <form action="includes/islem.php" method="POST">
                        <hr />
                        <h4>Admin Girişi</h4>
                        <br />
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="text" class="form-control" name="admingiris_kadi" placeholder="Kullanıcı Adı" />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                            <input type="password" class="form-control" name="admingiris_sifre"  placeholder="Şifre" />
                        </div>

                        

                     <button style=" margin-left: 120px;margin-right:120px;" type="submit" name="giris" class="btn btn-primary ">Giriş Yap</button>

                     <hr />

                 </form>
             </div>

         </div>


     </div>
 </div>

</body>
</html>
