<?php

use Illuminate\Database\Seeder;

class hocvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
    	$arr = [
    		'tenHV' => 'Công Học Viên :)',
    		'diaChi' => 'Chương Mỹ',
    		'SDT' => '021321214',
    		'ngaySinh' => '1998/11/11',
    		'gioiTinh' => 'Chưa Xác Địngg',
    		'email' => 'dsadas@gmail.com',
            'user_id'=>1
    	];
        DB::table('hocvien')->insert($arr);
    }
}
