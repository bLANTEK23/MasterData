<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        // membuat data dummy sebanyak 10 record
        for ($x = 1; $x <= 10; $x++) {


            // insert data dummy product dengan faker
            DB::table('products')->insert([
                'name' => $faker->name,
                'price' => $faker->randomFloat(2, 10, 100),
                'description' => $faker->sentence,
            ]);
        }
    }

}
