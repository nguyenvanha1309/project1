<?php

use Illuminate\Database\Seeder;

class diem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $arr = [
            'maDiem' => '1',
    		'maDeThi' => '1',
    		'maHV' => '1',
    		'do_time' => '11:11:11',
    		 'diemDatDuoc' => '10',
    		'diemMax' => '100',
    		'danhGia' => 'giỏi',
    		'xepLoai' => 'yếu'
    	];
        DB::table('diem')->insert($arr);
    }
}
