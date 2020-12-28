<?php
session_start();

if(isset($_POST['submit']))
{
    include "../includes/Db.php";


    $username = $_POST['username'];
    $password = $_POST['password'];


    
 
    
    if($username == "akash" && $password == "akash")
    {
        echo "No such User or Incoorect Password ";
 
        $res1 = "Login Success";
        $_SESSION['admin']="true";
        echo $_SESSION['admin'];
        header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/admin/adminhome.php");
    }
}

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
<!-- <?php
    include "../includes/mainmenunavbar.html";
?> -->

<form class="form-signin jumbotron text-center" method="POST" action="index.php">
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
</form>


    
</body>
<?php
    include "../includes/scripts.html";
?>

</html>