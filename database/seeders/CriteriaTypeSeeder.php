<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criteriaTypes = [
            'Đánh giá tư cách',
            'Đánh giá năng lực - Hiệu quả công việc',
        ];
        for ($i = 0; $i < count($criteriaTypes); $i++) {
            DB::table('criteria_types')->insert(
                [
                    'name' => $criteriaTypes[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
