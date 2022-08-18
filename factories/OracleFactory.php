<?php

include "../config/config.php";


class OracleFactory implements DBFactoryInterface
{
    function getDBConnection(): DBConnectionInterface
    {
        return new OracleConnecton();
    }
    function getDBRecord(): DBRecordInterface
    {
        return new OracleRecord();
    }

    function getDBQueryBuiler(): DBQueryBuilerInterface
    {
        return new OracleQueryBuiler;
    }
}
