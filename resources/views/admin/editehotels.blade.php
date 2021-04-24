@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Edite Hotel</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('hotel.update',$hotel->id)}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{ method_field('PUT') }}
                        {{-- {{ method_field('PUT') }} --}}
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group" >
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="published" @if($hotel->status == "published")selected @endif >published</option>
                                        <option value="unpublished"  @if($hotel->status == "unpublished")selected @endif>unpublished</option>
                                      </select>
                                  </div>
                            </div> 
                           
                         <div class="col-4">
                                <div class="form-group">
                                    <label for="name">willaya</label>
                                    <select name="wilaya_id" id="wilaya_id" class="form-control">
                                        {{-- <option value="0">...</option> --}}
                                        @isset($willaya) 
                                            @foreach ($willaya as $willaya)
                                                <option value="{{$willaya->id}}"  @if($hotel->wilaya_id == $willaya->id) selected @endif>{{$willaya->name}}</option>
                                            @endforeach 
                                        @endif
                                    </select>
                                </div>
                            </div> 
                             <div class="col-9"></div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> hotel name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$hotel->name}}" autofocus >
                                </div>
                            </div>
                        </div>
                      
                        <input type="hidden" name="image" value="{{$hotel->photo}}">
                       
                       

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">adress</label>
                                    <input type="text" class="form-control" id="adress" value="{{$hotel->adress}}" name="adress" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">phone_1</label>
                                    <input type="number" class="form-control" id="phone_1" value="{{$hotel->phone_1}}"  name="phone_1" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">phone_2</label>
                                    <input type="number" class="form-control" id="phone_2" value="{{$hotel->phone_2}}"  name="phone_2" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">rating</label>
                                    <input type="number" class="form-control" id="rating" value="{{$hotel->rating}}"  name="rating" >
                                </div>
                            </div>
                        </div>
                       
                      
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">image</label>
                                    {{-- <input type="file" name="photo" accept="image/*"    class="form-control input-height" /> --}}

                                    {{-- begin --}}
                                    <img src="{{asset('images/hotels/'.$hotel->photo)}}" style="width: 100px ;height: 100px;" id="blah" alt="Img"><br><br>
                                    <input type="file" id="inputFile" onchange="readUrl(this)"  name="photo" accept="image/*"    class="form-control input-height">
                                    <button type="button" class="btn btn-danger" onclick="removeImg()">Close</button>

                                    {{-- end --}}
                                </div>
                            </div>
                        </div>
                        
                        
                          <div class="row mx-auto">
                            <div class="col-9">
                            <button type="submit" class="btn btn-primary">save</button>
             <a href="{{ url()->previous() }}" class="btn btn-secondary">cancel</a>
                
                            <input type="hidden" name="previous" value="{{ url()->previous() }}">

                              </div> 
                              </div> 
                              
                       
                    </form>
              
                
              
           

        </div>
        </div>
    </div>
    @endsection
    @section('mx-js')
    <script>

        var a = document.getElementById("blah");
        function readUrl(input){
        if(input.files){
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload=(e)=>{
                a.src = e.target.result;
            }
        }
        }
        
        var inputFile = document.getElementById("inputFile");
        removeImg=()=>{
           a.src=""; 
           inputFile.value=""; 
        }
        
        
        
        </script>
    @endsection

   