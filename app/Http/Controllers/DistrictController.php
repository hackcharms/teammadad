<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\User;

class DistrictController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(District $request)
    {

        $members=User::where('district_code',$request->code)
        ->Where('role','>',0)
        ->get();
        $districts=District::orderBy('name','ASC')->get();
        return \view('teamarea.index',compact(['districts','members']));
    }
}
