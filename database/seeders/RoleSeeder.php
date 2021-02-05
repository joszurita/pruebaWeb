<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = range(0,20);
        foreach ($arrays as $valor) {
          DB::table('roles')->insert([
              'description' => Str::random(10)

          ]);
    }
}
}
