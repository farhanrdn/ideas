<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisteredUserController extends Model
{
    public function create()
    {
        return view('auth.register');
    }

    public function store() {}
}
