<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class PositionStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPositionStatusTypes= ['Đang mở','Đã đóng'];
        foreach($arrPositionStatusTypes as $positionStatusTypes){
            DB::table('position_status_types')->insert(
                [
                    'name' => $positionStatusTypes,
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
