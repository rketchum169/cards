<?php
require_once("./card.php");
require_once("./deck.php");

$card1 = new Card([ 
	"suit" => "hearts",
	"value" => "5",
]);

$newdeck = new Deck($card1);

show_card;

?>
