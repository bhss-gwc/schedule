  <?php

  $fileconnector = fopen('data.txt', 'r');
  echo '<table border="1">';
  while(!feof($fileconnector)) {
    echo "<tr>";
    $line = fgets($fileconnector);
    $columns = explode(', ', $line);
    foreach ($columns as $column) {
      echo "<td>". $column . "</td>";
    }
    echo "</tr>";

  echo "</table>";
  fclose($fileconnector);
  ?>
