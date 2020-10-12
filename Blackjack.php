<?php

session_start();

$_SESSION = Blackjack::class;

class Blackjack
{
    private $player;
    private $dealer;
    private $deck;

    public function __construct()
    {
        $this->player = new Player();
        $this->dealer = new Player();   //Instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->deck = new Deck();       //Create a new deck object (code has already been written for you!).
        $this->deck->shuffle();     //Shuffle the cards with shuffle method on deck.

    }

    public function getPlayer()
    {

    }

    public function getDealer()
    {

    }


}


