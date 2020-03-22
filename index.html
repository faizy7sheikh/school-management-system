<?php
include('header.php');
include('admin/connection.php');
?>
    <div class="main">
    <h1>Student Information</h1>
    <a href="login.php" >Admin Login</a>
    <form action="index.php" method="POST">
    <table cellspacing="12">
    <tr>
    <td> Roll no :</td>
    <td><input type="number" name="roll" required min="1"></td>
    </tr><br><br>
    <tr> 
       <td>
       Name 
       </td>
       <td> <input type="text" name="name" required>
       </td>
    </tr><br><br>
    <tr>
    <td>Standard
    </td>
    <td width="40px"><select name="std" required>
         <option value=""></option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
    </select></td>
    </tr><br><br>
    <tr><td colspan="2" id="btn"> <input type="submit" value="show info" name="submit" id="sbbtn"></td>
    </tr>
    </table>
    </form>
    </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $rollno=$_POST['roll'];
    $name=$_POST['name'];
    $standard=$_POST['std'];
    $query="SELECT * FROM addstudent WHERE rollno='$rollno' AND std='$standard' AND fname='$name'";
    $run=mysqli_query($conn,$query);
    $num=mysqli_num_rows($run);
    if($num<1){
        ?>
        <script>alert("No Data is Found");
        window.open('index.php','_self');
        </script>
        <?php
    }else{
        $data=mysqli_fetch_assoc($run);
        ?>
        <table border="1" class="t2">
               <tr>
                   <td colspan="10" align="center" id="logo">Student details</td>
               </tr>
               <tr>
                   <td rowspan="8"><img src="dataimg/<?php echo $data['img'];?>" width="120px" height="130px"></td>
               </tr>
               <tr>
                   <th>Name</th>
                   <td><?php echo $data['fname']." "; echo $data['lname'];?></td>
               </tr>
               <tr>
                   <th>Roll no</th>
                   <td><?php echo $data['rollno']?></td>
               </tr>
               <tr>
                   <th>D.O.B</th>
                   <td><?php echo $data['dob'];?></td>
               </tr>
               <tr>
                   <th>Email</th>
                   <td id="email"><?php echo $data['email'];?></td>
               </tr>
               <tr>
                   <th>parent's name</th>
                   <td><?php echo $data['pname'];?></td>
               </tr>
               <tr>
                   <th>Contact</th>
                   <td><?php echo $data['cno'];?></td>
               </tr>
               <tr>
                   <th>Standard</th>
                   <td><?php echo $data['std'];?></td>
               </tr>
        <?php
    }
}
?>
</table>