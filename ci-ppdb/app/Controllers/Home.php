<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }
}