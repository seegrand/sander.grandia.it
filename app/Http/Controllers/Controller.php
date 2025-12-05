<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        return view('home');
    }

    public function contactFile() {
        return response()->download('/customers/b/8/3/grandia.it/httpd.www/sander/file/sander-grandia.vcf');
    }
}
