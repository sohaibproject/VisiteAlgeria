<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Hotel;
use App\Models\Willaya;
use App\Models\Room_Type;

class HotelController extends Controller
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
       return view('admin.allhotels',compact('hotels'));
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
          $willayas=Willaya::all();
          return view('admin.addhotels',compact('willayas'));
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
            'wilaya_id' => 'required',
            'name' => 'string|required',
            'adress' => 'string|required',
            'phone_1' => 'numeric|required',
            'phone_2' => 'numeric|required',
            'rating' => 'required|numeric',
            'photo' => 'image|required',
            // 'summary' => 'string|nullableemail',
        ]);
        
       
        if ($request->hasFile('photo')) {
            
            $image = $request->file('photo');
        
            $imageName = $image->getClientOriginalName();
            $imageExte = $image->getClientOriginalExtension();

            $newName = uniqid("",true).".".$imageExte;
            $image->move("images/hotels/",$newName);
           
            Hotel::create([
            
          'wilaya_id'=> $request->wilaya_id,
          'name'=>$request->name,
          'status'=>$request->status,
          'rating'=>$request->rating,
          'phone_1'=>$request->phone_1,
          'phone_2'=>$request->phone_2,
          'photo'=>$newName,
          'adress'=>$request->adress,
        
                     
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
       $hotel=Hotel::find($id);
       $willaya=Willaya::all();

       if($hotel){
          return view('admin.editehotels',compact('hotel','willaya'));
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
            'wilaya_id' => 'required',
            'name' => 'string|required',
            'adress' => 'string|required',
            'phone_1' => 'numeric|required',
            'phone_2' => 'numeric|required',
            'rating' => 'required|numeric',
            // 'photo' => 'image|required',
          
        ]);

        $hotel=Hotel::find($id);
        if($hotel){
  
 
  if ($request->hasFile('photo')) {
      
      $image = $request->file('photo');
  
      $imageName = $image->getClientOriginalName();
      $imageExte = $image->getClientOriginalExtension();

      $newName = uniqid("",true).".".$imageExte;
      unlink('images/hotels/'.$request->image);
      $image->move("images/hotels/",$newName);
      $hotel->photo=$newName;
  }


        
       $hotel->status=$request->status;
     
       $hotel->wilaya_id=$request->wilaya_id;
       $hotel->name=$request->name;
       $hotel->adress=$request->adress;
       $hotel->phone_1=$request->phone_1;
       $hotel->phone_2=$request->phone_2;
       $hotel->rating=$request->rating;
     
      
       $hotel->save();
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
            $hotel=Hotel::find($id);
         if(!$hotel)
           {
                return redirect()->back()->with(['error' => 'dont find thid index']);
           }
           unlink('images/hotels/'.$hotel->photo);
          $hotel->delete();
         
           //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
             return redirect()->back()->with(['success' => 'is deleted']);
         
        
    }
}
