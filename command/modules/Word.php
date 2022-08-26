<?php

include "../interfaces/ICommand.php";

class Word
{
    private $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function execute()
    {
        $this->action->edit();
    }
}
