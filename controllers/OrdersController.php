<?php

namespace app\controllers;

use app\engine\Request;
use app\engine\Session;
use app\models\repositories\OrdersRepository;
use app\models\repositories\BasketRepository;
use app\models\entities\Orders;

class OrdersController extends Controller
{
    public function actionIndex()
    {

        $orders = (new OrdersRepository())->getAll();

        echo $this->render('orders/orders', ['orders' => $orders]);
    }

    public function actionAdd()
    {
        $params = (new Request())->getParams();
        $session_id = session_id();
        $name = $params['name'];
        $phone = $params['phone'];

        $order = new Orders($name, $phone, $session_id);
        (new OrdersRepository())->save($order);

        $session = new Session();
        $session->regenerate();
        header("Location: /");
        die();
    }

    public function actionView()
    {
        $params = (new Request())->getParams()['session_id'];
        $order = (new BasketRepository())->getBasket($params);

        echo $this->render('orders/orderList', ['order' => $order]);
    }
}
