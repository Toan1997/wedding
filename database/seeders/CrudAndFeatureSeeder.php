<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrudAndFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrCruds = [
            'Đọc',
            'Thêm',
            'Sửa',
            'Xoá',
            'Export'
        ];
        $arrFeatures = [
            'Sơ đồ trách nhiệm',
            'Quản lý nhân viên',
            'Quá trình công tác',
            'Quản lý tuyển dụng',
            'Quản lý đào tạo',
            'Quản lý tài liệu',
            'Quản lý hợp đồng',
            'Quản lý nghỉ phép',
            'Quản lý lịch nghỉ lễ',
            'Quản lý đánh giá',
            'Quản lý thuế TNCN',
            'Phỏng vấn nghỉ việc',
            'Quản lý công và lương'
        ];
        for ($i = 0; $i < count($arrCruds); $i++) {
            DB::table('cruds')->insert(
                [
                    'name' => $arrCruds[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
        for ($i = 0; $i < count($arrFeatures); $i++) {
            DB::table('features')->insert(
                [
                    'name' => $arrFeatures[$i],
                    'created_at' => new DateTime(),
                ]
            );
        }
    }
}
