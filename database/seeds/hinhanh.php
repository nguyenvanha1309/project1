<?php

use Illuminate\Database\Seeder;

class hinhanh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'maHA' => '1',
    		'tenHA' => 'CTên Hình ảnh',
    		'linkHA' => 'linhhinhanh.com',
    		'maBH' => '1',
            'viewHA' =>  '10000'
    	];
        DB::table('hinhanh')->insert($arr);
    }
}
