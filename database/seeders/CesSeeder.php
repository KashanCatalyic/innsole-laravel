<?php

namespace Database\Seeders;

use App\Models\Ces;
use Illuminate\Database\Seeder;

class CesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=5122; $i <= 5372; $i++){
            Ces::create(['ces_code' => $i]);
        }
    }
}
