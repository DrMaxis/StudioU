<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class CustomUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 1) {
            $role = Role::where('name', 'mod')->firstOrFail();

            User::create([
                'name'           => 'mod',
                'email'          => 'studiomod@mod.com',
                'password'       => bcrypt('wordpass'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
