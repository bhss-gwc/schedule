<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <?php
    echo "<pre>". print_r($_POST, TRUE) . "</pre>";
    echo "<p>Your first name is " . $_POST['firstname'] . "</p>";
    echo "<p>Your last name is " . $_POST['lastname'] . "</p>";
    echo "<p>Your favorite flavor is " . $_POST['flavor'] . "</p>";
    echo "<p>Your favorite topping is " . $_POST['topping'] . "</p>";
    echo "<ul>";
    foreach($_POST['dessert'] as $value) {
      echo "<li>$value</li>";
    }
    echo "</ul>";
    $fileconnector = fopen("data.txt", 'a');
    $inputstring = $_POST['firstname'] . ", " . $_POST['lastname'] . ", " . $_POST['flavor'] . ", " . $_POST['topping'];
    foreach($_POST['dessert'] as $value) {
      $inputstring = $inputstring . ", " . $value;
    }
    $inputstring = $inputstring . PHP_EOL;
    fwrite($fileconnector, $inputstring);
    fclose($fileconnector);

    // connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "icecream";

    $dbconnector = mysqli_connect($servername, $username, $password, $dbname);

    if (!$dbconnector) {
        die("DB Connection Error" . mysqli_connect_error());
    }
    $icecream = 0;
    $cake = 0;
    foreach($_POST['dessert'] as $value) {
      if ($value == 'ice cream') {
        $icecream = 1;
    }

      if ($value == 'cake') {
        $cake = 1;
      }
    }

    $query = "INSERT INTO responses (firstname, lastname, flavor, topping, icecream, cake)
    VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['flavor']}', '{$_POST['topping']}', $icecream, $cake)";
    echo "<p>$query</p>";

    $result = mysqli_query($dbconnector, $query);
    if ($result) {
      echo "<p>Inserted data into table success</p>";
    } else {
      echo "<p>Failure</p>";
    }


  ?>
</body>

</html>
