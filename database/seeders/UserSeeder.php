<?php

namespace Database\Seeders;

use App\Enum\RolesEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@mail.com',
        ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
        ])->assignRole(RolesEnum::Admin->value);

        User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@mail.com',
        ])->assignRole(RolesEnum::Vendor->value);
    }
}
