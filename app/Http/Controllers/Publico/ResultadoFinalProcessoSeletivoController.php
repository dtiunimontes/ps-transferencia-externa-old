<?php

namespace App\Http\Controllers\Publico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Polo;
use App\Models\Curso;
use App\Models\CursoPolo;
use App\Models\Config;
use DB;
use PDF;

class ResultadoFinalProcessoSeletivoController extends Controller
{
    private $campi;
    private $config;

    public function __construct(){
        $this->campi = Polo::all();
        $this->config = Config::all()->first();
    }

    public function showForm(){
        return view('publico.resultado.form_final_processo', ['campi' => $this->campi]);
    }

    public function gerar(Request $request)
    {
        $resultado_limite_vagas = [];
        $resultado_alem_limite_vagas = [];

        $curso_polo = CursoPolo::find($request->curso_polo_id);

        $curso = Curso::find($curso_polo->curso_id);
        $campus = Polo::find($curso_polo->polo_id);

        $quantidade_deferidos = DB::table('usuarios')
            ->join('inscricoes', 'inscricoes.usuarios_id', '=', 'usuarios.id')
            ->join('cursos_polos', 'cursos_polos.id', '=', 'inscricoes.cursos_polos_id')
            ->where('inscricoes.status_dae', '=', 1)
            ->where('inscricoes.status_envelope1', '=', 1)
            ->where('inscricoes.status_envelope2', '=', 2)
            ->where('cursos_polos.id', '=', $request->curso_polo_id)
            ->count();

        $novo_limit = $quantidade_deferidos - $curso_polo->vagas;

        if($quantidade_deferidos > $curso_polo->vagas){

            $resultado_limite_vagas = DB::table('usuarios')
                ->join('inscricoes', 'inscricoes.usuarios_id', '=', 'usuarios.id')
                ->join('cursos_polos', 'cursos_polos.id', '=', 'inscricoes.cursos_polos_id')
                ->where('inscricoes.status_dae', '=', 1)
                ->where('inscricoes.status_envelope1', '=', 1)
                ->where('inscricoes.status_envelope2', '=', 2)
                ->where('cursos_polos.id', '=', $request->curso_polo_id)
                ->orderBy('usuarios.media', 'desc')
                ->orderBy('usuarios.qtd_disc_falta', 'asc')
                ->orderBy('usuarios.data_nasc', 'asc')
                ->limit($curso_polo->vagas)
                ->select(
                    'usuarios.nome',
                    'usuarios.rg',
                    'usuarios.media'
                )
                ->get();

            $resultado_alem_limite_vagas = DB::table('usuarios')
                ->join('inscricoes', 'inscricoes.usuarios_id', '=', 'usuarios.id')
                ->join('cursos_polos', 'cursos_polos.id', '=', 'inscricoes.cursos_polos_id')
                ->where('inscricoes.status_dae', '=', 1)
                ->where('inscricoes.status_envelope1', '=', 1)
                ->where('inscricoes.status_envelope2', '=', 2)
                ->where('cursos_polos.id', '=', $request->curso_polo_id)
                ->orderBy('usuarios.media', 'desc')
                ->orderBy('usuarios.qtd_disc_falta', 'asc')
                ->orderBy('usuarios.data_nasc', 'asc')
                ->limit($novo_limit)
                ->offset($curso_polo->vagas)
                ->select(
                    'usuarios.nome',
                    'usuarios.rg',
                    'usuarios.media'
                )
                ->get();
        }
        elseif($quantidade_deferidos <= $curso_polo->vagas){

            $resultado_limite_vagas = DB::table('usuarios')
                ->join('inscricoes', 'inscricoes.usuarios_id', '=', 'usuarios.id')
                ->join('cursos_polos', 'cursos_polos.id', '=', 'inscricoes.cursos_polos_id')
                ->where('inscricoes.status_dae', '=', 1)
                ->where('inscricoes.status_envelope1', '=', 1)
                ->where('inscricoes.status_envelope2', '=', 2)
                ->where('cursos_polos.id', '=', $request->curso_polo_id)
                ->orderBy('usuarios.nome', 'asc')
                ->select(
                    'usuarios.nome',
                    'usuarios.rg',
                    'usuarios.media'
                )
                ->get();

            $mais_vagas_que_candidatos = TRUE;
        }

        $candidatos_indeferidos = DB::table('usuarios')
            ->join('inscricoes', 'inscricoes.usuarios_id', '=', 'usuarios.id')
            ->join('recursos', 'recursos.inscricoes_id', '=', 'inscricoes.id')
            ->where('inscricoes.status_dae', '=', 1)
            ->where('inscricoes.status_envelope1', '=', 1)
            ->where('inscricoes.status_envelope2', '=', 3)
	    ->where('inscricoes.cursos_polos_id', $request->curso_polo_id)
            ->whereNotNull('recursos.motivo_indeferimento_etapa1')
            ->orderBy('usuarios.nome', 'asc')
            ->select(
                'inscricoes.id',
                'usuarios.nome',
                'usuarios.rg'
            )
            ->get();

        $pdf = PDF::loadView('publico.resultado.pdf_resultado_final_processo', [
            'curso' => $curso,
            'campus' => $campus,
            'curso_polo' => $curso_polo,
            'resultado_limite_vagas' => $resultado_limite_vagas,
            'resultado_alem_limite_vagas' => $resultado_alem_limite_vagas,
            'mais_vagas_que_candidatos' => $mais_vagas_que_candidatos,
            'candidatos_indeferidos' => $candidatos_indeferidos,
        ]);

        return $pdf->stream('resultado_final_transferencia_externa_012018.pdf');
    }
}