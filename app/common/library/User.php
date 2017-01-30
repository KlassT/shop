<?php
namespace App;

use Phalcon\Mvc\User\Component;

class User extends Component
{

    private $_user;

    public function set($user)
    {
        $this->_user = $user;
    }

    public function get()
    {
        return $this->_user;
    }

    public function logout()
    {
        $this->session->destroy();
        $this->cookies->get('user')->delete();
        $this->cookies->get('user_type')->delete();
    }

}