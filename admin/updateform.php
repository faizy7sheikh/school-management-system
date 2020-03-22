<?php 
include('connection.php');
include('header.php');
session_start();
if($_SESSION['uid']){

}else{
    header('location:../login.php');
}
//retrieve the data from url with the method of global variable GET
$id=$_GET['sid'];
$query="SELECT * FROM `addstudent` WHERE id='$id'";
$run=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($run);
?>
 <form action="updatedata.php" method="POST" enctype="multipart/form-data"> 
            <table border="1" id="tab">
                  <tr>
                      <td>Roll no:</td>
                      <td><input type="number" name="rollno" value=<?php echo $result['rollno'];?> min="1" required></td>
                  </tr>
                  <tr>
                      <td>First_Name</td>
                      <td><input type="text" name="fname" value="<?php echo $result['fname'];?>"S maxlength="12" required></td>
                  </tr>
                  <tr>
                      <td>Last_Name</td>
                      <td><input type="text" name="lname" value="<?php echo $result['lname'];?>" placeholder="Enter Last Name" maxlength="10"  required></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><input type="email" name="email" value="<?php echo $result['email'];?>" placeholder="Enter Email" maxlength="50" required></td>
                  </tr>
                  <tr>
                      <td>D.O.B</td>
                      <td><input name="dob" type="date" value="<?php echo $result['dob'];?>" placeholder="Enter your date of birth" min="1980" max="2020" required></td>
                  </tr>
                  <tr>
                      <td>Parent's Name</td>
                      <td><input type="text" name="pname" value="<?php echo $result['pname'];?>" placeholder="Enter your parent's name" maxlength="20" required></td>
                  </tr>
                  <tr>
                      <td>Contact</td>
                      <td><input type="tel" name="contact" value="<?php echo $result['cno'];?>" placeholder="Enter mobile number" max="13" required></td>
                  </tr>
                  <tr>
                      <td>Standard</td>
                      <td><input type="number" name="std" value="<?php echo $result['std'];?>" placeholder="Enter Grade" min="1" max="10" required></td>
                  </tr>
                  <tr>
                      <td>Image</td>
                      <td><input type="file" name="pic" value="<?php echo $result['img'];?>" placeholder="upload file" required></td>
                  </tr>
                  <tr>
                      <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                      <td colspan="2"><input id="btn" type="submit" name="submit" value="Upload"></td>
                  </tr>
            </table>
       </form>