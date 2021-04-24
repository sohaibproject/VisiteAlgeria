@extends('layouts.admin')
@section('contenu')
@include('admin.includs.alerts.errors')
  @include('admin.includs.alerts.success')
    <div class="container-fluid ">
        <div class=" d-flex justify-content-between flex-wrap flex-md-nowrap         align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 m-2">Add Room</h1>
             </div>
             @if(count($errors) > 0)
             @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{ $error }}</div>
             @endforeach
             @endif
             <div class="row "> 
                 @if ( count($hotels) == 0)
                 <p>not-found a hotels </p>
                 <a name="" id="" class="btn btn-success btn-sm" href="{{route('hotel.create')}}" role="button">+new</a>
                 @else
                     
                
                <div class="col-9 mx-auto">
                    <form method="POST" action="{{ route('room.store')}} " enctype="multipart/form-data">
                      
                        @csrf
                        {{-- {{ method_field('PUT') }} --}}
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group" >
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                      <option value="published">published</option>
                                      <option value="unpublished">unpublished</option>
                                    </select>
                                  </div>
                            </div> 
                           
                         <div class="col-4">
                                <div class="form-group">
                                    <label for="name">hotels</label>
                                    <select name="hotel_id" id="hotel_id" class="form-control" >
                                        {{-- <option value="0">...</option> --}}
                                        
                                            @foreach ($hotels as $hotel)
                                                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                                            @endforeach 
                                      
                                    </select>
                                </div>
                            </div> 
                         <div class="col-4">
                                <div class="form-group">
                                    <label for="name">type room</label>
                                    <select name="room_type_id" id="room_type_id" class="form-control" >
                                        {{-- <option value="0">...</option> --}}
                                        
                                            @foreach ($type_room as $type_room)
                                                <option value="{{$type_room->id}}">{{$type_room->name}}</option>
                                            @endforeach 
                                      
                                    </select>
                                </div>
                            </div> 
                             <div class="col-9"></div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="name"> room name</label>
                                    <input type="text" class="form-control" id="name" name="name" autofocus >
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">price</label>
                                    <input type="number" class="form-control" id="price" name="price" >
                                </div>
                            </div>
                        </div>

                        
                     <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label for="slug">image</label>
                                   
                                    <img src="" style="width: 100px ;height: 100px;" id="blah" alt="Img"><br><br>
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
              
                
              
                    @endif

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

   