<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'frutas y verduras'],
            ['name' => 'carnes y pescados'],
            ['name' => 'alimentos enlatados'],
            ['name' => 'bebidas'],
            ['name' => 'limpieza y hogar'],
        ]);
    }
}
