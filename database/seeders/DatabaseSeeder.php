<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);


        PerizinanPendirian::factory(100)->create();
        PerizinanPenyelenggaraan::factory(100)->create();


    }
}
