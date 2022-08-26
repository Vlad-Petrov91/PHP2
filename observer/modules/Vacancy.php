<?php

include "../interfaces/ISubject.php";

class Vacancy implements ISubject
{

    protected array $observers = [];
    public $jobTitle;

    public function __construct($jobTitle)
    {
        $this->$jobTitle = $jobTitle;
        $this->notify();
    }

    public function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer)
    {
        foreach ($this->observers as &$obsrv) {
            if ($obsrv === $observer) {
                unset($obsrv);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle($this);
        }
    }
}
