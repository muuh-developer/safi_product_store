<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        
        DB::table('users')->insert([


        [
        //manager

        'name' => 'muuh',
        'email' => 'muuh@gmail.com',
        'phone' => '0692293333',
        'password' => Hash::make('111'),
        'address' => 'Tanga',
        'usertype' => 'manager',
        'status' => 'active'

        ],
        

        [
            //agent
            
            'name' => 'bilal',
            'email' => 'bilal@gmail.com',
            'phone' => '0792293333',
            'password' => Hash::make('222'),
            'address' => 'kibaha',
            'usertype' => 'agent',
            'status' => 'active'
        ],

        [
            //customer
    
            'name' => 'arafa',
            'email' => 'arafa@gmail.com',
            'phone' => '0758293330',
            'password' => Hash::make('333'),
            'address' => 'Zanzibar',
            'usertype' => 'customer',
            'status' => 'active'
    
            ]




        ] );
    
    
    
    
   

    }
}
