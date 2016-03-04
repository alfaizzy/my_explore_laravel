<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use Illuminate\Http\Request;

use App\CobaInsert;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Menu1Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function page()
    {
      if (Auth::check()) {
        // The user is logged in...
        $users = DB::table('users')->paginate(2);
        $tabel_coba = DB::table('tabel_coba')->paginate(2);
        return view('page.menu1', ['users' => $users, 'tabel_coba' => $tabel_coba]);
      }else{
        return view('page.menu1');
      }

    }

    public function insert1(request $request)
    {
        $validator = Validator::make($request->all(), [
              'nama_coba' => 'required',
              'jumlah_coba' => 'required',
        ]);

        if ($validator->fails()) {
              return redirect('menu1')
                          ->withErrors($validator)
                          ->withInput();
        }else{
          $data = new CobaInsert;

          $data->nama_coba = $request->nama_coba;
          $data->jumlah_coba = $request->jumlah_coba;

          $data->save();
        }
    }

    public function viewuser1(request $request)
    {
        $users = DB::table('users')->get();

        //return redirect('menu1')->withInput($users);
        //return back()->withInput($users);
        //return ['iki' => $users];
        //return view('page.menu1', ['users' => $users]);
        return response()->json(['users' => $users]);
    }

    public function viewUser1GET(request $request)
    {
        //$users = DB::table('users')->get();
        /*foreach ($users as $user) {
            echo $user->name;
        }*/
        //return ['iki' => $users];
        /*DB::table('users')->chunk(2, function($users) {
            foreach ($users as $user) {
                //
                echo $user->name;
            }
            return false;
        });*/



        $users = DB::table('users')->paginate(2);
        //return ['users' => $users];
        return response()->json(['users' => $users]);
        //return view('user.index', ['users' => $users]);


        //return view('menu1', ['users' => $users]);
    }

}
