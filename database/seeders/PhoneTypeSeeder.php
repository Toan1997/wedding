<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class PhoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPhone= ['Số điện thoại cá nhân','Số điện thoại khẩn cấp'];
        foreach($arrPhone as $phone){
            DB::table('phone_types')->insert(
                [
                    'name' => $phone,
                ]
            );
        }
    }
}
