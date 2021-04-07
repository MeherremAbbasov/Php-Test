
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="regisder.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form action="regisder.php" method="post">
  <label>
    <p class="label-txt">Adinizi Yazin</p>
    <input type="text" class="input" name="username">
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Adinizi Yazin";
     }
     ?>
    </p>
     <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Adiniz Duzgun Yazilmayib";
     }
     ?>
    </p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Soyadinizi Yazin</p>
    <input type="text" class="input" name="surname">
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Soyadinizi Yazin";
     }
     ?>
    </p>
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Soyadiniz Duzgun Yazilmayib";
     }
     ?>
    </p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <label>
    <p class="label-txt">Emailinzi Yazin</p>
    <input type="text" class="input" name="email">
        <p style="color:red">
       <?php
       if(isset($_GET["nameerror"])){
        echo "Emaliinizi Yazin";
       }
      ?>
    </p>
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Emaliniz Duzgun Yazilmayib";
     }
     ?>
    </p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Paroluunuzu Yazin</p>
    <input type="text" class="input" name="password">
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Parolunuzu Yazin";
     }
     ?>
    </p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Paroluunuzu Tesdiq Edin</p>
    <input type="text" class="input" name="passwordt">
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Parolunuzu Yazin";
     }
     ?>
    </p>
    <p style="color:red">
     <?php
     if(isset($_GET["nameerror"])){
        echo "Parolunuz Eyni Deil";
     }
     ?>
    </p>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">Qedyiyyat Ol</button>
</form