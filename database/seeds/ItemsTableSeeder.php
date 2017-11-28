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
            'slug' => 'vegetable-spring-roll',
            'price' => 1.29,
            'description' => 'veggies roll',
      		'is_spicy' => false,
        ]);
        DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Crab Rangoon(8)',
            'slug' => 'fried-crab-rangoon',
            'price' => 2.99,
            'description' => 'fried wonton skins with crabmeat cream cheese',
      		'is_spicy' => false,
        ]);
        DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Sweet & Sour Sauce',
            'slug' => 'sweet-and-sour-sauce',
            'price' => 0.50,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Chicken Wings(6)',
            'slug' => 'chicken-wings',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Teriyaki Beef',
            'slug' => 'teriyaki-beef',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Chicken Fingers(10)',
            'slug' => 'chicken-fingers',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Shrimp(10)',
            'slug' => 'fried-shrimp',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Sugar Rolls(5)',
            'slug' => 'sugar-rolls',
            'price' => 1.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Pork Dumplings(6)',
            'slug' => 'fried-pork-dumplings',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Appi',
            'name' => 'Fried Scallops(8)',
            'slug' => 'fried-scallops',
            'price' => 4.99,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Wonton Soup',
            'slug' => 'wonton-soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Egg Drop Soup',
            'slug' => 'egg-drop-soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Homemade Chicken Noodle Soup',
            'slug' => 'chicken-noodle-soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Homemade Chicken Rice Soup',
            'slug' => 'chicken-rice-soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => false,
      	]);
      	DB::table('items')->insert([
            'type' => 'Soup',
            'name' => 'Spicy Hot & Sour Soup',
            'slug' => 'hot-and-sour-soup',
            'price' => 2.49,
            'description' => '',
      		'is_spicy' => true,
      	]);


    }
}
