<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i = 1; $i <= 10;$i++)
        // {
        // 	DB::table('users')->insert(
	    //     	[
	    //     		'name' => 'User_'.$i,
	    //         	'email' => 'user_'.$i.'@hrm.com',
	    //         	'password' => bcrypt('123456'),
        //             'image' => 'Koala.jpg',
	    //         	'created_at' => new DateTime(),
                    
	    //     	]
        // 	);
        // }
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleManager = Role::create(['name'=>'manager']);
        $roleUser = Role::create(['name'=>'user']);
        // $users = User::all();
        // foreach($users as $user)
        // {
        //     if($user->name =='User_1'){
        //         $user->assignRole($roleManager);
        //     }
        //     else{
        //         $user->assignRole($roleUser);
        //     }          
        // }
        $userAdmin = User::create([
            'name' => 'user_admin',
            'email' => 'admin@hrm.com',
            'image' => 'Koala.jpg',
            'password' => bcrypt('123456'),
            'created_at' => new DateTime(),
        ]);
        $userAdmin->assignRole($roleAdmin);
    }
}
