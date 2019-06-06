
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="text-center">Calander</h1>
        <div id="calendar"></div>
        
    </body>
    <script>
        $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'addEventButton',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2018-11-16',
        navLinks: true,
        editable: true,
        eventLimit: true,
        events: [{
            title: 'Simple static event',
            start: '2018-11-16',
            description: 'Super cool event'
            },

        ],
        customButtons: {
            addEventButton: {
            text: 'Add new event',
            click: function () {
                var dateStr = prompt('Enter date in YYYY-MM-DD format');
                var date = moment(dateStr);

                if (date.isValid()) {
                $('#calendar').fullCalendar('renderEvent', {
                    title: 'Dynamic event',
                    start: date,
                    allDay: true
                });
                } else {
                alert('Invalid Date');
                }

            }
            }
        },
        dayClick: function (date, jsEvent, view) {
            var date = moment(date);

            if (date.isValid()) {
            $('#calendar').fullCalendar('renderEvent', {
                title: 'Dynamic event from date click',
                start: date,
                allDay: true
            });
            } else {
            alert('Invalid');
            }
        },
        });
    </script>
</html>
