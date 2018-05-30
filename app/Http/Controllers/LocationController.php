<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = array(
            "page"      => "Lokasi",
            "locations" => Location::orderBy('id', 'DESC')->get()
        );
        return view('lokasi.index', $data);
    }

    public function create(){
        $data = array(
            "page"      => "Tambah Lokasi",
        );
        return view('lokasi.create', $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_wisata' => 'required',
            'alamat' => 'required',
            'jenis_wisata' => 'required'
        ]);
        
        $data = $request->all();
        
        Location::create($data);
        
        return redirect()->route('lokasi')->with('alert-success','Berhasil Menambahkan Lokasi!');
    }

    public function edit($id){
        $data = array(
            "page"      => "Edit Lokasi",
            "location" => Location::find($id)
        );
        return view('lokasi.edit', $data);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'nama_wisata' => 'required',
            'alamat' => 'required',
            'jenis_wisata' => 'required'
        ]);

        $data = $request->all();
        
        Location::find($id)->update($data);
        return redirect()->route('lokasi')->with('alert-success','Berhasil Mengedit Lokasi!');
        
    }
    public function destroy($id){
        Location::find($id)->delete();
        
        return redirect()->route('lokasi')->with('alert-success','Berhasil Menghapus Lokasi!');
    }
}
