<?php

namespace App\Controller;

use Core\Controller;

class UserController extends Controller
{
    public function login()
    {
        $this->render('login');
    }
}
