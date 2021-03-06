@section('styles')
@parent
<style>
    #card-principal-conteudo {
        font-size: 1.1em !important;
    }
</style>
@endsection

<div id="card-principal-conteudo">
    <span class="text-muted">Criado por:</span> {!! $autor->name ?? '<span class="text-danger">** Sem autor **</span>' !!} @includewhen($autor, 'chamados.show.user-detail', ['user'=>$autor])<br>
    <span class="text-muted">Criado em:</span> {{ Carbon\Carbon::parse($chamado->created_at)->format('d/m/Y H:i') }}<br>

    @if(!is_null($chamado->fechado_em))
    <span class="text-muted">Fechado em</span>: {{ Carbon\Carbon::parse($chamado->fechado_em)->format('d/m/Y H:i') }}<br>
    @endif

    <span class="text-muted">Assunto:</span> {{ $chamado->assunto }}<br>
    <span class="text-muted">Descrição:</span> {{ $chamado->descricao ?? '' }}<br>
    <br>
</div>