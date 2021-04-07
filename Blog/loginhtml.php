<link rel="stylesheet" type="text/css" href="login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="login.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white">Adinizi Yazin</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Parollunuzu Yazin</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                  <p style="color: red">
                                    <?php
                                    if(isset($_GET["name"])){
                                      echo "Ad ve ya Parol Yalnisdir";

                                    }
                                    ?>
                                    
                                </p>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Giris Edin">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>