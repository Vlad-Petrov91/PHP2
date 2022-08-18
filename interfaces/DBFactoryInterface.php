<?php

interface DBFactoryInterface
{
    function getDBConnection(): DBConnectionInterface;

    function getDBRecord(): DBRecrordInterface;

    function getDBQueryBuiler(): DBQueryBuilerInterface;
}
