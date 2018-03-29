<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class hello_laravel extends Controller
{
    public function getIndex()
    {
        return view('hello_world', ['message' => 'Hello Laravel!! Controllerのサンプル']);
    }
}
