<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
class AdminHome extends Controller
{
    public function index(){
            return view('Index');
     }
     public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function all(){
        $allvideo = DB::table('videoData')->get();
        return  view('Index', compact('allvideo'));
    }
    public function add(){
    
    return view('add');
    }
    public function save(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['idYoutube'] = $request->idYoutube;
        $get_image =$request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName(); // lấy tên của file hình. bao gồm cả đuôi jpg hay png hoặc jpeg
            $name_image = current(explode('.',$get_name_image)); // phần này sẽ lấy tên tới dấu chấm
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); // thêm phần mở rộng. đuôi phần tử
            $get_image->move('public/upload',$new_image);
            $data['image'] = $new_image;
        }else{
            $data['image'] = '';
        }
        DB::table('videoData')->insert($data);
        return redirect('/all');
        
    }

    public function edit($id){
    
        $onevideo = DB::table('videoData')->where('id',$id)->first();
        // var_dump($onevideo);
        // die();
        // return  view('edit', compact('onevideo'));
        return view('edit')->with('onevideo',$onevideo);
        
    }
    public function update(Request $request, $id){
        $data = array();
        $data['name'] = $request-> name;
        $data['idYoutube'] = $request-> idYoutube;
       

        $get_image = $request -> file('image');

       if($get_image){
            $get_name_image = $get_image->getClientOriginalName(); // lấy tên của file hình. bao gồm cả đuôi jpg hay png hoặc jpeg
            $name_image = current(explode('.',$get_name_image)); // phần này sẽ lấy tên tới dấu chấm
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension(); // thêm phần mở rộng. đuôi phần tử
            $get_image->move('public/upload',$new_image);
            $data['image'] = $new_image;
        }
        DB::table('videoData')->where('id',$id)->update($data);
        return redirect('/all')->withInput()->with('upd', 'update successful');
        
    }
    public function del($id){
    
        DB::table('videoData')->where('id', $id)->delete();
        return redirect('/all')->withInput()->with('del', 'delete successful');
        
    }
    
}
