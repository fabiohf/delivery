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
            for ($i=0; $i<=5; $i++) {
                $categoria->produtos()->save(factory(Produto::class)->make());
            }
        });
    }
}
