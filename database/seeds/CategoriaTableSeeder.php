<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Categoria::class)->create([

            'nombre' => 'Tecnologia'

        ]);

        factory(App\Categoria::class,10)->create();


    }
}
