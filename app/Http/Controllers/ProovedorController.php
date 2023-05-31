<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proveedores;

class ProovedorController extends Controller
{
    public function create(){
        return view('profile.proovedores');
    }

    public function index()
    {
        $proveedores = Proveedores::all();
        return view('profile.proovedores')->with('proveedores', $proveedores);
    }
    public function destroy($id)
    {
        $proveedores = Proveedores::findOrFail($id);
        $proveedores->delete();

        return redirect()->back()->with('success', 'Proveedor eliminado exitosamente');
    }

}

