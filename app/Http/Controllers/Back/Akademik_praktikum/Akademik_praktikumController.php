<?php
        namespace App\Http\Controllers\Back\Akademik_praktikum;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_praktikum;
        use Illuminate\Support\Facades\DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_praktikumController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_praktikum::orderBy("id","DESC")->get();
                return view("Back.Akademik_praktikum.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("Back.Akademik_praktikum.create");
            }
        
        
        
            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
        
            public function store(Request $request)
            {  
                $input = $request->all();
                $Akademik_praktikum = Akademik_praktikum::create($input);
               
                return redirect()->route("akademik_praktikum.index")
                ->with("success","Akademik_praktikum created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_praktikum = Akademik_praktikum::find($id);
                    $res_mahasiswa  =  DB::select('select * from akademik_mhs');
                    $res_dosen  =  DB::select('select * from akademik_dosen');
                    $res_tutor  =  DB::select('select * from akademik_tutor');

                    $res_jadwal_praktikum =  DB::select('select * from akademik_jadwal_praktikum where id_praktikum='.$Akademik_praktikum->id);
                   
                    $jadwal_praktikum=[];
                    for ($i=0; $i < count($res_jadwal_praktikum); $i++) { 
                        $jadwal_praktikum[$i] = $res_jadwal_praktikum[$i];
                        $res_peserta = DB::select('select rp.nip,rp.id_jadwal_praktikum, rp.tahun, rp.status, mhs.nama, mhs.email, mhs.phone_wa  from akademik_registrasi_praktikum as rp INNER JOIN akademik_mhs as mhs on rp.nip = mhs.nip where rp.id_jadwal_praktikum='.$res_jadwal_praktikum[$i]->id);
                        $jadwal_praktikum[$i]->peserta = $res_peserta;
                    }
                    //dd($jadwal_praktikum);
                    $res_tutor_praktikum =  DB::select('select 
                    (select nama from akademik_tutor where id=jp.id_tutor1) as namatutor1,
                    (select nama from akademik_tutor where id=jp.id_tutor2) as namatutor2,
                    (select nama from akademik_tutor where id=jp.id_tutor3) as namatutor3
                     from akademik_jadwal_praktikum as jp where jp.id='.$Akademik_praktikum->id);
                    $res_materi_praktikum = DB::select('select * from akademik_praktikum_materi where praktikum_id='.$Akademik_praktikum->id);
                    $res_registrasi_praktikum = DB::select('select rp.nip,rp.id_jadwal_praktikum, rp.tahun, rp.status, mhs.nama, mhs.email, mhs.phone_wa  from akademik_registrasi_praktikum as rp INNER JOIN akademik_mhs as mhs on rp.nip = mhs.nip where rp.id_jadwal_praktikum='.$Akademik_praktikum->id);
                    
                    return view("back.Akademik_praktikum.show",compact("Akademik_praktikum","res_materi_praktikum","res_jadwal_praktikum","res_tutor_praktikum","res_registrasi_praktikum","res_mahasiswa","res_dosen","res_tutor"));



            
                }
            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_praktikum = Akademik_praktikum::find($id);
                    return view("back.Akademik_praktikum.edit",compact("Akademik_praktikum"));
                }
            
                /**
                 * Update the specified resource in storage.
                 *
                 * @param  \Illuminate\Http\Request  $request
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function update(Request $request, $id)
                {
                    $input = $request->all();   
                    $Akademik_praktikum = Akademik_praktikum::find($id);
                    $Akademik_praktikum->update($input);
                
                    return redirect()->route("akademik_praktikum.index")
                    ->with("success","Akademik_praktikum updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_praktikum::find($id)->delete();
                    return redirect()->route("akademik_praktikum.index")
                    ->with("success","Akademik_praktikum deleted successfully");
                
                }
            }
        
        ?>