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
</head>

<body>

<h1>Form: Schedule Changes</h1>
<form action = "handlerschedulechange.php" method="POST">
Date of schedule change: <br>
<input type = "text" name = "dateofschedulechange"/><br><br>
1st period: (example: 8-8:50 am)<br>
<input type = "text" name = "1stperiod"/><br><br>
2nd period: <br>
<input type = "text" name = "2ndperiod"/><br><br>
3rd period: <br>
<input type = "text" name = "3rdperiod"/><br><br>
4th period: <br>
<input type = "text" name = "4thperiod"/><br><br>
5th period: <br>
<input type = "text" name = "5thperiod"/><br><br>

<input type = "submit" value = "submit" /><br>

 		</form>
</body>
</html>
