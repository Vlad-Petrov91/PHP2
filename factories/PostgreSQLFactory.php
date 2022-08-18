<?php

include "../config/config.php";


class PostgreSQLFactory implements DBFactoryInterface
{
    function getDBConnection(): DBConnectionInterface
    {
        return new PostgreSQLConnecton();
    }
    function getDBRecrord(): DBRecordInterface
    {
        return new PostgreSQLRecord();
    }

    function getDBQueryBuiler(): DBQueryBuilerInterface
    {
        return new PostgreSQLQueryBuiler;
    }
}
