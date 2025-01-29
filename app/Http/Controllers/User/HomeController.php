<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private $view;

    public function __construct()
    {
        $this->view = "pages.user.home.";
    }
    public function index()
    {
        return view($this->view . "index");
    }
}
