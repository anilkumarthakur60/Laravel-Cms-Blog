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
        $user = User::where('email', 'anilkumarthakur60@gmail.com')->first();
        if (!$user) {
            User::create([
                'name' => 'sita',
                'email' => 'sitakumarisharma60@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('aaaassss')
            ]);
        }
        //
    }
}
