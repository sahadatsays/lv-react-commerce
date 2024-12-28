<?php

namespace Database\Seeders;

use App\Enum\PermissionsEnum;
use App\Enum\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => RolesEnum::Admin->value]);
        $vendor = Role::create(['name' => RolesEnum::Vendor->value]);
        $user = Role::create(['name' => RolesEnum::User->value]);

        // making permission roles
        $approveVendor = Permission::create(['name' => PermissionsEnum::ApproveVendors->value]);
        $sellProducts = Permission::create(['name' => PermissionsEnum::SellProducts->value]);
        $buyProducts = Permission::create(['name' => PermissionsEnum::BuyProducts->value]);

        // assign permissions to user
        $user->syncPermissions([$buyProducts]);
        $vendor->syncPermissions([$sellProducts, $buyProducts]);
        $admin->syncPermissions([$buyProducts, $sellProducts, $approveVendor]);
    }
}
