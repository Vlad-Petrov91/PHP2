<?php

interface ISubject
{
    public function addObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
    public function notify();
}
