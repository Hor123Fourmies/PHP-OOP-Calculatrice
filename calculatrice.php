<?php


class calculatrice
{
    private $nombre1;
    private $nombre2;
    private $operation;

    public function __construct($nombre1, $nombre2, $operation)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
        $this->operation = $operation;
    }

    public function calculate ()
    {
        switch ($this->operation){
            case "addition":
                echo $this->nombre1+$this->nombre2;
                break;
            case "soustraction":
                echo $this->nombre1-$this->nombre2;
                break;
        }
    }

}