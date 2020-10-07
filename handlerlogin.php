<?php
include("includes/common.inc");
include("includes/db.inc");
?>
<?php
if ( ! empty( $_POST ) ) {
  if ( isset( $_POST['clubname'] ) && isset( $_POST['clubpassword'] ) ) {
    $clubname = $_POST['clubname'];
    $clubpassword = $_POST['clubpassword'];

    // Getting submitted user data from database
    $stmt = $dbconnector->prepare("SELECT * FROM introduce_responses WHERE clubname = ?");
    $stmt->bind_param('s', $_POST['clubname']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();

    // Verify user password and set $_SESSION
    if (isset($user) && password_verify( $_POST['clubpassword'], $user->clubpassword ) ) {
      //if ( $_POST['clubpassword'] == $user->clubpassword ) {
      $_SESSION['user_id'] = $user->id;
      $_SESSION['club-name'] = $clubname;
      $_SESSION['role'] = $user->role;
      $cookie_name = "club-name";
      $cookie_value = $clubname;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

      header( "Location: displaytodaysbellschedule.php" );
    }else{
      echo "<br><br><p align=center><font color=\"red\">Either the club name or password you entered is incorrect.</font></p>";
    }
  }
}

?>
</body>
</html>
