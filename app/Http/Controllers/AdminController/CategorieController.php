<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Auth;
class CategorieController extends Controller
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
        $categories=Categorie::all();
        return view('admin.allcategorie',compact('categories'));
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
        return view('admin.addcategorie');
        
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
          else
      
          $request->validate([
            'name' => ['required'],
            'discription' => ['required'],
            'status'=>['required'],
          ]);
          if($request){
        
    
            Categorie::create([
            
          'discription'=> $request->discription,
          'name'=>$request->name,
          'status'=>$request->status,
                     
                            
                     ]);
                     
      return redirect()->back()->with(['success'=>'is add']);

          }
          else 
          return redirect()->back()->with(['error'=>'you have a problem']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
       $categorie=Categorie::find($id);
       if($categorie){
          return view('admin.editecategorie',compact('categorie'));
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
          else
        $request->validate([
            'name' => ['required'],
            'discription' => ['required'],
            'status'=>['required'],
          ]);
          $categorie=Categorie::find($id);

          
           $categorie->name=request('name');
           $categorie->status=request('status');
         
          $categorie->discription=request('discription');
        
  
          $categorie->save();
  
  
           return redirect()->back()->with(['success' =>'your update is successful ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
        $categorie=Categorie::find($id);
        if ($categorie) {
           $categorie->delete();
           return redirect()->back()->with(['success' =>'your delete is successful ']);
        }
        else
        return redirect()->back()->with(['error'=>'dont find thid index']);
    }
}
