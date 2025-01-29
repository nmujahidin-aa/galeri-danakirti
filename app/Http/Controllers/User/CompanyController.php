<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    private $view;
    public function __construct(){
        $this->view = "pages.user.company.";
    }
    public function about()
    {
        return view($this->view . "about");
    }

    public function contact()
    {
        return view($this->view . "contact");
    }

    public function faq()
    {
        return view($this->view . "faq");
    }
}
