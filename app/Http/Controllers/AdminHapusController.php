<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminHapusController extends Controller
{
    public function index(){
        $kandidat = DB::table('kandidat')->get();

        $kandidat1 = DB::table('kandidat')->where('dpd','=','1')->get();
        $kandidat2 = DB::table('kandidat')->where('dpd','=', '2')->get();
        $kandidat3 = DB::table('kandidat')->where('dpd','=','3')->get();
        $kandidat4 = DB::table('kandidat')->where('dpd','=', '4')->get();

        return view('adminhapus', compact('kandidat1','kandidat2','kandidat3', 'kandidat4'));
    }

    public function hapus(Request $request){
        DB::table('kandidat')->where('id', $request->id)
            ->delete();

        return redirect('/admin');
    }
}
