<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
header("Location: http://{$_SERVER['HTTP_HOST']}/WebQuest2/");

?>