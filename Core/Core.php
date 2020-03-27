<?php

namespace Core;

class Core
{
    public function run()
    {
        echo __CLASS__ . " [ OK ]" . PHP_EOL;
        echo $_SERVER["REDIRECT_URL"] . "<br>";


        $arr = explode("/", $_SERVER["REDIRECT_URL"]);

        $class = ucfirst($arr[2]) . "Controller";
        $methode = $arr[3] . "Action";

        echo $class->$methode . '<br>';

        $controller = new $class();
        $controller->$methode();
    }
}
  