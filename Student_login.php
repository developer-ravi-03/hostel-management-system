<?php

@include './include/connectdb.php';


$not_insert=false;
if(isset($_POST['login'])){

   $email =$_POST['email'];
   $pass=$_POST['create_password'];
   $mobile=$_POST['email'];

   $select = " SELECT * FROM student_registration WHERE ( e_mail = '$email' || mobile= '$mobile') && password = '$pass' ";
   $result = $conn->query($select);

   

   if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {$_SESSION['name'] = $row['first_name'];
    }}
    $count=mysqli_num_rows($result);
   
   if($count==1)
   {
        header("location:./student_dashboard/index.php");
        $insert = true;
        $_SESSION['mobile']=$email;
        
        
        
   }     
   else{
        $not_insert = true;
        mysqli_close($conn);
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="Stylesheet" href="Student_Login.css" />
</head>
<body background="images/login.jpg">
    <div class="container">
        <p id="p"><b><u>Student Login</u></b></p>
        <form action="./Student_login.php" method="POST" enctype="multiplart/form-data">
                <label class="user_id">Email/Phone number</label>
                <input type="email/number" name="email" id="uid" placeholder="Email/Mobile number" required>
                <label class="password">Password</label>
                <input type="password" name="create_password" id="pass" placeholder="Date of Birth" required><br>
                <?php
                    if ($not_insert == true) 
                    {
                        echo "<label class='msg'>Email/Phone or Password are wrong.</label>";
                    }
            
                ?>
                <button class="btn" name="login">LOG IN</button> 
        </form>
        <center>
            <a href="./new_registration.php">
                <button class="NewUserReg">New User Registration</button>
            </a>
        </center>
    </div>
     <!--footer area start-->
     <?php include("./footer.php")?>
    <!--footer area start-->

</body>
</html>
