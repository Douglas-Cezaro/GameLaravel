<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('usuarios')->insert([
            'nome' => 'Douglas',
            'pontuacao' => 10
        ]);
    }
}
