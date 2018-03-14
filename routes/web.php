<?php
use App\Models\Config;
// ROTA - NÃO REMOVER
Route::middleware(['home'])->get('/', function(){

    $config = Config::all()->first();

    return view('home', compact('config'));
});

// ROTAS ADMINISTRADOR
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'middleware' => 'admin'], function(){

    // ADMIN HOME
    Route::get('/', 'Admin\HomeController@index')->name('home');

    Route::group(['prefix' => 'config', 'as' => 'config.'], function(){

        Route::get('/', 'Admin\ConfigController@index')->name('home');
        Route::post('/update/{id}', 'Admin\ConfigController@update')->name('update');
    });

    Route::group(['prefix' => 'polos', 'as' => 'polos.'], function(){

        // POLOS HOME
        Route::get('/', 'Admin\PolosController@index')->name('home');
        Route::get('/create', 'Admin\PolosController@create')->name('create');
        Route::post('/store', 'Admin\PolosController@store')->name('store');
        Route::get('/show/{id}', 'Admin\PolosController@show')->name('show');
        Route::get('/edit/{id}', 'Admin\PolosController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\PolosController@update')->name('update');
        Route::post('/destroy/{id}', 'Admin\PolosController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'cursos', 'as' => 'cursos.'], function(){

        // CURSOS HOME
        Route::get('/', 'Admin\CursosController@index')->name('home');
        Route::get('/create', 'Admin\CursosController@create')->name('create');
        Route::post('/store', 'Admin\CursosController@store')->name('store');
        Route::get('/show/{id}', 'Admin\CursosController@show')->name('show');
        Route::get('/edit/{id}', 'Admin\CursosController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\CursosController@update')->name('update');
        Route::post('/destroy/{id}', 'Admin\CursosController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'curso_polo', 'as' => 'curso_polo.'], function(){

        // CURSO_POLO HOME
        Route::get('/', 'Admin\CursoPoloController@index')->name('home');
        Route::get('/create', 'Admin\CursoPoloController@create')->name('create');
        Route::post('/store', 'Admin\CursoPoloController@store')->name('store');
        Route::get('/show/{id}', 'Admin\CursoPoloController@show')->name('show');
        Route::get('/edit/{id}', 'Admin\CursoPoloController@edit')->name('edit');
        Route::post('/update/{id}', 'Admin\CursoPoloController@update')->name('update');
        Route::post('/destroy/{id}', 'Admin\CursoPoloController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'candidatos', 'as' => 'candidatos.'], function(){

        // CANDIDATOS HOME
        Route::get('/', 'Candidato\HomeController@index')->name('home');
        Route::get('/create', 'Candidato\HomeController@create')->name('create');
        Route::post('/store', 'Candidato\HomeController@store')->name('store');
        Route::get('/show/{id}', 'Candidato\HomeController@show')->name('show');
        Route::get('/edit/{id}', 'Candidato\HomeController@edit')->name('edit');
        Route::post('/update/{id}', 'Candidato\HomeController@update')->name('update');
        Route::post('/destroy/{id}', 'Candidato\HomeController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'analise', 'as' => 'analise.'], function(){

        // CANDIDATOS HOME
        Route::get('/', 'Admin\AnaliseController@index')->name('home');
        Route::get('/create', 'Admin\AnaliseController@create')->name('create');
        Route::get('/analise', 'Admin\AnaliseController@analise')->name('analise');
        Route::post('/store', 'Admin\AnaliseController@store')->name('store');
        Route::post('/indeferimento', 'Admin\AnaliseController@indeferimento')->name('indeferimento');
        Route::post('/edit', 'Admin\AnaliseController@edit')->name('edit');
        Route::post('/update', 'Admin\AnaliseController@update')->name('update');
        Route::post('/destroy/{id}', 'Admin\AnaliseController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'usuarios', 'as' => 'usuarios.'], function(){

        // USUÁRIOS ADMINISTRADORES
        Route::get('/', 'Admin\UsuarioController@index')->name('home');
        Route::get('/create', 'Admin\UsuarioController@create')->name('create');
        Route::post('/store', 'Admin\UsuarioController@store')->name('store');
        Route::get('/destroy/{id}', 'Admin\UsuarioController@destroy')->name('destroy');
    });

    Route::group(['prefix' => 'resultado', 'as' => 'resultado.'], function(){

        // RESULTADO
        Route::get('/preliminar', 'Admin\ResultadoController@index')->name('preliminar.home');
        Route::get('/preliminar/gerar', 'Admin\ResultadoController@gerarResultadoPreliminar')->name('preliminar.gerar');

        Route::get('/preliminar/retificacao', 'Admin\ResultadoController@showFormRetificacaoResultadoPreliminar')->name('preliminar.form');
        Route::get('/final/retificacao', 'Admin\ResultadoController@showFormRetificacaoResultadoFinal')->name('final.form');
        Route::post('/retificacao/criar', 'Admin\ResultadoController@criarRetificacaoResultado')->name('retificacao.criar');
    });

    Route::group(['prefix' => 'recursos', 'as' => 'recursos.'], function(){

        // RECURSOS

        Route::get('/', 'Admin\RecursoController@index')->name('home');

        Route::get('/envelope2/inscricoes/indeferidas', 'Admin\RecursoController@showInscricoesIndeferidasEnvelope1')->name('envelope2.inscricoes.indeferidas');
        Route::get('/envelope2/inscricoes/indeferidas/lancadas', 'Admin\RecursoController@showInscricoesIndeferidasEnvelope1Lancadas')->name('envelope2.inscricoes.indeferidas.lancadas');

        Route::get('/envelope2/inscricoes/indeferidas/ver/{inscricao}', 'Admin\RecursoController@verRecurso')->name('envelope2.inscricoes.indeferidas.ver.recurso');
        Route::post('/envelope2/inscricoes/indeferidas/lancar/{recurso}', 'Admin\RecursoController@lancarRecurso')->name('envelope2.inscricoes.indeferidas.lancar.recurso');
        Route::post('/envelope2/inscricoes/indeferidas/responder/{recurso}', 'Admin\RecursoController@responderRecurso')->name('envelope2.inscricoes.indeferidas.responder.recurso');

        Route::get('/envelope2/inscricoes/indeferidas/lancadas/editar/{inscricao}', 'Admin\RecursoController@editarRecursoLancado')->name('envelope2.inscricoes.indeferidas.lancadas.editar.recurso');

        Route::post('/envelope2/inscricoes/indeferidas/lancadas/relancar/{recurso}', 'Admin\RecursoController@relancarRecurso')->name('envelope2.inscricoes.indeferidas.relancar.recurso');

        Route::get('/buscar/inscricao', 'Admin\RecursoController@buscarPorInscricao')->name('buscar.inscricao');

        Route::get('/envelope1/notas', 'Admin\RecursoController@showInscricoesNotasEnvelope2')->name('envelope1.notas');
        Route::get('/envelope1/notas/editar', 'Admin\RecursoController@showInscricoesNotasEnvelope2Editar')->name('envelope1.notas.editar');
        Route::get('/envelope1/notas/ver/{inscricao}', 'Admin\RecursoController@verRecursoNotas')->name('envelope1.notas.ver');
        Route::get('/envelope1/notas/editar/{inscricao}', 'Admin\RecursoController@editarRecursoNotas')->name('envelope1.notas.editar');
        Route::post('/envelope1/notas/relancar/{recurso}', 'Admin\RecursoController@relancarRecursoEnvelope2')->name('envelope1.notas.relancar');
    });

    Route::group(['prefix' => 'inscricoes', 'as' => 'inscricoes.'], function(){

        // INSCRIÇÕES
        Route::get('/', 'Admin\InscricoesController@index')->name('home');

        Route::get('/envelope2', 'Admin\InscricoesController@inscricoesEnvelope1')->name('envelope2');
        Route::get('/envelope1', 'Admin\InscricoesController@inscricoesEnvelope2')->name('envelope1');

        Route::get('/envelope2/editar', 'Admin\InscricoesController@editarInscricoesEnvelope1')->name('envelope2.editar');
        Route::get('/envelope1/editar', 'Admin\InscricoesController@editarInscricoesEnvelope2')->name('envelope1.editar');

        Route::get('/busca', 'Admin\InscricoesController@buscar')->name('buscar');

        Route::get('/busca/inscricao', 'Admin\InscricoesController@buscarPorInscricao')->name('buscar.inscricao');
        Route::get('/busca/cpf', 'Admin\InscricoesController@buscarPorCPF')->name('buscar.cpf');
        Route::get('/busca/nome', 'Admin\InscricoesController@buscarPorNome')->name('buscar.nome');

        Route::get('/busca/inscricao/editar', 'Admin\InscricoesController@buscarPorInscricaoEditar')->name('buscar.inscricao.editar');

        Route::post('/envelope2/analise/{inscricao}', 'Admin\InscricoesController@analisarEnvelope1')->name('envelope2.analise');
        Route::post('/envelope1/analise/{candidato}', 'Admin\InscricoesController@analisarEnvelope2')->name('envelope1.analise');

        Route::post('/envelope2/analise/editar/{inscricao}', 'Admin\InscricoesController@editarAnaliseEnvelope1')->name('envelope2.analise.editar');
        Route::post('/envelope1/analise/editar/{candidato}', 'Admin\InscricoesController@editarAnaliseEnvelope2')->name('envelope1.analise.editar');

        Route::post('/envelope2/indeferimento/motivo/{inscricao}', 'Admin\InscricoesController@inserirMotivoIndeferimentoEnvelope1')->name('envelope2.indeferimento.motivo');

        Route::post('/envelope2/indeferimento/motivo/editar/{inscricao}', 'Admin\InscricoesController@editarMotivoIndeferimentoEnvelope1')->name('envelope2.indeferimento.motivo.editar');
    });
});

// ROTAS CANDIDATO
Route::group(['prefix' => 'candidato', 'as' => 'candidato.', 'middleware' => ['auth', 'candidato']], function(){

    //CANDITATO HOME
    Route::get('/', 'Candidato\HomeController@index')->name('home');
    Route::get('/create', 'Candidato\HomeController@create')->name('create');
    Route::post('/store', 'Candidato\HomeController@store')->name('store');
    Route::get('/show/{id}', 'Candidato\HomeController@show')->name('show');
    Route::post('/dae/{id}', 'Candidato\DaeController@index')->name('dae');
    Route::get('/show_dae', 'Candidato\DaeController@show')->name('show_dae');
    Route::get('/edit/{id}', 'Candidato\HomeController@edit')->name('edit');
    Route::post('/update/{id}', 'Candidato\HomeController@update')->name('update');
    Route::post('/destroy/{id}', 'Candidato\HomeController@destroy')->name('destroy');
    Route::get('/comprovantes/emitir', 'Candidato\ComprovantesController@index')->name('comprovantes.emitir');

    Route::group(['prefix' => 'minhaconta', 'as' => 'minhaconta.'], function(){

        // CURSOS HOME
        Route::get('/', 'Candidato\MinhaContaController@index')->name('home');
        Route::get('/create', 'Candidato\MinhaContaController@create')->name('create');
        Route::post('/store', 'Candidato\MinhaContaController@store')->name('store');
        Route::get('/show/{id}', 'Candidato\MinhaContaController@show')->name('show');
        Route::get('/edit/{id}', 'Candidato\MinhaContaController@edit')->name('edit');
        Route::post('/update/{id}', 'Candidato\MinhaContaController@update')->name('update');
        Route::post('/destroy/{id}', 'Candidato\MinhaContaController@destroy')->name('destroy');
        Route::get('/senha', 'Candidato\MinhaContaController@formAlterarSenha')->name('form.alterar.senha');
        Route::post('/senha/alterar', 'Candidato\MinhaContaController@alterarSenha')->name('alterar.senha');
    });
});

// ROTAS PÚBLICAS

// RESULTADO PRELIMINAR E FINAL
Route::group(['prefix' => 'resultado', 'as' => 'resultado.'], function(){

    Route::get('/preliminar', 'Publico\ResultadoController@showFormResultadoPreliminar')->name('preliminar');
    Route::get('/final', 'Publico\ResultadoController@showFormResultadoFinal')->name('final');
    Route::get('/final-processo', 'Publico\ResultadoFinalProcessoSeletivoController@showForm')->name('final.processo');

    Route::get('/preliminar/gerar', 'Publico\ResultadoController@gerarResultadoPreliminar')->name('preliminar.gerar');
    Route::get('/final/gerar', 'Publico\ResultadoController@gerarResultadoFinal')->name('final.gerar');
    Route::get('/final-processo/gerar', 'Publico\ResultadoFinalProcessoSeletivoController@gerar')->name('final.processo.gerar');

    Route::post('/campus/cursos', 'Publico\ResultadoController@getCursosCampus')->name('campus.cursos');
});

Auth::routes();

Route::get('/home', function(){
	return redirect()->route('candidato.home');
});

// Route::get('/home', 'HomeController@index')->name('minhaconta.home');
Route::get('/senha', 'HomeController@index')->name('minhaconta.senha');

Route::post('/informacoes', 'Admin\CursosController@getInfoCurso')->name('informacoes');
