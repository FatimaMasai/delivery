<!-- Modal -->
<div class="modal fade" id="modal_delete-{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{route('cliente.destroy', $cliente->id)}}" method="post">
        @csrf 
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                ¿Deseas eliminar al registro {{$cliente->apellidos.' '.$cliente->nombre}} ?
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
            </div>
        </div>
    </form>
  </div>
</div>