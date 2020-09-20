<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;


class ApiController extends Controller
{
public function signup( Request $request){
        //Inside method
        $current_timestamp = Carbon::now()->timestamp;
        $data = array();

        $user = json_decode($request->getContent())->username;
        $data['name'] = $user;

        $email = json_decode($request->getContent())->email;
        $data['email'] = $email;

        $pass = bcrypt(json_decode($request->getContent())->password);
        $data['password'] = $pass;

        $token = MD5($current_timestamp);
        $data['token'] = $token;
        
        try{

        
        $check = DB::table("users")->where("email", $email)->first();
            if($check){
                return response()->json(['result' => ['code'=>400,'masage' => 'can not use an exist email', 'data' => null]],200);
            }
            else{
                $rep = DB::table("users")->insert($data);
                if($rep){
                    return response()->json(['result' => ['code'=>0,'mesage' => 'success regist', 'data' =>['token' => $token]]],200);
                    
                }else{
                    return response()->json(['result' => ['code'=>401,'mesage' => 'fails regist', 'data' => null]],200);
                }
            }
            
        }catch (\Exception $e) {
            return response()->json(['result' => ['code'=>1,'mesage' => $e->getMessage()]],200);
        }
    }
    public function signin(Request $request){
       $email = json_decode($request->getContent())->email;
       $pass = json_decode($request->getContent())->password;
       
//    return response()->json(['result' => ['email'=>$email,'pass' => $pass]],200);
        $rep = DB::table("users")->where("email", $email)->first();
       try{
           if(Hash::check($pass, $rep->password)){//
                return response()->json(['result' => ['code'=>0,'mesage' => 'success login', 'data' =>['token' => $rep->token, 'type' => $email == 'admin@gmail.com'? 1: 0]]],200);           
                }
                else
                {
                return response()->json(['result' => ['code'=>401,'mesage' => 'fails login', 'data' => null]],200);
            }
               
         }catch (\Exception $e) {
                return response()->json(['result' => ['code'=>1,'mesage' => $e->getMessage()]],200);
        }
    
    }
    public function youtubelist(Request $request){
        try{
         $rep = DB::table("videoData")->get();
         
             if($rep){
             
                 return response()->json(['result' => ['code'=>0,'mesage' => 'success login', 'data' => $rep]],200);
 
                 
             }else{
                 return response()->json(['result' => ['code'=>401,'mesage' => 'fails login', 'data' => null]],200);
             }
         }catch (\Exception $e) {
             return response()->json(['result' => ['code'=>1,'mesage' => $e->getMessage()]],200);
         }
     }
    public function upload(Request $request)
    {
        $current_timestamp = Carbon::now()->timestamp; 
        $data = array();
        $image = json_decode($request->getContent())->imageBase;
        
        // return $image;
        $token = json_decode($request->getContent())->token;
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = $current_timestamp . '.png';
        if(json_decode($request->getContent())->imageBase != "")
        {
        $data['image'] = $imageName;
        }
        else
        {
            $data['image'] = "";
        }
        if(Storage::disk('uploads')->put($imageName, base64_decode($image)))
        { 
            DB::table("users")->where('token', $token)->update($data);
            return response()->json(['result' => ['code'=>0,'mesage' => 'success upload']],200);
        }
        else
        {
            return response()->json(['result' => ['code'=>1,'mesage' => 'success upload']],200);
        }
    }
    public function getuserinfo(Request $request){
        $token = json_decode($request->getContent())->token;
        try{
         $rep = DB::table("users")->where('token', $token)->first();
         
             if($rep){
             
                 return response()->json(['result' => ['code'=>0,'mesage' => 'success login', 'data' => $rep]],200);
 
                 
             }else{
                 return response()->json(['result' => ['code'=>1,'mesage' => 'fails login', 'data' => null]],200);
             }
         }catch (\Exception $e) {
             return response()->json(['result' => ['code'=>1,'mesage' => $e->getMessage()]],200);
         }
     }
    
}
?>