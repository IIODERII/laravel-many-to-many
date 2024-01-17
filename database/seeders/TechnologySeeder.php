<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'PHP',
            'HTML',
            'CSS',
            'JavaScript',
            'Laravel',
            'MySQL',
            'Bootstrap',
            'Tailwind',
            'Vue',
            'Vite',
            'React',
            'SASS',
            'JQuery',
            'Lumen',
            'Docker',
            'Bulma',
            'Wordpress',
            'Angular'
        ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Str::slug($technology, '-');
            $newTechnology->save();
        }
    }
}
