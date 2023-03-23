<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$countryCode=$_POST['countryCode'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$con =@mysqli_connect('localhost','root','','stdata');
$query = "insert into sttable values('$firstname','$middlename','$lastname','$gender','$countryCode','$phone','$address','$email','$pass','$repass')";
$result = mysqli_query($con, $query);
if ($result){
    echo"data inserted sucessfully";
    
}
else{
    echo"data not inserted sucessfully";
}
?>
<html>
    <boby>
        <center>
       
        <h2>your id</h2><?php echo $email;?>
        <h2>your password</h2><?php echo $pass;?> 
         </center>
    </body>
</html>