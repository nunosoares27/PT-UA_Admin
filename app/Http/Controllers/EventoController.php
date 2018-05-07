<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth', ['except' => ['getEventos','criaEvento']]);
    }

    public function criaEvento(Request $request)
    {
        
        $evento = new Evento();
         $titulo = $request->titulo;
         $descricao = $request->descricao;
         $data = $request->data;
         $local = $request->local;
         $eventoHasImagem1 = false;
          

if ($request->hasFile('eventimg')){
            
             $eventoHasImagem1 = true;
        } 

        $data2 = [
            'descricao' => $descricao,
            'titulo' => $titulo,
            'data' => $data,
            'local' => $local,
            'eventoHasImagem1'=> $eventoHasImagem1,
           
]; 

        $id = DB::table('eventos')->insertGetId(
             $data2
         );

       
if ($request->hasFile('eventimg')){

             $path = $request->file('eventimg')->storeAs('/public/eventos/', $id.'/imagem1.jpg');
             
        } 

      


    }


public function criaEventoWeb (Request $request)
    {
        
        $evento = new Evento();
         $titulo = $request->titulo;
         $descricao = $request->descricao;
         $data = $request->data;
         $local = $request->local;
         $eventoHasImagem1 = false;
          

if ($request->hasFile('eventimg')){
            
             $eventoHasImagem1 = true;
        } 

        $data2 = [
            'descricao' => $descricao,
            'titulo' => $titulo,
            'data' => $data,
            'local' => $local,
            'eventoHasImagem1'=> $eventoHasImagem1,
           
]; 

        $id = DB::table('eventos')->insertGetId(
             $data2
         );

       
if ($request->hasFile('eventimg')){

             $path = $request->file('eventimg')->storeAs('/public/eventos/', $id.'/imagem1.jpg');
             
        } 

      
        return view('/eventos');

    }



    public function getEventos()
    {
        $data = Evento::orderBy('id_evento', 'desc')->get();
        return $data;
    }

    public function getEventosLaravel()
    {
         $eventos = Evento::orderBy('id_evento', 'desc')->get();
         return view('eventos', compact('eventos'));
    }

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
