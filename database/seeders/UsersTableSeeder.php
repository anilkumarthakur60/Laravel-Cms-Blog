<?php


namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'sita',
            'email' => 'anilkumarthakur60@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('aaaassss')
        ]);

        //
    }
}
