@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .btn-container {
      display: flex;
      justify-content: flex-end;
    }

    .btn2 {
      width: 70px;
      height: 70px;
      margin: 0 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }


    .btn-text {
      margin-top: 5px;
      text-align: center;
    }
    .separator {
      border-top: 1px solid #ccc;
      margin: 20px 0;
    }
    .search-container {
      background-color: #dcdcdc;
      padding: 20px;
      display: flex;
      align-items: center;
    }

    .search-container input[type="text"] {
      margin-right: 10px;
      width: 200px;
    }

    .search-container .btn-buscar {
      margin-left: auto;
      background-color: black;
      color: white;
    }

    .search-container .btn-buscar i {
      margin-left: 5px;
    }
  </style>
@stop

@section('content')
<h4>
    <i class="fas fa-truck"></i> Proveedores
  </h4>
  <div class="separator"></div>

  <!-- Resto del contenido de la página -->

 
<div class="btn-container">
    <button class="btn2 btn-success " onclick="agregar()">
      <i class="fas fa-plus"></i>
      <span class="btn-text">Nuevo</span>
    </button>

    <button class="btn2 btn-primary" onclick="exportar()">
      <i class="fas fa-download"></i>
      <span class="btn-text">Exportar</span>
    </button>

    <button class="btn2 btn-secondary" onclick="ayuda()">
      <i class="fas fa-question"></i>
      <span class="btn-text">Ayuda</span>
    </button>
  </div>
<br>
  <div class="search-container">
    <input type="text" placeholder="Número">
    <input type="text" placeholder="Nombre">
    <div class="dropdown">
      <button class="btn btn-light dropdown-toggle" type="button" id="sucursalDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sucursal
      </button>
      <div class="dropdown-menu" aria-labelledby="sucursalDropdown">
        <a class="dropdown-item" href="#">Sucursal 1</a>
        <a class="dropdown-item" href="#">Sucursal 2</a>
        <a class="dropdown-item" href="#">Sucursal 3</a>
      </div>
    </div>
    <button class="btn btn-primary btn-buscar">
      Buscar <i class="fas fa-search"></i>
    </button>
  </div>
  <div class="container mt-4">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Número</th>
          <th scope="col">Nombre</th>
          <th scope="col">RFC</th>
          <th scope="col">Sucursal</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Proveedor 1</td>
          <td>RFC-123</td>
          <td>Sucursal A</td>
          <td><button class="btn btn-success"><i class="fas fa-edit"></i></button></td>
          <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Proveedor 2</td>
          <td>RFC-456</td>
          <td>Sucursal B</td>
          <td><button class="btn btn-success"><i class="fas fa-edit"></i></button></td>
          <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Proveedor 3</td>
          <td>RFC-789</td>
          <td>Sucursal C</td>
          <td><button class="btn btn-success"><i class="fas fa-edit"></i></button></td>
          <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Proveedor 4</td>
          <td>RFC-012</td>
          <td>Sucursal D</td>
          <td><button class="btn btn-success"><i class="fas fa-edit"></i></button></td>
          <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Proveedor 5</td>
          <td>RFC-345</td>
          <td>Sucursal E</td>
          <td><button class="btn btn-success"><i class="fas fa-edit"></i></button></td>
          <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
    function agregar() {
      // Lógica para el botón "Agregar"
    }

    function exportar() {
      // Lógica para el botón "Exportar"
    }

    function ayuda() {
      // Lógica para el botón "Ayuda"
    }
  </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop