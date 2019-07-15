<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class tambahkandidatController extends Controller
{

    public function index(){
        return view('admintambah');
    }

    public function tambahkandidat( Request $request){

        $file = $request->file('fotoprofil');
        $filename = $file->getClientOriginalName();
        $request->file('fotoprofil')->move("images/",$filename);

        DB::table('kandidat')->insert([
           'nama_kandidat' => $request->nama,
            'nip' => $request->nip,
            'visi' =>$request ->visi,
            'misi' =>$request ->misi,
            'dpd' =>$request ->nodpd,
            'fotoprofil' =>$filename
        ]);

        return redirect('/admin');
    }


}
