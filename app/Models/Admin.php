<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;

class Admin extends Authenticate
{
    protected $guard = 'admin';
}
