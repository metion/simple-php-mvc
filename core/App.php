<?php

namespace Core;

class App
{

    public function configure(): void
    {
        require_once __DIR__ . "/../app/routes.php";
        require_once __DIR__ . "/../app/helper.php";
        define('BASE_URL', 'http://localhost/mvc');
    }

    public function handleRequests(): void
    {
        (new RouterService())->handleRoute();
    }
}
