<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ciudades')->insert(['nombre' => 'Maracay']);
        \DB::table('ciudades')->insert(['nombre' => 'Caracas']);
        \DB::table('ciudades')->insert(['nombre' => 'Valencia']);
    }
}
