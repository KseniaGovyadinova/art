<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('profiles/index', [
            'user' => $user
        ]);
    }
}
