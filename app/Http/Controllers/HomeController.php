<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Kandidat;
use App\User;
use phpDocumentor\Reflection\Types\Null_;
use function Sodium\compare;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(  )
    {
        $pass = Auth::user()->getAuthPassword();

        if (Hash::check('12345678',$pass)){
            return view('homegantipassword');
        }else{
            $status = Auth::user()->pilihan;

            if ($status == Null){
                $nodpd = Auth::user()->dpd;

                $kandidat = DB::table('kandidat')
                    ->where('dpd',$nodpd)
                    ->get();
                $username= Auth::user()->email;

                return view('home', compact('kandidat', 'username'));
            }else{
                return view('home2');
            }

        }






    }
    public function vote(Request $request){
        $terpilih = $request->get('id');

        $iduser = Auth::user()->id;

//        dd($terpilih);


        DB::table('users')
            ->where('id','=',$iduser)
            ->update(['pilihan'=>$terpilih]);


//
        return redirect('home')->with('Success');


    }
    public function logout(){
        Auth::logout();
        return redirect('/home');
    }

    public function gantipassword(Request $request){
        $pass = $request->get('password');
        $password = bcrypt($pass);
        $iduser = Auth::user()->id;

        DB::table('users')
            ->where('id','=',$iduser)
            ->update(['password'=>$password]);

        Auth::logout();

        return redirect('/home')->with('Success');
    }


}
