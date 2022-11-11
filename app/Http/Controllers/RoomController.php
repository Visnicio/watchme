<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function show(Request $request){
        $room = Room::find($request->input("id"));
        // return "Sala: ".$room->video;
        return view("room", [
            "room" => $room
        ]);
    }

    public function store(){
        $room = DB::insert("insert into room (video) values ('')");

        // $room->save();

        // $insertId = $room->id;
        return $room;
    }
}
