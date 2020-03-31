<?php

class UserController extends Controller
{

    public function indexAction()
    {
        $this->render("index");
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
