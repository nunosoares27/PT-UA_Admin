<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->confirmedEmail === 1 && Auth::user()->confirmedAdmin === 1){
            return view('home');
        }
        elseif (Auth::user()->confirmedEmail === 0 && Auth::user()->confirmedAdmin === 0) {
            Session::flash('message', "&#10005; Necessita confirmar e-mail </br>&#10005; Em processo de validação por parte da Administração");
            return view('confirmation');
        }
        elseif (Auth::user()->confirmedEmail === 0){
             Session::flash('message', "&#10005; Necessita confirmar e-mail");
            return view('confirmation');
        }
        elseif (Auth::user()->confirmedAdmin === 0){
             Session::flash('message', "&#10005; Em processo de validação por parte da Administração");
            return view('confirmation');
        }

    }


    public function confirmaEmailUtilizador ($email){
       
        $utilizador = User::whereEmail($email)->first();;  
        $utilizador->confirmedEmail = 1;
         $utilizador->save();
         return redirect('/');
    }



}
