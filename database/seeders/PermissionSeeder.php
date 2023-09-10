<?php

namespace Database\Seeders;

use App\Models\Crud;
use App\Models\Feature;
use DateTime;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $features = Feature::get(['id', 'name']);
        // $cruds = Crud::get(['id', 'name']);
        // $permission = [];
        // $permission['guard_name'] = 'web';
        // foreach ($features as $feature) {
        //     foreach ($cruds as $crud) {
        //         $permission['name'] = $crud->name . " " . $feature->name;
        //         $permission['crud_id'] = $crud->id;
        //         $permission['freature_id'] = $feature->id;
        //         Permission::create($permission);
        //     }
        // }
        $cruds = Crud::get(['id', 'name']);
        $feature = Feature::where('name', 'Quản lý thành tích')->first();
        foreach ($cruds as $crud) {
            $permission['name'] = $crud->name . " " . $feature->name;
            $permission['crud_id'] = $crud->id;
            $permission['feature_id'] = $feature->id;
            Permission::create($permission);
        }
    }
}
