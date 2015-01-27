
<html> <head>




<script type="text/javascript">
  daysInMonth=[31,28,31,30,31,30,31,31,30,31,30,31]
  monthNames=['January','February','March','April','May','June',
              'July','August','September','October','November','December'];

  // Returns the number of days in the month in a given year (January=0)
  function getDaysInMonth(month,year){
    if ((month==1)&&(year%4==0)&&((year%100!=0)||(year%400==0))){
      return 29;
    }else{
      return daysInMonth[month];
    }
  }

  // Performs an action when a date is clicked
  function dateClicked(day,month,year){
    document.forms.calendar.date.value=
      // month+'/'+day+'/'+year; // American
      day+'/'+month+'/'+year;    // European
      // year+'/'+month+'/'+day' // Far Eastern
  }

  // Sets the displayed month
  function setDisplayedMonth(month){
    if (month<0){
      alert('You have reached the beginning of this calendar');
    }else if (month>=months){
      alert('You have reached the end of this calendar');
    }else{
      for (var i=0;i<months;i++){
        document.getElementById('calendarMonth'+i).style.display='none';
      }
      document.getElementById('calendarMonth'+month).style.display='block';
    }
  }
</script>










</head> 

<style type="text/css">
  .calendarMonth{
    border-collapse:collapse;
    background-color:#eef;
  }
  .calendarMonth th{
  }
  .calendarMonth .calendarTitle{
    background-color:#ddf;
  }
  .calendarMonth .calendarPrevious{
    background-color:#ddf;
  }
  .calendarMonth .calendarNext{
    background-color:#ddf;
  }
  .calendarEmpty{
  }
  .calendarDay{
    background:#fff;
    border:1px solid black;
    text-align:center;
    width:2em;
  }
</style>

<body><form id="calendar">
  <table>
    <tr>
      <td><label for="date">Date:</label></td>
      <td><input type="text" id="date" name="date" value="04/02/2005"></td>
    </tr>
    <tr><td></td><td>
      <script type="text/javascript">
        var month=0;
        var year=2005;
        months=12;
        for (var i=0;i<months;i++){
          document.writeln('<table class="calendarMonth" '
              +'id="calendarMonth'+i+'" cellspacing="0">');
          document.writeln('<tr>'
              +'<th class="calendarPrevious" onClick="setDisplayedMonth('+(i-1)+')"><</th>'
              +'<th class="calendarTitle" colspan="5">'
              +monthNames[month]+' '+year
              +'</th>'
              +'<th class="calendarNext" onClick="setDisplayedMonth('+(i+1)+')">></th>'
              +'</tr>');
          document.writeln('<tr><th>Sun</th><th>Mon</th><th>Tue</th>'
              +'<th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>');
          firstDayDate=new Date(year,month,1);
          firstDay=firstDayDate.getDay();
          for (j=0;j<42;j++){
            if (j%7==0) document.write('<tr>');
            if ((j=firstDay+getDaysInMonth(month,year))){
              document.write('<td class="calendarEmpty"></td>');
            }else{
              document.write('<td class="calendarDay" '
                  +'onClick="dateClicked('
                  +(j-firstDay+1)+','+(month+1)+','+year+')">'
                  +(j-firstDay+1)+'');
            }
            if (j%7==6) document.write('</tr>');
          }
          document.writeln('</table>');
          month++;
          if (month>=12){
            month=0;
            year++;
          }
        }
        setDisplayedMonth(3);
      </script>
    </td></tr>
  </table>
</form>

</body></html>