<form enctype="multipart/form-data" action="/MVC_PiePHP/register" method="post">
    <fieldset>
        <legend>Formulaire</legend>
        <p>
            <input type="email" id="email" name="email">
            <input type="password" id="pass" name="password">
            <input type="submit" name="submit" value="Submit" />
        </p>
    </fieldset>
</form>
<?php
require_once('UserModel.php');
class Action
{

    public function __construct()
    {
        switch ($_POST['submit']) {
            case 'insert':
                $objMeet = new UserModel;
                $objMeet->setEmail($_POST['email']);
                $objMeet->setPassword($_POST['password']);
                if ($objMeet->create()) {
                    header('location: register.php?insert=1');
                } else {
                    header('location: register.php?insert=0');
                }
                break;

            default:
                header('location: register.php');
                break;
        }
    }
}
if (isset($_POST['submit'])) {
    $objAct = new Action;
} else {
    header('register.php');
}
