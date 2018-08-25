@extends('layouts.app')
@section('title')
  Productos Administrador
@endsection
@section('css')

@endsection
@section('js')
  <script type="text/javascript" language="javascript" class="init">

      $.noConflict();
        jQuery( document ).ready(function( $ ) {
          $('#table_products').DataTable({
            "language": {
                "url": "{{ url('json/datatable.json')}}"
            }
          });
        });
  	</script>
    <script type="text/javascript">
      function datos(var1, var2, var3, var4, var5){
         $('#name').html(var1);
         $('#image').attr('src','../files_uploaded/'+var2);
         $('#description').html(var3);
         $('#scale').html(var4);
         $('#year').html(var5);
       }
    </script>
@endsection
@section('content')
<div class="container">
  <br>
  <fieldset>
    <legend>Productos - Listado</legend>
    <div class="table-responsive">
      <table id="table_products">
        <thead>
          <td>Nombre</td>
          <td>Detalles</td>
          <td>Categoria</td>
          <td>Imagen</td>
          <td>Acciones</td>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>

            <td>{{$product->name}}</td>
            <td>
              <b>Descripcion: </b>{{$product->description}} <br>
              <b>Escala: </b>{{$product->scale}} <br>
              <b>Año y fabricante: </b>{{$product->year_factory}}
            </td>
            <td>{{$product->type}}</td>
            <td>
              <img src="../files_uploaded/{{$product->url}}" height="100">
            </td>
            <td>
              <a href="#" onclick="javascript:datos('{{$product->name}}','{{$product->url}}','{{$product->description}}','{{$product->scale}}','{{$product->year_factory}}')" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i> Ver</a>
              <a href="#" onclick="javascript:eliminar('{{$product->id}}')"class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </fieldset>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="name"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img src="" id="image" width="400" alt="">
        </center>
        <br>
        <b>Descripcion: </b> <span id="description"></span><br>
        <b>Escala: </b> <span id="scale"></span><br>
        <b>Año y fabricante: </b> <span id="year"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>

      </div>
    </div>
  </div>
</div>
@endsection
