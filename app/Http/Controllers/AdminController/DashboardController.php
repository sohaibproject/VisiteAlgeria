<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class DashboardController extends Controller
{
 public function index(){
  $images = Photo::all();
    return view('test',compact('images'));
 }
//  public function action(Request $request){

 
//     if($request->hasFile('image')){
//         $file = $request->file('image');
//         $name = $file->getClientOriginalName();
//         $exection = $file->getClientOriginalExtension();
       
//         // $file->move(public_path('images'),$name);
//         $file->move('images/places/', $name);
//         //echo public_path().'/uploads/';
       
      
//         return Response()->json(array('success'=>1,'message'=>'Upload success!', 'showImage' => '<img src="/images/places/'.$name.'" class="img-thumbnail" width="100" />'));
//     }else{
//       return Response()->json(array('success'=>0,'message'=>'Upload error!'));
//     }
// }
public function store(Request $request)
    {
        $image = $request->file('file');
        $profileImage = $image->getClientOriginalName();
        // Define upload path
        $destinationPath = public_path('images'); // upload path
        $image->move($destinationPath,$profileImage);
        
       // Save In Database
		$imagemodel= new Photo();
		$imagemodel->file_name=$profileImage;

		$imagemodel->palce_id=$request->index;
		$imagemodel->save();

        return response()->json(['success'=>$profileImage]);
    }

    public function destroy(Request $request)
    {
        $filename =  $request->get('filename');
        // Photo::where('photo_name',$filename)->delete();
        $path=public_path('/images/').$filename;
        if (file_exists($path)) {
            unlink($path);
            
        }
        return $filename;  
    }
    public function load(Request $request){

  if($request->ajax())
        {
            $request->validate([
                'images' =>'required',
                'images.*' =>'image|mimes:png,jpg,gif,jpeg'
            ]);
    
            if($request->hasFile('images'))
            {
              
              foreach($request->images as $image)
              {

                
                    $imageName = $image->getClientOriginalName();
                    $imageExte = $image->getClientOriginalExtension();
    
                    $newName = uniqid("",true).".".$imageExte;
                    $image->move("images",$newName);
    
                    $postImage = new Photo;
                    $postImage->palce_id = $request->index;
                    $postImage->file_name = $newName;
                    $postImage->save();
                
            }
            $i=0;
            $test = uniqid("sohaib");
            $kill= $test;
            
            // $test="pro_img_$i" '.$postImage->id.',;
            return Response()->json(array('success'=>1,'message'=>'Upload success!', 'showImage' => '<div class="card border m-2" style="margin-left: 15px " id="'.$test.'">
            <img src="/images/'.$newName.'"  style="width: 100px; height: 100px; /><div class="m-2" ><button class="btn-danger" onClick="deleteImage('.$postImage->id.','.$kill.')"> delete</button></div>
            
            
            </div>
          
            
            '));
            $i++;
            
            // $images = Photo::all();
            // // return view('test',compact('images'));
           } // return Response()->json(array('showImage' =>$image));
        }


    }
  public function remove(){

    if(!empty($_POST["index"])) {
    $id=$_POST["index"];
$image=Photo::find($id);
   $name=$image->file_name;
   unlink('images/'.$name);
   $image->delete();
      return Response()->json(array('success'=>700,'message'=>'Upload success!'));
    }
    return Response()->json(array('error'=>144));

       


  }



   
 
}
