<?php
//OffState.php
class OffState implements IState
{
    private $context;
    
    public function __construct()
    {
        $this->context = $contextNow;
    }
    
    public function turnLightON()
    {
        echo "Lights on!  Now I can see!<br />";
        $this->context->setState($this->context->getOnState());
    }
    
    public function turnLightOff()
    {
        echo "Light is already off-> take no action<br />";
    }
}