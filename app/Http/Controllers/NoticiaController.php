<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\LikeNoticia;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class NoticiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['ApiGetNoticias','ApiGetLikesNoticia','GetLikes']]);
    }


   public function ApiGetNoticias()
   {

         $noticias = DB::table('noticias')
         ->join('users', 'users.id', '=', 'noticias.user_id')
         ->select('id_noticia','name', 'email','typeUser','titulo','descricao','noticiaHasImagem1', 'noticiaHasImagem2')
         ->get();

        // $noticias = DB::table('noticias')
        // ->leftJoin('users', 'noticias.user_id_creator', '=', 'users.id')
        // ->join('like_noticias', 'like_noticias.id_noticia_like', '=', 'noticias.id_noticia')
        // ->select('users.*', 'noticias.*','like_noticias.*')
        // ->get();

        //  $noticias = DB::table('noticias')
        // ->leftJoin('like_noticias', 'like_noticias.id_noticia_like', '=', 'noticias.id_noticia')
        // ->select('like_noticias.*', 'noticias.*')
        // ->get();

        // $users = DB::table('users')->get();
        // $noticias = DB::table('noticias')->get();

         
         
         
    // $query2 = "";
      
      
    //    foreach ($users as $user) {
      
    //         $query2 .= DB::table('like_noticias')->join('users','user_id_like', '=', 'users.id')
    //        ->where('users.id', '=', $user->id)
    //        ->select('id_noticia_like', 'user_id_like')
    //         ->get();

      
    //     }

    //     $countlikes = [];
    //     $countlikes2 ='';

    //     foreach ($noticias as $noticia){
            
    //          $countlikes2 .= ', '. LikeNoticia::whereIdNoticia($noticia->id_noticia)->count();
    //     }
        
    //   $countlikes = explode(', ', $countlikes2);

    //  unset($countlikes[current(array_keys($countlikes))]);


       return $noticias;


   }

   public function ApiGetLikesNoticia($id_noticia)
   {

//           $likes = LikeNoticia::where(function ($q) {
//     $q->where('id_noticia', '=', $id_noticia);
   
// })->count();

 //   $likes = LikeNoticia::whereIdNoticia($id_noticia)->get();
    $countlikes = LikeNoticia::whereIdNoticia($id_noticia)->count();

  //  $combined = $likes->combine($countlikes);

        return [$id_noticia => $countlikes];

   }

   
   public function GetLikes ()
   {
        $noticias = DB::table('noticias')->get();
      $countlikes = [];
        $countlikes2 ='';

        foreach ($noticias as $noticia){
            
             $countlikes2 .= ', '. LikeNoticia::whereIdNoticia($noticia->id_noticia)->count();
        }
        
      $countlikes = explode(', ', $countlikes2);

     unset($countlikes[current(array_keys($countlikes))]);

     return $countlikes;
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
         $noticiaHasImagem1 = false;
         $noticiaHasImagem2 = false;

if ($request->hasFile('file1')){
            
             $noticiaHasImagem1 = true;
        } 

        if ($request->hasFile('file2')){
             
             $noticiaHasImagem2 = true;
        } 

        

        $user_id = Auth::user()->id;

        $data = [
            'descricao' => $descricao,
            'titulo' => $titulo,
            'user_id' => $user_id,
            'noticiaHasImagem1'=> $noticiaHasImagem1,
             'noticiaHasImagem2'=> $noticiaHasImagem2
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
