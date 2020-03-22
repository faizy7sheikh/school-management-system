<?php
include('connection.php');
include('header.php');
session_start();
if($_SESSION['uid']){

}else{
    header('location:../login.php');
}
?>

       <form action="" method="POST" enctype="multipart/form-data"> 
            <table border="1" id="tab">
                  <tr>
                      <td>Roll no:</td>
                      <td><input type="number" name="rollno" placeholder="Enter roll number" min="1" required></td>
                  </tr>
                  <tr>
                      <td>First_Name</td>
                      <td><input type="text" name="fname" placeholder="Enter First Name" maxlength="12" required></td>
                  </tr>
                  <tr>
                      <td>Last_Name</td>
                      <td><input type="text" name="lname" placeholder="Enter Last Name" maxlength="10"  required></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><input type="email" name="email" placeholder="Enter Email" maxlength="50" required></td>
                  </tr>
                  <tr>
                      <td>D.O.B</td>
                      <td><input name="dob" type="date" placeholder="Enter your date of birth" min="1980" max="2020" required></td>
                  </tr>
                  <tr>
                      <td>Parent's Name</td>
                      <td><input type="text" name="pname" placeholder="Enter your parent's name" maxlength="20" required></td>
                  </tr>
                  <tr>
                      <td>Contact</td>
                      <td><input type="tel" name="contact" placeholder="Enter mobile number" max="13" required></td>
                  </tr>
                  <tr>
                      <td>Standard</td>
                      <td><input type="number" name="std" placeholder="Enter Grade" min="1" max="10" required></td>
                  </tr>
                  <tr>
                      <td>Image</td>
                      <td><input type="file" name="pic" placeholder="upload file" required></td>
                  </tr>
                  <tr>
                      <td colspan="2"><input id="btn" type="submit" name="submit" value="Upload"></td>
                  </tr>
            </table>
       </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){//if submit is click then
    //retrieve the user data from the form
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
    //inserting the value of user data into table address
    $query="INSERT INTO addstudent VALUES ('NULL','$roll','$fname','$lname','$email','$dob','$pname','$contact','$std','$name')";
    $run=mysqli_query($conn,$query);
    if($run){
        ?>
        <script>alert("Data is inserted successfully !!");
        window.open('dashboard.php','_self');
        </script>
        <?php
    }else{
        ?>
        <script>alert ("Fill all the mandotary file !!");
        window.open('insert.php','_self');
        </script>
        <?php
    }
}
?>