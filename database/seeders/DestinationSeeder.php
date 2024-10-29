<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{

    protected $destinations =[
        [
            "name" => "Gjirokastër",
            "type" => "Historical Town",
            "description" => "Known as the 'City of Stone,' this UNESCO World Heritage site offers unique Ottoman-era architecture and the Gjirokastër Castle.",
            "img_url" => "https://www.albania.al/media/k2/items/cache/c1d17f57db7200fd1119928f31ecfc4a_XL.jpg",
            "trip_duration" => "2-3 days",
            "avg_vote" => 4.7,
            "tot_person_vote" => 450,
            "price" => 150
        ],
        [
            "name" => "Ksamil",
            "type" => "Beach Destination",
            "description" => "Famous for its stunning beaches and crystal-clear waters, Ksamil is ideal for swimming, sunbathing, and island hopping.",
            "img_url" => "https://upload.wikimedia.org/wikipedia/commons/6/6b/Ksamil_Islands.jpg",
            "trip_duration" => "3-5 days",
            "avg_vote" => 4.8,
            "tot_person_vote" => 700,
            "price" => 200
        ],
        [
            "name" => "Shala River",
            "type" => "Adventure / Nature",
            "description" => "Often called the 'Albanian Thailand,' Shala River offers breathtaking views, kayaking, and a tranquil escape.",
            "img_url" => "https://outdooralbania.com/wp-content/uploads/2018/08/The-river-Shala.jpg",
            "trip_duration" => "1-2 days",
            "avg_vote" => 4.9,
            "tot_person_vote" => 300,
            "price" => 100
        ],
        [
            "name" => "Theth National Park",
            "type" => "Adventure / Hiking",
            "description" => "Known for its beautiful landscapes and hiking trails, Theth is perfect for nature lovers and adventure seekers.",
            "img_url" => "https://upload.wikimedia.org/wikipedia/commons/6/60/Theth_Albania.jpg",
            "trip_duration" => "2-3 days",
            "avg_vote" => 4.6,
            "tot_person_vote" => 500,
            "price" => 180
        ],
        [
            "name" => "Llogara Pass",
            "type" => "Scenic Viewpoint",
            "description" => "A mountain pass that offers spectacular views of the Albanian Riviera, perfect for road trips and photography.",
            "img_url" => "https://www.wanderlust.co.uk/contentassets/66be246c1c1d46d1af228d66b6ba3f41/llogara-pass-vista-albanian-riviera-alamy-ak02ge-hero.jpg",
            "trip_duration" => "1 day",
            "avg_vote" => 4.5,
            "tot_person_vote" => 350,
            "price" => 50
        ],
        [
            "name" => "Berat",
            "type" => "Historical Town",
            "description" => "Known as the 'City of a Thousand Windows,' Berat is a UNESCO site with a rich cultural heritage and Ottoman-style architecture.",
            "img_url" => "https://cdn.britannica.com/94/182494-050-1071D1E2/Berat-Albania.jpg",
            "trip_duration" => "2 days",
            "avg_vote" => 4.8,
            "tot_person_vote" => 620,
            "price" => 120
        ],
        [
            "name" => "Valbona Valley",
            "type" => "Adventure / Hiking",
            "description" => "Known for its stunning mountainous terrain, Valbona Valley is ideal for hiking and enjoying breathtaking natural views.",
            "img_url" => "https://www.albania.al/media/k2/items/cache/8768dfc5df22aeb674c2225224e0b726_XL.jpg",
            "trip_duration" => "3-4 days",
            "avg_vote" => 4.9,
            "tot_person_vote" => 400,
            "price" => 200
        ],
        [
            "name" => "Blue Eye (Syri i Kaltër)",
            "type" => "Nature Spot",
            "description" => "A natural spring with incredibly blue waters, perfect for sightseeing and photography.",
            "img_url" => "https://cdn.britannica.com/04/202304-050-9EB7FC45/Syri-i-Kalter-Blue-Eye-natural-spring.jpg",
            "trip_duration" => "1 day",
            "avg_vote" => 4.8,
            "tot_person_vote" => 550,
            "price" => 25
        ],
        [
            "name" => "Apollonia Archaeological Park",
            "type" => "Historical Site",
            "description" => "An ancient Greek city, Apollonia offers ruins of temples, statues, and breathtaking landscapes.",
            "img_url" => "https://www.albania.al/media/k2/items/cache/b67ad5b569441f7cb3d73284dd21c48e_XL.jpg",
            "trip_duration" => "1 day",
            "avg_vote" => 4.4,
            "tot_person_vote" => 300,
            "price" => 30
        ],
        [
            "name" => "Dhermi Beach",
            "type" => "Beach Destination",
            "description" => "Known for its turquoise waters and vibrant nightlife, Dhermi is popular for beach lovers and young travelers.",
            "img_url" => "https://upload.wikimedia.org/wikipedia/commons/7/7b/Dhermi_Albania.jpg",
            "trip_duration" => "3-5 days",
            "avg_vote" => 4.7,
            "tot_person_vote" => 650,
            "price" => 250
        ]
    ];

/**
* Run the database seeds.
*/
public function run(): void
{
    foreach ($this->destinations as $destination) {
        Destination::create($destination);
    }
}
}