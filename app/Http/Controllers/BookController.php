<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevRequest;
use App\Models\ModelDev;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Concerns;
use Session;

class BookController extends Controller
{
    private $objDev;
    private $objUser;
    
    public function __construct()
    {
        $this->objDev=new ModelDev();
        $this->objUser=new User();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() === true){
        $devs=$this->objDev->paginate(25)->sortby('id');
        return view('index',compact('devs'));
        
    }else{        
          return redirect()->route('login');           
        }
    }    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        $user = $this->objUser=new User();
        return view('auth/login',compact('user'));
    }    
    
    public function create()
    {
        return view('add',compact('dev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DevRequest $request)
    {        
        $tecno="";
       $te =$request->tec;
        foreach($te as $tecn)
            { if($tecno!="")$tecno.=",".$tecn; else $tecno.=$tecn; }
        
        $add=$this->objDev->create([
            'nome'          =>$request->nome,
            'email'         =>$request->email1,
            'dNasc'         =>$request->datNasc,
            'Url_linkedin'  =>$request->linkedin,
            'idade'         =>$request->idade,
            'tecnologias'   =>$tecno
        ]);
        
        if($add){ 
            Session::flash('message', 'Incerssão bem sucedida! '.$request->nome.', '.$request->idade.' anos, '.$request->email1.', ('.$tecno.')'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('books');
        }else  { 
            Session::flash('message', 'Falha na Incerssão de '.$request->nome. '. Nada foi alterado!'); 
              Session::flash('alert-class', 'alert-danger'); 
            return redirect('books/create');
        }
    }
/*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       $dev=$this->objDev->find($id);
       return view('show',compact('dev'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $dev=$this->objDev->find($id);
       return view('add',compact('dev'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DevRequest $request, $id)
    {
         $tecno="";
       $te =$request->tec;
        foreach($te as $tecn)
            { if($tecno!="")$tecno.=",".$tecn; else $tecno.=$tecn; }
        
       $edt=$this->objDev->where(['id'=>$id])->update([
            'nome'          =>$request->nome,
            'email'         =>$request->email1,
            'dNasc'         =>$request->datNasc,
            'Url_linkedin'  =>$request->linkedin,
            'idade'         =>$request->idade,
            'tecnologias'   =>$tecno
        ]);
        if($edt){ 
            Session::flash('message', 'Atualização bem sucedida! '.$request->nome.', '.$request->idade.' anos, '.$request->email1.', ('.$tecno.')'); 
            Session::flash('alert-class', 'alert-success'); 
             return redirect('books'); 
        }else {   
            Session::flash('message', 'Falha na Atualização de '.$request->nome. '. Nada foi alterado!'); 
              Session::flash('alert-class', 'alert-danger'); 
            return redirect('books/$id/edit');
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $del=$this->objDev->destroy($id);
        return($del)?"sim":"não";
    }
}
