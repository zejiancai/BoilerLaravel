<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boiler;

class ServerPagesController extends Controller
{
    public function main()
    {
    	$Boilers = Boiler::all()->orderBy('id');
        //dd($Boilers);
        return View('server_pages.guolu_data',compact('Boilers'));
    }

    public function test()
    {
    	$Boilers = Boiler::all();
    	//dd($Boilers);
    	return View('server_pages.guolu_data',compact('Boilers'));
    }
}
