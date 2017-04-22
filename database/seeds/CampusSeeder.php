<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$uuid = Uuid::uuid1();
        $majors = ["Undecided","Computer Science","ATEC","Buisness","Biology","Electrical Engineering","Mechanical Engineering","Marketing","Pre-Med","Mathmatics","Physics","Biomedical Engineering","Nursing","Computer Engineer","Communication","Gender Studies","English"];
        $faker = Faker\Factory::create();
        for($i = 0; $i < sizeof($majors); $i++){
            //$uuid = Uuid::uuid1();
            DB::table('majors')->insert([
                'name' => $majors[$i]
            ]);
        }
        for($i = 0; $i < 20; $i++){
            //$uuid = Uuid::uuid1();
            DB::table('campuses')->insert([
                'name' => $faker->company,
                'country' => $faker->country,
                'state' => 'Texas',
                'city' => $faker->city,
                'url' => $faker->url
            ]);
            $uuid = Uuid::uuid1();
            DB::table('users')->insert([
                //'uuid' => $uuid->toString(),
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'campusID' => 1,
                'password' => bcrypt(str_random(10))
            ]);
        }
    }
}
