<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetSeeder extends Seeder
{
    public function run()
    {
        $planetsData = [
            [
                'name' => 'Mercury',
                'description' => 'Mercury is the closest planet to the Sun in the Solar System. It is one of the terrestrial planets, with a surface full of impact craters and lacks a dense atmosphere.',
                'diameter' => 4879,
                'atmosphere' => 'Thin, primarily helium',
                'distance_from_sun' => 0.39,
                'distance_from_earth' => 0.77,
                'image' => 'images/mercury.jpg'
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun and is known as the "morning star" or "evening star." It is the most Earth-like planet in terms of size and mass, but vastly different in environmental conditions.',
                'diameter' => 12104,
                'atmosphere' => 'Thick, primarily CO2',
                'distance_from_sun' => 0.72,
                'distance_from_earth' => 0.28,
                'image' => 'images/venus.jpg'
            ],
            [
                'name' => 'Earth',
                'description' => 'Earth is the third planet from the Sun in the Solar System and the only place in the universe known to harbor life.',
                'diameter' => 12756,
                'atmosphere' => 'Primarily nitrogen and oxygen',
                'distance_from_sun' => 1.00,
                'distance_from_earth' => 0,
                'image' => 'images/earth.jpg'
            ],
            [
                'name' => 'Mars',
                'description' => 'Mars, often referred to as the "Red Planet" due to its surface being largely covered by iron oxide (rust), giving it a distinctive red color.',
                'diameter' => 6792,
                'atmosphere' => 'Thin, primarily CO2',
                'distance_from_sun' => 1.52,
                'distance_from_earth' => 0.52,
                'image' => 'images/mars.jpg'
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is the largest planet in our Solar System and is a giant gas planet.',
                'diameter' => 142984,
                'atmosphere' => 'Primarily hydrogen and helium',
                'distance_from_sun' => 5.20,
                'distance_from_earth' => 4.20,
                'image' => 'images/jupiter.jpg'
            ],
            [
                'name' => 'Saturn',
                'description' => 'Saturn is the sixth planet from the Sun, famous for its striking ring system, which is made up of ice, rocks, and dust.',
                'diameter' => 120536,
                'atmosphere' => 'Primarily hydrogen and helium',
                'distance_from_sun' => 9.58,
                'distance_from_earth' => 8.58,
                'image' => 'images/saturn.jpg'
            ],
            [
                'name' => 'Uranus',
                'description' => 'Uranus is the seventh planet from the Sun and one of the cold gas giant planets.',
                'diameter' => 51118,
                'atmosphere' => 'Primarily hydrogen, helium, and methane',
                'distance_from_sun' => 19.20,
                'distance_from_earth' => 18.20,
                'image' => 'images/uranus.jpg'
            ],
            [
                'name' => 'Neptune',
                'description' => 'Neptune is the eighth and farthest planet from the Sun in our Solar System.',
                'diameter' => 49528,
                'atmosphere' => 'Primarily hydrogen, helium, and methane',
                'distance_from_sun' => 30.05,
                'distance_from_earth' => 29.05,
                'image' => 'images/neptune.jpg'
            ],
        ];

        foreach ($planetsData as $planetData) {
            Planet::create($planetData);
        }
    }
}
