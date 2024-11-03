<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">

    <link rel="stylesheet" href="home_page.css"/>
    <title> Hostel Management System</title>
</head>
<body background="images/homebg.jpg ">
    <header>
        <!--logo and college name start-->
        <div class="row shadow">
            
            <div class="col-2 bg-white text-center"><center><img src="images/collegeicon.png" class="img-fluid logo"/></center></div>
            <div class="col-10 bg-white"><strong><em><font class="college_name">GOVERNMENT POLYTECHNIC, PURNEA<br/></font></em></strong>
                <center><font class="college_name1 ">DEPT. Of Science & Technology,(GOVT. Of Bihar)</font></center>
            </div>

        </div>
        
        <!--logo and college name end-->

        <!--menu division start-->
        <div class="row menu ">
            <div class="col-2">
                <center><button class="button m-1"  CssClass="buttonhower"><b><a href="index.html">HOME</a></b></button></center>
            </div>
            <div class="col-2">
                <center><button class="button m-1"  CssClass="buttonhower"><b><a href="#">DEPARTMENT</a></b></button></center>
            </div>
            <div class="col-2">
                <center><button class="button m-1"  CssClass="buttonhower"><b><a href="#">FACILITIES</a></b></button></center>
            </div>
            <div class="col-2">
                <center><button class="button m-1"  CssClass="buttonhower"><b><a href="#">GALLERY</a></b></button></center>
            </div>
            <div class="col-2">
                <center><button class="button m-1"  CssClass="buttonhower"><b><a href="#">NOTICE</a></b></button></center>
            </div>
            <div class="col-2">
                <center><button class="button m-1"  CssClass="buttonhower"><b><a href="#">CONTACT US</a></b></button></center>
            </div>
        </div>
        
        <!--menu division end-->
    </header>

    <!--hms body start-->
    <div class="parent-div d-flex align-items-center justify-content-center">
        <div class="child-div division_container"><center>
            <h1 class="hostel_h1">HOSTEL<br> MANAGEMENT<br>SYSTEM</h1></center>
        </div>
    </div>
    <!--hms body end-->

    <!--Login button division start-->
    
    <div class="button_container"><center>
        <div class="row">
            <div class="col"> 
                <button class="input_class m-1" ><b><a href="Student_login.php">STUDENT LOGIN</a></b></button>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col"> 
                <button class="input_class m-1" ><b><a href="Admin_login.php">ADMIN LOGIN</a></b></button>
            </div>
        </div></center>
    </div><br>
    <!--Login button division start-->



    <!--footer area start-->
    <?php include("./footer.php")?>
    <!--footer area start-->
</body>
</html>