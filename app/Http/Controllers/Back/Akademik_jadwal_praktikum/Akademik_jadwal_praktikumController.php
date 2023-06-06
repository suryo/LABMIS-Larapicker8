<?php
        namespace App\Http\Controllers\Back\Akademik_jadwal_praktikum;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_jadwal_praktikum;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_jadwal_praktikumController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_jadwal_praktikum::orderBy("id","DESC")->get();
                return view("back.Akademik_jadwal_praktikum.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_jadwal_praktikum.create");
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
                
                
                $Akademik_jadwal_praktikum = Akademik_jadwal_praktikum::create($input);
               
            
                return redirect()->route("akademik_jadwal_praktikum.index")
                ->with("success","Akademik_jadwal_praktikum created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_jadwal_praktikum = Akademik_jadwal_praktikum::find($id);
                    return view("back.Akademik_jadwal_praktikum.show",compact("Akademik_jadwal_praktikum"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_jadwal_praktikum = Akademik_jadwal_praktikum::find($id);
                    return view("back.Akademik_jadwal_praktikum.edit",compact("Akademik_jadwal_praktikum"));
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

                    
                    
                    
                    $Akademik_jadwal_praktikum = Akademik_jadwal_praktikum::find($id);
                    $Akademik_jadwal_praktikum->update($input);
                
                    return redirect()->route("akademik_jadwal_praktikum.index")
                    ->with("success","Akademik_jadwal_praktikum updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_jadwal_praktikum::find($id)->delete();
                    return redirect()->route("akademik_jadwal_praktikum.index")
                    ->with("success","Akademik_jadwal_praktikum deleted successfully");
                
                }
            }
        
        ?>