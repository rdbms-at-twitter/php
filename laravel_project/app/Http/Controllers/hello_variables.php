<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class hello_variables extends Controller
{

public function getIndex(Request $request)
{
    $res = 'URL : ' . $request->url()
        . '<br>Long URL : ' . $request->fullUrl()
        . '<br>PATH : ' . $request->path()
        . '<br>METHOD : ' . $request->method(); 
    return view('hello_variables', ['message' => $res]);
}

}
