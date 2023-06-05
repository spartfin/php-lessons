<?php 
error_reporting(-1);

$title = 'Урок 4!';

// $winnieThePooh = 'Hello I am Winnie';
// $winnie_the_pooh = "Hello I\'m Winnie. \"Строка в кавычках\"";

$fruit = 'orange';
$winnie_the_pooh = "Hello I'm Winnie. I have one $fruit!";

$var = 'Test 1';
$Var = 'Test 2';
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
    </head>

    <body>
        <?php $title = 'Урок 4';?>

        <h1><?php echo $title ?></h1>

        <p><?= $winnie_the_pooh ?></p>

        <p><?php var_dump($var) ?></p>

        <p><?php var_dump($Var) ?></p>
    </body>
</html>