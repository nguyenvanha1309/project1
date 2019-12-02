<?php

use Illuminate\Database\Seeder;

class chude extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'maCD' => '1',
    		'tenChuDe' => 'tên chủ đề'
    	];
        DB::table('chude')->insert($arr);
    }
}
