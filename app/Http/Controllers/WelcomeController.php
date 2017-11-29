<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    function welcome_with_nickname($name, $nickname)
    {
    	$name = ucfirst($name);
		return "Bienvenido {$name}, tu apodo es {$nickname}";    }

    function welcome_without_nickname($name)
    {
    	$name = ucfirst($name);
		return "Bienvenido {$name}";
    }
}
