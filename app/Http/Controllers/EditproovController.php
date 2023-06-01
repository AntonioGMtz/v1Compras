<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;


class EditproovController extends Controller
{
    public function create(){
        return view('profile.editproov');
    }

    public function edit($id)
    {
        $proveedor = Proveedores::findOrFail($id);
        return view('profile.editproov', compact('proveedor'));
    }
    public function update(Request $request, $id)
{
    $proveedor = Proveedores::findOrFail($id);
    $proveedor->razonsocial = $request->input('razonsocial');
    $proveedor->email = $request->input('email');
    $proveedor->nombrecomercial = $request->input('nombrecomercial');
    $proveedor->teluno = $request->input('teluno');
    $proveedor->teldos = $request->input('teldos');
    $proveedor->rfc = $request->input('rfc');
    $proveedor->clabe = $request->input('clabe');
    $proveedor->sucursal = $request->input('sucursal');
    $proveedor->pais = $request->input('pais');
    $proveedor->estado = $request->input('estado');
    $proveedor->municipio = $request->input('municipio');
    $proveedor->localidad = $request->input('localidad');
    $proveedor->calle = $request->input('calle');
    $proveedor->colonia = $request->input('colonia');
    $proveedor->cp = $request->input('cp');
    $proveedor->numint = $request->input('numint');


    // Actualiza los demás campos con los valores del formulario

    $proveedor->save();

    return redirect()->route('proovedores.index')->with('success', 'Proveedor actualizado exitosamente');
}



   
}