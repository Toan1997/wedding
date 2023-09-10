<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminAccount = array();
        $adminAccount['name'] = 'Admin Dinco';
        $adminAccount['email'] = 'admin@dinco.com.vn';
        $adminAccount['password'] = bcrypt('Dinco@2023');
        $adminAccount['email_verified_at'] = new DateTime();
        $adminAccount['status'] = '1';
        $userAccount = User::create($adminAccount);
        $userAccount->assignRole('admin');
    }
}
