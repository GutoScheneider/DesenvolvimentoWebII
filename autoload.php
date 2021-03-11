<?php
spl_autoload_register(function($className) {
    $file = $_SERVER["DOCUMENT_ROOT"].'//Web_II/www/projeto/DesenvolvimentoWebII/libs/' . $className . '.class.php';
    if (file_exists($file)) {
        require_once $file;
    }
});