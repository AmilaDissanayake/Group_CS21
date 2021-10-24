<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="../trainer/includes/dist/css/pignose.calendar.css" />
<link rel="stylesheet" type="text/css" href="../trainer/css/header.css" />

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script type="text/javascript" src="../trainer/includes/dist/js/pignose.calendar.full.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<nav>
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
    </div>
    <!-- <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div> -->
    <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class='admin_name'> Academy is open today </span>

        <i class='bx bx-chevron-down' class="btn-calendar"></i>
    </div>

    <div class="header-img">
        <img src="../trainer/media/dinuka.jpg" alt=" no image">
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