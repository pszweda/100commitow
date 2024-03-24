<?php

namespace Database\Seeders;

use App\Models\Services\Base\ServiceModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        ServiceModel::factory()
            ->count(6)
            ->create();
    }
}
