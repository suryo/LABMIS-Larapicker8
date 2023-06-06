<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;

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
        //dump(Auth::user()->email);
        $res_mahasiswa = DB::select('select * from akademik_mhs where email="'.Auth::user()->email.'"');
        $nip = $res_mahasiswa[0]->nip;
        //dump($nip);

        $i = 0;

        $res_praktikum = DB::select('select rp.*, p.mk_praktikum, p.deskripsi, jp.hari, jp.jam_mulai, jp.jam_selesai from akademik_registrasi_praktikum as rp 
        INNER JOIN akademik_praktikum as p on rp.id_praktikum = p.id
        INNER JOIN akademik_jadwal_praktikum as jp on jp.id_praktikum = rp.id_praktikum 
        where rp.nip='.$nip);
        //dd($res_praktikum);

        $link = "www.supresso.com/beta";
        return view('member/mylearning',compact('res_praktikum','i'));
    }



}
