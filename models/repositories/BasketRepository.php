<?php

namespace app\models\repositories;

use app\engine\Db;
use app\models\entities\Basket;
use app\models\Repository;

class BasketRepository extends Repository
{

    public static function getBasket($session_id)
    {
        $sql = "SELECT basket.id as basket_id, shop.id as shop_id, shop.name, shop.price, shop.description, shop.img, basket.session_id FROM `basket`, `shop` WHERE `session_id` = :session_id AND  basket.good_id = shop.id";
        return Db::getInstance()->queryAll($sql, ['session_id' => $session_id]);
    }

    public function getTableName()
    {
        return 'basket';
    }

    protected function getEnityClass()
    {
        return Basket::class;
    }
}
