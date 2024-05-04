<?php

$phpconnect = mysqli_connect("localhost","dependablelc_facebook","+UgcDVQO-V2*","dependablelc_facebook");
 
if (mysqli_connect_errno())
{
echo "Connection Failed; " . mysqli_connect_error();
}
else
{
echo "Connection Established.<br>";
}

?>