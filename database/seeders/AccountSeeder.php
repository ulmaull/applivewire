<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        $password = bcrypt('admin');
       $faker = \Faker\Factory::create();
        User::create([
            'name'  => $faker->name,
            'email' => 'admin@website.com',
            'username' => 'admin',
            'password' => $password,
            'avatar'=> ''
        ]);
        $this->command->info("Account Berhasil Dibuat");
    }
}
