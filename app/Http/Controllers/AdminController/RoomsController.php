<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Hotel;
use App\Models\Room_Type;
use App\Models\Room;

class RoomsController extends Controller
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
        
       $hotels=Hotel::all();
       $type_room=Room_Type::all();
       $rooms=Room::all();
       return view('admin.allrooms',compact('hotels','type_room','rooms'));
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
          $hotels=Hotel::all();
          $type_room=Room_Type::all();
          return view('admin.addroom',compact('hotels','type_room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else{
        //   dd($request->photo);
       
          $this->validate($request, [
            'status' => 'required',
            'room_type_id' => 'required',
            'hotel_id' => 'required',
            'name' => 'string|required',
            'price' => 'numeric|required',
           'photo' => 'image|required',
            // 'summary' => 'string|nullableemail',
        ]);
        
       
        if ($request->hasFile('photo')) {
            
            $image = $request->file('photo');
        
            $imageName = $image->getClientOriginalName();
            $imageExte = $image->getClientOriginalExtension();

            $newName = uniqid("",true).".".$imageExte;
            $image->move("images/rooms/",$newName);
           
            Room::create([
            
          'room_type_id'=> $request->room_type_id,
          'hotel_id'=> $request->hotel_id,
          'name'=>$request->name,
          'status'=>$request->status,
          'price'=>$request->price,
          'photo'=>$newName,
         
         ]);              
                   
                     
      return redirect()->back()->with(['success'=>'is add']);

    }
          else 
          return redirect()->back()->with(['error'=>'you have a problem']);

    }
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
       $room=Room::find($id);
       $hotels=Hotel::all();
       $type_room=Room_Type::all();

       if($room){
          return view('admin.editeroom',compact('hotels','type_room','room'));
       }
       else 
       return redirect()->back()->with(['error'=>'dont find thid index']);
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
          else{
        //   dd($request->photo);
        $this->validate($request, [
            'status' => 'required',
            'room_type_id' => 'required',
            'hotel_id' => 'required',
            'name' => 'string|required',
            'price' => 'numeric|required',
        //    'photo' => 'image|required',
            // 'summary' => 'string|nullableemail',
        ]);

        $room=Room::find($id);
        if($room){
  
 
  if ($request->hasFile('photo')) {
      
      $image = $request->file('photo');
  
      $imageName = $image->getClientOriginalName();
      $imageExte = $image->getClientOriginalExtension();

      $newName = uniqid("",true).".".$imageExte;
      unlink('images/rooms/'.$request->image);
      $image->move("images/rooms/",$newName);
      $room->photo=$newName;
  }
 

        
       $room->status=$request->status;
     
       $room->room_type_id=$request->room_type_id;
       $room->hotel_id=$request->hotel_id;
       $room->name=$request->name;
       $room->price=$request->price;

     
      
       $room->save();
       return redirect()->back()->with(['success' =>'is updated ']);}
       else
       return redirect()->back()->with(['error'=>'dont find thid index']);
    }
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
            $room=Room::find($id);
         if(!$room)
           {
                return redirect()->back()->with(['error' => 'dont find thid index']);
           }
           unlink('images/rooms/'.$room->photo);
          $room->delete();
         
           //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
             return redirect()->back()->with(['success' => 'is deleted']);
         
    }
}
