<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        $sellerRole = Role::create(['name' => 'seller']);

        $models = [
            'users',
            'gallery'
        ];

        $permissions = [];

        foreach ($models as $model) {
            array_push($permissions, ['name' => 'view-' . $model, 'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now]);
            array_push($permissions, ['name' => 'add-' . $model, 'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now]);
            array_push($permissions, ['name' => 'update-' . $model, 'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now]);
            array_push($permissions, ['name' => 'delete-' . $model, 'guard_name' => 'web', 'created_at' => $now, 'updated_at' => $now]);
        }

        Permission::query()->insert($permissions);

        $adminRole->givePermissionTo(Permission::all());
        $userRole->givePermissionTo([
            ['name' => 'view-users'],
            ['name' => 'add-users'],
            ['name' => 'update-users'],
            ['name' => 'delete-users'],
        ]);
        $sellerRole->givePermissionTo([
            ['name' => 'view-users'],
            ['name' => 'add-users'],
            ['name' => 'update-users'],
            ['name' => 'delete-users'],
        ]);
    }
}
