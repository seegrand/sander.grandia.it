<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class MigrationMusicController extends Controller
{
    public function index() {
        return View::make('migration-music', ['title' => 'Migration Music']);
    }
}
