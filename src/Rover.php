<?php

class Rover
{

    private $x;
    private $y;

    private $orientation;

    public function __construct($x,$y,$orientation)
    {

        $this->setX($x);
        $this->setY($y);
        $this->setOrientation($orientation);

    }

    public function getX()
    {

        return $this->x;

    }

    public function setX($x)
    {

        $this->x=$x;

    }

    public function setY($y)
    {

        $this->y=$y;

    }

    public function getY()
    {

        return $this->y;

    }

    public function moveForward()
    {

        if($this->getOrientation()==="N")
        {
            $this->y++;

        }
        elseif($this->getOrientation()==="S")
        {

            $this->y--;

        }
        elseif ($this->getOrientation()==="E")
        {

            $this->x++;

        }
        elseif ($this->getOrientation()==="O")
        {

            $this->x--;

        }
        elseif ($this->getOrientation()==="NE")
        {

            $this->y++;
            $this->x++;

        }
        elseif ($this->getOrientation()==="SE")
        {

            $this->y--;
            $this->x++;

        }
        elseif ($this->getOrientation()==="NW")
        {

            $this->y++;
            $this->x--;

        }
        elseif ($this->getOrientation()==="SW")
        {

            $this->y--;
            $this->x--;

        }
        else
        {

            return "Error";

        }

    }

    public function setOrientation($orientation)
    {

        $this->orientation=$orientation;

    }

    public function getOrientation()
    {

        return $this->orientation;

    }



}