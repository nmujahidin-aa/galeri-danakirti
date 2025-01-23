<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $view;

    public function __construct()
    {
        $this->view = "pages.home.";
    }
    public function index()
    {
        return view($this->view . "index");
    }
}
