<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrOrganizationType = ['1' => 'Internal Company', '2' => 'External Company',
            '3' => 'Department', '4' => 'Supplier', '5' => 'Contractor',
            '6' => 'Sub Department',
        ];
        foreach ($arrOrganizationType as $index => $value) {
            DB::table('organization_types')->insert(
                [
                    'id' => $index,
                    'name' => $value,
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
