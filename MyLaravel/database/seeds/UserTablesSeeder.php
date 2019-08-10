
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

         User::create([
        
            'name'    => '6602',
            'password'   =>  Hash::make('6602'),
            'KieuUser'    => 'SV',
            'MaSv'    => '6602',
            'MaGv'    => '',
           'remember_token' => str_random(10),
        ]);

          User::create([
        
            'name'    => '6603',
            'password'   =>  Hash::make('6603'),
            'KieuUser'    => 'SV',
            'MaSv'    => '6603',
            'MaGv'    => '',
           'remember_token' => str_random(10),
        ]);
         User::create([
        
            'name'    => '6604',
            'password'   =>  Hash::make('6604'),
            'KieuUser'    => 'SV',
            'MaSv'    => '6604',
            'MaGv'    => '',
            'remember_token' => str_random(10),
        ]);
        User::create([
        
            'name'    => 'admin1',
            'password'   =>  Hash::make('admin1'),
            'KieuUser'    => 'GV',
            'MaSv'    => '',
            'MaGv'    => 'admin1',
            'remember_token' => str_random(10),
        ]);
         User::create([
        
            'name'    => 'admin2',
            'password'   =>  Hash::make('admin2'),
            'KieuUser'    => 'GV',
            'MaSv'    => '',
            'MaGv'    => 'admin2',
            'remember_token' => str_random(10),
        ]);
    }

}