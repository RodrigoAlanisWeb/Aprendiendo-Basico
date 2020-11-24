<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->name = 'Larvel';
        $curso->description = 'El mejor framework de php';
        $curso->categoria = 'Desarrollo Web';
        $curso->save();

        $curso2 = new Curso();

        $curso2->name = 'Larvel';
        $curso2->description = 'El mejor framework de php';
        $curso2->categoria = 'Desarrollo Web';
        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = 'Larvel';
        $curso3->description = 'El mejor framework de php';
        $curso3->categoria = 'Desarrollo Web';
        $curso3->save();
    }
}
