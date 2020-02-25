<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\DB;
class ApiController extends Controller
{
    private $room=[];
    private $notification_room=[];
    private $notification_room1=[];
    private $door_sensors = [
        "Fridge" => "Sensor-331F58"
        ];
    private $appliances_sensors = [
        ];
    private $appliances_sockets = [
        "Kattle" => "Plug-3F92FA"
        ];
    public function __construct()
    {
        $this->middleware('auth');
    }
    function getSensorDataDB(){
        $last=DB::table("sensor_data")
            ->orderby("sensor_data_id","DESC")
            ->first();
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://52.236.165.33/sensor.php?id=".$last->sensor_data_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Cache-Control: no-cache"
        ),
        ));
        $response = json_decode(curl_exec($curl),1);
        foreach($response as $k=>$v){
            try{
                DB::table("sensor_data")->insert($v);
            }catch(\Exception $e){
                break;
            }
        }
    }
    function getHealthDataDB(){
        $last=DB::table("health_data")
            ->orderby("health_data_id","DESC")
            ->first();
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://52.236.165.33/health.php?id=".$last->health_data_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Cache-Control: no-cache"
        ),
        ));
        $response = json_decode(curl_exec($curl),1);
        foreach($response as $k=>$v){
            try{
                DB::table("health_data")->insert($v);
            }catch(\Exception $e){
                break;
            }
        }
    }
    function assignSenssor(){
        $user_id=Auth::user()->id;
        $room_ress=DB::select("SELECT ms.*,usm.sensor_name,usm.user_id,usm.id as usm_id  FROM main_sensors as ms LEFT JOIN user_sensor_map as usm ON usm.sensor_id=ms.id and usm.user_id=".$user_id." WHERE ms.is_active=1");
        foreach ($room_ress as $key=>$room_res){
            if($room_res->category=="whereabout"){
                $this->room[$room_res->name]=$room_res->sensor_name?$room_res->sensor_name:"NOT_ASSIGN";
            }else{
                $this->appliances_sensors[$room_res->name]=$room_res->sensor_name?$room_res->sensor_name:"NOT_ASSIGN";
            }
            if($room_res->type=="Door Sensor"){
                $this->notification_room1[]=$room_res->sensor_name?$room_res->sensor_name:"NOT_ASSIGN";
            }else{
                $this->notification_room[]=$room_res->sensor_name?$room_res->sensor_name:"NOT_ASSIGN";
            }
            
        }
        
    }
    function getWhereAboutData(Request $request){
        $this->getSensorDataDB();
        $this->assignSenssor();
        $res=array("room"=>[],"room_data"=>[]);
        $res['room']=$this->room;
        $flip_room= array_flip($this->room);
        $from=$request->get("from",date("d-m-Y"));
        $to=$request->get("to",date('d-m-Y', strtotime(date("d-m-Y"). ' +1 day')));
        $from= strtotime($from)*1000;
        $to=strtotime($to)*1000;
        //pre($request->get("whd_count",0));
        $sensor_res= DB::table("sensor_data")
                ->where([["createdOn",">",$from],["createdOn","<",$to],["type","=","update"]])
                ->skip($request->get("whd_count",0))->take(1000000000)
                ->get();
        $room_data=[];
        $res['count']=$sensor_res->count();
        foreach ($sensor_res as $key=>$row){
            $row->status=substr(decbin($row->status),-1);
            if(!empty($flip_room[$row->name])){
                if(!array_key_exists($flip_room[$row->name], $room_data)){
                    $room_data[$flip_room[$row->name]]=[];
                }
                $row->date=date("d-m-Y H:i:s",$row->createdOn/1000);
                $room_data[$flip_room[$row->name]][]=$row;
            }         
        }
        $res['room_data']=$room_data;
        return _json(200, "UPDATE", $res);
    }
    function getAppliancesData(Request $request){
        $this->assignSenssor();
        $res=array("room"=>[],"room_data"=>[]);
        $res['room']=$this->appliances_sensors;
        $flip_room= array_flip($this->appliances_sensors);
        $from=$request->get("from",date("d-m-Y"));
        $to=$request->get("to",date('d-m-Y', strtotime(date("d-m-Y"). ' +1 day')));
        $from= strtotime($from)*1000;
        $to=strtotime($to)*1000;
        $sensor_res= DB::table("sensor_data")
                ->where([["createdOn",">",$from],["createdOn","<",$to],["type","=","update"]])
                ->skip($request->get("acd_count",0))->take(1000000000)
                ->get();
        $room_data=[];
        $res['count']=$sensor_res->count();
        foreach ($sensor_res as $key=>$row){
            $row->status=substr(decbin($row->status),-1);
            if(!empty($flip_room[$row->name])){
                if(!array_key_exists($flip_room[$row->name], $room_data)){
                    $room_data[$flip_room[$row->name]]=[];
                }
                $row->date=date("d-m-Y H:i:s",$row->createdOn/1000);
                $room_data[$flip_room[$row->name]][]=$row;
            }            
        }
        $res['room_data']=$room_data;
        return _json(200, "UPDATE", $res);
    }
    function getNotificationData(Request $request){
        $this->assignSenssor();
        $from=$request->get("from",date("d-m-Y"));
        $to=$request->get("to",date('d-m-Y', strtotime(date("d-m-Y"). ' +1 day')));
        $from= strtotime($from)*1000;
        $to=strtotime($to)*1000;
        //$room=["Sensor-34A88B","Sensor-30869A","Sensor-39133D","Sensor-2D3B30","Sensor-38570D","Sensor-2D8F22"];
        //$room1=["Sensor-2F754D","Sensor-249584"];
        $query="SELECT * FROM sensor_data WHERE (( name in('".implode("','",$this->notification_room)."')  AND type='warning') OR (name in('".implode("','",$this->notification_room1)."')  AND type='update')) AND createdOn > ".$from." AND createdOn < ".$to ." LIMIT ".$request->get("notification_count",0).",18446744073709551615 ";
        $res=DB::select($query);

        $flip_room= array_flip($this->room);
        $ress['count']=count($res);
        foreach ($res as $k=>$row){
            $row->status=substr(decbin($row->status),-1);
            try{
                $row->sensore_name=$flip_room[$row->name];
                if($row->type=="update"){
                    if($row->status==1){
                        $row->action="Door Opened";
                        $row->action="Door Opened";
                    }else{
                        $row->action="Door Closed";
                    }
                }else{
                    $row->action="Movement";
                }    
            }catch(\Exception $e){
                unset($res[$k]);
            }
        }
       // pre($res);
        $ress['data']=$res;
        return _json(200, "Notification List",$ress);
    }

    function getHealthData(Request $request)
    {
        $this->getHealthDataDB();
        $id=$request->get("id");
        $data = array();
        $from=$request->get("from",date("d-m-Y"));
        $to=$request->get("to",date('d-m-Y', strtotime(date("d-m-Y"). ' +1 day')));
        $from= strtotime($from)*1000;
        $to=strtotime($to)*1000;
        $r=DB::table("health_data")
                ->where([["user_id","=",Auth::user()->id],["heartRate","!=",0],["createdOn",">",$from],["createdOn","<",$to]])
                ->orderBy("health_data_id","DESC");
        $r1=DB::table("health_data")
                ->where([["user_id","=",Auth::user()->id],["calories","!=",0],["createdOn",">",$from],["createdOn","<",$to]])
                ->orderBy("health_data_id","DESC");
        $r2=DB::table("health_data")
                ->where([["user_id","=",Auth::user()->id],["steps","!=",0],["createdOn",">",$from],["createdOn","<",$to]])
                ->orderBy("health_data_id","DESC");
        $res=[
            "carerBeacon"=> 0,
            "familyBeacon"=> 0,
            "tapBeacon"=> 0,
            "medicationsBeacon"=> 0,
            "wearableConnected"=> 0,
            "wearableBattery"=> 0,
            "heartRate"=>$r->count()?$r->first()->heartRate:0,
            "steps"=> $r->count()?$r->first()->steps:0,
            "distanceTraveled"=> 0,
            "calories"=> $r->count()?$r->first()->calories:0,
            "modifiedOn"=> "1519811686462"
        ];
        
        return _json(200, "Health Data",$res);
    }
}