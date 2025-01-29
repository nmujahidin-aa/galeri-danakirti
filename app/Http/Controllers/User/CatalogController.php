<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CatalogController extends Controller
{
    private $view;
    public function __construct()
    {
        $this->view = "pages.user.catalog.";
    }

    public function news()
    {
        return view($this->view . "news");
    }
    public function event()
    {
        return view($this->view . "event");
    }
}
