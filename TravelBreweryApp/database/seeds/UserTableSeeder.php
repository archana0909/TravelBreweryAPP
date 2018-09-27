<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Victor';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Archana';
        $admin->email = 'archana@travelbrewery.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin1 = new User();
        $admin1->name =  'Vatsal';
        $admin1->email = 'jain.vatsal@gmail.com';
        $admin1->password = bcrypt('admin');
        $admin1->save();
        $admin1->roles()->attach($role_admin);
    }
}
