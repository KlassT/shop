<?php
namespace App\Modules\Frontend\Controllers;

use Phalcon\Mvc\Controller;
use App\Models\Categories;

class ControllerBase extends Controller
{

    public function initialize()
    {
        $this->view->categories = Categories::find(
            [
                'where' => 'parent_category = :pa:',
                'bind'  => [
                    'pa' => null
                ],
            ]
        );
    }

}
