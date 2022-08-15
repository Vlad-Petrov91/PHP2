<?php

namespace app\models\repositories;

use app\models\Repository;

class OrdersRepository extends Repository
{


    public function getTableName()
    {
        return 'orders';
    }

    protected function getEnityClass()
    {
        return Orders::class;
    }
}
