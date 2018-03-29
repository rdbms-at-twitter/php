<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class hello_request extends Controller
{
    public function getIndex(Request $request)
    {
        return view('hello_request', ['message' => 'Rquest Sample Please Type']);
    }
    public function postIndex(Request $request)
    {
        $res = "you typed: " . $request->input('str');
        return view('hello_request', ['message' => $res]);
    }
}
