<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'prefix' => 'Ứng dụng quản lý nhân sự',
                'name' => 'HRM',
                'domain' => 'hrm.odinbi.app',
            ],
            [
                'prefix' => 'Ứng dụng quản lý kho',
                'name' => 'Inventory',
                'domain' => 'inventory.odinbi.app',
            ],
            [
                'prefix' => 'Ứng dụng quản lý mục tiêu',
                'name' => 'OKR',
                'domain' => 'okr.odinbi.app',
            ],
            [
                'prefix' => 'Ứng dụng quản lý tài chính',
                'name' => 'Finance',
                'domain' => 'finance.odinbi.app',
            ],
            [
                'prefix' => 'Ứng dụng quản lý dự án',
                'name' => 'Project',
                'domain' => 'project.odinbi.app',
            ],
        ];
        for ($i = 0; $i < count($programs); $i++) {
            DB::table('programs')->insert(
                [
                    'name' => $programs[$i]['name'],
                    'prefix' => $programs[$i]['prefix'],
                    'domain' => $programs[$i]['domain'],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
