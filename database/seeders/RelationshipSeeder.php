<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relationships = [
            'Con',
            'Vợ/Chồng',
            'Cha/mẹ',
            'Khác',
        ];
        for ($i = 0; $i < count($relationships); $i++) {
            DB::table('relationships')->insert(
                [
                    'name' => $relationships[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
