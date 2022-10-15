<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = [
            'name' => 'User',
            'email' => 'Admin@smpislamarridho.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => date('Y-m-d H:i:s',time()),
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time())
        ];
        Admin::insert($admin);

    }
}
