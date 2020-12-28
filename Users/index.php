<?php

include "../includes/Db.php";

session_start();
if($_SESSION['login'])
{
    $username = $_SESSION['username'];

    


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
        .text{
            font-family: 'Raleway', sans-serif;
        }
    </style>
    <link href="../includes/style1.css" rel="stylesheet">
</head>
<body>
    <?php
    // include "../includes/studentnav.html";
    ?>

<div class="splash">
            <!-- <div class="splash_logo">
             BJL
           </div> -->
            <div class="splash_svg">
                <svg width="100%" height="100%">
                <rect width="100%" height="100%" >
                </svg>
            </div>
            <div class="splash_minimize">
                <svg width="100%" height="100%">
                <rect width="100%" height="100%" >
                </svg>
            </div>
            </div>
            <div class="text">
            <p>Begin The <br> Quest!!</p>
            <a href="question.php"> <button>Start </button></a>
            </div>
    
</body>
<?php include "../includes/scripts.html";} ?>
</html>