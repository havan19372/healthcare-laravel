<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
 use \Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
//        if(Auth::user()->type=="USER"){
//            return redirect("/");
//        }
        $user= \App\User::all();
        return view("users/index")->with(["users"=>$user]);
    }
    function details(Request $request,$user_id){
        try{
            $user= \App\User::findorfail($user_id);
            $sensor= DB::select("SELECT ms.*,usm.sensor_name,usm.user_id,usm.id as usm_id  FROM main_sensors as ms LEFT JOIN user_sensor_map as usm ON usm.sensor_id=ms.id and usm.user_id=$user_id WHERE ms.is_active=1");
            return view("users/profile")->with(["user"=>$user,"sensors"=>$sensor]);
        }catch(\Exception $e){
            return redirect("/");
        }
    }
    function senssorUpdate(Request $request,$user_id){
        //pre($request->toArray());
        try{
            foreach($request->form as $key=>$value){
                $str="Sensor-";
                $sensor_name=$value['sensor_name']?$value['sensor_name']:"";
                if(strpos($sensor_name, "Sensor-")===false && strpos($sensor_name, "Plug-")===false){
                    $sensor_name=($value['type']=="PLUG"?"Plug-":"Sensor-").$sensor_name;
                }
                $data=["user_id"=>$user_id,"sensor_name"=>$sensor_name,"sensor_id"=>$value['sensor_id']];
                if($value['ucm_id']==null){
                    DB::table("user_sensor_map")
                        ->insert($data);
                }else{
                    DB::table("user_sensor_map")
                        ->where('id', $value['ucm_id'])
                        ->update($data);
                }
            }
            \Session::flash('success_message', 'Sensors update successfully');
        }catch(\Exception $e){
            \Session::flash('error_message', 'Something Went wrong Please try again');
        }
        return redirect()->route("details",$user_id);
    }
}
