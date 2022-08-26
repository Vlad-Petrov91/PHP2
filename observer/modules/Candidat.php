<?php

include "../interfaces/IObserver.php";

class Candidat implements IObserver
{
    public $name;
    public $mail;
    public $experience;

    public function __construct($name, $mail, $experience)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->experience = $experience;
    }

    public function handle($subject)
    {
        mail($this->mail, "", "");
    }
}
