<?php

namespace app\models\entities;


use app\models\Model;

class User extends Model
{
    protected $id;
    protected $name;
    protected $pass;

    protected $props = [
        'name' => false,
        'pass' => false,
    ];

    public function __construct($name = null, $pass = null)
    {
        $this->name = $name;
        $this->pass = $pass;
    }
}
