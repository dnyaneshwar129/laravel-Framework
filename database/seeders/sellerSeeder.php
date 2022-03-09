<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;
use Faker\Factory as Facker;

class sellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $seller = new Seller;
        // $seller->name = "Dnyan";
        // $seller->email = " dnyan12@tess.com";
        // $seller->bussinessname = 
        // $seller->avatar = 'C:\xampp\tmp\phpD522.tmp';
        // $seller->password = md5("123455");
        $seller->name = $faker->name;
        $seller->email = $faker->email;
        $seller->bussinessname = "ABCD";
        $seller->avatar = 'C:\xampp\tmp\phpD522.tmp';
        $seller->password = md5($faker->password);
        $seller->save();
    }
}
