<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class hello_request_uri extends Controller
{
    public function getIndex(Request $request)
    {
    $res = 'ID : ' . $request->id;
    return view('hello_request_uri', ['message' => $res]);
    }
    public function postIndex(Request $request)
    {
        $res = "you typed: " . $request->input('str');
        return view('hello_request_uri', ['message' => $res]);
    }
}
