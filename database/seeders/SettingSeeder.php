<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'id'=>1,
            'logo'=>'logo.png',
            'favicon'=>'favinon.png',
            'title'=>'E-Shopping',
            'description'=>'Default Description',
            'author'=>'Azad Eyvazov',
            'keywords'=>'e-shopping, e-shop, Azad Eyvazov',
            'email'=>'example@examplelaravel.com',
            'officetel'=>'+994 (012) 000-00-00',
            'mobile'=>'+994 (055) 000-00-00',
            'smtp_host'=>'Host',
            'smtp_port'=>'1111',
            'smtp_user'=>'mail',
            'smtp_password'=>'1111',
            'facebook'=>'url',
            'twitter'=>'url',
            'instagram'=>'url',
            'linkedin'=>'url',
            'github'=>'url',
            'youtube'=>'url',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
