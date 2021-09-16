<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professions;
class ProfessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('professions')->insert([
            ['name' => 'Abogado'], 
            ['name' => 'Docente'],
            ['name' => 'Programador'],
            ['name' => 'Conductor'],
            ['name' => 'Ama de Casa'],
        ]);
    }
}
