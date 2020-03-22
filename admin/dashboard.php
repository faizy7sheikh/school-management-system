<?php
session_start();
if($_SESSION['uid']){//if session is exists then redirect then page via url
}else{
    //redirect to login page and does'nt allow to open dashboard via url
    header('location:../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
       <div class="container">
          <h1>Student Management System</h1>
       </div>
       <div class="admin">
          <h1>Admin Dashboard</h1>
          <form action="">
             <table border="1">
                <tr>
                    <td>1</td>
                    <td><a href="insert.php">Insert Data</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="update.php">Update Data</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="delete.php">Delete Data</a></td>
                </tr>
                <tr>
                    <td colspan="2" id="btn"><input type="button" name="showinfo" value="Show Info"></td>
                </tr>
             </table>
          </form>
       </div>
    </div>
</body>
</html>