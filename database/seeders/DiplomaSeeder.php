<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiplomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrDiplomas = ['Trên Đại học', 'Đại học', 'Cao đẳng', 'Trung cấp', 'Khác'];
        foreach ($arrDiplomas as $diploma) {
            DB::table('diplomas')->insert(
                [
                    'name' => $diploma,
                ]
            );
        }
    }
}
