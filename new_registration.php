<?php

@include './include/connectdb.php';



    $not_insert=false;
if (isset($_POST['signup-submit'])) 
{

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $fathers_name = $_POST['fathers_name'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $roll_no = $_POST['roll_no'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $session = $_POST['session'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pass=$_POST['create_password'];
    $cpass=$_POST['confirm_password'];

    $date=date('d-m-y');  //Date Generate auto.

    
//new
    $select = " SELECT * FROM student_registration WHERE e_mail = '$email' && mobile = '$mobile_no' ";

   $result = mysqli_query($conn, $select);

    //Password Matching code start
   if ($pass != $cpass) {
    echo("Error... Passwords do not match");
    exit;
    }
    //Password Matching code start

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }
//new
else{
    $sql = "insert into student_registration(id,first_name,middle_name,last_name,father_name,gender,date_of_birth,roll_no,branch,semester,session,mobile,password,cpass,e_mail,address,date) values(id,'$first_name','$middle_name','$last_name','$fathers_name','$gender','$DOB','$roll_no','$branch','$semester','$session','$mobile_no','$pass','$cpass','$email','$address','$date')";
    mysqli_query($conn, $sql);
    header("location:./new_registration.php?msg=You Have been successfully registered.");
    
    mysqli_close($conn);
    
    }
    

};
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEW REGISTRATION PAGE</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="Stylesheet" href="Student_Login.css" />
</head>
<body>
    <div class="container">
        <p id="p"><b><u>Sign Up Here</u></b></p>
        <form method="post" action="./new_registration.php" enctype="multiplart/form-data">     
            <!-- pop up box here user already exist -->
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
                <label class="first_name">First Name:</label>
                <input type="text" name="first_name" placeholder="First Name" required>

                <label class="middle_name">Middle Name:</label>
                <input type="text" name="middle_name" placeholder="Middle Name">
                
                <label class="last_name">Last Name:</label>
                <input type="text" name="last_name" placeholder="Last Name" required>

                <!-- <label class="first_name">Upload picture:</label>
                <input type="file" name="uploadfile" value="" placeholder="upload your picture" required>
                <button class="btn-primary" type="submit" name="upload">UPLOAD</button> -->

                <label class="fathers_name">Father's Name:</label>
                <input type="text" name="fathers_name" placeholder="Father's Name" required>
                
                <label for="gender" class="gender">Choose Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="" >none</option>
                    <option value="male" >MALE</option>
                    <option value="female">FEMALE</option>
                </select>

                <label class="DOB">Date Of Birth:</label>
                <input type="date" name="DOB" required>

                <label class="roll_no">Roll No:</label>
                <input type="number" name="roll_no" placeholder="Roll no" required>

                <label class="branch">Branch:</label>
                <select name="branch" required>
                    <option value="" >none</option>
                    <option value="CSE" >Computer Science And Engineering</option>
                    <option value="Civil">Civil</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Electronics">Electronics</option>
                </select>

                <label class="semester">Semester:</label>
                <select name="semester" required>
                    <option value="" >none</option>
                    <option value="first" >1<sup>st</sup> Semester</option>
                    <option value="second">2<sup>nd</sup> Semester</option>
                    <option value="third">3<sup>rd</sup> Semester</option>
                    <option value="fourth">4<sup>th</sup> Semester</option>
                    <option value="fifth">5<sup>th</sup> Semester</option>
                    <option value="sixth">6<sup>th</sup> Semester</option>
                </select>
                
                <label class="session">Session:</label>
                <input type="year" name="session" placeholder="Session" required>

                <label class="mobile_no">Mobile No:</label>
                <input type="tel" name="mobile_no" placeholder="Mobile No" required>
                
                <label class="email">Email:</label>
                <input type="email" name="email" placeholder="Example@gmail.com" required>

                <label class="address">Address:</label>
                <input type="address" name="address" placeholder="Address" required>
                
                <!-- <label class="payment">Payment ScreenShot:</label>
                <input type="file" name="img"  required /> -->

                <label class="create_password">Password:</label>
                <input type="password" name="create_password" placeholder="Password" required>
                
                <label class="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            
                <button type="submit" name="signup-submit" class="btn">SIGN UP</button>
        </form>
        <center>
            <br/>
            <h2>Already a member? <a href="Student_login.php">login here
            </a></h2>
        </center>
    </div>
     <!--footer area start-->
     <?php include("./footer.php")?>
    <!--footer area start-->
    <?php 
				
				if(isset($_GET['msg']))
				{
					
	?>				

<!-- now pop up box and login link in them -->
<script>
function myFunction() {
  alert("<?php echo $_GET['msg']; ?>");
}
myFunction();
</script>

    <?php	
					
		}
   ?>


</body>