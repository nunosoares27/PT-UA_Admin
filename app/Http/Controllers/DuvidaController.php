<?php

namespace App\Http\Controllers;

use App\Duvida;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DuvidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {

        
          $duvidas = DB::table('duvidas')->join('users', 'users.id', '=', 'duvidas.user_id')->get();
        
        
        // return dd($duvidas);
        return view('feed-duvidas',compact('duvidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duvidacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $duvida = new Duvida();
        $pergunta = $request->pergunta;
        $descricao = $request->descricao;

        $autor_id = Auth::user()->id;

        $data = [
'descricao' => $descricao,
'pergunta' => $pergunta,
'user_id' => $autor_id,
]; 

        $duvida->create($data);

        return redirect('/feed-duvidas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function show(Duvida $duvida)
    {
        //
    }

    public function showDuvidasUser(){
         $id = Auth::user()->id;
         $duvidas = DB::table('duvidas')
         ->where('user_id', '=', $id)
         ->get();

        //  return dd($duvidas);
        return view('lista-duvidas-user',compact('duvidas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $idCheck = Auth::user()->id;
           
             $duvida = Duvida::find($id);
              
             if($idCheck == $duvida->user_id){
                return view('duvida-edit',compact('duvida'));
             }
             else {
                 return view('not-permit-edit');
             }
           //  return dd($duvida);
       //      return view('duvida-edit',compact('duvida'));
    
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
         $duvida = Duvida::find($id);  
         $data = $request->all();
         $duvida->update($data);
         return redirect('/duvidas-user');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Duvida  $duvida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duvida $duvida)
    {
        //
    }
}
