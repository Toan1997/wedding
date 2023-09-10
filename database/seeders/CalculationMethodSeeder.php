<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalculationMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calculationMethods = [
            'Theo biểu thuế luỹ tiến từng phần',
            'Theo thuế suất 10%',
        ];
        for ($i = 0; $i < count($calculationMethods); $i++) {
            DB::table('calculation_methods')->insert(
                [
                    'name' => $calculationMethods[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
