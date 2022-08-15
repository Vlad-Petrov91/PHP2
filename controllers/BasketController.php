<?php

namespace app\controllers;

use app\engine\Request;
use app\engine\Session;
use app\models\repositories\BasketRepository;
use app\models\entities\Basket;



class BasketController extends Controller
{

    public function actionIndex()
    {
        $session_id = session_id();
        $basket = (new BasketRepository())->getBasket($session_id);
        echo $this->render('basket', ['basket' => $basket]);
    }

    public function actionAdd()
    {
        $id = (new Request())->getParams()['id'];
        $session_id = session_id();

        $basket = new Basket($session_id, $id);

        (new BasketRepository())->save($basket);

        $response = [
            'status' => 'ok',
            'count' => (new BasketRepository())->getCountWhere('session_id', $session_id)
        ];
        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }

    public function actionDelete()
    {
        $id = (new Request())->getParams()['id'];
        $session_id = (new Session())->getId();

        $error = "ok";
        $basket = (new BasketRepository())->getOne($id);

        if (!$basket) {
            $error = 'error1';
        } else 
            if ($session_id == $basket->session_id) {
            (new BasketRepository())->delete($basket);
        } else {
            $error = 'error2';
        }
        //  (new BasketRepository())->delete($basket);


        $response = [
            'status' => $error,
            'count' => (new BasketRepository())->getCountWhere('session_id', $session_id),

        ];

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        die();
    }
}
