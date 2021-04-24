<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Willaya;
use App\User;
use Auth;

class DriverController extends Controller
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
        
       $drivers=Driver::all();
       return view('admin.alldriver',compact('drivers'));
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
        return view('admin.adddriver',compact('willayas'));
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
            'password' => 'string|required',
            'photo' => 'required|image',
            'email' => 'required|email',
            'phone' => 'numeric|min:10',
            // 'summary' => 'string|nullableemail',
        ]);
        
       
        if ($request->hasFile('photo')) {
            
            $image = $request->file('photo');
        
            $imageName = $image->getClientOriginalName();
            $imageExte = $image->getClientOriginalExtension();

            $newName = uniqid("",true).".".$imageExte;
            $image->move("images/drivers/",$newName);
              $user= new User();
              $user->name=$request->name;
              $user->password=bcrypt($request->password);
              $user->phone=$request->phone;
              $user->email=$request->email;
              $user->role="driver";
              $user->save();
            Driver::create([
            
          'wilaya_id'=> $request->wilaya_id,
          'name'=>$request->name,
          'status'=>$request->status,
          'password'=>bcrypt($request->password),
          'phone'=>$request->phone,
          'photo'=>$newName,
          'email'=>$request->email,
        
                     
            ]);              
                   
                     
      return redirect()->back()->with(['success'=>'is add']);

    }
          else 
          return redirect()->back()->with(['error'=>'you have a problem']);

    }}

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
       $driver=Driver::find($id);
       $willaya=Willaya::all();

       if($driver){
          return view('admin.editedriver',compact('driver','willaya'));
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
            'password' => 'string|required',
            'photo' => 'image',
            'email' => 'required|email',
            'phone' => 'numeric|min:10',
            // 'summary' => 'string|nullableemail',
        ]);
        $driver=Driver::find($id);
              if($driver){
        
       
        if ($request->hasFile('photo')) {
            
            $image = $request->file('photo');
        
            $imageName = $image->getClientOriginalName();
            $imageExte = $image->getClientOriginalExtension();

            $newName = uniqid("",true).".".$imageExte;
            unlink('images/drivers/'.$request->image);
            $image->move("images/drivers/",$newName);
            $driver->photo=$newName;
        }
        // begin update user
              $user= User::where('email',$request->mail)->first();

              $user->name=$request->name;
              $user->password=$request->password;
              $user->phone=$request->phone;
              $user->email=$request->email;
              $user->role="driver";
              $user->save();
// end update user

              
             $driver->status=$request->status;
           
             $driver->wilaya_id=$request->wilaya_id;
             $driver->name=$request->name;
             $driver->password=$request->password;
             $driver->email=$request->email;
             $driver->phone=$request->phone;
           
            
             $driver->save();
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
            $driver=Driver::find($id);
         if(!$driver)
           {
                return redirect()->back()->with(['error' => 'dont find thid index']);
           }
           unlink('images/drivers/'.$driver->photo);
          $driver->delete();
         
           //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
             return redirect()->back()->with(['success' => 'is deleted']);
        

        
    }
}
