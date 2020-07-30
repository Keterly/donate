<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return [
        	'name' => 'Keterly',
        	'email'=> 'keterly@gmail.com',
        	'password' => '12345678'
        ];
    }
}
