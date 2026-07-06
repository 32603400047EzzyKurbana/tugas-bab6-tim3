<?php

namespace App\Controllers;

class HelloWorld1 extends BaseController
{
    public function index()
    {
        return view('helloworld');
    }
}