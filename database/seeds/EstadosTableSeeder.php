<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert(['nombre' => 'Aragua']);
        \DB::table('estados')->insert(['nombre' => 'Distrito Capital']);
        \DB::table('estados')->insert(['nombre' => 'Carabobo']);

    }
}
