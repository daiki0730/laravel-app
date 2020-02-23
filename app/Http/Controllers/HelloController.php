<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'sample',
        ];

        return view('hello.index', $data);
    }
}
