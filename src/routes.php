<?php

Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/register', ['controller' => 'user', 'action' => 'add']);
Router::connect('MVC_PiePHP/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('MVC_PiePHP/user/login', ['controller' => 'user', 'action' => 'login']);