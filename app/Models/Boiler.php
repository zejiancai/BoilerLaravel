<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boiler extends Model
{
    protected $fillable = [
        'number', 'timeOfCheck','waterOfFlow', 'coalOfFlow', 'pressureOfSteam', 'temperatureOfSteam', 'waterLevelOfSteam', 'windOfElectricity', 'driveWindOfElectricity', 'pumpOfElectricity', 'pressureOfWind', 'temperatureOfWind', 'oxygenOfLevel', 'oxygenOfPressure', 'upTime',
    ];
}
