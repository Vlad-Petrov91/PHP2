<?php

use PHPUnit\Framework\TestCase;
use app\models\entities\Product;

class ProductTest extends TestCase
{
    public function testProductConstructor()
    {
        $name = "Мышка";
        $product = new Product($name);
        $this->assertEquals($name, $product->name);
    }
}
