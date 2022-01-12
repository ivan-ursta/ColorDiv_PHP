<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div</title>
</head>

<body>
    <?php

    $colors = ['red', 'blue', 'green', 'yellow', 'black', 'purple'];
    shuffle($colors);
    for ($i = 0; $i <= 4; $i++) {
        echo "<div style='background-color:" . $colors[$i] . ";'>!</div>";
    }

    ?>
</body>

</html>