<?php
        namespace App\Http\Controllers\Back\Akademik_mhs;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_mhs;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_mhsController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_mhs::orderBy("id","DESC")->get();
                return view("back.Akademik_mhs.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_mhs.create");
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
                
                
                $Akademik_mhs = Akademik_mhs::create($input);
               
            
                return redirect()->route("akademik_mhs.index")
                ->with("success","Akademik_mhs created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_mhs = Akademik_mhs::find($id);
                    return view("back.Akademik_mhs.show",compact("Akademik_mhs"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_mhs = Akademik_mhs::find($id);
                    return view("back.Akademik_mhs.edit",compact("Akademik_mhs"));
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

                    
                    
                    
                    $Akademik_mhs = Akademik_mhs::find($id);
                    $Akademik_mhs->update($input);
                
                    return redirect()->route("akademik_mhs.index")
                    ->with("success","Akademik_mhs updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_mhs::find($id)->delete();
                    return redirect()->route("akademik_mhs.index")
                    ->with("success","Akademik_mhs deleted successfully");
                
                }
            }
        
        ?>