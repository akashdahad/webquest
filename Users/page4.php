<?php

include "../includes/Db.php";
include "../snakecomment.html";


session_start();
if(isset($_GET['value']))
{
    if($_GET['value'] == 1)
    echo "<script> alert('Correct Answer'); </script>";

}
if($_SESSION['login'])
{
    $username = $_SESSION['username'];
    
    if(isset($_POST['submit']))
    {
        $answer = $_POST['answer'];
        $answer = trim($answer);
        $answer = strtolower($answer);
        if($answer == "UFO" || $answer == "ufo" || $answer == "ufo crash" || $answer == "UFO Crash" || $answer == "ufo"  )
        {
            $timestamp = date('Y-m-d H:i:s');
            $s = "UPDATE `users` SET `lastlevel`= 4 ,`time` = '$timestamp'  WHERE `username` = '$username'";
            echo date("Y-m-d h:i:s");
            $r = mysqli_query($conn , $s);
            header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/Users/final.php?value=1");
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "../includes/css.html";
    include "../includes/fonts.html";
    ?>
    
</head>
<body>
    <?php
    include "../includes/studentnav.html";
    ?>

<div class="jumbotron text-center" style="padding-top:220px; padding-bottom:150px; color:white; background-color:black;">

<h2 style="margin-bottom:50px; color:white;"> Enter Your Answer Here ??

</h2>
<form action="page4.php" method="post">
<input type="text" class="form-control" required name="answer" style="width:40%; margin:auto auto;" placeholder="Answer">
<div style="margin-bottom:20px"></div>
<button class="btn btn-outline-info" type="submit" name="submit"> Submit </button>
<div style="margin-bottom:40px"></div>

</form>


</div>

<div class="text-center" style="margin-bottom:100px;">
<img src="../includes/page4.jpg" style="margin:auto auto; height:50%; border-radius:10px;">
</div>
<div class="text-center" style="margin-bottom:100px;">
<img src="../includes/hintpage4.jpg" style="margin:auto auto; height:50%; border-radius:10px;">
</div>

   
</body>
<?php include "../includes/scripts.html"; } ?>
</html>