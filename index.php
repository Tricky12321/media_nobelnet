<?php

use MediaNobelnet\Functions;

spl_autoload_register('autoloadClasses');



function autoloadClasses($class)
{
    $parts = explode('\\', $class);
    array_shift($parts);
    $file = implode("/",$parts) . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

class Main {
    /** @var Functions */
    private $functions;
    public function __construct()
    {
        $this->functions = new MediaNobelnet\Functions();
    }
}
new Main();


