<?php

class Blackjack
{
    private $player;
    private $dealer;
    private $deck;

    function __construct()
    {
        $this->player = new Player();
        $this->dealer = new Player();
        $this->deck = new Deck();
        $this->deck->shuffle();

    }

    public function getPlayer()
    {

    }

    public function getDealer()
    {

    }


}


