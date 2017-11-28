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
            'name' => 'Fried Crab Rangoon(8)',
            'price' => 2.99,
            'description' => 'fried wonton skins with crabmeat cream cheese',
      		'is_spicy' => false,
        ]);
        DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Sweet & Sour Sauce',
            'price' => 0.50,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Chicken Wings(6)',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Teriyaki Beef',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Chicken Fingers(10)',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Shrimp(10)',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Sugar Rolls(5)',
            'price' => 1.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Pork Dumplings(6)',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Scallops(8)',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Wonton Soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Egg Drop Soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Homemade Chicken Noodle Soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Homemade Chicken Rice Soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Spicy Hot & Sour Soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => true,
      	]);


    }
}
