<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Maria Angela M. Catangay',
            'email' => 'maria.angela.catangay@example.com',
            'phone' => '09171234567',
        ]);

        Customer::create([
            'full_name' => 'Kenneth Mantes',
            'email' => 'kenneth.mantes@example.com',
            'phone' => '09181234567',
        ]);

        Customer::create([
            'full_name' => 'Gabriel Pelotenia',
            'email' => 'gabriel.pelotenia@example.com',
            'phone' => '09191234567',
        ]);

        Customer::create([
            'full_name' => 'Cristine Mendoza',
            'email' => 'cristine.mendoza@example.com',
            'phone' => '09201234567',
        ]);

        Customer::create([
            'full_name' => 'Angela Reyes',
            'email' => 'angela.reyes@example.com',
            'phone' => '09211234567',
        ]);

        User::create([
            'username' => 'mariaangela',
            'full_name' => 'Maria Angela M. Catangay',
        ]);

        User::create([
            'username' => 'kennethmantes',
            'full_name' => 'Kenneth Mantes',
        ]);

        User::create([
            'username' => 'gabrielpelotenia',
            'full_name' => 'Gabriel Pelotenia',
        ]);

        User::create([
            'username' => 'cristinemendoza',
            'full_name' => 'Cristine Mendoza',
        ]);

        User::create([
            'username' => 'angelareyes',
            'full_name' => 'Angela Reyes',
        ]);
    }
}
