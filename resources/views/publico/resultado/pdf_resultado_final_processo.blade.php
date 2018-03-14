<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resultado</title>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
			@page { margin: 1cm; };
            .upper{
                text-transform: uppercase;
            }
            td{
                text-transform: uppercase;
            }
		</style>
    </head>
    <body>
        <header class="header" style="position: fixed; height:100px;">
            <img src="{{ asset('assets/img/header_resultado.png') }}" class="img-responsive" alt="">
        </header>
        <div class="container" style="font-family: 'Roboto', sans-serif!important;">
            <div class="col-md-12" style="top: 3cm;">
                <div class="col-md-12 text-uppercase text-center">
                    <h4><strong>RESULTADO FINAL - </strong>CAMPUS {{ $campus->nome }} - {{ $curso->nome }} - {{ $curso_polo->turno }} - {{ $curso_polo->periodo }}º PERÍODO</h4>
                    <br>
                </div>
                <br>
                <h4><strong>CANDIDATOS CLASSIFICADOS ATÉ O LIMITE DE VAGAS</strong></h4>
                @php
                    $cont_1 = 1;
                    $cont_2 = count($resultado_limite_vagas) + 1;
                @endphp

                @if(count($resultado_limite_vagas) != 0)
                <table class="table table-condensed table-bordered table-striped">
                    <tr>
                        <th style="text-align: center;">#</th>
                        <th>NOME</th>
                        <th>RG</th>
                        @if(!isset($mais_vagas_que_candidatos))
                        <th style="text-align: center;">NOTA</th>
                        @endif
                    </tr>
                    @foreach($resultado_limite_vagas as $limite_vagas)
                    <tr>
                        <td width="40px" align="center">{{ $cont_1 }}</td>
                        <td class="upper">{{ $limite_vagas->nome }}</td>
                        <td width="200px">{{ $limite_vagas->rg }}</td>
                        @if(!isset($mais_vagas_que_candidatos))
                        <td width="60px" align="center">{{ $limite_vagas->media }}</td>
                        @endif
                    </tr>
                    @php
                        $cont_1++;
                    @endphp
                    @endforeach
                </table>
                @else
                    <small>Não há candidatos classificados até o limite de vagas</small>
                @endif
                <br><br>
                <h4><strong>CANDIDATOS CLASSIFICADOS ALÉM DO LIMITE DE VAGAS</strong></h4>

                @if(count($resultado_alem_limite_vagas) != 0)
                <table class="table table-condensed table-bordered table-striped">
                    <tr>
                        <th width="40px" style="text-align: center;">#</th>
                        <th>NOME</th>
                        <th width="200px">RG</th>
                        @if(!isset($mais_vagas_que_candidatos))
                        <th style="text-align: center;">NOTA</th>
                        @endif
                    </tr>
                    @foreach($resultado_alem_limite_vagas as $alem_limite_vagas)
                    <tr>
                        <td align="center">{{ $cont_2 }}</td>
                        <td class="upper">{{ $alem_limite_vagas->nome }}</td>
                        <td>{{ $alem_limite_vagas->rg }}</td>
                        @if(!isset($mais_vagas_que_candidatos))
                        <td width="60px" align="center">{{ $alem_limite_vagas->media }}</td>
                        @endif
                    </tr>
                    @php
                        $cont_2++;
                    @endphp
                    @endforeach
                </table>
                @else
                    <small>Não há candidatos classificados além do limite de vagas</small>
                @endif
                <br><br>
                <h4><strong>CANDIDATOS INDEFERIDOS - 2ª ETAPA</strong></h4>

                @if(count($candidatos_indeferidos) != 0)
                    <table class="table table-condensed table-bordered table-striped">
                        <tr>
                            <th>NOME</th>
                            <th width="200px">RG</th>
                        </tr>
                        @foreach($candidatos_indeferidos as $candidato_indeferido)
                            <tr>
                                <td class="upper">{{ $candidato_indeferido->nome }}</td>
                                <td>{{ $candidato_indeferido->rg }}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <small>Não há candidatos indeferidos</small>
                @endif
            </div>
        </div>
    </body>
</html>
