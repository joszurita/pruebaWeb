<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Configuration;

class ConfigurationSeeder extends Seeder
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
          DB::table('configurations')->insert([
              'language' => Str::random(10),
              'country' => Str::random(10),
              'state' => Str::random(10),

          ]);
    }
}
}
