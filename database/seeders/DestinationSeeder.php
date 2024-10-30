<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
    $csvFilePath = public_path('destinations.csv');

    $destinations = $this->getDataCsv($csvFilePath);

    foreach ($destinations as $destination) {
        Destination::create($destination);
    }
}

public function getDataCsv(string $csvFilePath){
    // Result Variable
    $results = [];

    //Open csv readable
    $file = fopen($csvFilePath, 'r');
    // Check
    if($file === false) {
        exit('Unavailable path:');
    }

     // Skip the first row
    $header = fgetcsv($file);

    // Get each row and add in results array
    while(($row = fgetcsv($file)) !== false){
        $results[] = array_combine($header, $row);
    }

    // Close file
    fclose($file);

    return $results;

}
}