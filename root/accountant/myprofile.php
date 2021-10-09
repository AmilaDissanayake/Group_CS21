<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">
        <?php include "includes/header.php" ?>
    </section>


    <div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">

            <!-- Ad Here -->
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="https://codeconvey.com/html-code-for-student-profile" title="Back to tutorial page">Back to Tutorial</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    <div class="col-rt-12">
        <div class="rt-heading">
            <h1>Student Profile Page Design Example</h1>
                <p>A responsive student profile page design.</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

<!-- Student Profile -->
<div class="student-profile py-4">
<div class="container">
    <div class="row">
    <div class="col-lg-4">
        <div class="card shadow-sm">
        <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3>Ishmam Ahasan Samin</h3>
        </div>
        <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
        </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow-sm">
        <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
        </div>
        <div class="card-body pt-0">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Roll</th>
                <td width="2%">:</td>
                <td>125</td>
            </tr>
            <tr>
                <th width="30%">Academic Year	</th>
                <td width="2%">:</td>
                <td>2020</td>
            </tr>
            <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
            </tr>
            <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td>Group</td>
            <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>B+</td>
            </tr>
            </table>
        </div>
        </div>
        <div style="height: 26px"></div>
        <div class="card shadow-sm">
        <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
        </div>
        <div class="card-body pt-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- partial -->
    </div>
		</div>
    </div>
</section>



    <!-- Analytics -->

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>

</body>

</html>