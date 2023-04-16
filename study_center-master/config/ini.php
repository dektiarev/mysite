<?php
session_start();
// отображение ошибок
ini_set('display_errors', '0');
// автозагрузка классов
spl_autoload_register(function ($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);
    require_once($name.'.php');
});
// библиотека функций
require_once "lib/functions.php";