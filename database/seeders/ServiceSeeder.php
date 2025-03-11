<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Haircut - Men',
                'description' => 'Professional haircut and styling for men.',
                'price' => 20.00,
                'duration' => '00:30:00', // 30 minutes
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Haircut - Women',
                'description' => 'Customized haircut and styling for women.',
                'price' => 35.00,
                'duration' => '00:45:00', // 45 minutes
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beard Trim',
                'description' => 'Shaping and trimming for a clean and stylish beard.',
                'price' => 15.00,
                'duration' => '00:20:00', // 20 minutes
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hair Coloring',
                'description' => 'Full hair coloring or highlights as per your preference.',
                'price' => 70.00,
                'duration' => '01:30:00', // 1.5 hours
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manicure',
                'description' => 'Nail shaping, cuticle care, and polish application.',
                'price' => 25.00,
                'duration' => '00:40:00', // 40 minutes
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedicure',
                'description' => 'Foot spa, nail care, and polish for soft, healthy feet.',
                'price' => 30.00,
                'duration' => '00:50:00', // 50 minutes
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facial Treatment',
                'description' => 'Deep cleansing, exfoliation, and moisturizing facial.',
                'price' => 50.00,
                'duration' => '01:00:00', // 1 hour
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Massage Therapy',
                'description' => 'Relaxing full-body massage for stress relief and relaxation.',
                'price' => 80.00,
                'duration' => '01:30:00', // 1.5 hours
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Waxing - Full Body',
                'description' => 'Hair removal for smooth, silky skin.',
                'price' => 100.00,
                'duration' => '01:15:00', // 1.15 hours
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bridal Makeup',
                'description' => 'Complete bridal makeup package for your special day.',
                'price' => 150.00,
                'duration' => '02:00:00', // 2 hours
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
