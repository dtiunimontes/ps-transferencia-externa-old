@extends('layouts.app')
@section('title', 'Inscrições Indeferidas - Lançamento de Recurso Pendente')
@section('content')

<div class="row">
    {{ Form::open(['url' => route('admin.recursos.buscar.inscricao'), 'method' => 'get']) }}
    <input type="hidden" name="tipo" value="envelope1_lancamento">
    <div class="col-md-2">
        <input type="text" class="form-control" id="inscricao" name="inscricao" placeholder="Inscrição" required>
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn bg-green-jungle bg-font-green-jungle">Buscar</button>
    </div>
    {{ Form::close() }}
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <tr>
                    <th>Inscrição</th>
                    <th>Candidato</th>
                    <th>Código Campus/Curso</th>
                    <th>Campus</th>
                    <th>Curso</th>
                    <th>Ações</th>
                </tr>
                @foreach($inscricoes as $inscricao)
                <tr>
                    <td>{{ $inscricao->inscricao }}</td>
                    <td>{{ $inscricao->candidato_nome }}</td>
                    <td>{{ $inscricao->codigo_campus_curso }}</td>
                    <td>{{ $inscricao->campus_nome }}</td>
                    <td>{{ $inscricao->curso_nome }}</td>
                    <td>
                        {{-- @if(empty($inscricao->recurso_etapa1))
                        <a href="{{ route('admin.recursos.envelope1.inscricoes.indeferidas.ver.recurso', $inscricao->inscricao) }}" class="btn bg-green-jungle bg-font-green-jungle">Lançar Recurso</a>
                        @elseif(!empty($inscricao->recurso_etapa1) AND empty($inscricao->resposta_recurso_etapa1))
                        <a href="{{ route('admin.recursos.envelope1.inscricoes.indeferidas.ver.recurso', $inscricao->inscricao) }}" class="btn blue-madison">Finalizar lançamento</a>
                        @endif --}}
                        @if(empty($inscricao->resposta_recurso_etapa1))
                        <a href="{{ route('admin.recursos.envelope2.inscricoes.indeferidas.ver.recurso', $inscricao->inscricao) }}" class="btn bg-green-jungle bg-font-green-jungle">Lançar Recurso</a>
                        @else
                            <span class="badge badge-danger badge-roundless">Já lançado</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
