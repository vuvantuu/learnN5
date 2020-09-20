<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $data = [
            'name' => 'tuu',
            'email' => 'tuu@gmail.com',
            'password' => bcrypt('12345')
        ];
        DB::table('users')->insert($data);
    }
}
