<?php

include "../config/config.php";


class MySQLFactory implements DBFactoryInterface
{
    function getDBConnection(): DBConnectionInterface
    {
        return new MySQLConnecton();
    }
    function getDBRerord(): DBRecordInterface
    {
        return new MySQLRecord();
    }

    function getDBQueryBuiler(): DBQueryBuilerInterface
    {
        return new MySQLQueryBuiler;
    }
}
