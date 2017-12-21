<?php

use PHPUnit\Framework\TestCase;




class TestRover extends TestCase
{

    public function testInstanciation()
    {

        $rover= new Rover(1,2,"N");
        $this->assertEquals(1,$rover->getX());
        $this->assertEquals(2,$rover->getY());
        $this->assertEquals("N",$rover->getOrientation());
        
        
    }

    public function testMoveForward()
    {

        $rover= new Rover(1,2,"N");
        $rover->moveForward();
        $this->assertEquals(1,$rover->getX());
        $this->assertEquals(3,$rover->getY());

        $rover= new Rover(1,2,"S");
        $rover->moveForward();
        $this->assertEquals(1,$rover->getX());
        $this->assertEquals(1,$rover->getY());

        $rover= new Rover(1,2,"E");
        $rover->moveForward();
        $this->assertEquals(2,$rover->getX());
        $this->assertEquals(2,$rover->getY());

        $rover= new Rover(1,2,"O");
        $rover->moveForward();
        $this->assertEquals(0,$rover->getX());
        $this->assertEquals(2,$rover->getY());

    }

}