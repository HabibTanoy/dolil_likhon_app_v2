<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_data = [
            'name'      => 'Super Admin',
            'email'     => 'superadmin@records.com',
            'password'  => bcrypt(12345678),
        ];

        User::create($admin_data);
    }
}
