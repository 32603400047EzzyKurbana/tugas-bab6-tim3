<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function profil()
    {
        return view('pages/profil');
    }

    public function skill()
    {
        return view('pages/skill');
    }
}