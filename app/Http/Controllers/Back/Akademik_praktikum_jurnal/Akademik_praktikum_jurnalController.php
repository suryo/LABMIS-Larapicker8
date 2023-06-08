<?php
        namespace App\Http\Controllers\Back\Akademik_praktikum_jurnal;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_praktikum_jurnal;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_praktikum_jurnalController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_praktikum_jurnal::orderBy("id","DESC")->get();
                return view("back.Akademik_praktikum_jurnal.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_praktikum_jurnal.create");
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
                
                
                $Akademik_praktikum_jurnal = Akademik_praktikum_jurnal::create($input);
               
            
                return redirect()->route("akademik_praktikum_jurnal.index")
                ->with("success","Akademik_praktikum_jurnal created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_praktikum_jurnal = Akademik_praktikum_jurnal::find($id);
                    return view("back.Akademik_praktikum_jurnal.show",compact("Akademik_praktikum_jurnal"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_praktikum_jurnal = Akademik_praktikum_jurnal::find($id);
                    return view("back.Akademik_praktikum_jurnal.edit",compact("Akademik_praktikum_jurnal"));
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

                    
                    
                    
                    $Akademik_praktikum_jurnal = Akademik_praktikum_jurnal::find($id);
                    $Akademik_praktikum_jurnal->update($input);
                
                    return redirect()->route("akademik_praktikum_jurnal.index")
                    ->with("success","Akademik_praktikum_jurnal updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_praktikum_jurnal::find($id)->delete();
                    return redirect()->route("akademik_praktikum_jurnal.index")
                    ->with("success","Akademik_praktikum_jurnal deleted successfully");
                
                }
            }
        
        ?>