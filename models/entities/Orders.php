<?php

namespace app\models\entities;

use app\models\Model;

class Orders extends Model
{
    protected $id;
    protected $name;
    protected $phone;
    protected $session_id;

    protected $props = [
        'name' => false,
        'phone' => false,
        'session_id' => false,
    ];

    public function __construct($name = null, $phone = null, $session_id = null)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->session_id = $session_id;
    }
}
