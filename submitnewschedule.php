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
<tr><td><b>1. Name of new schedule type</b> (ex: ISTEP math part 1):
<input type = "text" name = "schedule_type"/><br><br></td>
<tr><td><b>2. Date of new bell schedule:</b>
<input type = "date" name = "newscheduledate"/><br><br></td>
<tr><td><b>3. Insert bell schedule times:</b><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1st period:
<input type = "time" name = "1periodstart"/> - <input type = "time" name = "1periodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd period:
<input type = "time" name = "2periodstart"/> - <input type = "time" name = "2periodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SRT/P+:
<input type = "time" name = "srtperiodstart"/> - <input type = "time" name = "srtperiodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3rd period:
<input type = "time" name = "3periodstart"/> - <input type = "time" name = "3periodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A lunch: 
<input type = "time" name = "Alunchperiodstart"/> - <input type = "time" name = "Alunchperiodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B lunch: 
<input type = "time" name = "Blunchperiodstart"/> - <input type = "time" name = "Blunchperiodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C lunch: 
<input type = "time" name = "Clunchperiodstart"/> - <input type = "time" name = "Clunchperiodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4th period:
<input type = "time" name = "4periodstart"/> - <input type = "time" name = "4periodstop"/><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5th period:
<input type = "time" name = "5periodstart"/> - <input type = "time" name = "5periodstop"/><br><br></td>

<tr><td><div style="text-align:center"><input type = "submit" value = "Submit"><br><br></div></td>

</table>
</form>

<?php



include("includes/footer.inc");
?>
