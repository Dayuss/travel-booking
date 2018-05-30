<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Guide;
use App\Booking;
use Auth;

class BookingController extends Controller
{
    public function index(){
        $data = array(
            "page"      => "Booking",
            "locations" => Location::orderBy('id', 'DESC')->get()
        );
        return view('booking.index', $data);
    }

    public function create($id){
        $data = array(
            "page"       => "Booking!",
            "guides"     => Guide::where('id_lokasi',"=",$id)->get(),
            "location"  => Location::find($id),
            "id_user"   => Auth::id()
        );
        return view('booking.create', $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'id_lokasi' => 'required',
            'id_guide' => 'required',
            'tgl_pergi' => 'required',
            'id_user' => 'required'
        ]);
        
        $data = $request->all();
        
        Booking::create($data);
        
        return redirect()->route('booking.success', $request->id_lokasi);
    }

    public function success(){
        $data = array(
            "page"       => "Booking",
        );
        return view('booking.success', $data);
    }
}
