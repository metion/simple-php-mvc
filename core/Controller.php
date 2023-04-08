<?php

namespace Core;

class Controller
{
    public function view($viewName,$params = [])
    {
        extract($params);
        require_once(__DIR__."/../app/views/$viewName.php");
    }
}