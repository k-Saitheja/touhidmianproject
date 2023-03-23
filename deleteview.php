<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$email=$_GET['email'];
$query="delete from sttable where email='$email'";
$con=@mysqli_connect('localhost','root','','stdata')or die ('server Not Available');
@mysqli_select_db($con,'stdata') or die ('Database Not Available');
mysqli_query($con,$query);
header("Location: editview.php");
?>

