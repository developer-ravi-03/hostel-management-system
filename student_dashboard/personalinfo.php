<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/f8378f7fb1.js" crossorigin="anonymous"></script>
    <title>Personal - info</title>
    <link rel="stylesheet" href="./stylesheet.css"/>
</head>
<body>
<?php include("./slidebar.php");?>
<div class="dashboard_container">
        <div class="dashoard_name">
            <h1><font size="20px">HOSTEL MANAGEMENT SYSTEM</font></h1>
        </div>
        <div class="personal_info">
            <h1><u>Personal Info</u></h1>
        </div>

        <?php
        
       
        $mobile=$_SESSION['mobile'];

$sql = "SELECT * FROM student_registration where e_mail='$mobile' OR mobile='$mobile'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    ?>


<div class="info_class">
          <p>
            <h3>Name:- <?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?><h3>
          </p>
          <p>
            <h3>Branch:- <?php echo $row['branch']?><h3>
          </p>
          <p>
            <h3>Roll No.:- <?php echo $row['roll_no']?><h3>
          </p>
          <p>
            <h3>Gender:- <?php echo $row['gender']?><h3>
          </p>
          <p>
            <h3>Date of Birth:- <?php echo $row['date_of_birth']?><h3>
          </p>
          <p>
            <h3>Semester:- <?php echo $row['semester']?><h3>
          </p>
          <p>
            <h3>Session:- <?php echo $row['session']?><h3>
          </p>
          <p>
            <h3>Mobile Number:- <?php echo $row['mobile']?><h3>
          </p>
          <p>
            <h3>Email Id:- <?php echo $row['e_mail']?><h3>
          </p>
          <p>
            <h3>Address:- <?php echo $row['address']?><h3>
          </p>
          
<?php
  }
} 
else 
{
  echo "0 results";
}
?>
        <button class="Edit_student">Edit &nbsp;<ion-icon name="create-outline"></ion-icon></button>
        </div>        
          <?php include("./footer.php");?>
        </div>

</body>
</html>
      