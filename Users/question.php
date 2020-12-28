<?php

include "../includes/Db.php";
include "../snakecomment.html";


session_start();
if($_SESSION['login'])
{
    $username = $_SESSION['username'];
    
    if(isset($_POST['submit']))
    {
        $answer = $_POST['answer'];
        $answer = trim($answer);
        $answer = strtolower($answer);
        if($answer = "irene adler" || $answer == "dennis ritchie")
        {
            $timestamp = date('Y-m-d H:i:s');
            $s = "UPDATE `users` SET `lastlevel`= 1 ,`time` = '$timestamp'  WHERE `username` = '$username'";
            echo date("Y-m-d h:i:s");
            $r = mysqli_query($conn , $s);
            header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/Users/page2.php?value=1");
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
   
    <style>
    
    .hints{
        display:none;
    }

    .help:hover + .hints {
        display: block;
        }

    </style>
    


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



    <h2 style="margin-bottom:50px; color:white;">    </h2>
    <form action="question.php" method="post">
    <input type="text" class="form-control" required name="answer" style="width:40%; margin:auto auto;" placeholder="Answer">
    <div style="margin-bottom:20px"></div>
    <button class="btn btn-outline-info" type="submit" name="submit"> Submit </button>
    <div style="margin-bottom:60px"></div>

    </form>

    <h5 class="help" style="color:white; border:1px solid white; padding:15px; width:10%; margin:auto auto; cursor:help"> HINT </h5>
        <div style="color:white margin:top:20px; padding:20px; background-color:black;" class="hints jumbotron tex-center"> The Woman   </div>


    </div>
    <div class="text-center" style="margin-bottom:100px; margin:auto auto; padding-top:50px; padding-bottom:50px;">
    <img src="../includes/question.jpg" style="margin:auto auto; width:50%; border-radius:10px;">
    </div>
    
</body>
<?php include "../includes/scripts.html"; } ?>
</html>