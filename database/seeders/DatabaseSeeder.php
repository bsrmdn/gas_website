<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ImageAssets;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $files = glob('storage/assets/img/*');
        for ($i = 0; $i < count($files); $i++) {
            $image = $files[$i];
            ImageAssets::create([
                'link' => $image,
            ]);
        }
    }
}
