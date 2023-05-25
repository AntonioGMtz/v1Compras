<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProovedorController extends Controller
{
    public function create(){
        return view('profile.proovedores');
    }
}
