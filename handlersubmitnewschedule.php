<?php
session_start();
include("includes/db.inc");

//$start_array = array();
//$stop_array = array();
echo $_POST['schedule_type'];
$error=array();
if(empty($_POST['schedule_type'])){
  $error[] = 'Please enter Schedule Type';
}
if(empty($_POST['newscheduledate'])){
  $error[] = 'Please enter Schedule Date';
}

if(isset($_POST['1periodstart'])){
  $start_array[0] = $_POST['1periodstart'];
}

if(isset($_POST['1periodstop'])){
  $stop_array[0] = $_POST['1periodstop'];
}

if(isset($_POST['2periodstart'])){
  $start_array[1] = $_POST['2periodstart'];
}

if(isset($_POST['2periodstop'])){
  $stop_array[1] = $_POST['2periodstop'];
}

if(isset($_POST['3periodstart'])){
  $start_array[2] = $_POST['3periodstart'];
}

if(isset($_POST['3periodstop'])){
  $stop_array[2] = $_POST['3periodstop'];
}

if(isset($_POST['4periodstart'])){
  $start_array[3] = $_POST['4periodstart'];
}

if(isset($_POST['4periodstop'])){
  $stop_array[3] = $_POST['4periodstop'];
}

if(isset($_POST['5periodstart'])){
  $start_array[4] = $_POST['5periodstart'];
}

if(isset($_POST['5periodstop'])){
  $stop_array[4] = $_POST['5periodstop'];
}

if(isset($_POST['srtperiodstart'])){
  $start_array[5] = $_POST['srtperiodstart'];
}
if(isset($_POST['srtperiodstop'])){
  $stop_array[5] = $_POST['srtperiodstop'];
}

if(isset($_POST['Alunchperiodstart'])){
  $start_array[6] = $_POST['Alunchperiodstart'];
}

if(isset($_POST['Alunchperiodstop'])){
  $stop_array[6] = $_POST['Alunchperiodstop'];
}

if(isset($_POST['Blunchperiodstart'])){
  $start_array[7] = $_POST['Blunchperiodstart'];
}

if(isset($_POST['Blunchperiodstop'])){
  $stop_array[7] = $_POST['Blunchperiodstop'];
}

if(isset($_POST['Clunchperiodstart'])){
  $start_array[8] = $_POST['Clunchperiodstart'];
}
if(isset($_POST['Clunchperiodstop'])){
  $stop_array[8] = $_POST['Clunchperiodstop'];
}


/* //Tried to allow new bell schedules to not need all periods
if(empty($_POST['1periodstart'])){
  $start_array[0] = null;
}
if(empty($_POST['1periodstop'])){
  $start_array[0] = null;
}
if(empty($_POST['2periodstart'])){
  $start_array[1] = null;
}
if(empty($_POST['2periodstop'])){
  $start_array[1] = null;
}
if(empty($_POST['3periodstart'])){
  $start_array[2] = null;
}
if(empty($_POST['3periodstop'])){
  $start_array[2] = null;
}
if(empty($_POST['4periodstart'])){
  $start_array[3] = null;
}
if(empty($_POST['4periodstop'])){
  $start_array[3] = null;
}
if(empty($_POST['5periodstart'])){
  $start_array[4] = null;
}
if(empty($_POST['5periodstop'])){
  $start_array[4] = null;
}
if(empty($_POST['srtperiodstart'])){
  $start_array[5] = null;
}
if(empty($_POST['srtperiodstop'])){
  $start_array[5] = null;
}
if(empty($_POST['Alunchperiodstart'])){
  $start_array[6] = null;
}
if(empty($_POST['Alunchperiodstop'])){
  $start_array[6] = null;
}
if(empty($_POST['Blunchperiodstart'])){
  $start_array[7] = null;
}
if(empty($_POST['Blunchperiodstop'])){
  $start_array[7] = null;
}
if(empty($_POST['Clunchperiodstart'])){
  $start_array[8] = null;
}
if(empty($_POST['Clunchperiodstop'])){
  $start_array[8] = null;
}
 */



if(empty($_POST['1periodstart'])){
  $error[] = 'Please enter 1st period start';
}
if(empty($_POST['1periodstop'])){
  $error[] = 'Please enter 1st period stop';
}
if(empty($_POST['2periodstart'])){
  $error[] = 'Please enter 2nd period start';
}
if(empty($_POST['2periodstop'])){
  $error[] = 'Please enter 2nd period stop';
}
/*
if(empty($_POST['3periodstart'])){
  $error[] = 'Please enter 3rd period start';
}
if(empty($_POST['3periodstop'])){
  $error[] = 'Please enter 3rd period stop';
}
 */
if(empty($_POST['4periodstart'])){
  $error[] = 'Please enter 4th period start';
}
if(empty($_POST['4periodstop'])){
  $error[] = 'Please enter 4th period stop';
}
if(empty($_POST['5periodstart'])){
  $error[] = 'Please enter 5th period start';
}
if(empty($_POST['5periodstop'])){
  $error[] = 'Please enter 5th period stop';
}
if(empty($_POST['srtperiodstart'])){
  $error[] = 'Please enter srt period start';
}
if(empty($_POST['srtperiodstop'])){
  $error[] = 'Please enter srt period stop';
}
if(empty($_POST['Alunchperiodstart'])){
  $error[] = 'Please enter Alunch period start';
}
if(empty($_POST['Alunchperiodstop'])){
  $error[] = 'Please enter Alunch period stop';
}
if(empty($_POST['Blunchperiodstart'])){
  $error[] = 'Please enter Blunch period start';
}
if(empty($_POST['Blunchperiodstop'])){
  $error[] = 'Please enter Blunch period stop';
}
if(empty($_POST['Clunchperiodstart'])){
  $error[] = 'Please enter Clunch period start';
}
if(empty($_POST['Clunchperiodstop'])){
  $error[] = 'Please enter Clunch period stop';
}


echo "<pre>". print_r($error, TRUE) . "</pre>";
if(!empty($error)){
  foreach ($error as $e) {
    echo $e;
  }
echo "<p>Please try again.</p>";
exit();
}
$schedule_type = "";
if(isset($_POST['schedule_type'])){
  $schedule_type = $_POST['schedule_type'];
}
$newscheduledate = "";
if(isset($_POST['newscheduledate'])){
  $newscheduledate = $_POST['newscheduledate'];
}

echo "<pre>". print_r($_POST, TRUE) . "</pre>";
echo "<p>New Schedule Type: " . $schedule_type . "</p>";
echo "<p>New Schedule Date: " . $newscheduledate . "</p>";
echo "<p>New Schedule Start Times: " . $start_array[$i] . "</p>";
echo "<p>New Schedule Stop Times: " . $stop_array[$i] . "</p>";

echo "</ul>";
$fileconnecter = fopen("data.txt", 'a');
$inputstring = $schedule_type . ", " . $newscheduledate . ", " . $start_array . ", " . $stop_array;

$inputstring = $inputstring . PHP_EOL;
fwrite($fileconnecter, $inputstring);
fclose($fileconnecter);

/*
//connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if(!$dbconnector){
die("DB Connection Error.". mysqli_connect_error());
} else {
     echo "<p>DB Connection was successful.</p>";
}

$query = "INSERT INTO schedulechange (schedule_type, newscheduledate)
VALUES ('{$_POST['schedule_type']}', '{$_POST['newscheduledate']}', '{$schedule_type}')";
//VALUES ('{$month_hash[$month]}', '{$day}', '{$schedule_type}')";

echo "<p>$query</p>";
$result = mysqli_query($dbconnector, $query);
if($result){
echo "<p>Inserted data into ScheduleChange table successfully.</p>";
}else{
echo "<p>Inserting data into ScheduleChange table failed.</p>";
}
 */

    $query2 = "INSERT INTO schedulechange (schedule_type, newscheduledate"; 
    $values = "VALUES ('$schedule_type',  '$newscheduledate'";
for($i = 0; $i < 9 ; $i++){
  if(isset($start_array[$i]) && isset($stop_array[$i]) && $start_array[$i] != "" && $stop_array[$i] != ""){
    $period = $i + 1;
    $period = $i + 1;
//     if($i == 2){
//       $period = "SRT/P+";
//     }
//     if($i > 2){
//       $period = $i;
//     }
    $index = $i;
    if($period == 6){
      $period = "srt";
    }
    if($period == 7){
      $period = "Alunch";
    }
    if($period == 8){
      $period = "Blunch";
    }
    if($period == 9){
      $period = "Clunch";
    }

    //echo "BABO: " . $start_array[$i] . "<br/>";
    $query2 .= ", " . $period . "periodstart, ". $period ."periodstop";
    $values .= ",'{$start_array[$index]}', '{$stop_array[$index]}'";
  }
}
    $query2 .= ") ". $values . ")";
    
    
if(isset($_POST['check']) and $_POST['check']=="update"){
  $query2 = "UPDATE schedulechange
    SET schedule_type='{$_POST['schedule_type']}',
        newscheduledate='{$_POST['newscheduledate']}',
        1periodstart='{$_POST['1periodstart']}',
        1periodstop='{$_POST['1periodstop']}',
        2periodstart='{$_POST['2periodstart']}',
        2periodstop='{$_POST['2periodstop']}',
        srtperiodstart='{$_POST['srtperiodstart']}',
        srtperiodstop='{$_POST['srtperiodstop']}',
        3periodstart='{$_POST['3periodstart']}',
        3periodstop='{$_POST['3periodstop']}',
        Alunchperiodstart='{$_POST['Alunchperiodstart']}',
        Alunchperiodstop='{$_POST['Alunchperiodstop']}',
        Blunchperiodstart='{$_POST['Blunchperiodstart']}',
        Blunchperiodstop='{$_POST['Blunchperiodstop']}',
        Clunchperiodstart='{$_POST['Clunchperiodstart']}',
        Clunchperiodstop='{$_POST['Clunchperiodstop']}',
        4periodstart='{$_POST['4periodstart']}',
        4periodstop='{$_POST['4periodstop']}',
        5periodstart='{$_POST['5periodstart']}',
        5periodstop='{$_POST['5periodstop']}'
    WHERE id={$_POST['id']}";
}
 
    echo "<p>$query2</p>";
    $result2 = mysqli_query($dbconnector, $query2);
    if($result2){
      header("Location: displaytodaysbellschedule.php");
    //echo "<p>Inserted data into ScheduleChange table successfully.</p>";
    }else{
    echo "<p>Inserting data into ScheduleChange table failed.</p>";
    }


include("includes/footer.inc");
?>
