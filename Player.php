<?php

require 'Deck.php';     //Make it require the Deck object


class Player
{
    private array $cards = [];
    private bool $lost = false;


    public function __construct($deck)      //Pass this Deck from the Blackjack constructor
    {
        $deck->drawCard();  //Now draw 2 cards for the player. You have to use existing code for this from the Deck class.
        $deck->drawCard();

    }

    public function hit()
    {

    }

    public function surrender()
    {

    }

    public function getScore()
    {

    }

    public function hasLost()
    {

    }
}