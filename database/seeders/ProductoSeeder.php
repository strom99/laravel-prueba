<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Producto::factory(10)->create([
            'type' => 'normal'
        ]);
        \App\Models\Producto::factory(10)->create([
            'type' => 'delivery'
        ]);

    }
}
