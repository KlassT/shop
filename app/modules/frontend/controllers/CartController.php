<?php

namespace App\Modules\Frontend\Controllers;

class CartController extends ControllerBase
{

    public function addAction($product, $count)
    {
        $this->view->disable();
        $this->cart->add($product, $count);
        echo $this->cart->getMiniCart();
    }

}

