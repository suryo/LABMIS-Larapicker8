<?php
        namespace App\Http\Controllers\Back\Akademik_krs;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_krs;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_krsController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_krs::orderBy("id","DESC")->get();
                return view("back.Akademik_krs.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_krs.create");
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
                
                
                $Akademik_krs = Akademik_krs::create($input);
               
            
                return redirect()->route("akademik_krs.index")
                ->with("success","Akademik_krs created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_krs = Akademik_krs::find($id);
                    return view("back.Akademik_krs.show",compact("Akademik_krs"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_krs = Akademik_krs::find($id);
                    return view("back.Akademik_krs.edit",compact("Akademik_krs"));
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

                    
                    
                    
                    $Akademik_krs = Akademik_krs::find($id);
                    $Akademik_krs->update($input);
                
                    return redirect()->route("akademik_krs.index")
                    ->with("success","Akademik_krs updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_krs::find($id)->delete();
                    return redirect()->route("akademik_krs.index")
                    ->with("success","Akademik_krs deleted successfully");
                
                }
            }
        
        ?>