<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RolesEnum;
use App\Models\User;   

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ])->assignRole(RolesEnum::User->value);   
        User::factory()->create([
            'name' => 'Vendor Vendor',
            'email' => 'vendor@example.com',
        ])->assignRole(RolesEnum::Vendor->value);   
        User::factory()->create([
            'name' => 'Admin Admin',
            'email' => 'admin@example.com',
        ])->assignRole(RolesEnum::Admin->value);
    }
}
