<?php

namespace controllers;

use core\Controller;

class UserController extends Controller
{
    public function registrAction(){
        return $this -> render();
    }
    public function loginAction(){
        $error = null;
        if (User::isUserAuthenticated())
            $this->redirect('/VinillStore/store/view/');
        if (Core::getInstance()->requestMethod === 'POST') {
            $user = User::getUserByLoginAndPassword($_POST['floatingInput'], $_POST["floatingPassword"]);
            if (empty($user)) {
                $error = 'Неправильний логін або пароль';
            } else {
                User::authenticateUser($user);
                if (User::isUserAuthenticated())
                    $this->redirect('/VinillStore/store/view/');
            }
        }
        return $this->render(null, ['error' => $error]);
        return $this -> render();
    }

}