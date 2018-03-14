<?php

namespace App\Http\Controllers\Candidato;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Models\Config;
use App\Models\Recurso;
use App\Models\Inscricao;

class HomeController extends Controller{

    public function index(){

        $config = Config::all()->first();

        $id_usuario = Auth::id();

        $inscricao = DB::table('inscricoes')
                        ->join('cursos_polos', 'cursos_polos.id', '=', 'inscricoes.cursos_polos_id')
                        ->join('cursos', 'cursos.id', '=', 'cursos_polos.curso_id')
                        ->join('polos', 'polos.id', '=', 'cursos_polos.polo_id')
                        ->where('inscricoes.usuarios_id', '=', $id_usuario)
                        ->select(
                            'cursos.nome as nome_curso',
                            'polos.nome as nome_polo',
                            'cursos_polos.turno',
                            'cursos_polos.periodo',
                            'cursos_polos.id as codigo',
                            'inscricoes.status_dae as status_dae',
                            'inscricoes.id as id',
                            'status_envelope1',
                            'status_envelope2'
                        )->first();

        $inscricao_candidato = Inscricao::where('usuarios_id', $id_usuario)->first();
        $recurso = Recurso::where('inscricoes_id', $inscricao_candidato->id)->first();

        return view('candidato.index', compact('inscricao', 'config', 'recurso'));
    }
}
