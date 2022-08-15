<?php

namespace app\models\entities;

use app\models\Model;

class Product extends Model
{
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $img;

    protected $props = [
        'name' => false,
        'description' => false,
        'price' => false,
        'img' => false
    ];

    public function __construct($name = null, $description = null, $price = null, $img = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
    }
}
