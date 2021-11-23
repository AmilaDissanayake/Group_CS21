const mnumber = document.getElementById('form');

form.addEventListener('submit', e => {
	e.preventDefault(); 
	var result = checkInputs();
    // if( result === true){
      document.getElementById("form").submit();
    // }
});

function checkInputs(){

  var date = document.getElementById('bk_date');
  var time = document.getElementById('time_slot');

  var dateValid = false;
  var timeValid = false;

  var dateValue = date.value.trim();
  var timeValue = time.value.trim();

  if (timeValue === '1') {
    timeValue = '6.00 a.m. -  8.00 a.m.';
    timeValid = true;
  }else if (timeValue === '2') {
    timeValue = '8.00 a.m. - 10.00 a.m.';
    timeValid = true;
  }else if (timeValue === '3') {
    timeValue = '10.00 a.m. - 12.00 a.m.';
    timeValid = true;
  }else if (timeValue === '4') {
    timeValue = '12.00 a.m. -  2.00 p.m.';
    timeValid = true;
  }else if (timeValue === '5') {
    timeValue = ' 2.00 p.m. -  4.00 p.m.';
    timeValid = true;
  }else if (timeValue === '6') {
    timeValue = ' 4.00 p.m. -  6.00 p.m.';
    timeValid = true;
  }else if (timeValue === '7') {
    timeValue = ' 6.00 p.m. -  8.00 p.m.';
    timeValid = true;
  }else if (timeValue === '8') {
    timeValue = ' 8.00 p.m. - 10.00 p.m.';
    timeValid = true;
  }
  
  return timeValue;
}

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      center: 'addEventButton'
    },
    customButtons: {
      addEventButton: {
        text: 'Add event',
        click: function() {
          var dateStr = prompt('Enter a date in YYYY-MM-DD format');
          var date = new Date(dateStr + 'T00:00:00'); // will be in local time
          
          var set_time = checkInputs();
          alert(set_time);
          if (!isNaN(date.valueOf())) {
            calendar.addEvent({
              title: set_time,
              start: date,
              allDay: true
            });
            alert('Great. Now, update your database...');
          } else {
            alert('Invalid date.');
          }
        }
      }
    }
  });

  calendar.render();
});



