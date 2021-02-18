<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('123456');

        User::create([
            'first_name' 	=> 'Dummy',
            'last_name'		=> 'Test',
            'email' 		=> 'admin@test.com',
            'profile_picture' => $faker->image(public_path('images'),400,300, null, false),
            'password' 		=> $password,
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 20; $i++) {
        	$email = 'admin'.$i.'@gmail.com';
            User::create([
                'first_name' 	=> $faker->firstName.' '.$i,
                'last_name'		=> $faker->lastName,
                'email' 		=> $email,
                'profile_picture' => $faker->image(public_path('images'),400,300, null, false),
                'password' 		=> $password,
            ]);
        }
    }
}
