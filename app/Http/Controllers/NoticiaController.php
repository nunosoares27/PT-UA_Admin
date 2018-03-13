<?php

namespace App\Http\Controllers;

use App\Noticia;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class NoticiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['ApiGetNoticias',]]);
    }


   public function ApiGetNoticias()
   {

         $noticias = DB::table('noticias')
         ->join('users', 'users.id', '=', 'noticias.user_id')
         ->select('id', 'id_noticia','name', 'email','typeUser','titulo','descricao')
         ->get();

         return $noticias;


   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = DB::table('noticias')->join('users', 'users.id', '=', 'noticias.user_id')->get();
        
        return view('feed-noticias',compact('noticias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('noticiacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $noticia = new Noticia();
         $titulo = $request->titulo;
         $descricao = $request->descricao;

        

        $user_id = Auth::user()->id;

        $data = [
            'descricao' => $descricao,
            'titulo' => $titulo,
            'user_id' => $user_id,
]; 

        $id = DB::table('noticias')->insertGetId(
             $data
         );

       if ($request->hasFile('file1')){
             $path = $request->file('file1')->storeAs('/public/noticias/', $id.'/imagem1.jpg');
        } 

        if ($request->hasFile('file2')){
             $path = $request->file('file2')->storeAs('/public/noticias/', $id.'/imagem2.jpg');
        } 


        return redirect('/feed-noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}
