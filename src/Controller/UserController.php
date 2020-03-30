<?php

class UserController
{

    public function indexAction()
    {
    }

    public function addAction()
    {
    }

    public function registerAction()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $action = new UserModel($_POST['email'], $_POST['password']);
            $action->save();
        }
    }
}
