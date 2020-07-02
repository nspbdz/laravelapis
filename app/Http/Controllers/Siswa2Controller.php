<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa2;
use Illuminate\Support\Facades\DB;

class Siswa2Controller extends Controller
{
    //
    public function index(){
        return Siswa2::all();
        $siswa2 = DB::table('siswa')->get();
        return view('index',['siswa' => $siswa2]);
    }
    public function create(request $request){
            $siswa2 = new Siswa2;
            $siswa2->nama = $request->nama;
            $siswa2->alamat = $request->alamat;
            $siswa2->poster = $request->poster;
            $siswa2->save();

            return "Data Berhasil Masuk";
    }
    public function update(request $request, $id){
        $nama =$request->nama;
        $alamat =$request->alamat;
        
        $siswa2 = Siswa2::find($id);
        $siswa2->nama = $nama;
        $siswa2->alamat = $alamat;
        $siswa2->poster = $poster;
        $siswa2->save();

        return "Data Berhasil di Update";
        }
        public function delete ($id){
            $siswa2 = Siswa2::find($id);
            $siswa2->delete();

        return "Data Berhasil di delete";
        }
}

