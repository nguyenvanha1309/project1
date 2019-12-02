<?php

use Illuminate\Database\Seeder;

class khoahoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'maKH' => '1',
    		'tenKH' => 'Tên khóa hoc',
    		'moTa' => 'mô tả khóa học',
    		'noiDung' => 'nội dung khóa học',
    		'diaChiHoc' => 'địa chỉ khóa học',
    		'start_time' => '12:12:12',
    		'end_time' => '12:12:12',
    		'soLuongHV' => '120',
    		'tenGV' => 'Tên Giáo Viên'
    	];
        DB::table('khoahoc')->insert($arr);
    }
}
