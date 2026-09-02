<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContatoModel;

class ContatoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        contato::factory()->count(100)->create();
        $contato = new ContatoModel();
        $contato->nome = 'João da Silva';
        $contato->email = 'jjulia@gmail.com';
        $contato->save();
    }
}
