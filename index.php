<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="bg">
<div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color:rgba(255,255,255,0.3); margin-top:150px;">
        <h1 style="text-align:center">Login Woe</h1>
        <form class="form-horizontal" method="POST" action="Validasi.php" name="form">

            <div class="form-group">
                  <label class="control-label" for="pwd">Username :</label>
                  <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
              <span id="error_username"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">Password :</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
              <span id="error_password"></span>
            </div>
                <input type="submit" onclick="login()" value="Login" style="margin-bottom:10px">
        </form>
    

        <?php
		if(isset($_POST["username"]) && $_POST["password"]) {
			echo "<br>Username : ".$_POST["username"];
			echo "<br>Password : ".$_POST["password"];
		}
	    ?>
        </div>
        <div class="col -sm-4"></div>
    </div>
    </div>

    <script>
        function login(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("username").value;
            var nim = document.getElementById("password").value;
            
            if(username !="" && password !=""){
                form[0].submit();
            }
            else{
                if (nama==""){
                    document.getElementById("error_username").innerHTML = "username tidak boleh kosong";
                }
                if (nim==""){
                    document.getElementById("error_password").innerHTML = "password tidak boleh kosong";
                }
            }
        }
    </script>
</body>
</html>