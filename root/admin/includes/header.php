<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="../admin/includes/dist/css/pignose.calendar.css" />
<link rel="stylesheet" type="text/css" href="../admin/css/header.css" />

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script type="text/javascript" src="../admin/includes/dist/js/pignose.calendar.full.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<?php
// include "includes/db.php";
//session_start();

$my_username = $_SESSION['username'];
$my_user_type = $_SESSION['user_type'];

$my_image_sql = "SELECT image FROM $my_user_type WHERE username = '$my_username'";
$my_image_sql_run = mysqli_query($conn, $my_image_sql);
$my_row = mysqli_fetch_array($my_image_sql_run);

$my_image = $my_row[0];

$sql = "SELECT * FROM close_times";
$result = mysqli_query($conn, $sql);
$schedules = '';

$schedule_array = array();
while ($row = mysqli_fetch_assoc($result)) {

    $schedules .= "{name: . '{$row["time_slot"]}' ., . date: . '{$row["date"]}' .}*";

    //$schedule_array("name => $row[time_slot]", "date => $row[date]");
}

//echo $schedule_array;

//$schedules = '[' . $schedules . ']';

//echo $schedules;



?>

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
        <a href="./profile.php"><img src="./media/admins/<?php echo $my_image ?>" alt=" no image"></a>
    </div>
</nav>

<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    var fortnightAway = new Date(Date.now() + 12096e5);

    var dd2 = String(fortnightAway.getDate()).padStart(2, '0');
    var mm2 = String(fortnightAway.getMonth() + 1).padStart(2, '0');
    var yyyy2 = fortnightAway.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    todayafter = yyyy2 + '-' + mm2 + '-' + dd2;

    var javaScriptVar = "<?php echo $schedules; ?>";
    //var outputstr = javaScriptVar.replace(/'/g, '');

    dotsRemoved = javaScriptVar.replaceAll('.', '');
    usingSplit = dotsRemoved.split('*');

    // json object.
    contents = '{"firstName":"John", "lastName":"Doe"}';

    var myArray = [];

    for (i in usingSplit) {

        console.log(usingSplit[i]);

        //var obj = JSON.parse(JSON.stringify(usingSplit[i]));
        // console.log(obj);
        // console.log(typeof(obj));
        myArray.push(usingSplit[i]);

    }

    myArray.pop();

    console.log(myArray)

    var newArray = myArray.map(s => eval('null,' + s));

    console.log(newArray);

    // Option 1: through the use of an array.
    // $jsonArray = json_decode($contents, true);

    // var obj = {};
    // for (var i = 0; i < usingSplit.length; i++) {
    //     var split = usingSplit[i].split(':');
    //     obj[usingSplit[0].trim()] = usingSplit[1].trim();
    // }

    var $btn = $('.profile-details').pignoseCalendar({
        //apply: onApplyHandler,
        modal: true, // It means modal will be showed when you click the target button.
        buttons: false,
        minDate: today,
        maxDate: todayafter,
        theme: 'dark',
        schedules: newArray,
        scheduleOptions: {

            colors: {
                'Full': '#FF0000',
                'Morning': '#FFA500',
                'Evening': '#FFFF00',
            }
        },

        contents: {



        },


        // select: function(date, context) {
        //     alert('events for this date', toString(context.storage.schedules));
        //     console.log('events for this date', toString(context.storage.schedules));
        // }
    });

    // document.getElementsByClassName("pignose-calendar-top-year").textContent += " This is the text from javascript.";


    //console.log(dotsRemoved);
    //// console.log(typeof(usingSplit[0]));
    //onsole.log(usingSplit[1]);

    // var myJsonString = JSON.stringify(usingSplit);
    //console.log(myArray);

    // let data = ["{lat:-8.089057558100306,lng:112.15251445770264}", "{lat:-8.100954123313068,lng:112.15251445770264}", "{lat:-8.100954123313068,lng:112.1782636642456}", "{lat:-8.087867882261257,lng:112.17800617218018}", "{lat:-8.089057558100306,lng:112.15251445770264}"];



    //console.log(myArray.map(s => eval('null,' + s)));
    // var myJsonString2 = JSON.stringify(dotsRemoved);
    // console.log(typeof(dotsRemoved))

    // var removed = usingSplit.replace(/"/g, '');
    //console.log($jsonArray)
</script>