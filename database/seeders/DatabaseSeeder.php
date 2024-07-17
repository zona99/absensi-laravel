<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rio Triadi',
            'email' => 'rio.triadi08@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'PT. KITA SEJAHTERA',
            'email' => 'kita@sejahtera.com',
            'address' => 'Jl. Raya Leuwiliang No. 20, Bogor, Jawa Barat',
            'latitude' => '-6.571852',
            'longitude' => '106.628116',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
