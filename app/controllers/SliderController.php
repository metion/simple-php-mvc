<?php

namespace App\Controllers;

use App\Models\Slider;
use Core\Controller;
use Core\FileService;

class SliderController extends Controller
{
    protected FileService $fileService;

    public function __construct()
    {
        $this->fileService = new FileService();
    }

    public function store()
    {
        if (
            $this->fileService->hasFile('image') &&
            $this->fileService->validateType('image', ['jpeg', 'jpg', 'png']) &&
            $this->fileService->validateSize('image', 2000)
        ) {
            $fileName = $this->fileService->upload('image');
            $slider = new Slider();
            $slider->insert([
                'image' => $fileName,
                'type' => (int)postData('type')
            ]);
            return redirect('sliders');
        }
    }

    public function sliders()
    {
        $slider = new Slider();
        $sliders = $slider->all();
        return view('slider/list', compact('sliders'));
    }
}