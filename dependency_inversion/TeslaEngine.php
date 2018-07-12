<?php

class TeslaEngine implements ElectricEngine
{
    
    function runDrive()
    {
        echo "The Electric engine was started<br/>";
    }
    
    public function checkCharge()
    {
        echo "Charge is 100%<br/>";
    }
}