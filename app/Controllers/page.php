<?php

namespace App\Controllers;

class Page extends BaseController
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