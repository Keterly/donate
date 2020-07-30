<?php

namespace App\Http\Controllers\Doe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Donor;

class DoeController extends Controller
{
    public function index(){
    	$donors = Donor::get();
    	return view('Doe.index',compact('donors'));
    }

    public function registerDonor(Request $request){

    	$data = $request->only('name','email','blood');
    	Donor::create($data);
    	return back()->with('message','Seus dados foram registrados com sucesso. Agradecemos por salvar uma vida!');

    }

}
