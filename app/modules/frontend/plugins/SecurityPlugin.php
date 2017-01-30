<?php
namespace App\Modules\Frontend\Plugins;

use Carbon\Carbon;
use Phalcon\Events\Event;
use Phalcon\Mvc\User\Plugin;
use Phalcon\Mvc\Dispatcher;
use App\Models\UsersNologged;
use App\Models\Users;
use Phalcon\Security\Random;

class SecurityPlugin extends Plugin
{

    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {

        if(!$this->session->has('user'))
        {
            if(!$this->cookies->has('user'))
            {
                $user = Users::findFirst([
                    'remote_addr = :remote_addr:',
                    'bind' => [
                        'remote_addr' => $this->request->getClientAddress()
                    ]
                ]);

                if(!$user)
                {
                    $random = new Random;

                    $user = new Users;
                    $user->token = $random->uuid();
                    $user->remote_addr = $this->request->getClientAddress();
                    if($user->save())
                    {
                        $this->cookies->set('user', $user->id, Carbon::now()->addYear()->timestamp);
                    }
                }
            }
            else
            {
                $user = Users::findFirst($this->cookies->get('user'));
            }

            $this->session->set('user', $user);
        }

        $this->user->set($this->session->get('user'));
    }

}