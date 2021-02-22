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
        //
        $team = [
            [ 'name' =>  "Raweeroj Thongdee" , 'email' => "raweeroj@siam-u.ac.th"],
            [ 'name' =>  "Nonthakon Jitchiranant" , 'email' => "nonthakon@siam-u.ac.th"],
            [ 'name' =>  "Sirawit Sukwattanavit" , 'email' => "sirawit@siam-u.ac.th"],
            [ 'name' =>  "Kanokvan Sangvaraporn" , 'email' => "kanokvan@siam-u.ac.th"],
            [ 'name' =>  "Wongvarit Pancharoen" , 'email' => "wongvarit@siam-u.ac.th"],
        ];
        \DB::table('users')->truncate();
        for($i = 0 ; $i < count($team) ; ++$i) {
            \DB::table('users')->insert([
                'name' => $team[$i]['name'],
                'email'=> $team[$i]['email'],
                'email_verified_at' => now(),
                'password' => 'Topgun2021', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
