<?php
        namespace App\Http\Controllers\Back\Akademik_jadwal_mk;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_jadwal_mk;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_jadwal_mkController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_jadwal_mk::orderBy("id","DESC")->get();
                return view("back.Akademik_jadwal_mk.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_jadwal_mk.create");
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
                
                
                $Akademik_jadwal_mk = Akademik_jadwal_mk::create($input);
               
            
                return redirect()->route("akademik_jadwal_mk.index")
                ->with("success","Akademik_jadwal_mk created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_jadwal_mk = Akademik_jadwal_mk::find($id);
                    return view("back.Akademik_jadwal_mk.show",compact("Akademik_jadwal_mk"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_jadwal_mk = Akademik_jadwal_mk::find($id);
                    return view("back.Akademik_jadwal_mk.edit",compact("Akademik_jadwal_mk"));
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

                    
                    
                    
                    $Akademik_jadwal_mk = Akademik_jadwal_mk::find($id);
                    $Akademik_jadwal_mk->update($input);
                
                    return redirect()->route("akademik_jadwal_mk.index")
                    ->with("success","Akademik_jadwal_mk updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_jadwal_mk::find($id)->delete();
                    return redirect()->route("akademik_jadwal_mk.index")
                    ->with("success","Akademik_jadwal_mk deleted successfully");
                
                }
            }
        
        ?>