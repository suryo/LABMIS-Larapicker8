<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;

use Illuminate\Support\Arr;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

    

class MyLearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $link = "www.supresso.com/beta";
        return view('member/mylearning',compact('link'));
    }



}
