<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviewGroups = [
            'C1',
            'C2'
        ];
        for ($i = 0; $i < count($reviewGroups); $i++) {
            DB::table('review_groups')->insert(
                [
                    'name' => $reviewGroups[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
