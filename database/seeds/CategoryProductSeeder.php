<?php

use Illuminate\Database\Seeder;
use App\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::create([
        	'name' => 'Sembako',
        	'slug' => str_slug('sembako')
        ]);

        CategoryProduct::create([
        	'name' => 'Minuman',
        	'slug' => str_slug('minuman')
        ]);

        CategoryProduct::create([
        	'name' => 'Makanan',
        	'slug' => str_slug('makanan')
        ]);

        CategoryProduct::create([
        	'name' => 'Rokok',
        	'slug' => str_slug('rokok')
        ]);
    }
}
