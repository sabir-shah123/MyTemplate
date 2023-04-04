<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function auth(){
        return view('settings.auth');
    }
}
