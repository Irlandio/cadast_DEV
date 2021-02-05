<?php

namespace App\Http\Controllers\Auth;

//use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller\BookController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador lida com a autenticação de usuários para o aplicativo e
    | redirecionando-os para sua tela inicial. O controlador usa uma característica
    | para fornecer convenientemente sua funcionalidade aos seus aplicativos.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    private $objUser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login()
    {
       // $user = $this->objUser=new User();
       // return view('auth\login',compact('user'));
       /* 
     if(Auth::check() === true){
         return redirect()->route('books');
         
        $devs=$this->objDev->paginate(10)->sortby('nome');
        return view('index',compact('devs'));
        }else{
            $credenciais =[
                'email'     => $request->email,
                'password'  => $request->password            
            ]; 
         
            if(  Auth::attempt($credenciais) )
            return redirect()->route('books'); */
            $user = $this->objUser=new User();
            return view('auth\login',compact('user'));
           // }
        }
    public function loginDo(Request $request)
    {
        var_dump( $request->all());
            $credenciais =[
                'email'     => $request->email,
                'password'  => $request->password            
            ]; 
         
             if(  Auth::attempt($credenciais) ) {
            return redirect()->route('home'); 
    }
            return redirect()->back()->withErrors(['Email ou senha incorreto!']);
        
}
    public function loginLogout()
    {
        Auth::logout();
          //  return redirect()->route('books'); 
}
}
