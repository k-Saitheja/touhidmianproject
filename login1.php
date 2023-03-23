<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$email=$_GET['Username'];
$password=$_GET['password'];
$con =@mysqli_connect('localhost','root','','stdata');
$query = "select email,pass from sttable where email='$email' and pass='$password'";
$result = mysqli_query($con, $query);
$count=mysqli_num_rows($result);
echo $count;

/*while($row = mysqli_fetch_assoc($result)){
    
    if($row['email']== $email && $row['pass']== $password)
    {
            $flag=1;
    }
}*/
?>
<html>
<head>
</head>
<body>
<?php
if($count==0){
    //echo "user not exist please register";
    ?>
    <h1> user not exist</h1><!-- comment -->
    <?php
}
    else if ($email=='admin@gmail.com' && $password=='admin'){
   
    ?>
    <h1><a href="editview.php" >Click here to goto Adimn pannel</a></h1>
    <?php 
}

   
else{
    
   // echo "click here to go to user pannel";
    
    ?>
    <h1><a href="edit.php" >click here to goto user pannel</a></h1><!-- comment -->
    <?php 
    
}
?>
</body>
</html>