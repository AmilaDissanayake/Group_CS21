<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="sidebar">
    <div class="logo-details">
        <p>PH</p>
        <span class="logo_name">FITNESS</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="./dashboard.php" class="active">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li id="utton">
            <a href="./members.php">
                <i class='bx bx-group'></i>
                <span class="links_name">Members</span>
            </a>


        </li>
        <style>
            .active2 {
                list-style: circle;
                height: 150px;
            }
        </style>
        <script>
            $('#utton').click(function() {
                $(this).addClass("active2");
            });
        </script>
        <li>
            <a href="#">
                <i class='bx bx-id-card'></i>
                <span class="links_name">Trainers</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-money'></i>
                <span class="links_name">Payments</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-time'></i>
                <span class="links_name">Open/Close Times</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-dumbbell'></i>
                <span class="links_name">Inventory</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-bar-chart-alt-2'></i>
                <span class="links_name">Reports</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-user-pin'></i>
                <span class="links_name">Profile</span>
            </a>
        </li>
        <!-- <li>
            <a href="#">
                <i class='bx bx-heart'></i>
                <span class="links_name">Favrorites</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Setting</span>
            </a>
        </li> -->
        <li class="log_out">
            <a href="../admin/includes/logout.php">
                <i class='bx bx-log-out'></i>
                <span class=" links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>