<?php
// Always start this first
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
        background-color: #620185;
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
    .topnav-right {
    float: right;
    }
    </style>
    </head>
  <body style="font-family:Arial, Helvetica, sans-serif;">

<table style="margin-top:-10px;margin-bottom:-25px;position:relative;" border=0>
  <tr>
    <td><img src="https://pbs.twimg.com/profile_images/986982577704615936/g0npeZDz_400x400.jpg" style="float:left;width:70px;height:70px;"></td>
    <td><h1>Bloomington High School South</h1></td>
  </tr>
</table>

<?php
if(isset($_SESSION['club-name'])){
  echo "<div align=right>Hello, <b>" . $_SESSION['club-name'] . "</b></div>";
}else{
  echo "<div align=right>&nbsp;</div>";
}
?>
<div class="navbar">
  <a href="displaytodaysbellschedule.php">Today's Bell Schedule</a>
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
//    $admin_username = "admin";
//    if(isset($_SESSION['club-name']) && $_SESSION['club-name'] == $admin_username){
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'officer'){
        echo "<a href=\"submitnewschedule.php\">Submit a New Bell Schedule</a>";
    }
    echo "<div class='topnav-right'><a href=\"logout.php\">Logout</a></div>";
}else{

?>
  <div class='topnav-right'><a href="login.php">Login</a></div> 
  <?php
}

// This tells why cookie is not trustable variable. e.g., a space in cooke 
// varilabe is replaced with '+' sign.
// echo print_r($_COOKIE);

?>
</div>

<?php
$uri = $_SERVER['REQUEST_URI'];
$basename = basename($uri);
?>
