<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EconomicTrainingController extends Controller
{
    private $view;
    private $route;
    public function __construct(){
        $this->view = "pages.user.course.pelatihan-ekonomi.";
        $this->route = "user.course.pelatihan-ekonomi.";
    }
    public function index(){
        return view($this->view."index");
    }
}
