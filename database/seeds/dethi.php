<?php

use Illuminate\Database\Seeder;

class dethi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            'maDeThi' => '1',
    		'maCD' => '1',
    		'tieuDe' => 'tiêu đề',
    		'question' => 'câu hỏi',
    		 'answer' => 'an sờ goe',
    		'thoiGian' => '10:10:10',
    		'maHV' => '1'
    	];
        DB::table('dethi')->insert($arr);
    }
}
