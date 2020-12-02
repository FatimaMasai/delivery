@extends('layouts.app') 
<div class="container">
    <h4>Gestion Clientes</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('cliente.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-2">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-2">
                            <input type="submit" class="btn btn-outline-primary" value="Buscar"> 
                        </div>
                        <div class="col-auto my-2">
                            <a href="{{route('cliente.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opcion</th>
                                <th>ID</th>
                                <th>Apellidos</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Email</th> 
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($clientes)<=0)
                        <tr>
                            <td colspan="8"> No hay resultados</td>
                        </tr>
                        @else
                            @foreach ($clientes as $cliente)
                            <tr>
                                <td> <a href="{{route('cliente.edit', $cliente->id)}}"  class="btn btn-warning btn-sm"> Editar</a> 
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_delete-{{$cliente->id}}">
                                    Eliminar
                                </button>
                                </td>
                                <td>{{$cliente->id}}  </td>
                                <td>{{$cliente->apellidos}} </td>
                                <td>{{$cliente->nombre}} </td>
                                <td>{{$cliente->telefono}} </td>
                                <td>{{$cliente->direccion}} </td>
                                <td>{{$cliente->email}} </td>
                            </tr>
                            @include('cliente.delete')
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$clientes->links()}}

                </div>
            </div>
        </div>
    </div>
</div> 




 