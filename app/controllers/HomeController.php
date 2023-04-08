<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{

    public function home()
    {
        echo "home";
    }

    public function user($username)
    {
        print_r($username);
    }
    public function index()
    {
        $name = "Home page";
        $surname = 'Hajiyev';
        return $this->view('home', compact('name', 'surname'));
    }

    public function form()
    {
        return $this->view('form');
    }

    public function acceptForm()
    {
        $name = postData('name');
        $surname = postData('surname');
        return $this->view('home',compact('name','surname'));
    }
}