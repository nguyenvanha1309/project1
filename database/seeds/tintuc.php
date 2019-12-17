<?php

use Illuminate\Database\Seeder;

class tintuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         	
    	$arr = [
            'maTinTuc' => '1',
    		'tieuDe' => 'Video Dạy Kỹ Năng Sống',
    		'noiDung' => 'Video Dạy Kỹ Năng Sống',
    		'thoiGian' => '1998/9/8',
    		'maNV' => '1',
            'viewTinTuc'=>'100000',
            'anhTinTuc'=>'aaaaa.com'
    	];
        DB::table('tintuc')->insert($arr);
    }
}
