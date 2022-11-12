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
        // $room = DB::insert("insert into room (video) values ('')");

        $roomId = DB::table("room")->insertGetId(
            array("video" => "Aguardando Vídeo...")
        );

        // $room->save();

        // return ($roomId);
        return redirect('/room?id='.$roomId);
    }

    public function update(Request $request){
        $id = $request->id;
        $link = $request->video_link;

        $embed_link = explode("=", $link);

        DB::update('update room set video = ? where id = ?', [$embed_link[1], $id]);

        return redirect('/room?id='.$id);
    }
}
