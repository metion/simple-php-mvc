<?php

namespace App\Controllers;

use Core\Controller;
use Core\FileService;

class HomeController extends Controller
{
    protected FileService $fileService;

    public function __construct()
    {
        $this->fileService = new FileService();
    }

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
        $extensions = ['jpg', 'jpeg', 'png'];
        echo "<pre>";
        if (
            $this->fileService->hasFile('image') &&
            $this->fileService->validateType('image', $extensions) &&
            $this->fileService->validateSize('image',163)
        ) {
            $fileName = $this->fileService->upload('image');
            print_r($fileName);
        }
    }
}