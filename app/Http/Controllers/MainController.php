<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;
use App\Room;

class MainController extends Controller
{

    protected $sid;
    protected $token;
    protected $key;
    protected $secret;
    
    public function __construct()
    {
       $this->sid = config('services.twilio.sid');
       $this->token = config('services.twilio.token');
       $this->key = config('services.twilio.key');
       $this->secret = config('services.twilio.secret');
    }

    public $max_nb_users = 2;

    public function roomVideo(Request $request){
        $room = Room::orderBy('id','asc')->where('nb_users','<',''.$this->max_nb_users)->first();
        if($room == null){
            $room = Room::create([
                'nb_users' => 1,
                't1' => $request->rndString
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
            if($room->nb_users == 2){
                $room->full = true;
                $room->t4 = $request->rndString;
                $room->save();
                $resp = array(
                    'added_room' => false,
                    'room_full' => true,
                    'my_room_id' => $room->id
                );
                return response()->json($resp);
            }else{
                if($room->nb_users == $this->max_nb_users){
                    $room->t2 = $request->rndString;
                    $room->save();
                }else if($room->nb_users == 3){
                    $room->t3 = $request->rndString;
                    $room->save();
                }
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


    public function joinRoom(){
    // A unique identifier for this user
    $identity = "our_user";

    //\Log::debug("joined with identity: $identity");
    $token = new AccessToken($this->sid, $this->key, $this->secret, 3600, $identity);

    $videoGrant = new VideoGrant();
    $videoGrant->setRoom("our_room_name");

    $token->addGrant($videoGrant);
    dd($token->toJWT());
    //return view('room', [ 'accessToken' => $token->toJWT(), 'roomName' => $roomName ]);
    }
}
