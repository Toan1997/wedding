<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class CategoryTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesTraining = [
            'Đào tạo hội nhập',
            'Đào tạo tiếng anh',
            'Đào tạo kĩ năng mềm',
            'Đào tạo chuyên môn',
            'Đào tạo khác'
        ];
        for($i = 0; $i < count($categoriesTraining);$i++)
        {
        	DB::table('category_trainings')->insert(
	        	[
	        		'name' => $categoriesTraining[$i],
	        	]
        	);
        }
    }
}
