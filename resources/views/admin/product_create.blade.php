@extends('layouts.app')
@section('title')
  Registro de productos - HobbyBlue
@endsection
@section('css')

@endsection
@section('script')

@endsection
@section('content')
  <div class="container card">
    <br>
    <fieldset>
      <legend><h3>Registro de productos</h3></legend>
        <form method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
          {{ csrf_field() }}
          <fieldset class="form-group">
            <label >Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Nombre del producto">
            <small class="text-muted">¿Cual es el nombre comercial del producto?.</small>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleTextarea">Descripcion</label>
            <textarea class="form-control" id="exampleTextarea" name="description" rows="3"></textarea>
            <small class="text-muted">Detalle una breve descripcion del producto.</small>
          </fieldset>
          <fieldset class="form-group">
            <label >Escala</label>
            <input type="text" name="scale" class="form-control" placeholder="Escala del producto">
          </fieldset>
          <fieldset class="form-group">
            <label >Año y fabricante</label>
            <input type="text" name="year_factory" class="form-control" placeholder="Año y fabricante del producto">
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleSelect1">Seleccione la categoria</label>
            <select class="form-control" name="category" required>
              <option value="">Seleccione</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleSelect1">Seleccione el tipo de producto</label>
            <select class="form-control" name="type">
              <option value="0">Ninguno</option>
              @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->type}}</option>
              @endforeach
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleInputFile">Imagen del producto</label>
            <input type="file" class="form-control-file" id="exampleInputFile" name="image">
            <small class="text-muted">Ingrese una imagen tipo .jpg .png para subir a la web</small>
          </fieldset>
          <div class="btn-group">
            <button type="submit" class="btn right btn-success">Guardar y salir</button>
          </div>
        </form>
    </fieldset>
  </div>
@endsection
