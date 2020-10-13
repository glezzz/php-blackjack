<?php


class Player
{
    private array $cards = [];
    private bool $lost;


    public function __construct($deck)      //Pass this Deck from the Blackjack constructor
    {
        $first_card = $deck->drawCard();//Now draw 2 cards for the player. You have to use existing code for this from the Deck class.
        array_push($this->cards, $first_card);  // Need to push first card to array before drawing the 2nd, otherwise it would override the first one.
        $sec_card = $deck->drawCard();
        array_push($this->cards, $sec_card);

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