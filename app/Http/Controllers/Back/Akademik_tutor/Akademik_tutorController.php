<?php
        namespace App\Http\Controllers\Back\Akademik_tutor;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_tutor;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_tutorController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_tutor::orderBy("id","DESC")->get();
                return view("back.Akademik_tutor.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_tutor.create");
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
                
                
                $Akademik_tutor = Akademik_tutor::create($input);
               
            
                return redirect()->route("akademik_tutor.index")
                ->with("success","Akademik_tutor created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_tutor = Akademik_tutor::find($id);
                    return view("back.Akademik_tutor.show",compact("Akademik_tutor"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_tutor = Akademik_tutor::find($id);
                    return view("back.Akademik_tutor.edit",compact("Akademik_tutor"));
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

                    
                    
                    
                    $Akademik_tutor = Akademik_tutor::find($id);
                    $Akademik_tutor->update($input);
                
                    return redirect()->route("akademik_tutor.index")
                    ->with("success","Akademik_tutor updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_tutor::find($id)->delete();
                    return redirect()->route("akademik_tutor.index")
                    ->with("success","Akademik_tutor deleted successfully");
                
                }
            }
        
        ?>