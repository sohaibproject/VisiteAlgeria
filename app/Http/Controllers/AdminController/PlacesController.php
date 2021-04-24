<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Place;
use App\Models\Photo;
use App\Models\Willaya;
use App\Models\Categorie;
use Validator;
class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
          
        $Places=Place::all();
      return view('admin.allplaces',compact('Places'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
         
          $place=new Place();
          $place->save();
          $id=$place->id;
          return redirect()->route('place.edit',$id);
        //   return view('admin.`addplace`',compact('place','willaya','categorie'));
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
          $place=Place::find($id);

          $photos=Photo::where('palce_id',$id)->get();
        //   dd($photo);
        $willaya=Willaya::all();
        $categorie=Categorie::all();
        return view('admin.editeplace',compact('place','willaya','categorie','photos'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
       
          $this->validate($request, [
            'status' => 'required',
            'categorie_id' => 'required',
            'wilaya_id' => 'required',
            'name' => 'string|required',
            'slug' => 'string',
            'discription' => 'string',
            // 'summary' => 'string|nullable',
        ]);
            $place=Place::find($id);
             if($place){
            $place->status=$request->status;
            $place->categorie_id=$request->categorie_id;
            $place->wilaya_id=$request->wilaya_id;
            $place->name=$request->name;
            $place->slug=$request->slug;
            $place->user_id=Auth::user()->id;
            $place->discription=$request->discription;
            $place->save();
            return redirect()->back()->with(['success' =>'your place is add successfuly ']);}
            else
            return redirect()->back()->with(['error'=>'dont find thid index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
            $place=Place::find($id);
            $photo=Photo::where('palce_id',$id);
            $image=Photo::where('palce_id',$id)->get();
            
           if (count($image) > 0) {
             for ($i=0; $i <$image->count() ; $i++) { 
              
             if (file_exists('images/places/'.$image[$i]->file_name)) {
              unlink('images/places/'.$image[$i]->file_name);
             } 
           }
          }
           
            if($photo){
              $photo->delete();
            // for ($i=0; $i <$photo->count() ; $i++) { 
              
            //  if (file_exists('images/places/'.$photo->file_name)) {
            //   unlink('images/places/'.$photo->file_name);
            //  } 
            // }
            
      }
         
            
            if(!$place)
           {            return redirect()->back()->with(['error' => 'dont find thid index']);
           }
            
          $place->delete();
         
           //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
             return redirect()->back()->with(['success' => 'is deleted']);
        
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
                      $image->move("images/places/",$newName);
      
                      $postImage = new Photo;
                      $postImage->palce_id = $request->index;
                      $postImage->file_name = $newName;
                      $postImage->save();
                  
              }
              $i=0;
              $test = uniqid("sohaib");
              $kill= $test;
              
              // $test="pro_img_$i" '.$postImage->id.',;
              return Response()->json(array('success'=>1,'message'=>'Upload success!', 'showImage' => '<div class="card border m-2"  " id="'.$test.'">
              <img src="/images/places/'.$newName.'"  style="width: 100px; height: 100px; /><div class="m-2" ><button class="btn-danger" onClick="deleteImage('.$postImage->id.','.$kill.')"> delete</button></div>
              
              
              </div>
            
              
              '));
              $i++;
              
             
             }
          }
  
  
      }
      

public function remove(){

    if(!empty($_POST["index"])) {
    $id=$_POST["index"];
$image=Photo::find($id);
   $name=$image->file_name;
   unlink('images/places/'.$name);
   $image->delete();
      return Response()->json(array('success'=>700,'message'=>'Upload success!'));
    }
    return Response()->json(array('error'=>144));

       


  }
  public function remove_pre(){

    if(!empty($_POST["id"])) {
        $id=$_POST["id"];
    $image=Photo::find($id);
       $name=$image->file_name;
       unlink('images/places/'.$name);
       $image->delete();
          return Response()->json(array('success'=>700,'message'=>'Upload success!'));
        }
        return Response()->json(array('error'=>144));
    
  }

    
}
