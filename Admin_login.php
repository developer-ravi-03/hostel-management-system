<?php

@include './include/connectdb.php';


$not_insert=false;
if(isset($_POST['admin_login'])){

   $email =$_POST['uid'];
   $pass=$_POST['login_password'];
   $mobile=$_POST['uid'];

   $select = " SELECT * FROM admin WHERE ( email = '$email' || mobile= '$mobile') && pass = '$pass' ";
   $result = $conn->query($select);

   

   if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {$_SESSION['name'] = $row['first_name'];
    }}
    $count=mysqli_num_rows($result);
   
   if($count==1)
   {
        header("location:./admin/index.php");
        $insert = true;
        $_SESSION['mobile']=$email;
        
        
        
   }     
   else{
        $not_insert = true;
        mysqli_close($conn);
   }

};
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin Login</title>
    <link rel="Stylesheet" href="Student_Login.css" />
</head>
<body background="images/login.jpg">
    <div class="container">
        <p id="p" ><b><u>Admin Login</u></b></p>
        <form action="./Admin_login.php" method="POST" enctype="multiplart/form-data">
                <label class="user_id">Admin User id</label>
                <input type="text" name="uid" id="uid" placeholder="User Id" required>
                <label class="password">Admin Password</label>
                <input type="password" name="login_password" id="pass" placeholder="Password" required>

                <?php
                    if ($not_insert == true) 
                    {
                        echo "<label class='msg'>Email/Phone or Password are wrong.</label>";
                    }
            
                ?>

                <button class="btn" name="admin_login">LOG IN</button>
                
    
        </form>
    </div>
     <!--footer area start-->
     <?php include("./footer.php")?>
    <!--footer area start-->
</body>
</html>
