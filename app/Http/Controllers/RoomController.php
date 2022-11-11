<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show(Request $request){
        $room = Room::find($request->input("id"));
        // return "Sala: ".$room->video;
        return view("room", [
            "room" => $room
        ]);
    }
}
