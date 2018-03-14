@extends('layouts.app')

@section('title', 'Área do Candidato')
@section('content')

<style media="screen">
    .center{
        text-align: center;
    }
    .tab{
        font-weight: bolder;
        text-transform: uppercase;
    }

    .tab:hover{
        background-color: #27A4B0 !important;
        color: #FFF !important;
    }
</style>

<div class="col-md-2 col-sm-2 col-xs-2">
    <ul class="nav nav-tabs tabs-left">
        <li class="active">
            <a href="#tab_6_1" data-toggle="tab" class="tab"><i class="fa fa-pencil"></i> Inscrição </a>
        </li>
        @if(date('Y-m-d H:i') > formatarDataHoraExtensoUSA($config->inicio_resultado_final))
        <li>
            <a href="#tab_6_2" data-toggle="tab" class="tab"><i class="fa fa-file-word-o"></i> Recursos </a>
        </li>
        @endif
    </ul>
</div>
<div class="col-md-10 col-sm-10 col-xs-10">
    <div class="tab-content">
        <div class="tab-pane active" id="tab_6_1">
            <div class="caption">
                <i class="icon-refresh font-green"></i>
                <span class="caption-subject bold font-green uppercase"> Inscrição</span>
                <span class="caption-helper">Abaixo seguem as informações do curso que você se candidatou a vaga</span>
            </div>
            <hr>
            <table class="table table-hover">
                <tr style="background-color: #EFF3F8">
                    <th>MUNICÍPIO/CAMPUS</th>
                    <th>CURSO</th>
                    <th class="center">CÓDIGO</th>
                    <th class="center">TURNO</th>
                    <th class="center">PERÍODO</th>
                    <th class="center">DAE</th>
                    <th class="center">COMPROVANTES</th>
                </tr>
                <tr>
                    <td>{{ $inscricao->nome_polo }}</td>
                    <td>{{ $inscricao->nome_curso }}</td>
                    <td class="center">{{ $inscricao->codigo }}</td>
                    <td class="center">{{ strtoupper($inscricao->turno) }}</td>
                    <td class="center">{{ $inscricao->periodo }}º</td>
                    <td class="center">
                        @if ($inscricao->status_dae == 0)
                            <form id="excluir" class="presenca hidden-print" method="post" action="{{ route('candidato.dae', $inscricao->id) }}" style="float:left;">{{csrf_field()}}<button type="submit" class="btn btn-success mt-ladda-btn ladda-button" style="margin-top: -1px;">Emitir DAE</button></form>
                        @elseif ($inscricao->status_dae == 1)
                            <button class="btn btn-success mt-ladda-btn ladda-button">Pago</button>
                        @endif
                    </td>
                    <td class="center"><a href="{{ route('candidato.comprovantes.emitir') }}" class="btn btn-success mt-ladda-btn ladda-button">Emitir Folhas de Identificação</a></td>
                </tr>
            </table>
            <br><br>
        </div>
        @if(date('Y-m-d H:i') >= formatarDataHoraExtensoUSA($config->inicio_resultado_final))
        <div class="tab-pane fade" id="tab_6_2">
            <div class="caption">
                <i class="icon-refresh font-green"></i>
                <span class="caption-subject bold font-green uppercase"> Recursos</span>
                <span class="caption-helper">Veja os recursos abaixo</span>
            </div>
            <hr>
            <div class="note note-success">
                <h4 class="block"><strong>Etapa 1 - Análise de Desempenho Acadêmico (média aritmética)</strong></h4>
                @if(!empty($recurso->resposta_recurso_etapa2))
                    <p>
                        <strong>Resposta da CEPS ao seu recurso: </strong>
                    <p>
                        {{ formatarDataUSAParaBR($recurso->data_resposta_recurso_etapa2) }} - {{ $recurso->resposta_recurso_etapa2 }}
                    </p>
                    </p>
                @else
                    <p>Você não possui recursos para a Etapa 1</p>
                @endif

            </div>
            <div class="note note-info">
                <h4 class="block"><strong>Etapa 2 - Exame da Documentação Acadêmica e/ou da Análise da Estrutura Curricular</strong></h4>
                @if(!empty($recurso->motivo_indeferimento_etapa1))
                    <strong>Motivo do infererimento: </strong>
                    <p>
                        {{ $recurso->motivo_indeferimento_etapa1 }}
                    </p><br>
                    <strong>Resposta da CEPS ao seu recurso: </strong>
                    <p>
                        {{ formatarDataUSAParaBR($recurso->data_resposta_recurso_etapa1) }} - {{ $recurso->resposta_recurso_etapa1 }}
                    </p>
                @else
                    <p>Você não possui recursos para a Etapa 2</p>
                @endif
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
