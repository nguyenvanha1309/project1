<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(user::class);
        $this->call(chude::class);
        $this->call(baihoc::class);
         $this->call(nhanxet::class);
         $this->call(hinhanh::class);
        $this->call(video::class);
         $this->call(hocvien::class);
         $this->call(nhanvien::class);
        $this->call(tintuc::class);
         
        $this->call(dethi::class);
         $this->call(diem::class);
        $this->call(lienhe::class);
        $this->call(khoahoc::class);
         
        
       
          
        
    }
}
