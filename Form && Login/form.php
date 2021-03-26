<?php session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="form.css">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Bura Cox Gozeldi Bize Sende Qatil
            </h1>
            <h2 class="wv-heading--subtitle">BUYUR QEYDIYYATDAN KEC</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="regisder.php" method="POST" >
                  <div class="form-group">
                     <p>
                        <?php 
                        if (isset($_GET["name"])) {
                           echo $_GET["name"];
                        }

                        ?>
                     </p>
                     <input type="text" name="name"  class="form-control my-input" placeholder="Adinizi Yazin.." >
                  </div>
                  <div class="form-group">
                   <p>
                        <?php 
                        if (isset($_GET["surname"])) {
                           echo $_GET["surname"];
                        }

                        ?>
                     </p>
                     <input type="text" name="surname"  class="form-control my-input" placeholder="Soyadinizi Yazin">
                  </div>
                  <div class="form-group">
                   <p>
                        <?php 
                        if (isset($_GET["password"])) {
                           echo $_GET["password"];
                        }

                        ?>
                     </p>
                     <input type="text" name="password"  class="form-control my-input" placeholder="Paroluunzu Yazin">
                  </div>
                   <div class="form-group">
                    <p>
                        <?php 
                        if (isset($_GET["email"])) {
                           echo $_GET["email"];
                        }

                        ?>
                     </p>
                     <input type="text" name="email"  class="form-control my-input" placeholder="Emailinizi Yazin">
                  </div>
                  <div class="text-center ">
                     <p style="color: red">
                        <?php
                        if (isset($_GET["mesaj"])) {
                           echo "Qadagandir";
                        }
                         ?>
                        

                     </p>
                     <button type="submit" class=" btn btn-block send-button tx-tfm" name="con">Qeydiyyatdan Kec</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>