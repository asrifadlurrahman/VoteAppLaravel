<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Kandidat;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

//        $kandidat = DB::table('kandidat')->get();
//        $votes = DB::table('kandidat')->update(['votes'=>0]);
//        $totalkandidat = DB::table('kandidat')->count();
//        $pilihan = DB::table('users')->get('pilihan');
//        $idkandidat = DB::table('kandidat')->get('id');
//        $totalvote = DB::table('users')
//            ->whereNotNull('pilihan')
//            ->count();
//
//        $jumlahvote = array();
//
//        for ($i = 1; $i<=$totalkandidat;$i++){
//            $tes = DB::table('users')
//                ->where('pilihan','=',$i)
//                ->count();
//
//            if ($totalvote == 0){
//                $totalvotes = 1;
//            }else{
//                $totalvotes = $totalvote;
//            }
//            $persenan = ($tes/$totalvotes)*100;
//
//            DB::table('kandidat')
//                ->where('id','=',$i)
//                ->increment('votes',$persenan);
//        }
//
//
//        dd($totalvote);

        $role = Auth::user()->role;
        if ($role = 'admin'){

            $kandidat1 = DB::table('kandidat')->where('dpd','=','1')->get();
            $kandidat2 = DB::table('kandidat')->where('dpd','=', '2')->get();
            $kandidat3 = DB::table('kandidat')->where('dpd','=','3')->get();
            $kandidat4 = DB::table('kandidat')->where('dpd','=', '4')->get();
            $kandidat = DB::table('kandidat')->get();

            $totalkandidat1 = DB::table('kandidat')->where('dpd','=','1')->count();
            $totalkandidat2 = DB::table('kandidat')->where('dpd','=','2')->count();
            $totalkandidat3 = DB::table('kandidat')->where('dpd','=','3')->count();
            $totalkandidat4 = DB::table('kandidat')->where('dpd','=','4')->count();
            $totalkandidat = DB::table('kandidat')->count();


            foreach ($kandidat as $kdt){
                $tes = 0;
                $tes = DB::table('users')->where('pilihan','=',$kdt->id)->count();

                DB::table('kandidat')->where('id', '=', $kdt->id)->update(['votes' => $tes]);
            }

            $totalvotes1 = DB::table('users')->where('dpd','=','1')->whereNotNull('pilihan')->count();
            $totalvotes2 = DB::table('users')->where('dpd','=','2')->whereNotNull('pilihan')->count();
            $totalvotes3 = DB::table('users')->where('dpd','=','3')->whereNotNull('pilihan')->count();
            $totalvotes4 = DB::table('users')->where('dpd','=','4')->whereNotNull('pilihan')->count();



            if ($totalvotes1 == 0){
                $totalvote1 = 1;
            }else{
                $totalvote1=$totalvotes1;
            }

            if ($totalvotes2 == 0){
                $totalvote2 = 1;
            }else{
                $totalvote2=$totalvotes2;
            }

            if ($totalvotes3 == 0){
                $totalvote3 = 1;
            }else{
                $totalvote3=$totalvotes3;
            }

            if ($totalvotes4 == 0){
                $totalvote4 = 1;
            }else{
                $totalvote4=$totalvotes4;
            }



            return view('admin', compact('kandidat1','kandidat2', 'kandidat3', 'kandidat4', 'totalkandidat1', 'totalkandidat2', 'totalkandidat3', 'totalkandidat4','totalvote1'
            ,'totalvote2', 'totalvote3', 'totalvote4'));


        }else{
            Auth::logout();
            return redirect('welcome');
        }

    }
}
