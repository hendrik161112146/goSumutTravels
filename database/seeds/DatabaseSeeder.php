<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<=200; $i++) {
            \Illuminate\Support\Facades\DB::table('object_tourists')->insert([
                'object_description' => $faker->paragraph,
                'object_title' => $faker->sentence,
                'object_view' => rand(),
                'category_id' => rand(1,4),
                'meta_description' => $faker->sentence,
            ]);
        }

       /* for($i=0; $i<=100; $i++) {
            \Illuminate\Support\Facades\DB::table('gallery_images')->insert([
                'image_path' => $faker->image(public_path('img'), 300, 120, $faker->word, true, false), // it's a no randomize images (default: `true`),
                'object_id' => rand(1,100),
            ]);
            \Illuminate\Support\Facades\DB::table('gallery_images')->insert([
                'image_path' => $faker->image(public_path('img'), 300, 120, $faker->word, true, false), // it's a no randomize images (default: `true`),
                'hotel_id' => rand(1,100),
            ]);
        }*/

       /*  $arr=['Akses Internet WiFi','Air Conditioner (AC)','TV (flat screen)','Shower','Toilets','private bathroom'
        ];

        for($i=0; $i<=100; $i++) {
            \Illuminate\Support\Facades\DB::table('hotels')->insert([
                'email' => $faker->email,
                'name' => $faker->name,
                'meta_description' => $faker->sentence,
                'property_name' => $faker->company,
                'address' =>  $faker->address,
                'property_type' => rand(1,2),
                'facilities' => serialize($arr_faci[rand(0,5)]),
                'price' => rand(1,300),
                'room' => rand(1,100)
            ]);
        }*/

        // $this->call(UsersTableSeeder::class);
    }
}