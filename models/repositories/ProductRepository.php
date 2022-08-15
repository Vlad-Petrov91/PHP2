<?php

namespace app\models\repositories;

use app\models\entities\Product;
use app\models\Repository;

class ProductRepository extends Repository
{
    protected function getTableName()
    {
        return 'shop';
    }

    protected function getEnityClass()
    {
        return Product::class;
    }
}
