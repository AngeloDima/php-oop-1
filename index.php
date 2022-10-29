 













<?php

  require_once __DIR__ . '/models/film.php';


  $film = new ClassFilm ('BattleShip');
  $film->addAttore('Angelo');
  $film->titolo = "BattleShip";
  $film->genre = "azione";

  var_dump($film); 



?>

