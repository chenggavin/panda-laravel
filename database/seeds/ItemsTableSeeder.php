<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Vegetable Spring Roll',
            'price' => 1.29,
            'description' => 'veggies roll',
      		'is_spicy' => false,
        ]);
        DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Crab Rangoon (8)',
            'price' => 2.99,
            'description' => 'fried wonton skins with crabmeat cream cheese',
      		'is_spicy' => false,
        ]);
    }
}
