<?php
include("config.php");
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $Password=$_POST['Password'];
    $Password_hash=password_hash($Password,PASSWORD_DEFAULT);
    $Conf_Password=$_POST['Conf_Password'];
    // exist query
    $select_data="Select * from `users` where email='$email'";
    $result=mysqli_query($conn,$select_data);
    $num_rows=mysqli_num_rows($result);
    if($uname=="" or $email=="" or $Password=="" or $Conf_Password==""){
        echo "<script>alert('Please fill all the fields')</script>";
        echo "<script>window.open('signUp.php','_self')</script>";
        exit();
    }
    if($num_rows>0){
        echo "<script>alert('Email already exist')</script>";
    }
    // insert operation
    // password and cofirm password condition
    else if($Password!=$Conf_Password){
        echo $msg;
         $msg="<div class='alert alert-danger'>hello.</div>";
       // echo "<script>alert('Passwords do not match')</script>";
    }else{
        $insert_query="insert into `users` (uname,email,password) values ('$uname','$email','$Password_hash')";
        $result=mysqli_query($conn,$insert_query);
        if($result){
            /*$user_id = mysqli_insert_id($conn); // Get the auto-generated ID from the previous query

            //$insert_query = "INSERT INTO `user_course_application` (`user_id`) 
                         VALUES ('$user_id')";
             //$query_run = mysqli_query($conn, $insert_query);*/
             //$messageToUser="Your have successfully registered please proceed to personal information";
             echo "<script>alert('You have successfully logged in')</script>";
             echo "<script>window.open('WebInfom.php','_self')</script>";
        }
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
    <div class="container sign-up-mode">
        <div class="forms-container">
           
            <div class="signin-signup">
                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username" value="<?php if (isset($_POST['submit'])) { echo $uname; } ?>" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf_Password" placeholder="Confirm Password" />
                    </div>
                    <input type="submit" name="submit" class="btn" value="Sign up" onClick="showDialog()" />
                    <div id="message">
                   <p id="pm"> 
                  <?php
                   echo $messageToUser;
                   ?>
                 </p>
                 <button id="btn1">Ok</button>
                  </div>
                    <p class="social-text">Or Sign up with social platforms</p>
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
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Click sign in to login
                    </p>
                    <a href="indexWeb.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none;
                    background:white;color:blue;">
                        Sign in
                                                                                </a>
                </div>
                <img src="assets/img/da.png" class="image" alt="" />
            </div>
        </div>
    </div>
    </div>
    <script>
    var message=document.getElementById('message');
    function showDialog(){
      message.style.display='block';
    }
  </script>
</body>
</html>
