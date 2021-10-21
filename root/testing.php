<!DOCTYPE html>
<html lang="en">

<head>

    <title>PIGNOSE Calendar</title>
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script type="text/javascript" src="dist/js/pignose.calendar.full.min.js"></script>

</head>

<body>


    <a href="#" class="btn-calendar">Open Modal</a>




    <script>
        var $btn = $('.btn-calendar').pignoseCalendar({
            // apply: onApplyHandler,
            modal: true, // It means modal will be showed when you click the target button.
            buttons: true
        });
    </script>


</body>

</html>