<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    private $view;

    public function __construct()
    {
        $this->view = "pages.user.home.";
    }
    public function index()
    {
        $product = Product::all();
        return view($this->view . "index",[
            'product' => $product,
        ]);
    }
}
