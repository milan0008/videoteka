<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Constants\RoleConstants;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        foreach (RoleConstants::ROLES as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}