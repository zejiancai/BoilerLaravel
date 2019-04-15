<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\Http\Requests\Api\GuoLuDataRequest;
use App\Models\Boiler;

class GuoLuDataController extends Controller
{
	use Helpers;
    public function store(GuoLuDataRequest $request)
    {

    	$boiler = Boiler::find($request->id);
    	$boiler->update([
    			'timeOfCheck'=> $request->timeOfCheck,
    			'waterOfFlow' => $request->waterOfFlow
    			]);

    	// $boiler = Boiler::create([
    	// 		'number' => $request->number,
    	// 		'timeOfCheck'=> $request->timeOfCheck,
    	// 		'waterOfFlow' => $request->waterOfFlow,
    	// 		'coalOfFlow' => $request->coalOfFlow,
    	// 		'pressureOfSteam' => $request->pressureOfSteam,
    	// 		'temperatureOfSteam' => $request->temperatureOfSteam,
    	// 		'waterLevelOfSteam' => $request->waterLevelOfSteam,
    	// 		'windOfElectricity' => $request->windOfElectricity,
    	// 		'driveWindOfElectricity' => $request->driveWindOfElectricity,
    	// 		'pumpOfElectricity' => $request->pumpOfElectricity,
    	// 		'pressureOfWind' => $request->pressureOfWind,
    	// 		'temperatureOfWind' => $request->temperatureOfWind,
    	// 		'oxygenOfLevel' => $request->oxygenOfLevel,
    	// 		'oxygenOfPressure' => $request->oxygenOfPressure
    	// 	]);
        return $this->response->array(['number' => $boiler->number, 'timeOfCheck' => $boiler->timeOfCheck]);
    }
}
