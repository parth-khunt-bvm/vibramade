<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "Admin",
            'last_name' => "Admin",
            'email' => "vibramade@admin.com",
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('vibramade@12345'),
            'userimage' => 'default.png',
            'user_type' => 'A',
            'status' => 'A',
            'is_deleted' => 'N',
            'remember_token' => null,
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
