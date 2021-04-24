<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Willaya;

class WillayaController extends Controller
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
        
       $willayas=Willaya::paginate(10);
      
       return view('admin.allwillaya',compact('willayas'));
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
         
          return view('admin.addwillaya');
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
          
            'name' => 'string|required',
            'discription' => 'string|required',
            'code' => 'numeric|required',
           'photo' => 'image|required',
           
            // 'summary' => 'string|nullableemail',
        ]);
        
       
        if ($request->hasFile('photo')) {
            
            $image = $request->file('photo');
        
            $imageName = $image->getClientOriginalName();
            $imageExte = $image->getClientOriginalExtension();

            $newName = uniqid("",true).".".$imageExte;
            $image->move("images/willayas/",$newName);
           
            Willaya::create([
          'name'=>$request->name,
          'discription'=>$request->discription,
          'code'=>$request->code,
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
       $willaya=Willaya::find($id);
     

       if($willaya){
          return view('admin.editewillaya',compact('willaya'));
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
            'name' => 'string|required',
            'discription' => 'string|required',
            'code' => 'numeric|required',
           'photo' => 'image|required',
        //    'photo' => 'image|required',
            // 'summary' => 'string|nullableemail',
        ]);

        $willaya=Willaya::find($id);
        if($willaya){
  
 
  if ($request->hasFile('photo')) {
      
      $image = $request->file('photo');
  
      $imageName = $image->getClientOriginalName();
      $imageExte = $image->getClientOriginalExtension();

      $newName = uniqid("",true).".".$imageExte;

      //TODO DELETE IMAGE FROM DIRECTORY NEXT TIME
    //   dd($request->image);
    //   if (file_exists('images/places/'.$request->image)) {
    //     unlink('images/willayas/'.$request->image);
    //    } 
      
      $image->move("images/willayas/",$newName);
      $willaya->photo=$newName;
  }
  $willaya->name=$request->name;
       $willaya->discription=$request->discription;
       
       $willaya->code=$request->code;

     
      
       $willaya->save();
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
          $willaya=Willaya::find($id);
         if(!$willaya)
           {
                return redirect()->back()->with(['error' => 'dont find thid index']);
           }
            //TODO DELETE IMAGE FROM DIRECTORY NEXT TIME
        //    unlink('images/willayas/'.$willaya->photo);
          $willaya->delete();
         
           //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
             return redirect()->back()->with(['success' => 'is deleted']);
         
    }
    
}
