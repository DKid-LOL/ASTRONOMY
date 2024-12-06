<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Observatory;

class ObservatorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $observatoriesData = [
            [
                'name' => 'Mauna Kea',
                'description' => 'Located on the summit of the Mauna Kea volcano in Hawaii, it is one of the best optical and infrared observatories in the world.',
                'location' => 'Hawaii, USA',
                'latitude' => '19.8207',
                'longitude' => '-155.4783',
                'image' => 'images/mauna_kea.jpg',
                'website' => 'https://www.maunakeaobservatories.org/'
            ],
            [
                'name' => 'Paranal',
                'description' => 'Located in the Atacama Desert in Chile, it is home to the Very Large Telescope (VLT), one of the most powerful optical telescopes in the world.',
                'location' => 'Atacama, Chile',
                'latitude' => '-24.6272',
                'longitude' => '-70.4042',
                'image' => 'images/paranal.jpg',
                'website' => 'https://www.eso.org/public/teles-instr/paranal-observatory/'
            ],
            [
                'name' => 'Arecibo',
                'description' => 'Located in Puerto Rico, it was famous for having the largest single-aperture radio telescope in the world, which collapsed in 2020.',
                'location' => 'Arecibo, Puerto Rico',
                'latitude' => '18.3464',
                'longitude' => '-66.7528',
                'image' => 'images/arecibo.jpg',
                'website' => 'https://www.naic.edu/'
            ],
            [
                'name' => 'Palomar',
                'description' => 'Located in California, USA, it is famous for the Hale Telescope, which was the largest telescope in the world for many years.',
                'location' => 'California, USA',
                'latitude' => '33.3561',
                'longitude' => '-116.8639',
                'image' => 'images/palomar.jpg',
                'website' => 'https://sites.astro.caltech.edu/palomar/homepage.html'
            ],
        ];
        foreach ($observatoriesData as $observatoryData) {
            Observatory::create($observatoryData);
        }
    }
}
