<?php

use Illuminate\Database\Seeder;

class PerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perguntas')->insert([
            'pergunta' => 'O que é um FOR em programação ?',
        ]);

        DB::table('perguntas')->insert([
            'pergunta' => 'O que é o MYSQL ?',
        ]);

        DB::table('perguntas')->insert([
            'pergunta' => 'Qual é o comando utilizado para subir o servidor em Laravel?',
        ]);

        DB::table('perguntas')->insert([
            'pergunta' => 'Como criar uma controller resource em Laravel?',
        ]);

        DB::table('perguntas')->insert([
            'pergunta' => 'Como criar uma model e uma migration ao mesmo tempo em Laravel?',
        ]);

        DB::table('perguntas')->insert([
            'pergunta' => 'Para que serve o método da controller INDEX?',
        ]); 

        DB::table('perguntas')->insert([
            'pergunta' => 'Para que serve o método da controller DELETE?',
        ]); 

        DB::table('perguntas')->insert([
            'pergunta' => 'Qual é o comando utilizado para criar as tabelas no banco de dados?',
        ]); 

        DB::table('perguntas')->insert([
            'pergunta' => 'Qual é o comando utilizado para deletar as tabelas no banco de dados?',
        ]); 

        DB::table('perguntas')->insert([
            'pergunta' => 'Para o que é usada as Seeds?',
        ]); 
  
    }
}
