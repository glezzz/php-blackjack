<?php
declare(strict_types=1);

class Blackjack {

    private $player, $dealer, $deck;

    function __construct(){

        $deck = new Deck();
        $deck->shuffle();
        $this->player = new Player($deck);
        $this->dealer = new Player($deck);
    }

    public function getPlayer(){

        return $this->player;
    }

    public function getDealer(){

        return $this->dealer;
    }

    public function getDeck(){

        return $this->deck;
    }



}



