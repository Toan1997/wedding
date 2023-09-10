<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrEmployeeGroups = ['Nhóm 1', 'Nhóm 2', 'Nhóm 3', 'Nhóm 4'];
        foreach ($arrEmployeeGroups as $employeeGroup) {
            DB::table('employee_groups')->insert(
                [
                    'name' => $employeeGroup,
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
