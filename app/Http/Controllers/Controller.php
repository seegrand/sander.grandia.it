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
        $contactFile = public_path() . '/file/sander-grandia.vcf';

        return response()->download($contactFile);
    }
}
