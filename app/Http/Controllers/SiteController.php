<?php

namespace App\Http\Controllers;

use App\Biodata_artis;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function home(){
        $data_artis = Biodata_artis::all();
        return view('site.index', [
            'data_artis' => $data_artis,
        ]);
    	
    }

    public function store(Request $request)
    {
      
    
        //Biodata_artis::create($request->all());

        return view('/site.tambah');
        
    }

    
}
