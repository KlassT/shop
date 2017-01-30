<?php

namespace App;

use Phalcon\Mvc\User\Component;

class Navigation extends Component
{

    private $_menu = [
        'products' => 'Продукты',
        'service' => 'Услуги',
        'info' => 'Информация',
        'about' => 'О компании',
        'contacts' => 'Контакты',
    ];

    public function getMenu()
    {
        $controllerName = $this->dispatcher->getControllerName();

        echo '<ul>';
        foreach($this->_menu as $controller => $caption)
        {
            if($controller == $controllerName)
            {
                echo '<li class="active">';
            }
            else {
                echo '<li>';
            }
            echo $this->tag->linkTo($controller, $caption);
            echo '</li>';
        }
        echo '</ul>';
    }

}