<?php
$username="root";
$password="";
$server="localhost";
$db="register";

$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
    //echo "connection successful";

}
else
{
    die("no connection".mysqli_connect_error());
}


?>