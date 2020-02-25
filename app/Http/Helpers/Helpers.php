<?php

function pre($data, $flag = 0) {
    echo "<pre>";
    print_r($data);
    if ($flag == 0) {
        die;
    }
}

function _json($code=200,$message="",$data=array(),$error=array()){
   if(!count($data)){
       $data=new stdClass();
   } 
   if(!count($error)){
       $error=new stdClass();
   } 
   return response()->json(['status_code'=>$code,"message"=>$message,"data"=>$data,"error"=>$error], $code); 
}

function upload_file($image,$path){
    $upload_path="/uploads/".$path."/";
    $name=md5(time()).time().rand(1,999);
    $name = $name.'.'.$image->getClientOriginalExtension();
    $img = Image::make($image->getRealPath());
    $img->resize(512, 512, function ($constraint) {
        $constraint->aspectRatio();
    })->save(public_path($upload_path.'thumb').'/'.$name);
    $image->move(public_path($upload_path), $name);
    return $name;
}

function randomToken(){
    return sha1(md5(time()).time().rand());
}

?>