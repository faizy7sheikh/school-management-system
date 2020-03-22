<?php
session_start();
if($_SESSION['uid']){

}else{
    header('location:../login.php');
}
include('connection.php');
$id=$_GET['sid'];
$query="DELETE FROM `addstudent` WHERE id='$id'";
$run=mysqli_query($conn,$query);
if($run){
    ?>
    <script>alert("Data Deleted Successfully");
    window.open('dashboard.php','_self');
    </script>
    <?php
}else{
    echo "Error";
}
?>