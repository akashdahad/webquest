<?php

session_start();

if(isset($_GET['in']))
{
    echo "<script> alert('User Created Successfully '); </script> ";

}

if(!($_SESSION['admin'] == true))
{
    header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/admin/");
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



</body>
<?php
    include "../includes/scripts.html";
?>

</html>
<?php } ?>