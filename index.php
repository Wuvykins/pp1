<?php
/**
 * Nic Alexander
 */
$numbers = [7, 9, 8, 9, 8, 8, 6];
include "functions.php";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <?php
        echo printArray($numbers);
        echo "<br>";
        echo "largest number ".largest($numbers);
        echo "<br>";
        echo "average number ".average($numbers);
        echo "<br>";
        echo "removed duplicates ";
        echo printArray(removeDups($numbers));
        echo "<br>";
        echo "Occurences: ";
        echo print_r(distribution($numbers));
    ?>

</body>
</html>
