<?php
// starting the session
session_start();
include("config.php");
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    //echo "The username was".$uname;
    $password=$_POST['password'];
    // query
    $select_query="Select * from `users` where uname='$uname'";
    //echo "select_query is". $select_query;
    $result=mysqli_query($conn,$select_query);
    $fetch_data=mysqli_fetch_assoc($result);
    //print_r($fetch_data);
    // get the user id against the user whose username is $uname
    $user_id=$fetch_data['user_id'];
 
  //$selectUserId = "SELECT user_id FROM users WHERE uname='$uname'";
 //$result_user_id = mysqli_query($conn, $selectUserId);
 //$fetch_user_id_data=mysqli_fetch_assoc($result_user_id);
 
 
 //echo "user_id is".$user_id;
 // 
    $num_rows=mysqli_num_rows($result);
    // echo $num_rows;
    if($num_rows>0){
      if(password_verify($password,$fetch_data['password'])){
        $_SESSION['uname']=$uname;
        $_SESSION['user_id']=$user_id;
        //$messageToUser="You have successfully logged in";
        //echo "<script>alert('You have successfully logged in')</script>";
        echo "<script>window.open('mylearning.php','_self')</script>";
    }else{
       // $messageToUser="Invalid credentials";
        //echo "<script>alert('Invalid credentials')</script>";
        //echo "<script>window.open('index.php','_self')</script>";
    }
    }else{
       $messageToUser="Invalid credentials";
        echo "<script>alert('Invalid credentials')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style1.css" />
  <title>loading</title>

  <style>
        #message {
    margin-left:300px;
    margin-top:-400px;
    position:fixed;
    background:whitesmoke;
    width:800px;
   display:none;
    height:300px; 
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);

    
  }
  #btn1{
    width:100px;
    height:40px;
    background:blue;
    position:absolute;
    margin-left:380px;
    margin-top:230px;
    border:0;
    color:white;
  }
  #pm{
    position:absolute;
    margin-top:100px;
    width:97%;
    text-align:justify;
    margin-left:10px;
    margin-right:10px;
  }
    </style>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="uname" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
          <a href="Forget.php" class="Forget">Forget Password ?</a></div>
          <input type="submit" name="submit" value="Login" class="btn solid" onClick="showDialog()" />
          <div id="message">
                   <p id="pm"> 
                  <?php
                   echo $messageToUser;
                   ?>
                 </p>
                 <button id="btn1">Ok</button>
            </div>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New at MAW?</h3>
          <p>
           Click Sign Up to register if you don't have  an account with us.
          </p>
          <br>
          <a href="SignUp.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none;
          background:white;color:blue;margin-top:10px;">
            Sign up
          </a>
        </div>
        <img src="assets/img/da.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>