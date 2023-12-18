<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $page_title = 'Home';
        return view('home/index', array("page_title" => $page_title));
    }

    public function about(){
        $page_title = 'About';
        return view('about/index',array("page_title" => $page_title));
    }

    public function notfound(){
        $page_title = '404';
        return view('notfound',array("page_title" => $page_title));
    }

    public function signup(){
        $page_title = 'Sign Up';
        return view('signup/index',array("page_title" => $page_title));
    }

    public function login(){
        $page_title = 'Log In';
        return view('signin/index',array("page_title" => $page_title));
    }

    public function googleCallback(){
        $page_title = 'Sign Up with google';
        return view('signup/index',array("page_title" => $page_title));
    }

    public function DashboardIndex(){
        $page_title = 'Dashboard';
        return view('agencyDashboard/index',["page_title" => $page_title]);
    }
}
