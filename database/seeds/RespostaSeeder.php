<?php

use Illuminate\Database\Seeder;

class RespostaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respostas')->insert([
            'descricao' => 'Laço de Repetição',
            'cod_pergunta' => 1,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Uma função',
            'cod_pergunta' => 1,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Operador condicional',
            'cod_pergunta' => 1,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Não existe',
            'cod_pergunta' => 1,
            'flagCerto' => 'F'
        ]);


        DB::table('respostas')->insert([
            'descricao' => 'Uma banda',
            'cod_pergunta' => 2,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Uma SGBD',
            'cod_pergunta' => 2,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Marca de comida ',
            'cod_pergunta' => 2,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Não existe',
            'cod_pergunta' => 2,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan server',
            'cod_pergunta' => 3,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan cerva',
            'cod_pergunta' => 3,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan serve',
            'cod_pergunta' => 3,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php arte serve',
            'cod_pergunta' => 3,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:controller nomeController',
            'cod_pergunta' => 4,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:controller nomeController --resource',
            'cod_pergunta' => 4,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:controle play 1',
            'cod_pergunta' => 4,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan controller:make nomeController',
            'cod_pergunta' => 4,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:model nomeModel -m',
            'cod_pergunta' => 5,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:model nomeModel ',
            'cod_pergunta' => 5,
            'flagCerto' => 'F'
        ]);


        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:modelo nomeModel ',
            'cod_pergunta' => 5,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:modinha nomeModel ',
            'cod_pergunta' => 5,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Deletar os registros',
            'cod_pergunta' => 6,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Atualizar os registros',
            'cod_pergunta' => 6,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Inserir os registros',
            'cod_pergunta' => 6,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Listar os registros',
            'cod_pergunta' => 6,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Deletar os registros',
            'cod_pergunta' => 7,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Atualizar os registros',
            'cod_pergunta' => 7,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Inserir os registros',
            'cod_pergunta' => 7,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'Listar os registros',
            'cod_pergunta' => 7,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan migracao',
            'cod_pergunta' => 8,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan make:migrate',
            'cod_pergunta' => 8,
            'flagCerto' => 'F'
        ]);

        
        DB::table('respostas')->insert([
            'descricao' => 'php artisan migrate',
            'cod_pergunta' => 8,
            'flagCerto' => 'T'
        ]);

        
        DB::table('respostas')->insert([
            'descricao' => 'php artisan db:migrate',
            'cod_pergunta' => 8,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan db:migrate:reset',
            'cod_pergunta' => 9,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php artisan migrate:reset',
            'cod_pergunta' => 9,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php migrate:reset',
            'cod_pergunta' => 9,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'php migrate:delete',
            'cod_pergunta' => 9,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'para fazer o povoamento das tabelas',
            'cod_pergunta' => 10,
            'flagCerto' => 'T'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'para nomear suas Crianças',
            'cod_pergunta' => 10,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'pra bonito',
            'cod_pergunta' => 10,
            'flagCerto' => 'F'
        ]);

        DB::table('respostas')->insert([
            'descricao' => 'pra nada',
            'cod_pergunta' => 10,
            'flagCerto' => 'F'
        ]);
    }
}
