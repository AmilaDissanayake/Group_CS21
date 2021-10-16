

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>




        <div class="home-content">
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
            </div>

            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone Number</th>
                            <th>Payment Date</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                    <tr>
                            <td>Gota</td>
                            <td>Cer</td>
                            <td>0702181481</td>
                            <td>2021-10-10</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>Mahi</td>
                            <td>Cer</td>
                            <td>0702181480</td>
                            <td>2021-09-10</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>Basil</td>
                            <td>Cer</td>
                            <td>0702183481</td>
                            <td>2021-08-10</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <td>Namal</td>
                            <td>Baby</td>
                            <td>0705683481</td>
                            <td>2021-07-10</td>
                            <td>Paid</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#search").keypress(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'includes/member-page.php',
                        data: {
                            name: $("#search").val(),
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });
                });
            });
        </script>
    </section>
    <?php include "includes/footer.php" ?>


</body>

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