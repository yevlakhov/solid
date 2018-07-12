<?php


class Car
{
    private $engine;
    
    function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
    
    public function start()
    {
        $this->engine->runDrive();
    }
    
    public function checkCharge()
    {
        $this->engine->checkCharge();
    }
    
}