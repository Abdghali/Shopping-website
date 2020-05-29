<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\AdminUser::create([
            'name' => 'Abdalmohsen',
            'email' => 'abdghali13@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
