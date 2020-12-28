<?php
include "includes/Db.php";
include "snakecomment.html";


$username ="";

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username . $password;

    $s = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    $c = mysqli_query($conn , $s);

    echo $s;

    $num = mysqli_fetch_assoc($c);
    if($num>0)
    {
      // echo "<script> alert('Login Success'); </script>"; 
      header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/Users/");
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['username'] = $username;
 
    }


}

// $date = date('m/d/Y h:i:s', time());


// if(isset($_POST['submit']))
// {
//   echo "<script> alert('WebQuest Not Live!! Will Begin Soon!  '); </script>"; 
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Web Quest 6.0 </title>
    <?php
    include "includes/css.html";
    include "includes/fonts.html";

   ?>
    <!-- <link href="includes/signin.css" rel="stylesheet">
    <link href="includes/login.css" rel="stylesheet"> -->

   <style>
       .heading{
        font-family: 'Montserrat', sans-serif;
        padding-top:200px;
        padding-bottom:200px;

       }
       @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
  body{

    background: url("includes/img3.jpg");
    background-size:100%;
    color:white;

    

  }

/* * {
  box-sizing: border-box;
}

html, 
body {
  margin: 0;
  padding: 0;
  height: 100%;
}

body {
  font-family: 'Lato', sans-serif;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  /* background: linear-gradient(243.87deg, #F28FE5 30.6%, #371933 130.6%); */
  /* background-color:black; */
  /* 
  background-size:100%;
  overflow: hidden;
} */

/* input {
  font-family: inherit;
  -webkit-appearance: none;
  -moz-appearance: none;
  border: 0;
  border-bottom: 1px solid #AAAAAA;
  font-size: 16px;
  color: #000;
  border-radius: 0;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  height: 40px;
}

button,
input:focus {
  outline: 0;
}

::-webkit-input-placeholder { 
  font-size: 16px;
  font-weight: 300;
  letter-spacing: -0.00933333em;
}

.form-group {
  position: relative;
  padding-top: 15px;
  margin-top: 10px;
}

label {
  position: absolute;
  top: 0;
  opacity: 1;
  -webkit-transform: translateY(5px);
          transform: translateY(5px);
  color: #aaa;
  font-weight: 300;
  font-size: 13px;
  letter-spacing: -0.00933333em;
  transition: all 0.2s ease-out;
}

input:placeholder-shown  + label {
  opacity: 0;
  -webkit-transform: translateY(15px);
          transform: translateY(15px);
}

.h1 {
  color: white;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  cursor: pointer;
  position: absolute;
}

.open .h1 {
  -webkit-transform: translateX(200px) translateZ(0);
          transform: translateX(200px) translateZ(0);
}

.h2 {
  color: #000;
  font-size: 20px;
  letter-spacing: -0.00933333em;
  font-weight: 600;
  padding-bottom: 15px;
}

.login-wrapper {
  width: 800px;
  height: 440px;
  background-color: #fff;
  box-shadow: 0px 2px 50px rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  overflow: hidden;
  position: relative;
}

.login-left {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  overflow: hidden;
}

.login-left img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  display: block;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  object-position: left;
}

.open .login-left img {
  -webkit-transform: translateX(280px) translateZ(0);  
          transform: translateX(280px) translateZ(0);  
}

.open .login-left {
  -webkit-transform: translateX(-400px) translateZ(0);
          transform: translateX(-400px) translateZ(0);
} 

.login-right {
  padding: 40px;
  position: absolute;
  top: 0;
  right: 0;
  width: 400px;
  -webkit-transform: translateX(400px) translateZ(0);
          transform: translateX(400px) translateZ(0);
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
}

.open .login-right {
  -webkit-transform: translateX(0px) translateZ(0);
          transform: translateX(0px) translateZ(0);
}

.checkbox-container {
  display: flex;
  margin-top: 35px;
}

.text-checkbox {
  color: #aaa; 
  font-size: 16px;
  letter-spacing: -0.00933333em;
  font-weight: 300;
  margin-left: 15px;
}

input[type="checkbox"] {
  cursor: pointer;
  margin: 0;
  height: 22px;
  position: relative;
  width: 22px;
  -webkit-appearance: none;
  transition: all 180ms linear;
}

input[type="checkbox"]:before {
    border: 1px solid #aaa;
    background-color: #fff;
    content: '';
    width: 20px;
    height: 20px;
    display: block;
    border-radius: 2px;
    transition: all 180ms linear;
}

input[type="checkbox"]:checked:before {
  background: linear-gradient(198.08deg, #B4458C 45.34%, #E281E7 224.21%);
  border: 1px solid #C359AA;
}

input[type="checkbox"]:after {
  content: '';
  border: 2px solid #fff;
  border-right: 0;
  border-top: 0;
  display: block;
  height: 4px;
  left: 4px;
  opacity: 0;
  position: absolute;
  top: 6px;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  width: 12px;
  transition: all 180ms linear;
}

input[type="checkbox"]:checked:after {
    opacity: 1;
} 

.button-area {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
}

.btn {
  font-family: inherit;
  -webkit-appearance: none;
  -moz-appearance: none;  
  background-color: transparent;
  border: none;
  border-radius: 2px;
  height: 40px;
  display: flex;
  padding: 0 35px;
  cursor: pointer;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: -0.00933333em;
}

.btn-primary {
  color: #fff;
  background-color:black;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.btn-secondary {
  color: black;
  font-size:20px;
} */ 

li{
  padding-top:12px;
}
a{
           text-decoration:none!important;
       }
       #hh{
           padding-bottom:40px;
       }
       .inputa{
           width:30%;
       }
       @media only screen and (max-width: 1300px) 
    {

     .inputa{
         width:90%;
     }
    }

   </style>
  

</head>
<body>
<?php
    include "includes/storenav.html";
?>



<div style="margin-left:50px; margin-top:150px; font-family: 'Montserrat', sans-serif;">

<h4> It is Suggested to Use Laptop! During the Quest! </h4>
<br>

<h5> Tools To Use : 
      <br> 
      <br>
      <ul>
      <li> Check The Source Code! Read Carefully!</li>
      <li> Try Searching on Google via. Images- <br> You Can Use : 
      images.google.com</li>
      <li>Try Combining Words. Make Effective Google Searches. </li>
      <li>Check URL </li>
      <li>Try Relating Clues </li>
      <li>And Lastly, Try Different Approches and Angles! </li>
    </ul>
      <br> 
      <br>
    </h5>



</div>

<div class=" text-center">



<h2 style="margin-top:20px; margin-bottom:20px;">  Login   </h2>
<h4> <form action="login.php" class="" method='POST'>  
<div style="padding-top:13px; margin:auto auto;" class="inputa">
       <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" class="" style="margin:auto auto;">
       <input type="password" class="form-control" name="password" placeholder="Password" value="<?php  ?>" class="" style="margin:auto auto;">
       <div style="padding-bottom:10px; padding-top:px; color:red; font-size:15px;">
       <?php 
        if(isset($msg))
        { 
        echo "*" .$msg;
        } ?> </div>
       <!-- <input type="password" class="form-control" name="password" placeholder="Password" class="" style="margin:auto auto;"> -->
       <button type="submit" class="btn btn-md btn-outline-info" name="submit" style="margin-top:18px; margin-bottom:70px;"> Login </button>
       <div style="padding-top:13px;"></div>

</div>
    </form>

</h4>

</div>




</div>

<!-- <form class="form-signin jumbotron text-center" method="POST" action="login.php">
  <h1 class="h3 mb-3 font-weight-normal" style="padding:20px;"> Login </h1>
  <label for="inputEmail"  class="sr-only"> Username </label>
  <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword"  class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
  <p class="mt-5 mb-3 text-muted"> WebQuest 2k19  </p>
</form> -->



<!-- <form action = "login.php" method="post"> -->
<!-- <div class="login-wrapper">
  <div class="login-left" style="background-color:black;"> -->
    <!-- <img src="http://res.cloudinary.com/dzqowkhxu/image/upload/v1513679279/bg-login_bxxfkf.png"> -->
     <!-- <img src="includes/deep.jpg"> -->
    <!-- <div class="h1" style=""> 
     <div class="" style=" font-family: 'Montserrat', sans-serif;">
    <h4> Tools To Use : 
      <br> 
      <br>
      1. Check The Source Code! Read Carefully!<br>
      2. Try Searching on Google via. Images- <br> You Can Use : 
      images.google.com<br>
      3.Try Combining Words. Make Effective Google Searches. <br>
      4.Check URL <br>
      5.Try Relating Clues<br>
      6.And Last Try Different Approches and Angles! 

      <br> 
      <br>
    </h4>
     <h2> Tap To Continue : => ENTER THE QUEST! </h2> 

    </div>
    </div>
  </div> -->
  <!-- <div class="login-right">
    <div class="h2">Login</div>
    
    <div class="form-group">
      <input type="text" id="Email" name="username" placeholder="Username" required>
      
    </div>
    <div class="form-group">
      <input type="password" id="Password" name="password" placeholder="Password" required>
    </div>
    <div class="checkbox-container">
    </div> 
    <div class="button-area" style="margin:auto auto;">
      <button class="btn btn-secondary" style="margin-left:25px;" type="submit" name="submit">Login</button>
    </div>
  </div>
</div>
    </form>
     -->
</body>
<?php
    include "includes/scripts.html";
?>
</html>