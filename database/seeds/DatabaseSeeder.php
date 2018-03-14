<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{

    public function run(){

        DB::table('usuarios')->insert([
            'nome' => 'Fellipe Geraldo Pereira Botelho',
            'email' => 'fellipe.botelho@unimontes.br',
            'cpf' => '11122233344',
            'password' => bcrypt('5557975'),
            'permissao' => 2
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Victor Arruda',
            'email' => 'victor.arruda@unimontes.br',
            'cpf' => '09493912639',
            'password' => bcrypt('c8x2v'),
            'permissao' => 2
        ]);

        // DB::table('usuarios')->insert([
        //     'nome' => 'Roger Arruda Lanzarini',
        //     'email' => 'roger.arruda@unimontes.br',
        //     'cpf' => '00000000000',
        //     'password' => bcrypt('123456'),
        //     'permissao' => 1,
        //     'rg' => 'MG-00.000.000',
        //     'org_exped' => 'SSP/MG',
        //     'data_nasc' => '1997-01-01 00:00:00',
        //     'telefone' => '38992383637',
        //     'cep' => '39400496',
        //     'logradouro' => 'Rua A',
        //     'numero' => '192F',
        //     'complemento' => 'Casa',
        //     'cidade' => 'Montes Claros',
        //     'bairro' => 'Centro',
        //     'estado' => 'MG',
        //     'media' => 8.2,
        //     'qtd_disc_falta' => 10
        // ]);

        DB::table('configs')->insert([
            'inicio_inscricoes' => '2017-09-30 18:00:00',
            'termino_inscricoes' => '2017-09-30 18:00:00',
            'inicio_resultado_preliminar' => '2017-09-30 18:00:00',
            'termino_resultado_preliminar' => '2017-09-30 18:00:00',
            'inicio_resultado_final' => '2017-09-30 18:00:00',
            'termino_resultado_final' => '2017-09-30 18:00:00',
            'inicio_recursos_etapa1' => '2017-09-30 18:00:00',
            'inicio_recursos_etapa2' => '2017-09-30 18:00:00',
            'termino_recursos_etapa1' => '2017-09-30 18:00:00',
            'termino_recursos_etapa2' => '2017-09-30 18:00:00'
        ]);

        DB::table('cursos')->insert([
            'nome' => 'Sistemas de Informação'
        ]);

        DB::table('polos')->insert([
            'nome' => 'Montes Claros'
        ]);

        DB::table('cursos_polos')->insert([
            'id' => 1,
            'curso_id' => 1,
            'polo_id' => 1,
            'vagas' => 15,
            'periodo' => '6',
            'turno' => 'Diurno'
        ]);
        //
        // DB::table('inscricoes')->insert([
        //     'usuarios_id' => 1,
        //     'cursos_polos_id' => 1
        // ]);
    }
}
