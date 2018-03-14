@extends('layouts.app')
@section('title', 'Início')
@section('content')
    <div class="col-md-12">
        <div class="portlet light portlet-fit ">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-green"></i>
                    <span class="caption-subject font-green bold uppercase">processo de transferência externa 1/2018</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="mt-element-step">
                    <div class="row step-background">
                        @if(date('Y-m-d H:i') <= formatarDataHoraExtensoUSA($config->termino_inscricoes))
                        <a href="{{ route('register') }}" class="ancora">
                            <div class="col-md-4 bg-grey-steel mt-step-col">
                                <div class="mt-step-title uppercase font-grey-cascade"><strong>Inscrição</strong></div>
                                <div class="mt-step-content font-grey-cascade">Clique aqui para realizar inscrição no processo seletivo</div>
                            </div>
                        </a>
                        @endif
                        <a href="{{ route('login') }}" class="ancora">
                            <div class="col-md-4 bg-grey-steel mt-step-col active">
                                <div class="mt-step-title uppercase font-grey-cascade"><strong>Login</strong></div>
                                <div class="mt-step-content font-grey-cascade">Clique aqui para acessar área do candidato</div>
                            </div>
                        </a>
                        <a href="http://www.ceps.unimontes.br" target="_blank" class="ancora">
                            <div class="col-md-4 bg-grey-steel mt-step-col error">
                                <div class="mt-step-title uppercase font-grey-cascade"><strong>CEPS</strong></div>
                                <div class="mt-step-content font-grey-cascade">Clique aqui para acessar o site do <strong>CEPS</strong></div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
