<?php

class Chair
{
    private $sitting;
    private $back;
    private $screws;
    private $frame;

    public function __construct($sitting, $screws)
    {
        $this->screws = $screws;
        $this->sitting = $sitting;
    }

    public function setScrews($var1)
    {
        $this->screws = $var1;
    }

    public function getScrews()
    {
        return "deze stoel heeft ".$this->screws." aantal schroeven <br>";
    }


}


$chair1 = new Chair('wood',null);
//$chair1->setScrews(10);
print $chair1->getScrews();

$chair2 = new Chair('iron',5);
//$chair2->setScrews(5);
print $chair2->getScrews();

