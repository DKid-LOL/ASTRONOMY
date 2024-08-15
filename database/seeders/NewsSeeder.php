<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{

    public function run(): void
    {
        $newsData = [
            [
                'title' => 'New Earth-like Planet Discovered',
                'slug' => 'new-earth-like-planet-discovered',
                'content' => 'Astronomers have discovered a new planet with a size and mass similar to Earth, located in the habitable zone of its host star.',
                'image' => 'images/new_planet.jpg', 
                'published_at' => now(),
                'website' => 'https://science.nasa.gov/universe/exoplanets/discovery-alert-a-super-earth-in-the-habitable-zone/' 
            ],
            [
                'title' => 'Perseverance Rover Finds Signs of Ancient Life on Mars',
                'slug' => 'perseverance-rover-finds-signs-of-ancient-life-on-mars',
                'content' => "NASA's Perseverance rover has discovered chemical signatures suggesting that microbial life may have existed on Mars in the past.",
                'image' => 'images/perseverance.jpg',
                'published_at' => now()->subDays(3),
                'website' => 'https://www.nasa.gov/news-release/nasas-perseverance-rover-investigates-geologically-rich-mars-terrain/'
            ],
            [
                'title' => 'The Big Bang: The Origin of the Universe',
                'slug' => 'the-big-bang-the-origin-of-the-universe',
                'content' => 'The Big Bang is the prevailing cosmological model for the observable universe from the earliest known periods through its subsequent large-scale evolution.',
                'image' => 'images/big_bang.jpg',
                'published_at' => now()->subWeeks(2),
                'website' => 'https://www.amnh.org/explore/ology/astronomy/how-did-the-universe-begin#:~:text=The%20Big%20Bang%20was%20the,place%20is%20still%20a%20mystery.'
            ],
            [
                'title' => 'The Evolution of Earth: A 4.5 Billion Year Journey',
                'slug' => 'the-evolution-of-earth-a-4-5-billion-year-journey',
                'content' => 'Earth has undergone a long and complex evolutionary process, from a molten ball of rock to the blue planet we know today.',
                'image' => 'images/earth_evolution.jpg',
                'published_at' => now()->subMonth(),
                'website' => 'https://en.wikipedia.org/wiki/History_of_Earth'
            ],
        ];

        foreach ($newsData as $newsItem) {
            News::create($newsItem);
        }
    }
}