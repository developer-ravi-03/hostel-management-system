<?php

@include '../include/connectdb.php';
?>

<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title"><img src="./image/college_name_pic.jpg" height="70px" width="260px"></span>
                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./approval.php">
                        <span class="icon"><ion-icon name="laptop-outline"></ion-icon></span>
                        <span class="title">Approval</span>
                    </a>
                </li>
                <li>
                    <a href="./manage_room.php">
                        <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                        <span class="title">Manage Room</span>
                    </a>
                </li>
                <li>
                    <a href="./vacant_room.php">
                        <span class="icon"><ion-icon name="archive-outline"></ion-icon></span>
                        <span class="title">Vaccate Room</span>
                    </a>
                </li>
                <li>
                    <a href="./student_record.php">
                        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Student Record</span>
                    </a>
                </li>
                <li >
                    <a href="./admin_info.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Admin Info</span>
                    </a>
                </li>
                <li>
                    <a href="../include/logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
</div>
    <!-- <script>
        let list = document.querySelectorAll('.navigation li');
        function activelink(){
            list.forEach((item)=>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item)=>
        item.addEventListener('mouseover',activelink));
    </script> -->