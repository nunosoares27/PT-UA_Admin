<?php

namespace App\Http\Controllers;

use App\LikeNoticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikeNoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    //  metodo para utilização em Laravel
    public function store(Request $request)
    {
         $like = new LikeNoticia();
         $data = $request->all();
         $like-> create($data);

    }

    // método para fazer like pela api da aplicação móvel
   // 'id_noticia', 'user_id',

    public function ApiStore(Request $request)
    {
        // $like = new LikeNoticia();
         // $data = $request->all();
        // $like->create($data);

        $like = LikeNoticia::firstOrNew(
            array(
                'id_noticia' => $request->id_noticia,
                'user_id' => $request->user_id
        
        ));

        $like->save();

           $noticias = DB::table('noticias')->orderBy('id_noticia', 'DESC')->get();
        
       $countlikes = [];
    //    $countlikes2 ='';
     $countlikes2 =[];

        foreach ($noticias as $noticia){
            
            //  $countlikes2[] =  [$noticia->id_noticia => LikeNoticia::whereIdNoticia($noticia->id_noticia)->count()];

             $countlikes2[] =  [LikeNoticia::whereIdNoticia($noticia->id_noticia)->count()];
           
        }
        return $countlikes2;
       
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\LikeNoticia  $likeNoticia
     * @return \Illuminate\Http\Response
     */
    public function show(LikeNoticia $likeNoticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LikeNoticia  $likeNoticia
     * @return \Illuminate\Http\Response
     */
    public function edit(LikeNoticia $likeNoticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LikeNoticia  $likeNoticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LikeNoticia $likeNoticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LikeNoticia  $likeNoticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(LikeNoticia $likeNoticia)
    {
        //
    }
}
