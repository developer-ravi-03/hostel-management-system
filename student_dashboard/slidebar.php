<?php

@include '../include/connectdb.php';
       
    $mobile=$_SESSION['mobile'];

    $sql = "SELECT * FROM student_registration where e_mail='$mobile' OR mobile='$mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    

?>

<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title"><img src="../admin/image/college_name_pic.jpg" height="70px" width="260px"></span>
                    </a>
                </li>
                <li>
                  <div class="user">
                    <img src="../admin./image/nouser.png">
                  </div>
                  <div class="user_name">
                    <h1><center><u><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></u></center></h1>
                  </div>
                 
                </li>
                <li>
                    <a href="./personalinfo.php">
                        <span class="icon"><ion-icon name="laptop-outline"></ion-icon></span>
                        <span class="title">Personal info</span>
                    </a>
                </li>
                <li>
                    <a href="./hostel_info.php">
                        <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                        <span class="title">Hostel info</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="archive-outline"></ion-icon></span>
                        <span class="title">Payment Summary</span>
                    </a>
                </li>
                <li>
                    <a href="../include/logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
</div>


<?php
}
} 
else 
{
echo "0 results";
}

?>