<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show(){
        $detail = [
            'tittle'=>'detail', 'content'=> 'this is details'
        ];
        return view('detail', compact('detail'));
    }

}
