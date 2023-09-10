<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProgramSeeder;
use Database\Seeders\QuestionSeeder;
use Database\Seeders\CategoryTrainingSeeder;
use Database\Seeders\AddressTypeSeeder;
use Database\Seeders\EmailTypeSeeder;
use Database\Seeders\PhoneTypeSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            // ProgramSeeder::class,
            // QuestionSeeder::class,
            // CategoryTrainingSeeder::class
            AddressTypeSeeder::class,
            EmailTypeSeeder::class,
            PhoneTypeSeeder::class,
        ]);
    }
}
