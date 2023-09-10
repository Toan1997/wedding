<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class PartyRoleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPartyRoleType = [
            'Internal Organization',
            'Employee',
            'Contact',
            'Customer',
            'Supplier',
            'Distributor',
            'Dealer',
            'External Organization',
            'External Employee',
            'Candidate'
        ];
        for($i = 0; $i < count($arrPartyRoleType);$i++)
        {
        	DB::table('party_role_types')->insert(
	        	[
	        		'name' => $arrPartyRoleType[$i],
                    'created_at' => new DateTime(),
	        	]
        	);
        }
    }
}
