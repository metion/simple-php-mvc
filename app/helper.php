<?php

function postData($key)
{
    return $_POST[$key] ?? null;
}

function getData($key)
{
    return $_GET[$key] ?? null;
}
