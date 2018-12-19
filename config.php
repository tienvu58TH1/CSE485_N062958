<?php
$severname='localhost';
$pass='abcd1234';
$db='webgame';
$username='tienvu';
$conn = mysqli_connect($severname,$username,$pass,$db);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
?>
