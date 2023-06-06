<?php
        namespace App\Http\Controllers\Back\Akademik_dosen;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_dosen;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_dosenController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_dosen::orderBy("id","DESC")->get();
                return view("back.Akademik_dosen.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_dosen.create");
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
                
                
                $Akademik_dosen = Akademik_dosen::create($input);
               
            
                return redirect()->route("akademik_dosen.index")
                ->with("success","Akademik_dosen created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_dosen = Akademik_dosen::find($id);
                    return view("back.Akademik_dosen.show",compact("Akademik_dosen"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_dosen = Akademik_dosen::find($id);
                    return view("back.Akademik_dosen.edit",compact("Akademik_dosen"));
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

                    
                    
                    
                    $Akademik_dosen = Akademik_dosen::find($id);
                    $Akademik_dosen->update($input);
                
                    return redirect()->route("akademik_dosen.index")
                    ->with("success","Akademik_dosen updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_dosen::find($id)->delete();
                    return redirect()->route("akademik_dosen.index")
                    ->with("success","Akademik_dosen deleted successfully");
                
                }
            }
        
        ?>