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
  <body style="font-family:Arial, Helvetica, sans-serif;">

    <div class="navbar">
      <a href="introduce.php">Introduce Your Club</a>
      <a href="displaymeetings.php"> Club Meetings</a>
      <a href="displayallclubinfo.php">Club Info</a>
      <a href="displayregularbellschedule.php">Regular Bell Schedule</a>
      <a href="displayweirdscheduledates.php">Weird Bell Schedules</a>
      <a href="submitschedulechange.php">Submit a Schedule Change</a>
      <a href="submitnewschedule.php">Submit a New Schedule</a>
    </div>

    <?php

    $month_hash = array();
    $month_hash['01'] = "Jan";
    $month_hash['02'] = "Feb";
    $month_hash['03'] = "Mar";
    $month_hash['04'] = "Apr";
    $month_hash['05'] = "May";
    $month_hash['06'] = "Jun";
    $month_hash['07'] = "Jul";
    $month_hash['08'] = "Aug";
    $month_hash['09'] = "Sep";
    $month_hash['10'] = "Oct";
    $month_hash['11'] = "Nov";
    $month_hash['12'] = "Dec";
    ?>
