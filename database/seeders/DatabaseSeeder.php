<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\VaccineForm;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        VaccineForm::factory()->count(20)->create();
        DB::table('vaccines')->insert([
            'id' => 1,
            'name' => "Pfizer",
        ]);
        DB::table('vaccines')->insert([
            'id' => 2,
            'name' => "CoviShield",
        ]);
        DB::table('vaccines')->insert([
            'id' => 3,
            'name' => "Sinovac",
        ]);
    }
}
