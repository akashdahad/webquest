<?php

session_start();

include "../includes/Db.php";

if(!($_SESSION['admin'] == true))
{
    header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/admin/");
}

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phoneno = $_POST['phoneno'];
    
    $s = "SELECT * FROM `users` WHERE `username` = '$username'";
    $r = mysqli_query($conn , $s);

    $num = mysqli_fetch_assoc($r);


    if($num == 0 )
    {

    $ins = "INSERT INTO `users`(`username`, `password`, `phoneno`) VALUES ('$username','$password','$phoneno')";
    $res = mysqli_query($conn , $ins);
    if($res)
    {
        header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/admin/adminhome.php?in=true");
    }
    else{
        echo "Error";
    }
}
if($num > 0 )
{
    echo "<script> alert('Username Already Present '); </script> ";
}

}

if($_SESSION['admin'] == true)
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Web Quest Admin Zone </title>
    <?php
    include "../includes/css.html";
    include "../includes/fonts.html";
   ?>
       <link href="../includes/signin.css" rel="stylesheet">

</head>
<body>
<?php
    include "../includes/mainmenunavbar.html";
?>


<form class="form-signin jumbotron text-center" method="POST" action="createuser.php">
  <h1 class="h3 mb-3 font-weight-normal" style="padding:20px;"> Create User </h1>
  <label for="inputEmail"  class="sr-only"> Username </label>
  <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  <label for="inputPassword"  class="sr-only">Password</label>
  <input type="text" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <input type="text" id="inputPassword" name="phoneno" class="form-control" placeholder=" Phone Number" required>
  <div class="checkbox mb-3">
    <label>
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"> Create User Login </button>
  <p class="mt-5 mb-3 text-muted"> WebQuest 2k19  </p>
</form>




</body>
<?php
    include "../includes/scripts.html";
?>

</html>
<?php } ?>