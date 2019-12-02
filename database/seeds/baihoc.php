<?php

use Illuminate\Database\Seeder;

class baihoc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $arr = [
            'maBH' => '1',
    		'tenBH' => 'tên bhoc',
    		'maCD' => '1',
    		'tieuDe' => 'câu hỏi',
    		 'noiDung' => 'an sờ goe',
    		'soLuotXem' => '10123'
    	];
        DB::table('baihoc')->insert($arr);
    }
}
