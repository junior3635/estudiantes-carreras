<?php

use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estatus')->insert(['nombre' => 'Activo']);
        \DB::table('estatus')->insert(['nombre' => 'Inactivo']);

    }
}
