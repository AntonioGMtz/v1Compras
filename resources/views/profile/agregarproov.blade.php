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
  button[type="submit"] {
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

  button[type="submit"]:hover {
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

<form>
  <label for="numero">Número:</label>
  <input type="number" id="numero" name="numero">

  <label for="categoria">Categoría:</label>
  <select id="categoria" name="categoria">
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <option value="opcion3">Opción 3</option>
    <!-- Agrega más opciones aquí -->
  </select>

  <button type="submit">
    <span style="font-size: 1rem;">+</span>
  </button>

  <br>
  <table>
  <tr>
    <td><label for="razon_social">Razón Social:</label></td>
    <td><input type="text" id="razon_social" name="razon_social"></td>
    <td><label for="email">Email:</label></td>
    <td><input type="email" id="email" name="email"></td>
    <td><label for="nombre_comercial">Nombre Comercial:</label></td>
    <td><input type="text" id="nombre_comercial" name="nombre_comercial"></td>
  </tr>
  <tr>

    <td><label for="telefono1">Teléfono 1:</label></td>
    <td><input type="text" id="telefono1" name="telefono1"></td>
    <td><label for="telefono2">Teléfono 2:</label></td>
    <td><input type="text" id="telefono2" name="telefono2"></td>
    <td><label for="rfc">RFC:</label></td>
    <td><input type="text" id="rfc" name="rfc"></td>
  </tr>

  <tr>
    <td><label for="rfc">Cuenta CLABE:</label></td>
    <td><input type="text" id="rfc" name="rfc"></td>
    <td><label for="telefono2">Sucursal:</label></td>
    <td><input type="text" id="telefono2" name="telefono2"></td>
    <td><label for="rfc">Pais:</label></td>
    <td><input type="text" id="rfc" name="rfc"></td>
  </tr>
  <tr>
 
    <td><label for="telefono2">Estado:</label></td>
    <td><input type="text" id="telefono2" name="telefono2"></td>
    <td><label for="rfc">Municipio:</label></td>
    <td><input type="text" id="rfc" name="rfc"></td>
    <td><label for="telefono2">Localidad:</label></td>
    <td><input type="text" id="telefono2" name="telefono2"></td>
  </tr>

  <tr>
    <td><label for="rfc">Calle:</label></td>
    <td><input type="text" id="rfc" name="rfc"></td>
    <td><label for="telefono2">Colonia:</label></td>
    <td><input type="text" id="telefono2" name="telefono2"></td>
    <td><label for="rfc">Codigo postal:</label></td>
    <td><input type="text" id="rfc" name="rfc"></td>
  </tr>
  <tr>
  
    <td><label for="telefono2">Numero interior:</label></td>
    <td><input type="text" id="telefono2" name="telefono2"></td>
    <td>
        <!-- Botón de guardar -->
<button type="button" class="btn btn-primary">
  <i class="bi bi-check"></i> Guardar
</button>
</td>
<td>
<!-- Botón de cancelar -->
<button type="button" class="btn btn-secondary">
  <i class="bi bi-x"></i> Cancelar
</button>
</td>


    
  </tr>
</table>


  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@stop