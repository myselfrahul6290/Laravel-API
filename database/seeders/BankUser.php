<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserDataModel;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class BankUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   
   $faker=Faker::create();

   
   for($i=0; $i<50; $i++){
    $user=new UserDataModel;
    $user->name=$faker->name;
    $user->email=$faker->email;
    $user->phone=625789;
    $user->address=$faker->address;
    $user->password=$faker->password;
    $user->gender=$faker->randomElement(['male', 'female','other']);
    $user->save();
    }
    }
}
