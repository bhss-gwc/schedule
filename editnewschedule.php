<?php
include("includes/header.inc");
?>


<?php

$id = $_GET['id'];

$query = "SELECT * FROM schedulechange";
if(isset($id)){
  $query = "SELECT * FROM schedulechange WHERE id ='". $id ."'";
}
$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <h2 align=center>Edit New Bell Schedule</h2>
<form action = \"handlersubmitnewschedule.php\" method=\"POST\">
<table align=center>
<tr><td><b>1. Name of new schedule type</b> (ex: ISTEP math part 1):
<input type = \"text\" name = \"schedule_type\" value=\"{$row['schedule_type']}\" /><br><br></td>
<tr><td><b>2. Date of new bell schedule:</b>
<input type = \"date\" name = \"newscheduledate\" value=\"{$row['newscheduledate']}\" /><br><br></td>
<tr><td><b>3. Insert bell schedule times:</b><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1st period:
<input type = \"time\" name = \"1periodstart\" value=\"{$row['1periodstart']}\" /> - <input type = \"time\" name = \"1periodstop\" value=\"{$row['1periodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2nd period:
<input type = \"time\" name = \"2periodstart\" value=\"{$row['2periodstart']}\" /> - <input type = \"time\" name = \"2periodstop\" value=\"{$row['2periodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SRT/P+:
<input type = \"time\" name = \"srtperiodstart\" value=\"{$row['srtperiodstart']}\" /> - <input type = \"time\" name = \"srtperiodstop\" value=\"{$row['srtperiodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3rd period:
<input type = \"time\" name = \"3periodstart\" value=\"{$row['3periodstart']}\" /> - <input type = \"time\" name = \"3periodstop\" value=\"{$row['3periodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A lunch: 
<input type = \"time\" name = \"Alunchperiodstart\" value=\"{$row['Alunchperiodstart']}\" /> - <input type = \"time\" name = \"Alunchperiodstop\" value=\"{$row['Alunchperiodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B lunch: 
<input type = \"time\" name = \"Blunchperiodstart\" value=\"{$row['Blunchperiodstart']}\" /> - <input type = \"time\" name = \"Blunchperiodstop\" value=\"{$row['Blunchperiodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C lunch: 
<input type = \"time\" name = \"Clunchperiodstart\" value=\"{$row['Clunchperiodstart']}\" /> - <input type = \"time\" name = \"Clunchperiodstop\" value=\"{$row['Clunchperiodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4th period:
<input type = \"time\" name = \"4periodstart\" value=\"{$row['4periodstart']}\" /> - <input type = \"time\" name = \"4periodstop\" value=\"{$row['4periodstop']}\" /><br></td>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5th period:
<input type = \"time\" name = \"5periodstart\" value=\"{$row['5periodstart']}\" /> - <input type = \"time\" name = \"5periodstop\" value=\"{$row['5periodstop']}\" /><br><br></td>

<input type = \"hidden\" name=\"check\" value = \"update\" />
<input type = \"hidden\" name=\"id\" value = \"{$row['id']}\" />
<tr><td><div style=\"text-align:center\"><input type = \"submit\" value = \"Submit\"><br><br></div></td>

</table>
    
    </form>";
  }
}

?>

<?php
include("includes/footer.inc");
?>
