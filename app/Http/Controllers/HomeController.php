<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\User;



use Illuminate\Support\Facades\Mail;
use App\Mail\UserConfirmEmail;
use App\Mail\EmailWelcomePage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['getUsers', 'registerUser','authenticateNative','updateUser']]);
    }


    public function updateUser(Request $request, $id)
    {
         $user = User::find($id);  
         
         $name = $request->name;
         $descricaoUser = $request->descricaoUser;
      //   $img = false;

         if ($request->hasFile('file1')){
            
             $img = true;
        } 
         
         $data = [
             'descricaoUser' => $descricaoUser,
            'name' => $name,
             'img'=> $img
         ];

       
         if ($request->hasFile('file1')){

             $path = $request->file('file1')->storeAs('/public/users/', $id.'/imagem1.jpg');
             
        } 

        
         $user->update($data);

         return $user;
    }


    public function authenticateNative(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
           //  Auth::user();
        //    $user = DB::table('users')->select('id', 'name', 'email','typeUser', 'password')->where('id', '=', Auth::user()->id)->get();

            return Auth::user();
        }
        else {
            return ['name' => 'Dados não coincidem'];
        }
    }



    public function getUsers()
    {
        $users = DB::table('users')->select('id', 'name', 'email','typeUser')->get();

        return $users;
    }

    public function registerUser(Request $request){

        //  Mail::to($request['email'])->send(new UserConfirmEmail($request['name'],$request['email'],$request['typeUser']));
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'typeUser' => $request['typeUser'],
            'confirmedEmail' => false,
            'confirmedAdmin' => false
        ]);


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $utilizadorAvalidar = DB::table('users')->where('confirmedAdmin', '=', 0)->get();;

        if (Auth::user()->confirmedEmail === 1 && Auth::user()->confirmedAdmin === 1){
             return view('home',compact('utilizadorAvalidar'));
            
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

    public function confirmaAdmin ($id){

        $utilizador = User::whereId($id)->first();;  
        $utilizador->confirmedAdmin = 1;
        $utilizador->save();
         return redirect('/home');

    }

    public function enviaEmailWelcomePage(Request $request) {
        $nome = $request->nome;
        $email = $request->email;
        $mensagem = $request->mensagem;
          Mail::to('terradosolnascente24@gmail.com')
          ->send(new EmailWelcomePage($nome, $email, $mensagem));
          return redirect('/home');
    }


}
