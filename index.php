<?php
include("FootballGame.php");
$game = new FootballGame();
$game->simuliuotiTraumas();
$game->laimetojai();
$game->simuliotiRungtynes();
echo("Patirta trauma: " . $game->patirtaTrauma . "<br>");
echo("Laimejo komanda Nr.: " . $game->kuriKomandaLaimejo);
