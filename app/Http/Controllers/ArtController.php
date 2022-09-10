<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class ArtController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $arts['data'] = DB::table('arts')
            ->join('user_art', 'arts.id', '=', 'user_art.art_id')
            ->where('user_art.user_id', '=', $id)
            ->select('arts.*')
            ->get();
        return view('profile')->with("art",$arts);
      }
    public function imageupload(Request $request){
        
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/upload',$filename);
            $data = getimagesize($request->file);
            $width = $data[0];
            $height = $data[1];

            $data=array('name'=>$filename,"image"=>$filename,"i_height"=>$height,"i_width"=>$width);
            DB::table('arts')->insert($data);
            $value=DB::table('arts')->where('name', $filename)->first();
            $art_id=$value->id;
            $id = Auth::user()->id;
            if($art_id && $id){
            $data=array('user_id'=>$id,'art_id'=>$art_id);
            DB::table('user_art')->insert($data);
            return redirect()->back()->with('message', 'Image Uploaded');
            }
            else{
                return redirect()->back()->with('error', 'Image Upload Failed');
            }
        }
        else{
            return redirect()->back()->with('error', 'Image Upload Failed');
        }
        
    }

}
