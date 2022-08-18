<?php

include "./config/config.php";

abstract class Application
{
    protected $DBConnection;
    protected $DBRecrord;
    protected $DBQueryBuiler;

    public function __construct(DBFactoryInterface $factory)
    {
        $this->DBConnection = $factory->getDBConnection();
        $this->DBRecrord = $factory->getDBRecord();
        $this->DBQueryBuiler = $factory->getDBQueryBuiler();
    }
}

$PostgreSQL = new Application(new MySQLFactory());

$PostgreSQL->DBConnection->connect();
$PostgreSQL->DBRecrord->record();
$PostgreSQL->DBQueryBuiler->bild();
