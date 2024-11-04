<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('tampilan1');
    }

    public function login (){
        return view('signup');
    }

    public function about(){
        $data = [
            'name' => 'Nathaniel Jestro Faustin',
            'adrees' => 'cilacap',
            'gmail' => 'faustin@gmail.com'
        ];
        return view('about', $data);
    }
}
