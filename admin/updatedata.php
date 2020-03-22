<?php
session_start();
if($_SESSION['uid']){

}else{
    header('location:../login.php');
}
include('connection.php');
$id=$_POST['id'];
$roll=$_POST['rollno'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$pname=$_POST['pname'];
$contact=$_POST['contact'];
$std=$_POST['std'];
$pic=$_FILES['pic'];//for file store in 
//inserting file
$name=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];//temporary image name in database
$folder="../dataimg/".$name;
//moving file in specific destination
move_uploaded_file($tmp,$folder);
//updating the value of user data into table address
$query="UPDATE `addstudent` SET `rollno` = '$roll', `fname` = '$fname', `email` = '$email', `dob` = '$dob', `pname` = '$pname', `cno` = '$contact', `std` = '$std', `img` = '$name' WHERE `id` = '$id'";
$run=mysqli_query($conn,$query);
if($run){
    ?>
    <script>alert("Data updated successfully");
    window.open("updateform.php?sid=<?php echo $id;?>",'_self');
    </script>
    <?php
}else{
    echo "Error to update data";
}
