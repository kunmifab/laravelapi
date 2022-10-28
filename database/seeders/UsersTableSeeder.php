<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        $faker = \Faker\Factory::create();



        User::create([
            'name' => 'administrator',
            'email' => 'akinolafarouq@gmail.com',
            'password' => bcrypt('mummy12345')
        ]);

        for($i = 0; $i < 6;$i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('mummy12345')
            ]);
        }
    }
}
