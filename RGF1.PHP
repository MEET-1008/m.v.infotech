<?php
$showusernameError=false;
 $show_successful_Mes = false;
 $showError=false;
 
if ($_SERVER ["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];
    
    if($password == $rpassword)
    {
      // check username
      $checkusername = "SELECT username FROM users WHERE username='$username'";
      $checkusername_run = mysqli_query($conn,$checkusername);
      
        if(mysqli_num_rows($checkusername_run)>0){
          // already your username is exist
          $showusernameError="user exit";
          
        }
        else {
              $user_query = "INSERT INTO `users` ( `username`, `password`,`date`) VALUES ( '$username', '$password', current_timestamp())";
              $user_query_run = mysqli_query($conn , $user_query); 
              $show_successful_Mes=" your account is now created and you can login " ;
            }   
}         
else{ 
    $showError= "password do not match" ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/85e6a2c0f8.js" crossorigin="anonymous"></script>
    <title>RGF FORM</title>
</head>
<body>
<?php
if($show_successful_Mes){
echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> '.$show_successful_Mes.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} 
if($showError){
  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Errore!</strong>'.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  } 
  if($showusernameError){
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Errore!</strong>'.$showusernameError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } 
 
?>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4" action="" method="post">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input required type="text" id="form3Example1c" class="form-control" name="username"/>
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>
      
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input required type="password" id="form3Example4c" class="form-control" name="password" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input required type="password" id="form3Example4cd" class="form-control" name="rpassword" />
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          </div>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <a href="/index.html"> <button type="submit" class="btn btn-primary btn-lg">Register</button></a> 
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://www.worksoft.com/hs-fs/hubfs/_worksoft2020/images/worksoft-home-image-1.jpg?width=1061&name=worksoft-home-image-1.jpg"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>