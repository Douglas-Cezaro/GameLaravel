<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PerguntaSeeder::class);
        $this->call(RespostaSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
