<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $username = env('ADMIN_USERNAME', 'admin');
        $password = env('ADMIN_PASSWORD', 'Admin@12345');
        $name = env('ADMIN_NAME', 'Anbias Admin');

        AdminUser::query()->updateOrCreate(
            ['username' => $username],
            [
                'name' => $name,
                'password' => Hash::make($password),
            ]
        );
    }
}
