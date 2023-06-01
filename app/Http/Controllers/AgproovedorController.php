<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;


class AgproovedorController extends Controller
{
    public function create(){
        $lastId = Proveedores::orderBy('id', 'desc')->value('id');
        $numeroRegistro = $lastId + 1;
        return view('profile.agregarproov',  ['numeroRegistro' => $numeroRegistro]);
    }

    public function store() {

        $this->validate(request(), [
            'razonsocial' => 'required',
            'email' => 'required|email',
            'nombrecomercial' => 'required',
            'teluno' => 'required',
            'teldos' => 'required',
            'rfc' => 'required',
            'clabe' => 'required',
            'sucursal' => 'required',
            'pais' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'localidad' => 'required',
            'calle' => 'required',
            'colonia' => 'required',
            'cp' => 'required',
            'numint' => 'required',
        ]);

        $proovedor = Proveedores::create(request(['razonsocial',
        'email',
        'nombrecomercial',
        'teluno',
        'teldos',
        'rfc',
        'clabe',
        'sucursal',
        'pais',
        'estado',
        'municipio',
        'localidad',
        'calle',
        'colonia',
        'cp',
        'numint',]));

        return redirect()->back()->with('success', 'Proveedor guardado exitosamente');
        
    }

   
}




