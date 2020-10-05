<?php
// Always start this first
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<img src="https://pbs.twimg.com/profile_images/986982577704615936/g0npeZDz_400x400.jpg" style="float:right;width:100px;height:100px;">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1 {
font-family: Arial, Helvetica, sans-serif;
}
h2 {
font-family: Arial, Helvetica, sans-serif;
}
</style>


    <style>

    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    .navbar {
        overflow: hidden;
        background-color: #751299;
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

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .show {
        display: block;
    }
    </style>
    </head>
  <body style="font-family:Arial, Helvetica, sans-serif;">

<h1>Bloomington High School South</h1>
<div class="navbar">
  <a href="displayregularbellschedule.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Clubs 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="displaymeetings.php">Club Meetings</a>
      <a href="displayclubinfo.php">Club Info</a>
      <a href="introduce.php">Introduce Your Club</a>
    </div>
  </div>
<?php
if(isset($_SESSION['user_id'])){
    $admin_username = "admin";
    if(isset($_SESSION['club-name']) && $_SESSION['club-name'] == $admin_username){
        echo "<a href=\"bell_schedule.php\">Different Bell Schedules</a>
        <a href=\"displaybellschedule.php\">Today's Bell Schedules</a>
        <a href=\"submitschedulechange.php\">Submit a Schedule Change</a>
        <a href=\"submitnewschedule.php\">Submit a New Schedule</a>";
    }
    echo "<a href=\"logout.php\">Logout</a>";
}else{

?>
  <a href="login.php">Login</a> 
  <?php
}
// My daddy put this debugging trick:
// This tells why cookie is not trustable variable. e.g., a space in cooke 
// varilabe is replaced with '+' sign.
// echo print_r($_COOKIE);

?>
</div>

<?php
$uri = $_SERVER['REQUEST_URI'];
$basename = basename($uri);
?>
