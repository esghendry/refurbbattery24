<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if environment is local
        if (app()->environment('local')) {
            DB::table('users')->insert([
                'id' => 1,
                'name' => 'Giovanni Mierop | ESG',
                'email' => 'g.mierop@esg.works',
                'email_verified_at' => null,
                'password' => '$2y$12$r2/Rd7AU3VAqEmaYL9ChVerWjvTIeRw.TFfRbWICVi1w0DTvYpLGe',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Daan de Win',
            'email' => 'daan.dewin@refurbbattery.eu',
            'image' => null,
            'title' => 'Talent & Culture Manager',
            'socials' => '[{"url":"https://www.linkedin.com/in/daandewin/","platform":"linkedIn"},{"url":"daan.dewin@refurbbattery.eu","platform":"email"},{"url":"https://wa.me/31627456484","platform":"whatsapp"},{"url":"0031627456484","platform":"phone"}]',
            'email_verified_at' => null,
            'password' => Hash::make('YxvnPPVu-KzXTizP3erc-RVlR4ZK:4lX'),
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
