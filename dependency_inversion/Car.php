<?php

class Car
{
    
    public function start()
    {
        (new Engine)->runDrive();
    }
    
}