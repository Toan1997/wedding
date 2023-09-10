<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviewTypes = [
            'Kiến thức - Năng lực - Kĩ Năng',
            'Tiềm năng quản lý',
        ];
        for ($i = 0; $i < count($reviewTypes); $i++) {
            DB::table('review_types')->insert(
                [
                    'name' => $reviewTypes[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
