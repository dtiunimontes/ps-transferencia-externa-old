<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Folhas de Identificação</title>
		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<style media="screen">
			@page { margin: 1cm; };
		</style>
	</head>
	<body>
        <header class="header" style="position: fixed; height:100px;">
            <img src="{{ asset('assets/img/header-comprovante.png') }}" class="img-responsive" alt="">
        </header>
        <div class="container" style="font-family: 'Roboto', sans-serif!important;">
            <div class="col-md-12" style="position:absolute; top: 5cm;">

    			<div class="col-md-12" id="indigena">
                    <div class="col-md-12 text-uppercase text-center">
                        <h2><strong>ENVELOPE 1</strong></h2>
                    </div><br><br><br>

                    <strong>Número de inscrição: </strong> {{ str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT) }} <br>
                    <strong>Nome do candidato: </strong> {{ $inscricao->nome_candidato }} <br>
                    <strong>Código do curso: </strong> {{ $inscricao->codigo }} <br>
                    <strong>Município/Campus: </strong> {{ strtoupper($inscricao->nome_polo) }} <br>
                    <strong>Curso: </strong> {{ strtoupper($inscricao->nome_curso) }} <br>
                    <strong>Turno: </strong> {{ strtoupper($inscricao->turno) }} <br>
                    <strong>Período: </strong> {{ $inscricao->periodo }}º PERÍODO <br>
    			</div>

                <br><br><br><br>

                <div class="col-md-12 text-center">
                    {!! DNS1D::getBarcodeHTML('1'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT), "C128", 1.5, 50) !!}
                </div>
                <div style="margin-left: 50px">
                    {{ '1'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT) }}
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="col-md-12 text-center">
                    {!! DNS1D::getBarcodeHTML('1'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT), "C128", 1.5, 50) !!}
                </div>
                <div style="margin-left: 50px">
                    {{ '1'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT) }}
                </div>

                <br><br><br><br>
                <br><br><br><br>
                <br><br><br><br>
            </div>

            <p style="page-break-after: always;"></p>

            <div class="col-md-12" style="position:absolute; top: 5cm;">
                <div class="col-md-12" id="indigena">
                    <div class="col-md-12 text-uppercase text-center">
                        <h2><strong>ENVELOPE 2</strong></h2>
                    </div><br><br><br>

                    <strong>Número de inscrição: </strong> {{ str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT) }} <br>
                    <strong>Nome do candidato: </strong> {{ $inscricao->nome_candidato }} <br>
                    <strong>Código do curso: </strong> {{ $inscricao->codigo }} <br>
                    <strong>Município/Campus: </strong> {{ strtoupper($inscricao->nome_polo) }} <br>
                    <strong>Curso: </strong> {{ strtoupper($inscricao->nome_curso) }} <br>
                    <strong>Turno: </strong> {{ strtoupper($inscricao->turno) }} <br>
                    <strong>Período: </strong> {{ $inscricao->periodo }}º PERÍODO <br>
    			</div>

                <br><br><br><br>

                <div class="col-md-12 text-center">
                    {!! DNS1D::getBarcodeHTML('2'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT), "C128", 1.5, 50) !!}
                </div>
                <div style="margin-left: 50px">
                    {{ '2'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT) }}
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="col-md-12 text-center">
                    {!! DNS1D::getBarcodeHTML('2'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT), "C128", 1.5, 50) !!}
                </div>
                <div style="margin-left: 50px">
                    {{ '2'.str_pad($inscricao->num_inscricao, 10, "0", STR_PAD_LEFT) }}
                </div>
            </div>

		</div>
    </body>
</html>
