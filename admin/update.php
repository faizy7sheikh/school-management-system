<?php
include('connection.php');//database connection
include('header.php');//header design
session_start(); //start of session
if($_SESSION['uid']){//tracking of user login

}else{
    header('location:../login.php');//if false it redirect to login page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="small" action="" method="POST" enctype="multipart/form-data">
    <input type="number" name="rollno">
    <input type="number" name="standard">
    <input type="submit" name="submit">
    </form>
</body>
</html>
<table border="1">
      <tr id="head">
          <th>No</th>
          <th>Roll no</th>
          <th>Fname</th>
          <th>Lname</th>
          <th>Email</th>
          <th>D.O.B</th>
          <th>Parent's Name</th>
          <th>Contact</th>
          <th>Standard</th>
          <th>Image</th>
          <th>Update</th>
      </tr>
<?php
if(isset($_POST['submit'])){//check wheather the button is true or not
    $rollnumber=$_POST['rollno'];    //user input through html
    $standard=$_POST['standard'];    // user input
    $query="SELECT * FROM `addstudent` WHERE rollno='$rollnumber' AND std='$standard'"; //query to retrieve data from database
    $run=mysqli_query($conn,$query);   //execution of query
    if($num=mysqli_num_rows($run)<1){  //check if number of data available in database
        echo "<tr><td colspan=9>No Records Founds</td></tr>";
    }else{
        $count=0;
        while($data=mysqli_fetch_assoc($run)){  //fetching the information from database untill become 0
            $count++;   //counting the number of data available in database
            ?>
            <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $data['rollno'];?></td>
                <td><?php echo $data['fname'];?></td>
                <td><?php echo $data['lname'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['dob'];?></td>
                <td><?php echo $data['pname'];?></td>
                <td><?php echo $data['cno'];?></td>
                <td><?php echo $data['std'];?></td>
                <td><img src="../dataimg/<?php echo $data['img'];?>" width="120px" height="120px"></td>
                <td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
            </tr>
            <?php
        }
    }

}
?>
</table>