<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return ('hello world ges');
    }

    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Fauzi']);
    // }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Fauzi')
        ->with('occupation','Astronaut');
    }

}
