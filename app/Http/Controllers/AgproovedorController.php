<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AgproovedorController extends Controller
{
    public function create(){
        return view('profile.agregarproov');
    }
}
