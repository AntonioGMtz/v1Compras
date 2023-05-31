<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;


class AgproovedorController extends Controller
{
    public function create(){
        return view('profile.agregarproov');
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

    public function index()
    {
        $proveedores = Proveedores::all();
        return view('proovedores')->with('proveedores', $proveedores);
    }

}

/*public function guardar()
    {
    // Validar los datos si es necesario
    $this->validate(request(),[
        'razonsocial' => 'required',
        'email' => 'required',
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
        
        // Agrega más reglas de validación según tus necesidades
    ]);

    // Crear un nuevo registro en la base de datos
    $proovedor = Proovedores::create(request(['razonsocial',
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

    profile()->agregarproov($proovedor);

    // Redirigir a una página de éxito o hacer cualquier otra acción que necesites
    return redirect()->back()->with('success', 'Proveedor guardado exitosamente');
    }*/

    /*public function store(Request $request)
{
    $proveedor = new AgproovedorController();
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


    // Resto de la lógica
    return redirect()->back()->with('success', 'Proveedor guardado exitosamente');
}*/





