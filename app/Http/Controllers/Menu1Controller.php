<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use Illuminate\Http\Request;

use App\CobaInsert;
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
        return view('page.menu1');
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
}
