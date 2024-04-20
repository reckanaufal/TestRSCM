<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static $pageTitle = 'Home';
    
    public function index ()
    {
        $pageTitle = self::$pageTitle;
        return view ('home', compact('pageTitle'));
    }
    public function about ()
    {
        $pageTitle = self::$pageTitle;
        return view ('about.about', compact('pageTitle'));
    }
}
