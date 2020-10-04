<?php
include("includes/common.inc");

//connect to database
$currentmonth = date("n");
$currentdate = date("j");

?>

<h2>Regular Bell Schedule</h2><br>

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
        <td>9:10 - 10:15</td>
      </tr>
      <tr>
      	<th>SRT/P+</th>
        <td></td>
        <td>10:20 - 10:50</td>
      </tr>
      <tr>
        <th rowspan="3">3</th>
        <td>A Lunch</td>
        <td>10:55 - 11:25</td>
      </tr>
      <tr>
      	<td>B Lunch</td>
        <td>11:30 - 12:00</td>
      </tr>
      <tr>
      	<td>C Lunch</td>
        <td>12:05 - 12:35</td>
      </tr>
      <tr>
      	<th>4</th>
        <td></td>
        <td>12:40 - 1:45</td>
      </tr>
      <tr>
      	<th>5</th>
        <td></td>
        <td>1:50 - 2:55</td>
      </tr>
    </tbody>
  </table>
</div>

<?php
include("includes/footer.inc");
?>
