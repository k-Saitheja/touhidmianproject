<?php
  $email=$_GET['email'];
    $query = "select * from sttable where email='$email'";
    $con =@mysqli_connect('localhost','root','','stdata') or die ('Server Not Available');
    @mysqli_select_db($con ,'stdata') or die ('Database Not Available');
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
    </head>
    <body>
        <form action="updateview.php" method="get">
            <table width="50%" cellpadding="10">
                <tbody>
                     <tr>
                        <td>FIRST NAME:</td>
                        <td><input type="text" readonly="readonly" name="firtname" value="<?php echo $row['firstname'];?>" />*</td>
                    </tr>
                     <tr>
                        <td>MIDDLE NAME: </td>
                        <td><input type="text" name="middlename" value="<?php echo $row['middlename'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>LAST NAME: </td>
                        <td><input type="text" name="lastname"  value="<?php echo $row['lastname'];?>" />*</td>
                
                    </tr>
                     <tr>
                        <td>GENDER:</td>
                        <td><input type="text" name="gender" id="gender" value="<?php echo $row['gender'];?>" />*</td>
                
                    </tr>
                     <tr>
                        <td>COUNTRY CODE:</td>
                        <td><input type="text" name="countryCode" placeholder="+91" value="<?php echo $row['countryCode'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>EMAIL: </td>
                        <td><input type="text" name="email" id="email" value="<?php echo $row['email'];?>" />*</td>
                
                    </tr>
                    
                     <tr>
                        <td>PHONE NUMBER: </td>
                        <td><input type="text" name="phone" placeholder="Phone number" value="<?php echo $row['phone'];?>" />*</td>
                
                    </tr>
                     <tr>
                        <td>ADDRESS: </td>
                        <td><input type="text" name="address" id="address" value="<?php echo $row['address'];?>" />*</td>
                
                    </tr>
                    <tr>
                        <td>PASSWORD: </td>
                        <td><input type="text" name="pass"  value="<?php echo $row['pass'];?>" />*</td>
                
                    </tr>
                      <tr>
                        <td>RE-TYPE PASSWORD: </td>
                        <td><input type="Password" name="repass" placeholder="conform password" value="<?php echo $row['repass'];?>" />*</td>
                
                    </tr>
                   
                    
                    
                        <td align="center" colspan="2">
                            <input type="submit"  value="Update view" />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" onclick="history.go(-1);"  value="Cancel" />
                        </td>
                    </tr>                    
                </tbody>
            </table>
        </form>
    </body>
</html>
