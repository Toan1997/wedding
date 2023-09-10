<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;
class CategoryContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesContract = [
            'Hợp đồng thử việc',
            'Hợp đồng chính thức năm thứ nhất',
            'Hợp đồng chính thức năm thứ hai',
            'Hợp đồng không thời hạn'
        ];
        for($i = 0; $i < count($categoriesContract);$i++)
        {
        	DB::table('category_contracts')->insert(
	        	[
	        		'name' => $categoriesContract[$i],
                    'created_at' => new DateTime(),
	        	]
        	);
        }
    }
}
