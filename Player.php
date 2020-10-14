<?php
declare(strict_types=1);

class Player {

    private array $cards;
    private bool $lost = false;

    function __construct(Deck $deck){       // Make it require the Deck object. (First Deck to require the class, 2nd $deck as parameter

        $this->cards = [];
        array_push($this->cards, $deck->drawCard(), $deck->drawCard()); // twice because 2 cards
    }

    public function showHand(Deck $deck)
    {
        foreach ($deck->getCards() as $card) {
            echo $card->getUnicodeCharacter(true);
            echo '<br>';
        }
    }

    public function hit(Deck $deck){

        array_push($this->cards, $deck->drawCard()); //whenever we hit we push 1 extra card to the array
        if($this->getScore() > 21){
            $this->lost = true;
        }

    }

    public function surrender(){

        $this->lost = true;

    }

    public function getScore(){

        $score = 0;


    }

    public function hasLost(){

        $this->lost = true;

    }

}

