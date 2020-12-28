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
        if($answer == "amanda knox" )
        {
            $timestamp = date('Y-m-d H:i:s');
            $s = "UPDATE `users` SET `lastlevel`= 3 ,`time` = '$timestamp'  WHERE `username` = '$username'";
            echo date("Y-m-d h:i:s");
            $r = mysqli_query($conn , $s);
            header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/Users/page4.php?value=1");
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
    <style>
    
    .hints{
        display:none;
    }

    .help:hover + .hints {
        display: block;
        }

    </style>
    
</head>
<body>
    <?php
    include "../includes/studentnav.html";
    ?>

    
<div class="jumbotron text-center" style="padding-top:220px; padding-bottom:150px; color:white; background-color:black;">

<h2 style="margin-bottom:50px; color:white;"> Enter Your Answer Here ??

</h2>
<form action="page3.php" method="post">
<input type="text" class="form-control" required name="answer" style="width:40%; margin:auto auto;" placeholder="Answer">
<div style="margin-bottom:20px"></div>
<button class="btn btn-outline-info" type="submit" name="submit"> Submit </button>
<div style="margin-bottom:40px"></div>

</form>


<h5 class="help" style="color:white; border:1px solid white; padding:15px; width:10%; margin:auto auto; cursor:help"> HINT </h5>
        <div style="color:white margin:top:20px; padding:20px; background-color:black;" class="hints jumbotron tex-center"> Justice Is Done !  <br> -Annonymus   </div>



</div>

<div class="text-center" style="margin-bottom:100px;">
<img src="../includes/page2ans.jpg" style="margin:auto auto; height:50%; border-radius:10px;">
</div>
<div class="text-center" style="margin-bottom:100px;">
<h1 style="margin:auto auto; height:50%; border-radius:10px;">  </h1>
</div>

    
</body>
<?php include "../includes/scripts.html"; } ?>
</html>