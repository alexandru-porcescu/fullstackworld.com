<?php

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
        if (app()->environment() !== 'production') {
            Eloquent::unguard();
            $path = 'database/data/real_data.sql';
            DB::unprepared(file_get_contents($path));
        }
    }
}
