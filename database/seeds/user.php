<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$arr = [
            'user_id' => '1',
    		'username' => 'admin',
    		'password' => bcrypt('admin'),
    		'chucVu' => 1,
            'remember_token' => Str::Random(20),
    	];
        DB::table('user')->insert($arr);

        $arr1 = [
            'user_id' => '2',
            'username' => 'hocvien',
            'password' => bcrypt('hocvien'),
            'chucVu' => 2,
            'remember_token' => Str::Random(20),
        ];
        DB::table('user')->insert($arr1);
    }
}
