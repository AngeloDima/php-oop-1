<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    
<?php

require_once __DIR__ . `/models/film.php`;


$film = new Film(`BattleShip`);
$film->addGenere(`azione`);

$film->diretto(`Angelo Di mauro`);
$film->lingua(`Italiano`);
$film->anno(`2014`);



var_dump($film);


?>

</body>
</html>