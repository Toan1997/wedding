<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class EmailTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrEmail= ['Email công ty','Email cá nhân'];
        foreach($arrEmail as $email){
            DB::table('email_types')->insert(
                [
                    'name' => $email,
                ]
            );
        }
    }
}
