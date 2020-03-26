<?php
echo '<pre>' . $_POST['email'] . '</pre>';

echo '<pre>' . $_POST['password'] . '</pre>';

echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

define('BASE_URI', str_replace('\\', '/', substr( __DIR__ , strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$app -> run();

