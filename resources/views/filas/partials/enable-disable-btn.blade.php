{!! Form::open(['url'=>'filas/'.$fila->id, 'name' => 'form_estado']) !!}
@method('put')
@csrf

<div class="btn-group enable-disable-btn">
    <button type="submit" class="btn btn-sm {{($fila->estado == 'Em elaboração') ? 'btn-warning' : 'btn-secondary'}}" name="estado" value="Em elaboração">
        Em elaboração
    </button>
    <button type="submit" class="btn btn-sm {{($fila->estado == 'Em produção') ? 'btn-success' : 'btn-secondary'}}" name="estado" value="Em produção">
        Em produção
    </button>
    <button type="submit" class="btn btn-sm {{($fila->estado == 'Desativada') ? 'btn-danger' : 'btn-secondary'}}" name="estado" value="Desativada">
        Desativada
    </button>
</div>
{!! Form::close(); !!}
