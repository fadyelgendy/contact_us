<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; ++$i) {
            DB::table('contacts')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'message' =>str::random(50),
            ]);
        }
    }
}
