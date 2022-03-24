<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="../member/includes/dist/css/pignose.calendar.css" />
<link rel="stylesheet" type="text/css" href="../member/css/header.css" />

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script type="text/javascript" src="../member/includes/dist/js/pignose.calendar.full.min.js"></script>

<nav>
<?php

    $image_select = "SELECT image FROM member WHERE username='$username'";
    $result2 = mysqli_query($conn, $image_select);
    $image_row = mysqli_fetch_assoc($result2);
    $avatar = $image_row['image'];

?>
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
    </div>

    <div class="profile-details">
        <span class='day_status'> Academy is open today </span>
        <i class='bx bx-chevron-down' class="btn-calendar"></i>
    </div>

    <div class="header-img">
        <img src="./media/members/<?php echo $avatar ?>" alt=" no image">
    </div>
</nav>

<script>
    var $btn = $('.profile-details').pignoseCalendar({
        // apply: onApplyHandler,
        modal: true, // It means modal will be showed when you click the target button.
        buttons: false,
        minDate: '2021-10-19',
        theme: 'dark',
        schedules: [{
            name: 'holiday',
            date: '2021-10-21'
        }, {
            name: 'holiday',
            date: '2021-10-26'
        }, {
            name: 'holiday',
            date: '2021-10-22'
        }],

        scheduleOptions: {

            colors: {
                holiday: '#000101',
                seminar: '#5c6270',
                meetup: '#ef8080',
            }
        },


        // pickWeeks: true
    });
</script>