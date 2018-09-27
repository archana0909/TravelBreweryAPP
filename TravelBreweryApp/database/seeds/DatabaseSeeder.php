<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $this->call([
    //     UsersTableSeeder::class,
    //     RolesTableSeeder::class,
    // ]);
    $this->call(RoleTableSeeder::class);
    $this->call(UserTableSeeder::class);
    }
}
