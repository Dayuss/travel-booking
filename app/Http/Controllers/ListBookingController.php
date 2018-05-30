<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Guide;
use App\Booking;
use DB;
use Auth;

class ListBookingController extends Controller
{
    public function index(){
        if(auth()->user()->isAdmin == 1){
          $booking = DB::table("bookings")
                                ->select("bookings.*","users.name","guides.nama","locations.nama_wisata")
                                ->join('locations', 'locations.id','=','bookings.id_lokasi')
                                ->join('guides', 'guides.id','=','bookings.id_guide')
                                ->join('users', 'users.id','=','bookings.id_user')
                                ->orderBy('bookings.id')->get();
          }else{
            $booking = DB::table("bookings")
                                ->select("bookings.*","users.name","guides.nama","locations.nama_wisata")
                                ->join('locations', 'locations.id','=','bookings.id_lokasi')
                                ->join('guides', 'guides.id','=','bookings.id_guide')
                                ->join('users', 'users.id','=','bookings.id_user')
                                ->where('bookings.id_user','=', Auth::id())
                                ->orderBy('bookings.id')->get();
          }                     
        $data = array(
            "page"      => "List Booking",
            "datas" => $booking
        );
        return view('listbooking.index', $data);
    }
    public function destroy($id){
        Booking::find($id)->delete();
        
        return redirect()->route('listbooking')->with('alert-success','Berhasil Menghapus Booking!');
    }
}
