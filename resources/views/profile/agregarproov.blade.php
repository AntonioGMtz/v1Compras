@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

  
@stop

@section('content')
<h4>
    <i class="fas fa-warehouse"></i> Nuevo Proovedor
  </h4>
  <div class="separator"></div>
  <style>
  input[type="text"],
  input[type="email"] {
    padding: 8px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }
  /* Estilos para los campos de entrada */
  input[type="number"],
  select {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }
  .campo-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  /* Estilos para el botón de suma */
  button[type="button"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 50%;
    padding: 1px;
    font-size: 18px;
    cursor: pointer;
    line-height: 1;
    height: 30px;
    width: 30px;
  }

  button[type="button"]:hover {
    background-color: #45a049;
  }
  .campo-container > div {
    margin-bottom: 10px;
  }
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
<label for="numero">Número:</label>
  <input type="text" name="numero" value="{{ $numeroRegistro }}" readonly>

  <label for="categoria">Categoría:</label>
  <select id="categoria" name="categoria">
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
    <!-- Agrega más opciones aquí -->
  </select>

  <button type="button">
    <span style="font-size: 1rem;">+</span>
  </button>

<form  method="POST" action="{{ route('agregarproov.store') }}">
@csrf
 

  <br>
  <table>
  <tr>
    <td><label for="razonsocial">Razón Social:</label></td>
    <td><input type="text" id="razonsocial" name="razonsocial" class="form-control {{ $errors->has('razonsocial') ? 'is-invalid' : '' }}" value="{{ old('razonsocial') }}">
    @if ($errors->has('razonsocial'))
    <div class="invalid-feedback">
        {{ $errors->first('razonsocial') }}
    </div>
    @endif
    </td>
    <td><label for="email">Email:</label></td>
    <td><input type="email" id="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}">
    @if ($errors->has('email'))
    <div class="invalid-feedback">
        {{ $errors->first('email') }}
    </div>
    @endif
    </td>
    <td><label for="nombrecomercial">Nombre Comercial:</label></td>
    <td><input type="text" id="nombrecomercial" name="nombrecomercial" class="form-control {{ $errors->has('nombrecomercial') ? 'is-invalid' : '' }}" value="{{ old('nombrecomercial') }}">
    @if ($errors->has('nombrecomercial'))
    <div class="invalid-feedback">
        {{ $errors->first('nombrecomercial') }}
    </div>
    @endif
    </td>
  </tr>
  <tr>

    <td><label for="telefono1">Teléfono 1:</label></td>
    <td><input type="text" id="teluno" name="teluno" class="form-control {{ $errors->has('teluno') ? 'is-invalid' : '' }}" value="{{ old('teluno') }}">
    @if ($errors->has('teluno'))
    <div class="invalid-feedback">
        {{ $errors->first('teluno') }}
    </div>
    @endif
    </td>
    <td><label for="teldos">Teléfono 2:</label></td>
    <td><input type="text" id="teldos" name="teldos" class="form-control {{ $errors->has('teldos') ? 'is-invalid' : '' }}" value="{{ old('teldos') }}">
    @if ($errors->has('teldos'))
    <div class="invalid-feedback">
        {{ $errors->first('teldos') }}
    </div>
    @endif
    </td>
    <td><label for="rfc">RFC:</label></td>
    <td><input type="text" id="rfc" name="rfc" class="form-control {{ $errors->has('rfc') ? 'is-invalid' : '' }}" value="{{ old('rfc') }}">
    @if ($errors->has('rfc'))
    <div class="invalid-feedback">
        {{ $errors->first('rfc') }}
    </div>
    @endif
    </td>
  </tr>

  <tr>
    <td><label for="clabe">Cuenta CLABE:</label></td>
    <td><input type="text" id="clabe" name="clabe" class="form-control {{ $errors->has('clabe') ? 'is-invalid' : '' }}" value="{{ old('clabe') }}">
    @if ($errors->has('clabe'))
    <div class="invalid-feedback">
        {{ $errors->first('clabe') }}
    </div>
    @endif
    </td>
    <td><label for="sucursal">Sucursal:</label></td>
    <td><input type="text" id="sucursal" name="sucursal" class="form-control {{ $errors->has('sucursal') ? 'is-invalid' : '' }}" value="{{ old('sucursal') }}">
    @if ($errors->has('sucursal'))
    <div class="invalid-feedback">
        {{ $errors->first('sucursal') }}
    </div>
    @endif
    </td>
    <td><label for="pais">Pais:</label></td>
    <td><input type="text" id="pais" name="pais" class="form-control {{ $errors->has('pais') ? 'is-invalid' : '' }}" value="{{ old('pais') }}">
    @if ($errors->has('pais'))
    <div class="invalid-feedback">
        {{ $errors->first('pais') }}
    </div>
    @endif
    </td>
  </tr>
  <tr>
 
    <td><label for="estado">Estado:</label></td>
    <td><input type="text" id="estado" name="estado" class="form-control {{ $errors->has('estado') ? 'is-invalid' : '' }}" value="{{ old('estado') }}">
    @if ($errors->has('estado'))
    <div class="invalid-feedback">
        {{ $errors->first('estado') }}
    </div>
    @endif
    </td>
    <td><label for="municipio">Municipio:</label></td>
    <td><input type="text" id="municipio" name="municipio" class="form-control {{ $errors->has('municipio') ? 'is-invalid' : '' }}" value="{{ old('municipio') }}">
    @if ($errors->has('municipio'))
    <div class="invalid-feedback">
        {{ $errors->first('municipio') }}
    </div>
    @endif
    </td>
    <td><label for="localidad">Localidad:</label></td>
    <td><input type="text" id="localidad" name="localidad" class="form-control {{ $errors->has('localidad') ? 'is-invalid' : '' }}" value="{{ old('localidad') }}">
    @if ($errors->has('localidad'))
    <div class="invalid-feedback">
        {{ $errors->first('localidad') }}
    </div>
    @endif
    </td>
  </tr>

  <tr>
    <td><label for="calle">Calle:</label></td>
    <td><input type="text" id="calle" name="calle" class="form-control {{ $errors->has('calle') ? 'is-invalid' : '' }}" value="{{ old('calle') }}">
    @if ($errors->has('calle'))
    <div class="invalid-feedback">
        {{ $errors->first('calle') }}
    </div>
    @endif
    </td>
    <td><label for="colonia">Colonia:</label></td>
    <td><input type="text" id="colonia" name="colonia" class="form-control {{ $errors->has('colonia') ? 'is-invalid' : '' }}" value="{{ old('colonia') }}">
    @if ($errors->has('colonia'))
    <div class="invalid-feedback">
        {{ $errors->first('colonia') }}
    </div>
    @endif
    </td>
    <td><label for="cp">Codigo postal:</label></td>
    <td><input type="text" id="cp" name="cp" class="form-control {{ $errors->has('cp') ? 'is-invalid' : '' }}" value="{{ old('cp') }}">
    @if ($errors->has('colonia'))
    <div class="invalid-feedback">
        {{ $errors->first('colonia') }}
    </div>
    @endif
    </td>
  </tr>
  <tr>
  
    <td><label for="numint">Numero interior:</label></td>
    <td><input type="text" id="numint" name="numint" class="form-control {{ $errors->has('numint') ? 'is-invalid' : '' }}" value="{{ old('numint') }}">
    @if ($errors->has('numint'))
    <div class="invalid-feedback">
        {{ $errors->first('numint') }}
    </div>
    @endif
    </td>

  </tr>
    </table>
   <!-- Botón de guardar -->
   <button type="submit" class="btn btn-primary">
    Guardar
    </button>
</form>
      
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
@stop

@section('js')
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@stop