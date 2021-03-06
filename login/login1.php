<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login1.css">
    <title>login1</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="./img/LOGO.png" alt="">
        </div>
        <div class="text-center mt-3 name" style="text-align: center;">
            M.V. INFOTECH
        </div><br>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex ">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <a href="/index.html"><button class="btn mt-3">Login</button></a>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>
</body>
</html>