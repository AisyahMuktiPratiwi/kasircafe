<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users =[
            [
                'name'=> 'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'level'=>'Admin',
                'email_verified_at'=>now(),
            ],
            [
                'name'=> 'Manager',
                'email'=>'manager@gmail.com',
                'password'=>Hash::make('manager'),
                'level'=>'Manager',
                'email_verified_at'=>now(),
            ],
            [
                'name'=> 'Upin',
                'email'=>'upin@gmail.com',
                'password'=>Hash::make('upin'),
                'level'=>'Manager',
                'email_verified_at'=>now(),
            ],
            [
                'name'=> 'Kasir',
                'email'=>'kasir@gmail.com',
                'password'=>Hash::make('kasir'),
                'level'=>'Kasir',
                'email_verified_at'=>now(),
            ],

        ];
        foreach ($users as $user) {
           user::create($user);
        }
    }
}
