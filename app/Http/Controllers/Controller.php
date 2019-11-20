<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Auth\LoginController;
use Curl;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function GetToken(Request $request)
    {

        $myVar = $request->session()->get('key');
        $response = Curl::to('http://localhost:8082/ws/live2.php')
       ->withData([
           'act'=>'GetToken',
           'username'=>Auth::user()->name,
           'password'=>$myVar,
       ] )
       ->asJson(true)
       ->post()['data'];
       return json_encode($response['token']);
    }
    public function JenjangPendidikan()
    {
        // code...
    }
}
