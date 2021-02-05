<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller\BookController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InicioController extends Controller
{
   

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    private $objUser;
   public function redirecionar() {
       
         return redirect()->route('home');
   }
}
