<?php
include("includes/common.inc");
if(isset($_SESSION['user_id'])){
  header("Location: displaymeetings.php");
}
?>

<h1>Login</h1>
<form action = "handlerlogin.php" method="POST">
Club name: <br>
<input type = "text" name = "clubname"/><br><br>
Password: <br>
<input type = "password" name = "clubpassword"/><br><br>

<input type = "submit" value = "submit" /><br><br>


 		</form>

<?php include("includes/footer.inc"); ?>
