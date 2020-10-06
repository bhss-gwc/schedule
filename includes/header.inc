<?php

#if ( isset( $_SESSION['user_id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
#} else {
    // Redirect them to the login page
#    header("Location: http://$_SERVER[HTTP_HOST]/schedule/login.php");
#}

include("common.inc");
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}


//echo $_SESSION['user_id'];

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

include("db.inc");

// echo "<h1>$counter</h1>";
?>
