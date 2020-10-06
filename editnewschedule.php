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
<input type = \"text\" name = \"schedule_type\" value=\"{$row['schedule_type']}\" /><br><br></td></tr>
<tr><td><b>2. Date of new bell schedule:</b>
<input type = \"date\" name = \"newscheduledate\" value=\"{$row['newscheduledate']}\" /><br><br></td></tr>
<tr><td><b>3. Insert bell schedule times:</b><br><br>
<table align=center width=70%>
<tr><td colspan=2>1st period:</td><td>
<input type = \"time\" name = \"1periodstart\" value=\"{$row['1periodstart']}\" /> - <input type = \"time\" name = \"1periodstop\" value=\"{$row['1periodstop']}\" /><br></td></tr>
<tr><td colspan=2>2nd period:</td><td>
<input type = \"time\" name = \"2periodstart\" value=\"{$row['2periodstart']}\" /> - <input type = \"time\" name = \"2periodstop\" value=\"{$row['2periodstop']}\" /><br></td></tr>
<tr><td colspan=2>SRT/P+:</td><td>
<input type = \"time\" name = \"srtperiodstart\" value=\"{$row['srtperiodstart']}\" /> - <input type = \"time\" name = \"srtperiodstop\" value=\"{$row['srtperiodstop']}\" /><br></td></tr>
<tr><td rowspan=3>3rd period:</td>
<td>A lunch:</td><td>
<input type = \"time\" name = \"Alunchperiodstart\" value=\"{$row['Alunchperiodstart']}\" /> - <input type = \"time\" name = \"Alunchperiodstop\" value=\"{$row['Alunchperiodstop']}\" /><br></td></tr>
<tr><td>B lunch:</td><td> 
<input type = \"time\" name = \"Blunchperiodstart\" value=\"{$row['Blunchperiodstart']}\" /> - <input type = \"time\" name = \"Blunchperiodstop\" value=\"{$row['Blunchperiodstop']}\" /><br></td></tr>
<tr><td>C lunch:</td><td>
<input type = \"time\" name = \"Clunchperiodstart\" value=\"{$row['Clunchperiodstart']}\" /> - <input type = \"time\" name = \"Clunchperiodstop\" value=\"{$row['Clunchperiodstop']}\" /><br></td></tr>
<tr><td colspan=2>4th period:</td><td>
<input type = \"time\" name = \"4periodstart\" value=\"{$row['4periodstart']}\" /> - <input type = \"time\" name = \"4periodstop\" value=\"{$row['4periodstop']}\" /><br></td></tr>
<tr><td colspan=2>5th period:</td><td>
<input type = \"time\" name = \"5periodstart\" value=\"{$row['5periodstart']}\" /> - <input type = \"time\" name = \"5periodstop\" value=\"{$row['5periodstop']}\" /><br></td></tr>
</table>
</td>
</tr>

<input type = \"hidden\" name=\"check\" value = \"update\" />
<input type = \"hidden\" name=\"id\" value = \"{$row['id']}\" />
<tr><td><br><div style=\"text-align:center\"><input type = \"submit\" value = \"Submit\"><br><br></div></td>

</table>
    
    </form>";
  }
}

?>

<?php
include("includes/footer.inc");
?>
