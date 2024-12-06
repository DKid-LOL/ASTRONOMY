<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Constellation;

class ConstellationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $constellationsData = [
            [
                'name' => 'Ursa Major',
                'description' => 'Ursa Major is one of the most recognizable constellations in the northern sky, famous for its "Big Dipper" asterism consisting of seven bright stars.',
                'history' => 'Ursa Major has been known since ancient times and appears in the mythology of many cultures.',
                'mythology' => 'In Greek mythology, Ursa Major is associated with the story of Callisto, a nymph turned into a bear.',
                'stars' => 'Dubhe, Merak, Phecda, Megrez, Alioth, Mizar, Alkaid',
                'image' => 'images/ursa-major.jpg'
            ],
            [
                'name' => 'Orion',
                'description' => 'Orion is a prominent constellation in the winter sky, easily recognizable by the three stars in a row forming the "Belt of Orion".',
                'history' => 'Orion has been known since ancient times and appears in the mythology of many cultures, including Greek, Egyptian, and Babylonian.',
                'mythology' => 'In Greek mythology, Orion is a great hunter, the son of Poseidon.',
                'stars' => 'Betelgeuse, Rigel, Bellatrix, Alnilam, Alnitak, Mintaka, Saiph',
                'image' => 'images/orion.jpg'
            ],
            [
                'name' => 'Taurus',
                'description' => 'Taurus is a prominent constellation in the winter sky, easily recognizable by the Hyades star cluster and the M1 Crab Nebula.',
                'history' => 'Taurus has been known since ancient times and is associated with the bull in many cultures\' mythology.',
                'mythology' => 'In Greek mythology, Taurus represents the white bull that Zeus transformed into to abduct Europa.',
                'stars' => 'Aldebaran, El Nath, Zeta Tauri, Theta Tauri',
                'image' => 'images/taurus.jpg'
            ],
            [
                'name' => 'Gemini',
                'description' => 'Gemini is a zodiac constellation, famous for its two bright stars, Castor and Pollux.',
                'history' => 'Gemini has been known since ancient times and is associated with the myth of the twins in many cultures.',
                'mythology' => 'In Greek mythology, Castor and Pollux are twin brothers, sons of Leda.',
                'stars' => 'Castor, Pollux, Alhena, Wasat, Mebsuta',
                'image' => 'images/gemini.jpg'
            ],
            [
                'name' => 'Leo',
                'description' => 'Leo is a zodiac constellation, easily recognizable by its lion-like shape lying down.',
                'history' => 'Leo has been known since ancient times and is associated with the Nemean Lion in Greek mythology.',
                'mythology' => 'In Greek mythology, Leo represents the Nemean Lion, a monster slain by Hercules.',
                'stars' => 'Regulus, Denebola, Algieba, Ras Elased Australis, Adhafera',
                'image' => 'images/leo.jpg'
            ],
            [
                'name' => 'Virgo',
                'description' => 'Virgo is the second largest constellation in the sky and one of the 12 zodiac constellations.',
                'history' => 'Virgo has been known since ancient times and is associated with the myth of the goddess of agriculture and harvest.',
                'mythology' => 'In Greek mythology, Virgo is thought to represent Demeter, the goddess of agriculture, or Astraea, the goddess of justice.',
                'stars' => 'Spica, Zavijava, Porrima, Auva, Vindemiatrix',
                'image' => 'images/virgo.jpg'
            ],
        ];
        foreach ($constellationsData as $constellationData) {
            Constellation::create($constellationData);
        }
    }
}
