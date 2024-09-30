<?php

namespace Database\Seeders;

use DB;
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
    }
}
