<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * Truncate All tables.
         */
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Role::truncate();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
