<?php

namespace App\Modules\Frontend\Controllers;

use App\Models\Products;

class ProductsController extends ControllerBase
{

    public function productAction($url)
    {
        $this->view->product = Products::findFirst($url);
    }

}

