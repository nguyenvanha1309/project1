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
    		'username' => 'nhanvien',
    		'password' => bcrypt('nhanvien'),
    		'chucVu' => 1,
            'remember_token' => Str::Random(20),
    	];
        DB::table('user')->insert($arr);

        $arr1 = [
            'username' => 'hocvien',
            'password' => bcrypt('hocvien'),
            'chucVu' => 2,
            'remember_token' => Str::Random(20),
        ];
        DB::table('user')->insert($arr1);

        $arr2 = [
            'username' => 'adminkns',
            'password' => bcrypt('adminkns'),
            'chucVu' => 3,
            'remember_token' => Str::Random(20),
        ];
        DB::table('user')->insert($arr2);
    }
}
