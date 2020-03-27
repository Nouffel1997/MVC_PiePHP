<?php
spl_autoload_register(function ($classe_name) {



    $classe_name = explode("\\", $classe_name);


    foreach ($classe_name as $value) {

        $class = $value . '.php';
    }

    include 'Core/' . $class;
    include '/src/Model/' . $class;
    include '/src/View/' . $class;
    include '/src/Controller/' . $class;
});
