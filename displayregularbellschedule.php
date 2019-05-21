<?php
include("includes/header.inc");

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

<?php
include("includes/footer.inc");
?>
