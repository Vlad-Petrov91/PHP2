<?php

$candidatVasya = new Candidat('Vasya', 'vas@vas.ru', 8);

$vacancyPHP = new Vacancy('JuniorPHP');
$vacancyPHP->addObserver($candidatVasya);

$vacancyPHP->notify();
