<?php
declare(strict_types=1);
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Player.php';
require 'Blackjack.php';
require 'code/Deck.php';

if(!isset($_SESSION)){

}
?>
<html>
<form name="form" method="post">
		<button name="action" type="submit">Hit</button>
		<button name="action" type="submit">Stand</button>
		<button  name="action"  type="submit">Surrender</button>
	</form >
</html>