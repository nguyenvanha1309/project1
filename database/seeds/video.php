<?php

use Illuminate\Database\Seeder;

class video extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'maVD' => '1',
    		'tenVD' => 'Video Dạy Kỹ Năng Sống',
    		'linkVD' => 'kynangsong.com',
    		'maBH' => '1'
    	];
        DB::table('video')->insert($arr);
    }
}
