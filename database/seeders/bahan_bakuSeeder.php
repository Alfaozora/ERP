<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bahan_baku;

class bahan_bakuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bahan_baku::create([
            'kode' => 'BB001',
            'bahan' => 'Bahan Baku 1',
            'stok' => 100,
        ]);
        bahan_baku::create([
            'kode' => 'BB002',
            'bahan' => 'Bahan Baku 2',
            'stok' => 200,
        ]);
        bahan_baku::create([
            'kode' => 'BB003',
            'bahan' => 'Bahan Baku 3',
            'stok' => 300,
        ]);
        bahan_baku::create([
            'kode' => 'BB004',
            'bahan' => 'Bahan Baku 4',
            'stok' => 400,
        ]);
        bahan_baku::create([
            'kode' => 'BB005',
            'bahan' => 'Bahan Baku 5',
            'stok' => 500,
        ]);
        bahan_baku::create([
            'kode' => 'BB006',
            'bahan' => 'Bahan Baku 6',
            'stok' => 600,
        ]);
        bahan_baku::create([
            'kode' => 'BB007',
            'bahan' => 'Bahan Baku 7',
            'stok' => 700,
        ]);
        bahan_baku::create([
            'kode' => 'BB008',
            'bahan' => 'Bahan Baku 8',
            'stok' => 800,
        ]);
        bahan_baku::create([
            'kode' => 'BB009',
            'bahan' => 'Bahan Baku 9',
            'stok' => 900,
        ]);
        bahan_baku::create([
            'kode' => 'BB010',
            'bahan' => 'Bahan Baku 10',
            'stok' => 1000,
        ]);
        
    }
}
