<!DOCTYPE html>
<html>
<head>
  <img src="https://pbs.twimg.com/profile_images/986982577704615936/g0npeZDz_400x400.jpg" style="float:right;width:100px;height:100px;">

  <style>
  h1 {
  font-family: Arial, Helvetica, sans-serif;
  }
  h2 {
  font-family: Arial, Helvetica, sans-serif;
  }
  </style>

  <h1>Bloomington High School South</h1>

      <style>
      .navbar {
        overflow: hidden;
        background-color: #751299;
        font-family: Arial, Helvetica, sans-serif;
      }

      .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      .dropdown {
        float: left;
        overflow: hidden;
      }

      .dropdown .dropbtn {
        cursor: pointer;
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
        background-color: #D2B4DE;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {
        background-color: #ddd;
      }

      .show {
        display: block;
      }
      </style>
</head>

<body>

      <div class="navbar">
        <a href="introduce.php">Introduce Your Club</a>
        <a href="displaymeetings.php"> Club Meetings</a>
        <a href="displayclubinfo.php">Club Info</a>
        <a href="bell_schedule.php">Different Bell Schedules</a>
        <a href="displaybellschedule.php">Today's Bell Schedule</a>
        <a href="day_selector.php">Submit a Schedule Change</a>
        <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()">Dropdown
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="http://www.bloomingtonsouth.org/plus/login.php">Panther Plus</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        </div>
      </div>

<?php

//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

$currentmonth = date("n");
$currentdate = date("j");

?>
<h2>Regular Bell Schedule</h2><br>

Select a month and day to see that date's bell schedule:

<?php

//$currentmonth = 1;//use php query thing

echo '<SELECT name = "month">';
if($currentmonth <= 8 and $currentmonth > 5){
  echo '<option value = "08">Aug</option>';
}
if($currentmonth <= 9 and $currentmonth > 5){
  echo '<option value = "09">Sep</option>';
}
if($currentmonth <= 10 and $currentmonth > 5){
  echo '<option value = "10">Oct</option>';
}
if($currentmonth <= 11 and $currentmonth > 5){
  echo '<option value = "11">Nov</option>';
}
if($currentmonth <= 12 and $currentmonth > 5){
  echo '<option value = "12">Dec</option>';
}
if($currentmonth <= 1){
  echo '<option value = "01">Jan</option>';
}
if($currentmonth <= 2){
  echo '<option value = "02">Feb</option>';
}
if($currentmonth <= 3){
  echo '<option value = "03">Mar</option>';
}
if($currentmonth <= 4){
  echo '<option value = "04">Apr</option>';
}
if($currentmonth <= 5){
  echo '<option value = "05">May</option>';
}


echo '</select>';

echo '<SELECT name = "date">';
  for ($i = 1; $i < 32; $i++){
    echo '<option value = "' . $i . '">' . $i . '</option>';
  }
echo '</select>';

?>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Period</th>
        <th></th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>1</th>
        <td></td>
        <td>8:00 - 9:05</td>
      </tr>
      <tr>
        <th>2</th>
        <td></td>
        <td>9:10 - 10:10</td>
      </tr>
      <tr>
      	<th>SRT/P+</th>
        <td></td>
        <td>10:15 - 11:00</td>
      </tr>
      <tr>
        <th rowspan="3">3</th>
        <td>Lunch A</td>
        <td>11:05 - 11:35</td>
      </tr>
      <tr>
      	<td>Lunch B</td>
        <td>11:40 - 12:10</td>
      </tr>
      <tr>
      	<td>Lunch C</td>
        <td>12:15 - 12:45</td>
      </tr>
      <tr>
      	<th>4</th>
        <td></td>
        <td>12:50 - 1:50</td>
      </tr>
      <tr>
      	<th>5</th>
        <td></td>
        <td>1:55 - 2:55</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
