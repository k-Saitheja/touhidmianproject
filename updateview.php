
<?php
$firstname=$_REQUEST['firstname'];
$middlename=$_REQUEST['middlename'];
$lastname=$_REQUEST['lastname'];
$gender=$_REQUEST['gender'];
$countryCode=$_REQUEST['countryCode'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$pass=$$_REQUEST['pass'];
$repass=$_REQUEST['repass'];
 $query = "update sttable set firstname='$firstname',middlename='$middlename',lastname='$lastname',gender='$gender',countryCode='$counrtyCode',phone='$phone',address='$address',email='$email',pass='$pass',repass='$repass'  where email=trim('$email')";
    $con =@mysqli_connect('localhost', 'root', '','stdata') or die ('Server Not Available');
    @mysqli_select_db( $con ,'stdata') or die ('Database Not Available');
    
    mysqli_query( $con,$query);
    header("Location: editview.php");
?>
