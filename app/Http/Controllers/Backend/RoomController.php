<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index(){
        $data['get_rooms'] = DB::table('rooms')
        ->where('status','1')
        ->orderBy('room_id','asc')
        ->paginate('3'); 
        // ->get();
        // dd($data['get_rooms']);
        return view('backend.room.index',$data);
    }
}
