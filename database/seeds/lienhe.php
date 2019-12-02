<?php

use Illuminate\Database\Seeder;

class lienhe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $arr = [
            'LH_id' => '1',
    		'noiDungLH' => 'Nội Dung Liên Hệ',
    		'diaChiLH' => 'địa chỉ liên hệ',
    		'SDT' => '039999999',
    		'state' => 'state là gì??',
    		'maHV' => '1'
    	];
        DB::table('lienhe')->insert($arr);
    }
}
