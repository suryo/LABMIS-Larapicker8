<?php
        namespace App\Http\Controllers\Back\Akademik_mhs;
        use Illuminate\Http\Request;
        use App\Http\Controllers\Controller;
        use App\Models\Akademik_mhs;
        use DB;
        use Hash;
        use Illuminate\Support\Arr;
        use App\Models\User;

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


                public function mhsboom()
                {
            
                    $resmember = DB::select('select * from akademik_mhs');
                    for ($i = 0; $i <  count($resmember); $i++) {
                        $explode = explode("@", $resmember[$i]->email);
                        $explode[0] = str_replace(".", "", $explode[0]);
                        $email = implode("@", $explode);
                        $resfindmember = DB::select("select * from users where email ='" . $resmember[$i]->email . "'");
                        $password = 12345678;
                        if (count($resfindmember) == 0) {
                            dump("=========");
                            dump($email);
                            dump($resfindmember);
                            dump("=========");
                            try {
                                $user = User::create([
                                    'name' => $resmember[$i]->nama,
                                    'email' => $resmember[$i]->email,
                                    'password' => Hash::make($password),
                                ]);
            
                                $user->assignRole('member');
            
            
                                $explode = explode("@",$resmember[$i]->email);
                                $explode[0]=str_replace(".","",$explode[0]);
                                $emailnodot = implode("@", $explode);
            
                                User::where('email', $email)
                                ->update(['password' => $password]);
                                dump($resmember[$i]->nama . "-" . $password . " success");
                            }
                            //catch exception
                            catch (Exception $e) {
                                echo 'Message: ' . $e->getMessage();
                            }
                        } else {
                            $user = User::where('id', $resmember[$i]->id)
                            // dump($user);
                            // User::where('email', $email)
                            ->update(['password' => Hash::make($password)]);
                            dump($resmember[$i]->nama . "-" . $password . " success");
                            dump("id : " . $resmember[$i]->id . " = " . $email . "-" . $resmember[$i]->email . " : " . $resmember[$i]->nama. "- " . $password . " - already exist on id : " . $resfindmember[0]->id);
                            
                            // $explode = explode("@", $resmember[$i]->email);
                            // $explode[0] = str_replace(".", "", $explode[0]);
                            // $emailnodot = implode("@", $explode);
            
                            //$emailnodot = $resmember[$i]->email ;
            
                            //DB::update("update member_models SET id_users_login = " . $resfindmember[0]->id . " WHERE id = " . $resmember[$i]->id . "; ");
                            //User::where('email', $resmember[$i]->email)
                            //    ->update(['password' =>  Hash::make($password), 'emailnodot' => $emailnodot]);
                        }
                    }
                    dd("tets");
            
                    //DB::update("update member_models SET id_users_login = ".." WHERE condition; ");
                }
            }
        
        ?>