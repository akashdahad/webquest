<?php

session_start();
include "../includes/Db.php";

if(!($_SESSION['admin'] == true))
{
    header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/admin/");
}

if($_SESSION['admin'] == true)
{

    $get = "SELECT * FROM `users` ORDER BY `time` ";
    

    if(isset($_POST['delete']))
    {
      $uname = $_POST['delete'];
      $s = "DELETE FROM `users` WHERE `username` = '$uname'  ";
      echo $s;
      $r = mysqli_query($conn , $s);
      if($r)
      {
        echo "<script> alert('User Removed'); </script>";
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

    <style>
    .heading{
        padding-top:100px;
        font-family: 'Montserrat', sans-serif;
        
    }
    table{
        font-family: 'Raleway', sans-serif;
        padding:15px;
        
    }
    .tb{
        width:80%;
        margin:auto;
    }
    </style>
</head>
<body>
<?php
    include "../includes/mainmenunavbar.html";
?>

<div class="jumbotron text-center heading">
   <h2> All Users </h2> 
</div>

<div class="table-responsive tb">
        <table class="table table-striped table-sm">
          <thead class="thead-dark">
            <tr>
              <th>Sr No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Phone No</th>
              <th>Level Reached </th>
              <th>Last Level Time </th>
              <th>Delete User</th>
            </tr>
          </thead>
          <tbody>


<?php
$res = mysqli_query($conn , $get);
while($num = mysqli_fetch_assoc($res))
{
   
?>

            <tr>
              <td><?php echo $num['srno'] ?></td>
              <td><?php echo $num['username'] ?></td>
              <td><?php echo $num['password'] ?></td>
              <td><?php echo $num['phoneno'] ?></td>
              <td><?php echo $num['lastlevel'] ?></td>
              <td><?php echo $num['time'] ?></td>
              <td><form action="finduser.php" method="POST"> <button type="submit" class="btn btn-dark" name="delete" value="<?php echo $num['username'] ?>"> DELETE USER  </button>  </td>
            </tr>
<?php } ?>
          </tbody>
        </table>
</div>


</body>
<?php
    include "../includes/scripts.html";
?>

</html>
<?php } ?>