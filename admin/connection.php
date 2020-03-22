<?php
error_reporting(0);
$servername="localhost";
$username="root";
$passwd="";
$database="sms"; //student base database in php
$conn=mysqli_connect($servername,$username,$passwd,$database);
if($conn){
    //connection is establish
}else{
    echo "Database is not connected";
}
     //end of php connection
?>