<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Boiler::class, function (Faker $faker) {
    return [
        'waterOfFlow' => mt_rand(101,333 ),
        'coalOfFlow' => mt_rand(101,333 ),
        'pressureOfSteam' => mt_rand(101,333 ),
        'temperatureOfSteam' => mt_rand(101,333 ),
        'waterLevelOfSteam' => mt_rand(101,333 ),
        'windOfElectricity' => mt_rand(101,333 ),
        'driveWindOfElectricity' => mt_rand(101,333 ),
        'pumpOfElectricity' => mt_rand(101,333 ),
        'pressureOfWind' => mt_rand(101,333 ),
        'temperatureOfWind' => mt_rand(101,333 ),
        'oxygenOfLevel' => mt_rand(101,333 ),
        'oxygenOfPressure' => mt_rand(101,333 ),
    ];
});