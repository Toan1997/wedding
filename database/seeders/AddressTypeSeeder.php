<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrAddress= ['Địa chỉ thường trú','Địa chỉ tạm trú'];
        foreach($arrAddress as $address){
            DB::table('address_types')->insert(
                [
                    'name' => $address, 
                ]
            );
        }
    }
}
