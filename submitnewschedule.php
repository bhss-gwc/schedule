<?php
include("includes/header.inc");

$currentmonth = date("n");
$currentdate = date("j");

$admin_username = "bhssadmin";
  if(!(isset($_SESSION['club-name']) && $_SESSION['club-name'] == $admin_username)){
    echo "You don't have permission to view this page.";
    return;
  }
?>

<h2 align=center>Submit a New Bell Schedule</h2>
<p style="color:red;" align=center>This form is for creating an entirely new bell schedule for a certain day.</p>
<form action=handlersubmitnewschedule.php method="POST">
<table align=center>
<tr>
<td><b>1. Name of new schedule type</b> (ex: ISTEP math part 1):
<input type = "text" name = "schedule_type"/><br><br></td></tr>
<tr><td><b>2. Date of new bell schedule:</b>
<input type = "date" name = "newscheduledate"/><br><br></td></tr>
<tr><td><b>3. Insert bell schedule times:</b><br><br>
<table align=center width=70%>
<tr><td colspan="2">1st period:</td><td>
<input type = "time" name = "1periodstart"/> - <input type = "time" name = "1periodstop"/><br></td></tr>
<tr><td colspan="2">2nd period:</td><td>
<input type = "time" name = "2periodstart"/> - <input type = "time" name = "2periodstop"/><br></td></tr>
<tr><td colspan="2">SRT/P+:</td><td>
<input type = "time" name = "srtperiodstart"/> - <input type = "time" name = "srtperiodstop"/><br></td></tr>
<tr><td rowspan="3">3rd period:</td>
<td>A lunch:</td><td> 
<input type = "time" name = "Alunchperiodstart"/> - <input type = "time" name = "Alunchperiodstop"/><br></td></tr>
<tr><td>B lunch:</td><td> 
<input type = "time" name = "Blunchperiodstart"/> - <input type = "time" name = "Blunchperiodstop"/><br></td></tr>
<tr><td>C lunch:</td><td> 
<input type = "time" name = "Clunchperiodstart"/> - <input type = "time" name = "Clunchperiodstop"/><br></td></tr>
<tr><td colspan="2">4th period:</td><td>
<input type = "time" name = "4periodstart"/> - <input type = "time" name = "4periodstop"/><br></td></tr>
<tr><td colspan="2">5th period:</td><td>
<input type = "time" name = "5periodstart"/> - <input type = "time" name = "5periodstop"/><br></td></tr>
</table>
</td>
</tr>
<tr><td><br><div style="text-align:center"><input type = "submit" value = "Submit"><br><br></div></td>

</table>
</form>

<?php



include("includes/footer.inc");
?>
