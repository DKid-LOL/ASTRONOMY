<?php

namespace Database\Seeders;

use App\Models\Comet;
use Illuminate\Database\Seeder;

class CometSeeder extends Seeder
{
    public function run()
    {
        $cometsData = [
            [
                'name' => 'Halley',
                'description' => 'Comet Halley is one of the most famous comets, known for its approximate 76-year orbit cycle. Its most recent appearance was in 1986, and it is expected to appear next in 2061.',
                'discovery_date' => null, 
                'period' => 76,
                'last_perihelion' => '1986-02-09 14:00:00',
                'next_perihelion' => '2061-07-28 11:00:00',
                'image' => 'images/halley.jpg'
            ],
            [
                'name' => 'Hale-Bopp',
                'description' => 'Comet Hale-Bopp is a long-period comet with an estimated orbital cycle of about 2,533 years. It was discovered in 1995 and is famous for its brilliant brightness, visible to the naked eye for a total of 18 months.',
                'discovery_date' => '1995-07-23',
                'period' => 2533,
                'last_perihelion' => '1997-04-01 00:00:00',
                'next_perihelion' => '4385-07-01 00:00:00',
                'image' => 'images/hale-bopp.jpg'
            ],
            [
                'name' => 'Kohoutek',
                'description' => 'Comet Kohoutek was discovered in 1973 and was expected to become a very bright "comet of the century". However, it did not live up to its expectations in brightness but remained an interesting object for astronomers to observe.',
                'discovery_date' => '1973-03-07',
                'period' => 75000,
                'last_perihelion' => '1973-12-28',
                'next_perihelion' => '77273-12-28',
                'image' => 'images/kohoutek.jpg'
            ],
            [
                'name' => 'McNaught',
                'description' => 'Comet McNaught, also known as C/2006 P1, is a non-periodic comet that was discovered in 2006. It became famous for its brilliant brightness as it passed its perihelion in January 2007, visible to the naked eye even during the day.',
                'discovery_date' => '2006-08-07',
                'period' => null,
                'last_perihelion' => '2007-01-12',
                'next_perihelion' => null,
                'image' => 'images/mcnaught.jpg'
            ],
        ];

        foreach ($cometsData as $cometData) {
            Comet::create($cometData);
        }
    }
}
