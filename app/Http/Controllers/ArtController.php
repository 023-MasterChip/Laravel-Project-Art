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
            DB::table('users')->where('id', $id)->update(['role' => 2]);


            if($request->has('fantasy')){
                $data=array('art_id'=>$art_id,'category_id'=>'1');
                DB::table('art_category')->insert($data);
            }
            if($request->has('concept'))
            {
                $data=array('art_id'=>$art_id,'category_id'=>'2');
                DB::table('art_category')->insert($data);
            }
            if($request->has('comic'))
            {
                $data=array('art_id'=>$art_id,'category_id'=>'4');
                DB::table('art_category')->insert($data);
            }
            if($request->has('abstract'))
            {
                $data=array('art_id'=>$art_id,'category_id'=>'3');
                DB::table('art_category')->insert($data);
            }
            if($request->has('illustration'))
            {
                $data=array('art_id'=>$art_id,'category_id'=>'5');
                DB::table('art_category')->insert($data);
            }
            if($request->has('game'))
            {
                $data=array('art_id'=>$art_id,'category_id'=>'6');
                DB::table('art_category')->insert($data);
            }

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
    public static function getImgById($id){
        $value=DB::table('arts')->where('id', $id)->first();
        $artId=$value->id;
        $name=$value->name;
        $image=$value->image;
        $width=$value->i_width;
        $height=$value->i_height;
        $created=$value->created_at;
        $updated=$value->updated_at;

        return redirect()->back()
        ->with("artid",$artId)
        ->with("artname",$name)
        ->with("artimage",$image)
        ->with("artwidth",$width)
        ->with("artheight",$height)
        ->with("artcreated",$created)
        ->with("artupdated",$updated);
      }
    
      public function getArtist($id)
      {
        $artist=DB::table('users')->where('id', $id)->first();

        $arts['data'] = DB::table('arts')
            ->join('user_art', 'arts.id', '=', 'user_art.art_id')
            ->where('user_art.user_id', '=', $id)
            ->select('arts.*')
            ->get();
        
        return view('artist')
            ->with("artist",$artist)
            ->with("art",$arts);
      }

      public function getArtById($id)
      {
        $arts['data'] = DB::table('arts')
            ->join('art_category', 'arts.id', '=', 'art_category.art_id')
            ->join('category', 'art_category.category_id', '=', 'category.id')
            ->where('art_category.category_id', '=', $id)
            ->select('arts.*')
            ->get();
        
        return view('category')
        ->with("art",$arts)
        ->with("catId",$id);
      }

      public function deleteArt($id)
      {
          DB::table('arts')->where('id', $id)->update(['active' => '0']);
          return redirect()->back()->with('message', 'Art Deleted.');
      }

}
