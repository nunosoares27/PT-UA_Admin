<?php

namespace App\Http\Controllers;

use App\ComentarioNoticia;
use App\Noticia;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentarioNoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getComentarios($id_noticia)
     {
         
           $comentado= [];

           $comentado = DB::table('comentario_noticias')
          ->join('users', 'users.id', '=', 'comentario_noticias.user_id')
          ->join('noticias', 'noticias.id_noticia', '=', 'comentario_noticias.id_noticia')
          ->orderBy('id_noticia', 'ASC')
          ->select('users.*', 'comentario_noticias.*')
          ->where('noticias.id_noticia', '=', $id_noticia )
          ->get();
            
         return response()->json(["Dados" => $comentado]);
        
     

     }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function storeApi(Request $request)
    {
        $comentario = new ComentarioNoticia();
        $id_noticia = $request->id_noticia;
        $TextoComentario = $request->TextoComentario;

        $user_id = $request->user_id;

        $data = array(
            'id_noticia' => $id_noticia,
            'user_id' => $user_id,
            'TextoComentario' => $TextoComentario,
        ); 

        
        $comentario->create($data);

         $comentarios = DB::table('comentario_noticias')->join('users', 'users.id', '=', 'comentario_noticias.user_id')->get();
          return $comentarios;
    }


    public function store(Request $request)
    {
        $comentario = new ComentarioNoticia();
        $id_noticia = $request->id_noticia;
        $TextoComentario = $request->TextoComentario;

        $user_id = Auth::user()->getId();

        $data = [
            'id_noticia' => $id_noticia,
            'user_id' => $user_id,
            'TextoComentario' => $TextoComentario,
        ]; 

        $comentario->create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComentarioNoticia  $comentarioNoticia
     * @return \Illuminate\Http\Response
     */
    public function show(ComentarioNoticia $comentarioNoticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComentarioNoticia  $comentarioNoticia
     * @return \Illuminate\Http\Response
     */
    public function edit(ComentarioNoticia $comentarioNoticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComentarioNoticia  $comentarioNoticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComentarioNoticia $comentarioNoticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComentarioNoticia  $comentarioNoticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComentarioNoticia $comentarioNoticia)
    {
        //
    }
}
