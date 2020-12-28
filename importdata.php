<?php

$host="204.11.58.166";
$username="gecaWebQuest";
$password="Abcd1@34" ;
$dbname="gecaaeyo_WebQuest";

$conn = mysqli_connect($host , $username, $password , $dbname);

$s1 = "SELECT * FROM `wq2019_players` ";



$s ="CREATE TABLE IF NOT EXISTS `users` (
    `username` varchar(20) NOT NULL,
    `password` varchar(20) NOT NULL,
    `lastlevel` int(10) NOT NULL DEFAULT '0',
    `time` datetime DEFAULT NULL,
    `phoneno` varchar(15) NOT NULL,
    `srno` int(20) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`srno`))";

$r=mysqli_query($conn , $s);

if($s)
{
    echo "Table created";
}

$s3 = "INSERT INTO `users` (`username`, `password`, `lastlevel`, `time`, `phoneno`, `srno`) VALUES
('akash', 'akash', 0, NULL, '9834088819', 1),
('akashdahad', 'akash1999', 0, NULL, '9834088819', 2)";

$r3 = mysqli_query($conn , $s3);

$s1 = "SELECT * FROM `users` ";
$r = mysqli_query($conn , $s1);
    
    while($num = mysqli_fetch_assoc($r))
    {
        print_r($num);
    }
