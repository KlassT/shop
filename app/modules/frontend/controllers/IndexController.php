<?php

namespace App\Modules\Frontend\Controllers;

use App\Models\Products;
use App\Models\News;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->saleProducts = Products::find(['limit' => 4]);
        $this->view->news = News::find(['type = 1','limit' => 4]);
        $this->view->stocks = News::find(['type = 0','limit' => 4]);
    }

}

