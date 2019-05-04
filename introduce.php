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
	        <a href="#">Link 1</a>
	        <a href="#">Link 2</a>
	        <a href="#">Link 3</a>
	      </div>
	      </div>
	    </div>

<h2>Introduce Your Club</h2>

</head>

<body style="font-family:Arial, Helvetica, sans-serif;">

<form action = "handlerintroduce.php" method="POST">
Club Name: <br>
	<input type = "text" name = "clubname"/><br><br>
Club Password: <br>
	<input type = "text" name = "clubpassword"/><br><br>
Club Sponsor Name: <br>
<input type = "text" name = "clubsponsorname"/><br><br>
Club Sponsor Email: <br>
<input type = "text" name = "clubsponsoremail"/><br><br>
Club Meeting Location: <br>
<input type = "text" name = "clubmeetinglocation"/><br><br>
Club Meeting Description: <br>
<input type = "text" name = "clubmeetingdescription"/><br><br>

<input type = "submit" value = "submit" /><br>

</form>

</body>
</html>
