<?php

use Delivery\Models\Categoria;
use Delivery\Models\Produto;
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
        factory(Categoria::class, 10)->create()->each(function($categoria) {
            $categoria->produtos()->saveMany(factory(Produto::class)->times(5)->make());
        });
    }
}
