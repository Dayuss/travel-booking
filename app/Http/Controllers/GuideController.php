<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\Location;
use DB;

class GuideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
      
    public function index(){
        $data = array(
            "page"      => "Guide",
            "guides" => DB::table('guides')->select("locations.alamat","guides.*")->join('locations', 'locations.id','=','guides.id_lokasi')->orderBy('guides.id')->get()
        );
        return view('guide.index', $data);
    }

    public function create(){
        $data = array(
            "page"           => "Tambah Guide",
            "locations"      => Location::All(),
        );
        return view('guide.create', $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'no_hp' => 'required',
            'id_lokasi' => 'required'
        ]);
        
        $data = $request->all();
        
        Guide::create($data);
        
        return redirect()->route('guide')->with('alert-success','Berhasil Menambahkan Guide!');
    }

    public function edit($id){
        $data = array(
            "page"          => "Edit Guide",
            "guide"         => Guide::find($id),
            "locations"     => Location::All(),
            
        );
        return view('guide.edit', $data);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'nama' => 'required',
            'no_hp' => 'required',
            'id_lokasi' => 'required'
        ]);
        

        $data = $request->all();
        
        Guide::find($id)->update($data);
        return redirect()->route('guide')->with('alert-success','Berhasil Mengedit Guide!');
        
    }
    public function destroy($id){
        Guide::find($id)->delete();
        
        return redirect()->route('guide')->with('alert-success','Berhasil Menghapus Guide!');
    }
}
