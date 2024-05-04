<!DOCTYPE html>
<html>
<body>
<?php
include ('Connect/connect.php');
$email=$_POST["email"];
$password=$_POST["password"];

 
$phpdatabase = "INSERT INTO info (email,password)
VALUES ('$email','$password')";
 
if(mysqli_query( $phpconnect,$phpdatabase))
{  
header('Location:index.html',true);
}
else
{  
echo "Data Insertion Failed; ".mysqli_error($phpconnect);

}  

 
mysqli_close($phpconnect);

?> 
 
</body>
</html>
