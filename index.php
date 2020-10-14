<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Player.php';
require 'Blackjack.php';
require 'code/Deck.php';
require 'code/Suit.php';
require 'code/Card.php';

session_start();

$game = new Blackjack();
$deck = $game->getDeck();

if(!isset($_SESSION['game'])){
                                    //Save the instance of the entire Blackjack object in the session
    $_SESSION['game'] = new Blackjack();
}

if(!isset($_POST['action'])){
    echo "Game starts";

} elseif($_POST['action'] == 'hit'){
    $player = $game->getPlayer();
    $player->hit($deck);

} elseif($_POST['action'] == 'stand'){
    echo "Player stands";

} elseif($_POST['action'] == 'surrender'){
    $player = $game->getPlayer();
    $player->hasLost();
    echo "Player surrenders";

}











?>
<!doctype html>
<head>
    <title>Blackjack</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="action" value="hit">
        <input type="submit" name="action" value="stand">   <!--Use forms to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)-->
        <input type="submit" name="action" value="surrender">
    </form>

</body>
</html>




