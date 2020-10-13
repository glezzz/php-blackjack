<?php


class Blackjack
{
    private $player, $dealer, $deck;

    public function __construct()
    {
        $this->deck = new Deck();       //Create a new deck object (code has already been written for you!).
        $this->deck->shuffle();     //Shuffle the cards with shuffle method on deck.
        $this->player = new Player($this->deck);     //Instantiate the Player class twice, insert it into the player property and a dealer property.
        $this->dealer = new Player($this->deck);

    }

    public function getPlayer()
    {

    }

    public function getDealer()
    {

    }


}




