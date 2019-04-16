<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boiler;

class ServerPagesController extends Controller
{
    public function main()
    {
    	return View('server_pages.index');
    }

    public function test()
    {
    	$Boilers = Boiler::all();
    	//dd($Boilers);
    	return View('server_pages.guolu_data',compact('Boilers'));
    }
}
