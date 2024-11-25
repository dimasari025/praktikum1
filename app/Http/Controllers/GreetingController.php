<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index(){
        $data = [
            'greeting' => 'welcome to laravel',
            'time' => date('h'),
            'fruits' => ['apple','banana','orange']
        ];
        return view('greeting', $data);
    }
}
