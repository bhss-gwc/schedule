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

<script>
function check_input() {
  an = document.getElementById('new_sched_type').value;
  bn = document.getElementById('new_sched_date').value;
  cn = document.getElementById('new_1pstart').value;
  dn = document.getElementById('new_1pstop').value;
  en = document.getElementById('new_2pstart').value;
  fn = document.getElementById('new_2pstop').value;
  gn = document.getElementById('new_srtpstart').value;
  hn = document.getElementById('new_srtpstop').value;
  jn = document.getElementById('new_alunchpstart').value;
  kn = document.getElementById('new_alunchpstop').value;
  ln = document.getElementById('new_blunchpstart').value;
  mn = document.getElementById('new_blunchpstop').value;
  nn = document.getElementById('new_clunchpstart').value;
  on = document.getElementById('new_clunchpstop').value;
  pn = document.getElementById('new_4pstart').value;
  qn = document.getElementById('new_4pstop').value;
  rn = document.getElementById('new_5pstart').value;
  sn = document.getElementById('new_5pstop').value;
  if (an == "" || bn == "" || cn == "" || dn == "" || en == "" || fn == "" || gn == "" || hn == "" || jn == "" || kn == "" || ln == "" || mn == "" || nn == "" || on == "" || pn == "" || qn == "" || rn == "" || sn == "") {
    alert('Make sure all fields are filled in.');
    return false;
  }
}
</script>

<h2 align=center>Submit a New Bell Schedule</h2>
<p style="color:red;" align=center>This form is for creating an entirely new bell schedule for a certain day.</p>
<form action=handlersubmitnewschedule.php method="POST">
<table align=center>
<tr>
<td><b>1. Name of new schedule type</b> (ex: ISTEP math part 1):
<input id="new_sched_type" type = "text" name = "schedule_type"/><br><br></td></tr>
<tr><td><b>2. Date of new bell schedule:</b>
<input id="new_sched_date" type = "date" name = "newscheduledate"/><br><br></td></tr>
<tr><td><b>3. Insert bell schedule times:</b><br><br>
<table align=center width=70%>
<tr><td colspan="2">1st period:</td><td>
<input id="new_1pstart" type = "time" name = "1periodstart"/> - <input id="new_1pstop" type = "time" name = "1periodstop"/><br></td></tr>
<tr><td colspan="2">2nd period:</td><td>
<input id="new_2pstart" type = "time" name = "2periodstart"/> - <input id="new_2pstop" type = "time" name = "2periodstop"/><br></td></tr>
<tr><td colspan="2">SRT/P+:</td><td>
<input id="new_srtpstart" type = "time" name = "srtperiodstart"/> - <input id="new_srtpstop" type = "time" name = "srtperiodstop"/><br></td></tr>
<tr><td rowspan="3">3rd period:</td>
<td>A lunch:</td><td> 
<input id="new_alunchpstart" type = "time" name = "Alunchperiodstart"/> - <input id="new_alunchpstop" type = "time" name = "Alunchperiodstop"/><br></td></tr>
<tr><td>B lunch:</td><td> 
<input id="new_blunchpstart" type = "time" name = "Blunchperiodstart"/> - <input id="new_blunchpstop" type = "time" name = "Blunchperiodstop"/><br></td></tr>
<tr><td>C lunch:</td><td> 
<input id="new_clunchpstart" type = "time" name = "Clunchperiodstart"/> - <input id="new_clunchpstop" type = "time" name = "Clunchperiodstop"/><br></td></tr>
<tr><td colspan="2">4th period:</td><td>
<input id="new_4pstart" type = "time" name = "4periodstart"/> - <input id="new_4pstop" type = "time" name = "4periodstop"/><br></td></tr>
<tr><td colspan="2">5th period:</td><td>
<input id="new_5pstart" type = "time" name = "5periodstart"/> - <input id="new_5pstop" type = "time" name = "5periodstop"/><br></td></tr>
</table>
</td>
</tr>
<tr><td><br><div style="text-align:center"><input onclick="return check_input()" type = "submit" value = "Submit"><br><br></div></td>

</table>
</form>

<?php



include("includes/footer.inc");
?>
