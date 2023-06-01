@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="separator"></div>
<style>
/* Estilos para la tabla */
   table {
    width: 100%;
    border-collapse: collapse;
  }

  table td {
    padding: 8px;
    border: none; /* Elimina los bordes de las celdas */
  }
  </style>
   
@stop

@section('content')

<h3>
    <i class="fas fa-pen"></i> Editar Proovedor
  </h3>
  <div class="separator"></div>
  <br>



  <form action="{{ route('editproov.update', $proveedor->id) }}" method="POST">
    @csrf
    @method('PUT')


    <table>
    <tr>
        <td><label for="razonsocial">Razón Social:</label></td>
        <td><input type="text" name="razonsocial" value="{{ $proveedor->razonsocial }}"></td>
        <td><label for="email">Email:</label></td>
        <td><input type="text" name="email" value="{{ $proveedor->email }}"></td>
        <td><label for="nombrecomercial">Nombre Comercial:</label></td>
        <td><input type="text" id="nombrecomercial" name="nombrecomercial" value="{{ $proveedor->nombrecomercial }}"></td>
    </tr>
    <tr>

    <td><label for="telefono1">Teléfono 1:</label></td>
    <td><input type="text" id="teluno" name="teluno" value="{{ $proveedor->teluno }}"></td>
    <td><label for="teldos">Teléfono 2:</label></td>
    <td><input type="text" id="teldos" name="teldos" value="{{ $proveedor->teldos }}"></td>
    <td><label for="rfc">RFC:</label></td>
    <td><input type="text" id="rfc" name="rfc" value="{{ $proveedor->rfc }}"></td>
  </tr>

  <tr>
    <td><label for="clabe">Cuenta CLABE:</label></td>
    <td><input type="text" id="clabe" name="clabe" value="{{ $proveedor->clabe }}"></td>
    <td><label for="sucursal">Sucursal:</label></td>
    <td><input type="text" id="sucursal" name="sucursal" value="{{ $proveedor->sucursal }}"></td>
    <td><label for="pais">Pais:</label></td>
    <td><input type="text" id="pais" name="pais" value="{{ $proveedor->pais }}"></td>
  </tr>
  <tr>
 
    <td><label for="estado">Estado:</label></td>
    <td><input type="text" id="estado" name="estado" value="{{ $proveedor->estado }}"></td>
    <td><label for="municipio">Municipio:</label></td>
    <td><input type="text" id="municipio" name="municipio" value="{{ $proveedor->municipio }}"></td>
    <td><label for="localidad">Localidad:</label></td>
    <td><input type="text" id="localidad" name="localidad" value="{{ $proveedor->localidad }}"></td>
  </tr>

  <tr>
    <td><label for="calle">Calle:</label></td>
    <td><input type="text" id="calle" name="calle" value="{{ $proveedor->calle }}"></td>
    <td><label for="colonia">Colonia:</label></td>
    <td><input type="text" id="colonia" name="colonia" value="{{ $proveedor->colonia }}"></td>
    <td><label for="cp">Codigo postal:</label></td>
    <td><input type="text" id="cp" name="cp" value="{{ $proveedor->cp }}"></td>
  </tr>
  <tr>
  
    <td><label for="numint">Numero interior:</label></td>
    <td><input type="text" id="numint" name="numint" value="{{ $proveedor->numint }}"></td>

  </tr>
    </table>

    <button type="submit">Guardar</button>
</form>
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop