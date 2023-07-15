<?php

namespace App\Controllers;
// use App\Models\BoxesModels;

class Boxes extends BaseController
{

    // public function __construct()
    // {
    //     $this->BoxesModels = new BoxesModels();
    // }

    public function index()
    {
        echo view("layout/header");
        echo view("layout/aside");
        echo view("layout/footer");
    }

}
