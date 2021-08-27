<?php

namespace App\Controller;

use Core\Controller;

final class   HomeController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}
