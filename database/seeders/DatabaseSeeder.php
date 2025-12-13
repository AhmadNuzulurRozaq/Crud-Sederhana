<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        
        Buku::create([
            'judulBuku' => 'BELAJAR LINUX KUBUNTU',
            'penulisBuku' => 'Ahmad Nuzulur Rozaq',
            'penerbitBuku' => 'ANR Media Book',
            'tahunTerbit' => 2025,
        ]);
    }
}
