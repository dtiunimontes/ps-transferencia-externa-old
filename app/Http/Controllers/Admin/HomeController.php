<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Inscricao;

class HomeController extends Controller{

    public function index(){

        $qtd_inscricoes = Inscricao::count();
        $qtd_inscricoes_dae_paga = Inscricao::where('status_dae', 1)->count();
        $qtd_entregaram_envelope1 = Inscricao::where('status_envelope2', 1)
                                            ->orWhere('status_envelope2', 2)
                                            ->orWhere('status_envelope2', 3)
                                            ->count();
        $qtd_entregaram_envelope2 = Inscricao::where('status_envelope1', 1)
                                            ->orWhere('status_envelope1', 2)
                                            ->orWhere('status_envelope1', 3)
                                            ->count();
        $qtd_envelope2_deferidos = Inscricao::where('status_envelope1', 2)
                                            ->count();
                                            
        return view('admin.home',
            compact(
            'qtd_inscricoes',
            'qtd_inscricoes_dae_paga',
            'qtd_entregaram_envelope1',
            'qtd_entregaram_envelope2',
            'qtd_envelope2_deferidos')
        );
    }
}
