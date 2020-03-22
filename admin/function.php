<?php
include('connection.php');
function showData($rollno,$name){
    $query="SELECT * FROM `addstudent` WHERE rollno='$rollno' AND fname='$name'";
    $run=mysqli_query($conn,$query);
    $num=mysqli_num_rows($run);
    if($num<1){
        echo "data is not exist";
    }else{
        echo "database is exists";
    }
}