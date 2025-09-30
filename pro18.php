<?php
$players = array("Player1"=>50, "Player2"=>70, "Player3"=>90);
$avg = array_sum($players)/count($players);
echo "Average Score: $avg<br>";
arsort($players); // rank players
print_r($players);
?>
