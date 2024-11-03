<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/f8378f7fb1.js" crossorigin="anonymous"></script>
    <title>Student - Dashboard</title>
    <link rel="stylesheet" href="./stylesheet.css"/>
</head>
<body>
    <?php include("./navigation.php"); ?>

    <div class="dashboard_container">
        <div class="dashoard_name">
            <h1><font size="20px">HOSTEL MANAGEMENT SYSTEM</font></h1>
        </div>
        <div class="dashboard_name">
            <h1><u>Dashboard</u></h1>
        </div>
        <div class="row_1">
            <div class="container_1">
                <div class="container_child_1">
                    <div class="card-body">
                        <div class="container_child">
                                <div class="text_1">
                                    Total Student</div>
                                <div class=" text_2">900</div>                                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_1">
                <div class="container_child_2">
                    <div class="card-body">
                        <div class="container_child">
                            <div class="text_1">
                                Total Room</div>
                            <div class=" text_2">1000</div>                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_1">
                <div class="container_child_3">
                    <div class="card-body">
                        <div class="container_child">
                            <div class="text_1">
                                Alloted Room</div>
                            <div class=" text_2">567</div>                      
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_1">
                <div class="container_child_4">
                    <div class="card-body">
                        <div class="container_child">
                            <div class="text_1">
                                Empty Room</div>
                            <div class=" text_2">473</div>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--footer area start-->
    <?php include("./footer.php"); ?>
    <!--footer area end-->

</body>
</html>