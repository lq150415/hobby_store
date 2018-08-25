@extends('layouts.app')
@section('title')
 Punto Arte & Hobby - Inicio
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger text-light">Panel principal</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                          <h5 class="card-title">Productos</h5>
                          <p class="card-text">Registro de productos nuevos.</p><br><br><br><br>
                          <a href="{{route('product.create')}}" class="btn btn-primary">Registrar nuevo producto</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card text-white bg-success">
                        <div class="card-body">
                          <h5 class="card-title">Ofertas especiales</h5>
                          <p class="card-text">Si existen ofertas especiales, este es el sector para registrarlo y hacerlo visible en la pagina web.</p><br><br><br>
                          <a href="#" class="btn btn-primary">Registrar nueva oferta</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body text-white bg-info">
                          <h5 class="card-title">Usuarios</h5>
                          <p class="card-text">Aqui se puede registrar a los usuarios autorizados a entrar a este apartado de la pagina web (Sistema).</p><br><br>
                          <a href="#" class="btn btn-primary">Registrar nuevo usuario</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card text-white bg-dark">
                        <div class="card-body">
                          <h5 class="card-title">Ventas</h5>
                          <p class="card-text">Esta seccion corresponde al registro de ventas de productos para el control correspondiente.</p><br><br>
                          <a href="#" class="btn btn-primary">Registrar nueva venta</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
