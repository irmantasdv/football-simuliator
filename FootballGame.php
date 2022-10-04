<?php
class FootballGame
{
    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;

    public function simuliuotiTraumas()
    {
        $randomNUmber = rand(1, 1000);
        if (fmod($randomNUmber, 3.5) > 0 && fmod($randomNUmber, 10) > 0) {
            $this->patirtaTrauma = 2;
        } else {
            $this->patirtaTrauma = 0;
        }
    }
    public function simuliotiRungtynes()
    {
        $firstTeamResult = rand(1, 10);
        $secondTeamResult = rand(1, 10);
        while ($firstTeamResult == $secondTeamResult) {
            $firstTeamResult = rand(1, 10);
            $secondTeamResult = rand(1, 10);
        }
        $this->rungtyniuRezultatas = array($firstTeamResult, $secondTeamResult);
        return $this->rungtyniuRezultatas;
    }

    public function laimetojai()
    {
        $arrayResults = $this->simuliotiRungtynes();
        if ($arrayResults[0] > $arrayResults[1]) {
            $this->kuriKomandaLaimejo = 1;
        } else {
            $this->kuriKomandaLaimejo = 2;
        }
    }
}
