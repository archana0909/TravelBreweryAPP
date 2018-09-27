<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_user = new Role();
      $role_user->name = 'User';
      $role_user->desc = 'A normal User';
      $role_user->save();

      $role_admin = new Role();
      $role_admin->name = 'Admin';
      $role_admin->desc = 'A Admin';
      $role_admin->save();
    }
}
