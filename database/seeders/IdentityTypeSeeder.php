<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $identityTypes = [
            'CMND',
            'CCCD',
            'Hộ chiếu',
            'Giấy khai sinh',
            'Khác',
        ];
        for ($i = 0; $i < count($identityTypes); $i++) {
            DB::table('identity_types')->insert(
                [
                    'name' => $identityTypes[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
