<?php

use Illuminate\Database\Seeder;

class nhanxet extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'NX_id' => '1',
    		'ndNhanXet' => 'Video Dạy Kỹ Năng Sống',
    		'maBH' => '1'
    	];
        DB::table('nhanxet')->insert($arr);
    }
}
