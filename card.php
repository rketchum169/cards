<?php
	class Card {
		public $suit;
		public $value;
		function __construct($attributes) {
		$this->suit = $attributes["suit"];
		$this->value = $attributes["value"];
		}  
		}
