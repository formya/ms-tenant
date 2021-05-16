<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
   public function run()
   {
      User::create([
         'name' => 'Rafael Piao',
         'email' => 'piaocg@outlook.com',
         'password' => Hash::make('qwer1234'),
      ]);
   }
}
