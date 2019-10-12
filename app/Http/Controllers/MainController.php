<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Room;

class MainController extends Controller
{
    public function roomVideo(Request $request){
        $room = Room::orderBy('id','asc')->where('nb_users','<','4')->first();
        if($room == null){
            $room = Room::create([
                'nb_users' => 1
            ]);
            $resp = array(
                'added_room' => true,
                'room_full' => false,
                'my_room_id' => $room->id
            );
            return response()->json($resp);
        }else{
            $room->nb_users = $room->nb_users + 1;
            $room->save();
            if($room->nb_users == 4){
                $room->full = true;
                $room->save();
                $resp = array(
                    'added_room' => false,
                    'room_full' => true,
                    'my_room_id' => $room->id
                );
                return response()->json($resp);
            }else{
                $resp = array(
                    'added_room' => false,
                    'room_full' => false,
                    'my_room_id' => $room->id
                );
                return response()->json($resp);
            }
        }        
    }

    public function checkFull(Request $request){
        $room = Room::find($request->my_room_id);
        if($room->full == true){
            $resp = array(
                'full' => true
            );
        }else{
            $resp = array(
                'full' => false
            );
        }
        return response()->json($resp);
    }

    public function add(){
        $room = Room::find(1);
        $room->nb_users = $room->nb_users + 1;
        $room->save();  
    }


    public function sub(){
        $room = Room::find(1);
        $room->nb_users = $room->nb_users - 1;
        $room->save();
    }
}
