<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create customer
        $customer = User::create([
            "name" => "customer",
            "email" => "customer@gmail.com",
            "email_verified_at" => now(),
            "password" => bcrypt("customer123"),
            "role" => "customer",
            "address" => "customer address",
            "avatar" => "customer.png",
            "dob" => "1990-07-12",
            "salary" => 20000,
            "specialization" => "customer service",
            "status" => "active",
        ]);

        //create staff
        $staff = User::create([
            "name" => "staff",
            "email" => "staff@gmail.com",
            "email_verified_at" => now(),
            "password" => bcrypt("staff123"),
            "role" => "staff",
            "address" => "staff address",
            "avatar" => "staff.png",
            "dob" => "1980-05-01",
            "salary" => 30000,
            "specialization" => "software development",
            "status" => "active",
        ]);

        //create an admin
        $admin = User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "email_verified_at" => now(),
            "password" => bcrypt("admin123"),
            "role" => "admin",
            "address" => "admin address",
            "avatar" => "admin.png",
            "dob" => "1970-01-01",
            "status" => "active",
        ]);
    }
}