<?php
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
        'name' => 'edwight',
        'password'=> Hash::make('secreto'),
        'email'=>'edwardelgado0@gmail.com',
        'telefono'=>'04264686297',
        'userlevel'=>'admin'
        ));
    }

}