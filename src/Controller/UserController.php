<?php



class UserController extends \Core\Controller
{

    public function indexAction()
    {
        $this->render("index");
    }

    public function addAction()
    {
        $this->render("add");
    }

    public function registerAction()
    {
        if (isset($_POST['memail']) && isset($_POST['mpassword'])) {
            $action = new \src\Model\UserModel();
            $action->setEmail($_POST['memail']);
            $action->setPassword($_POST['mpassword']);
            $action->create();
        } else {
            $this->render('register');
        }
    }
    public function loginAction()
    {
        
    }
}
