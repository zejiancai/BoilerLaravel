<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerPagesController extends Controller
{
    public function main()
    {
    	return View('server_pages.index');
    }
}
