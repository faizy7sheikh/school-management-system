<?php
error_reporting(0);//it doesnot show uid is undefined
include('header.php'); //include header file of html and css
//checking session is exists or not
session_start(); 
if($_SESSION['uid']){
    //if true then redirect dashboard page
    header('location:admin/dashboard.php');
    ?>
    <script>alert("Wel come To Dashboard");</script>
    <?php
}
//database connection creation
$servername="localhost";
$username="root";
$password="";
$databasename="sms";
//connection with mysqli
$conn=mysqli_connect($servername,$username,$password,$databasename);
if($conn){
}else{
    echo die("database is not connectd".mysqli_connect_error());
}
?>
<div class="log_main">
   <h1>Admin Login</h1>
   <div class="abs">
   <form action="" method="POST">
   <table class="log">
   <tr>
   <td>
   <label>Admin</label>
   </td>
   <td>
   <input type="text" name="uname" required maxlength="12" placeholder="Enter user_Name">
   </td>
   </tr>
   <tr><td>
   <label>Password</label></td>
   <td>
   <input type="password" name="passwd" required max="12" placeholder="Enter password">
   </td>
   </tr>
   <tr>
   <td colspan="2">
   <input type="submit" name="login" value="Login" id="lbtn">
   </td>
   </tr>
   </table>
   </form>
   </div>
</div>
<?php
if(isset($_POST['login'])){
    $uname=$_POST['uname'];
    $passwd=$_POST['passwd'];
    //checking the existence database
    $query="SELECT * FROM `login` WHERE uname='$uname' AND passwd='$passwd'";
    //run the query
    $run=mysqli_query($conn,$query);
    //check the number of rows fetch
    $num=mysqli_num_rows($run);
    if($num<1){ //if number of rows is less than 1 ie 0
        ?>
        <script>alert("Uname and password doesn't Exits");
        window.open('login.php','_self');
        </script>
        <?php

    }else{
        $result=mysqli_fetch_assoc($run);
        $id=$result['id'];
        $_SESSION['uid']=$id;
        header('location:admin/dashboard.php');
    }
}
?>