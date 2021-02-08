<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\ModelCandidato;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Concerns;
use Session;

class CandidatoController extends Controller
{
    private $objDev;
    private $objUser;
    
    public function __construct()
    {
        $this->objDev=new ModelCandidato();
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
    public function search(CandidatoRequest $request)
    {   
        $devs = $this->objDev->search($request->$filter);
        dd($devs->all());exit;
        
        return view('index',compact('devs'));
        
        
    }  
    public function login()
    {
        $user = $this->objUser=new User();
        return view('auth/login',compact('user'));
    }    
    
    public function create()
    {
        return view('add',compact('dev'));
    }

    public function store(CandidatoRequest $request)
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
            return redirect('candidato');
        }else  { 
            Session::flash('message', 'Falha na Incerssão de '.$request->nome. '. Nada foi alterado!'); 
              Session::flash('alert-class', 'alert-danger'); 
            return redirect('candidato/create');
        }
    }
    public function show($id)
    {
        
       $dev=$this->objDev->find($id);
       return view('show',compact('dev'));
    }

    public function edit($id)
    {
        
       $dev=$this->objDev->find($id);
       return view('add',compact('dev'));
    }

    public function update(CandidatoRequest $request, $id)
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
             return redirect('candidato'); 
        }else {   
            Session::flash('message', 'Falha na Atualização de '.$request->nome. '. Nada foi alterado!'); 
              Session::flash('alert-class', 'alert-danger'); 
            return redirect('candidato/$id/edit');
    }
}
    public function destroy($id)
    {        
        $del=$this->objDev->destroy($id);
        return($del)?"sim":"não";
    }
}
