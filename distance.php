<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Расстояние между двумя точками на PHP -->
    <?php 
    require 'point.php';

    $first = new Point();
    $first->x = 10;
    $first->y = 34;

    $second = new Point();
    $second->x = 3;
    $second->y = 10;
        
    $result = sqrt(pow($second->x - $first->x, 2) + pow($second->y - $first->y, 2));
    echo $result;
    ?>
</body>
</html>