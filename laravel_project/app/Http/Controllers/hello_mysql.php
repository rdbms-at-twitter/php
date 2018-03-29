<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use DB; 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class hello_mysql extends Controller
{
    public function getIndex(Request $request)
    {
        $data = DB::select('select * from T_Laravel');
        return view('hello_mysql', ['message' => 'Hello MySQL!!','data' => $data]);
    }
}
