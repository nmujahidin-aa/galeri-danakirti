<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelfDevelopmentController extends Controller
{
    private $view;
    private $route;
    public function __construct(){
        $this->view = "pages.user.course.pengembangan-diri.";
        $this->route = "course.";
    }
    public function index(){
        return view($this->view."index");
    }
}
