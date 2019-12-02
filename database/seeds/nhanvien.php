<?php

use Illuminate\Database\Seeder;

class nhanvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $arr = [
            'maNV' => '1',
    		'tenNV' => 'Hà Lộc',
    		'diaChi' => 'QNinh',
    		'SDT' => '039999999',
    		'email' => 'QNinh',
    		'user_id' => '1'


    	];
        DB::table('nhanvien')->insert($arr);
    }
}
