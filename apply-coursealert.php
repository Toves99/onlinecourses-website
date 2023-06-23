<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading</title>
    <style>
    #div {
        width: 700px;
        height: 300px;
        background: white;
        margin-top: 100px;
        margin-left: 350px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    #h2 {
        text-align: center;
        margin-top: 10px;
        padding: 20px;
    }

    #p {
        margin-left: 30px;
        margin-top: 10px;
        position: absolute;
        width: 600px;
        font-size: 20px;
        text-align: center;
    }

    #btn {
        margin-top: 130px;
        margin-left: 280px;
        position: absolute;
        width: 150px;
        height: 30px;
        color: white;
        background: blue;
        border: none;
        border-radius: 7px;
    }

    /* Media screen responsiveness */
    @media screen and (max-width: 768px) {
        #div {
            width: 90%;
            height: 300px;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
        }

        #p {
            width: 80%;
        }

        #btn {
            margin-top: 100px;
            margin-left: 45%;
            transform: translateX(-50%);
        }
    }
    
    #img{
        background-image:url(assets/img/bac.jpeg);
        background-size:cover;
        position:relative;
        height:100vh;
    }
    
    #h3{
        color:blue;
        font-size:25px;
        font-weight:bold;
        margin-left:20px;
    }
    #img{
        background-image:url(assets/img/bac.jpeg);
        background-size:cover;
        position:relative;
        height:100vh;
    }
    
    #h3{
        color:blue;
        font-size:25px;
        font-weight:bold;
        margin-left:20px;
    }
</style>
</head>
<body id="img">
    <h2 id="h3">MAW<br>INSTITUTE</h2>
    <div id="div">
    <h2 id="h2">Personal details submiited Successfully</h2>
    <p id="p">
    We have recieved your personal details. Kindly click the button below to see the courses we offer.
    </p>
    <a href="course-login.php">
    <button id="btn">Go to courses</button>
    </a>
    </div>
</body>
</html>