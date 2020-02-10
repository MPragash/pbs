<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Table de muiltplication</title>
</head>
<body>
    <?php
    $number =2;

    for($i=1; $i < 11; $i++){
        echo
        "<p>", $number,
        "&times; ", $i,
        " = ", $number*$i,
        "</p>";

    }
    ?>
</body>
</html>