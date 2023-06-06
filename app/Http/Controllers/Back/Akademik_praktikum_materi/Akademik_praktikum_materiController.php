<?php
        namespace App\Http\Controllers\Back\Akademik_praktikum_materi;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_praktikum_materi;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;

        class Akademik_praktikum_materiController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function index(Request $request)
            {
                $data = Akademik_praktikum_materi::orderBy("id","DESC")->get();
                return view("back.Akademik_praktikum_materi.index",compact("data"))
                    ->with("i", ($request->input("page", 1) - 1) * 5);
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
        
            public function create()
            {
                return view("back.Akademik_praktikum_materi.create");
            }
        
        
        
            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
        
            public function store(Request $request)
            {
               
                    $this->validate($request, ["title" => "required",
"text" => "required",
"type" => "required",
]);
                $input = $request->all();
                
              if ($request->hasfile("image")) {
                $fileName = time() . rand(1, 100) . "." . $request->file("image")->extension();
                $file = $request->file("image");
                $file->move(public_path("images/Akademik_praktikum_materi"), $fileName);
                dump("images");
            }
            if(!empty($fileName)){ 
                $input["image"] = $fileName;
            }else{
                $input["image"] = "";
            }
              
                
              if ($request->hasfile("file")) {
                $fileName = time() . rand(1, 100) . "." . $request->file("file")->extension();
                $file = $request->file("file");
                $file->move(public_path("files/Akademik_praktikum_materi"), $fileName);
            }
            if(!empty($fileName)){ 
                $input["file"] = $fileName;
            }else{
                $input["file"] = "";
            }
              
                $Akademik_praktikum_materi = Akademik_praktikum_materi::create($input);
               
            
                return redirect()->route("akademik_praktikum_materi.index")
                ->with("success","Akademik_praktikum_materi created successfully");
            
            }
        
        
            /**
                 * Display the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
        
                public function show($id)
                {
                    $Akademik_praktikum_materi = Akademik_praktikum_materi::find($id);
                    return view("back.Akademik_praktikum_materi.show",compact("Akademik_praktikum_materi"));
                }
            

            
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function edit($id)
                {
                    $Akademik_praktikum_materi = Akademik_praktikum_materi::find($id);
                    return view("back.Akademik_praktikum_materi.edit",compact("Akademik_praktikum_materi"));
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
                
                   
                        $this->validate($request, ["title" => "required",
"text" => "required",
"type" => "required",
]);
                        

                    $input = $request->all();

                    
              if ($request->hasfile("image")) {
                $fileName = time() . rand(1, 100) . "." . $request->file("image")->extension();
                $file = $request->file("image");
                $file->move(public_path("images/Akademik_praktikum_materi"), $fileName);
                dump("images");
            }
            if(!empty($fileName)){ 
                $input["image"] = $fileName;
            }else{
                $input["image"] = "";
            }
              
                    
              if ($request->hasfile("file")) {
                $fileName = time() . rand(1, 100) . "." . $request->file("file")->extension();
                $file = $request->file("file");
                $file->move(public_path("files/Akademik_praktikum_materi"), $fileName);
            }
            if(!empty($fileName)){ 
                $input["file"] = $fileName;
            }else{
                $input["file"] = "";
            }
              
                    
                    $Akademik_praktikum_materi = Akademik_praktikum_materi::find($id);
                    $Akademik_praktikum_materi->update($input);
                
                    return redirect()->route("akademik_praktikum_materi.index")
                    ->with("success","Akademik_praktikum_materi updated successfully");
                
                }
            

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
            
                public function destroy($id)
                {
                    Akademik_praktikum_materi::find($id)->delete();
                    return redirect()->route("akademik_praktikum_materi.index")
                    ->with("success","Akademik_praktikum_materi deleted successfully");
                
                }
            }
        
        ?>