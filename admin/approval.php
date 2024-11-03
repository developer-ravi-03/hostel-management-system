<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Approval - Page</title>
    <link rel="stylesheet" href="./stylesheet.css"/>
</head>
<body>
    <?php include("./navigation.php"); ?>
    <div class="dashboard_container">
        <div class="dashoard_name">
            <h1><font size="20px">HOSTEL MANAGEMENT SYSTEM</font></h1>
        </div>
        <div class="approval_name">
            <h1><u>Approval</u></h1>
        </div>

        <?php
            $sql = "SELECT * FROM student_registration where hostel_status=0";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
    
        ?>


        <div class="user_detail">
            <div class="user">
                <img src="../admin/image/nouser.png">
            </div>
            <div class="name_box">
            <h2 class="name"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></h2>
            <h4 class="name_1">Branch:- <?php echo $row['branch']?></h4>
            </div >
            <div class="button_allote">
                <button class="allote_button">Alocate Room</button>
                <button class="delete_button">Delete Request</button>
                <button class="view_button">View Detail</button>
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
        
    </div>
    <!--footer area start-->
    <?php include("./footer.php"); ?>
    <!--footer area end-->
</body>
</html>