<?php
include("includes/common.inc");
if(isset($_SESSION['user_id'])){
  header("Location: displaymeetings.php");
}
?>

<script>
function check_input() {
  nn = document.getElementById('club_name').value;
  pn = document.getElementById('club_pass').value;
  if (nn == "" || pn == "") {
    alert('Club name and club password are both required.');
    return false;
  }
}
</script>

<h2 align=center>Login to Your Club Account</h2>
<p align=center style="color:red;">Your login info is what you entered as the club name and club password when you filled out the "<a href="introduce.php">Introduce Your Club</a>" form.</p>
<form action = "handlerlogin.php" method="POST">
<table align=center>
<tr><td><b>Username: </b>
<input id="club_name" type = "text" name = "clubname"/><br><br></td>
<tr><td><b>Password: </b>
<input id="club_pass" type = "password" name = "clubpassword"/><br><br></td>

<tr><td><div style="text-align:center"><input onclick="return check_input()" type = "submit" value = "Submit" /></div></td>

</table>
</form>

<?php include("includes/footer.inc"); ?>
