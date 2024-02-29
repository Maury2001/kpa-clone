<?php

namespace App\Controllers;


class Auth extends BaseController
{
    public function log(): string
    {
        return view('templates/header')
            . view('auth/login');
    }

    public function reg(): string
    {
        return view('templates/header')
            . view('auth/reg');
    }
}