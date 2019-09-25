<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class PaperPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class Quent4218Player extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
       // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
        $lastchoice = $this->result->getLastChoiceFor($this->opponentSide);
        //var_dump($this->result->getStatsFor($this->opponentSide));
        $stat = $this->result->getStatsFor($this->opponentSide);

        /*if ($stat[1]> 0)
        {
          return parent::rockChoice();
        }
        if ($stat[2]> 0)
        {
          return parent::scissorsChoice();
        }
        if ($stat[3]> 0)
        {
          return parent::paperChoice();
        }*/

        // si il le joue moins il va peut-être pas le jouer du coup
        $min = min( $this->result->getStatsFor($this->opponentSide));
        if($min == "paper")
        {
          return parent::paperChoice();
        }
        elseif ($min == "rock")
        {
          return parent::rockChoice();
        }
        return parent::scissorsChoice();
/*
         $myScore = $this->result->getLastScoreFor($this->mySide);

        //si il fait égalité il va vouloir changer en penser que je vais changer
        if($myScore == 1 && $lastchoice == parent::paperChoice())
        {
          return parent::paperChoice();
        }
        elseif ($myScore == 1 && $lastchoice == parent::rockChoice())
        {
          return parent::rockChoice();
        }
        return parent::scissorsChoice();
        */
  }
};
