<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PeopleSeeder::class);
        $this->call(ConfigurationSeeder::class);
        $this->call(RoleSeeder::class);  
      }
}
