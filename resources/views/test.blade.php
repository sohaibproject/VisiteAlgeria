<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
   input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
    </style>
<body>
 
<div class="field" align="left">
  <h3>Upload your images</h3>
  <img src="http://placehold.it/180" style="width: 100px" id="blah" alt="Img"><br><br>
    <input type="file" id="inputFile" onchange="readUrl(this)">
    <button type="button" onclick="removeImg()">Close</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
   a.src="http://placehold.it/180"; 
   inputFile.value=""; 
}



</script>
</body>
</html>



{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/stl-sohaib.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 m-5 p-5">
                <h1 class="text-center text-white bg-success p-3">Upload Multi Image Using Laravel  & AJAX</h1>
                <hr>

                @if (session()->has('success'))
 
                    <div class="alert alert-success alert-block">
    
                        <button type="button" class="close" data-dismiss="alert">×</button>
    
                        <strong>{{ session()->get('success')}}</strong>
    
                    </div>
                @endif
    
                @if ($errors->any())
                    <div class="alert alert-danger" >
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                

                <form   enctype="multipart/form-data" id="uploadImages" >
                    <div id="errors"></div>
                    <div class="form-group">
                        <label> Select Images</label>
                        <input type="file" class="form-control" name="images[]" multiple  >
                        <input type="hidden" name="index" value=2 id="index">
                    </div>
                    <div class="form-group">
                        <input type="submit" class=" btn btn-success"  value="Save"  >
                    </div>

                    @csrf
                </form>

                <hr>

                

            </div>
        </div>

        <div class="row show-images">
          
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>


    <script>
    function deleteImage(index,tito) { 
        
        
        const x = tito;
        x.toString();
     x.outerHTML;
    //  var y = document.getElementById(x);
    y=x.id;
        console.log(y);
       var w = document.getElementById(y);
    console.log(w);
     w.remove();
     console.log("is deleted ");
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     $.ajax({
		url: "{{url('/remove_image')}}",
		type: "POST",
		data:  {'index':index},
		success: function(data){
			
            console.log(data.success);
		},
		error: function(data){
            console.log(data.error);
        } 	        
	});

      
    }
    
        $("#uploadImages").submit(function(e){
   
            var index =document.getElementById('index').value; 
            var formData  = new FormData(jQuery('#uploadImages')[0]);
            e.preventDefault();
            formData.append('index',index);
            $.ajax({
                url:"{{url('/store-images')}}",
                type:'POST',
                data:formData,
                contentType:false,
                processData:false,
                success:function(data)
                {
                    $("#errors").html("<p class='alert alert-success'> Uploaded Success</p>");
                    // $(".show-images").html(data)
                    $(".show-images").append(data.showImage);
                    console.log(data.showImage);
                    
                },
                error:function(xhr, status, error)
                {
                    $("#errors").html('');
                    $.each(xhr.responseJSON.errors,function(key,item)
                    {
                        $("#errors").append("<p class='alert alert-danger'> "+ item +" </p>")
                    })
                }
            })


        });
    
    
    </script>

 
  </body>
</html>



{{-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel Dropzone Multiple Images Uploading - W3Adda</title>
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
</head>
<body>
<div class="container">
       
    <h3>Laravel Dropzone Multiple Images Uploading - W3Adda</h3>
    <form method="post" action="{{url('dropzone-image-upload')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
                  <input type="hidden" name="index" value={{78}}>
    @csrf
</form>   
<script type="text/javascript">
        Dropzone.options.dropzone =
         {

            maxFilesize: 12,
            
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            timeout: 5000,
            addRemoveLinks: true,
            removedfile: function(file) 
            {
                // var index=54;
                var name = file.upload.filename;
               var formData = new FormData(); 
    var index =document.getElementById('index').value; 
       //append data to formdata 
        formData.append('index',index);
        // formData.append('filename',name);
        // console.log("sohaib");

                //  Begin test
             var data ={filename : name };
             data.append('index',index);

                // end test
                
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("dropzone-image-delete") }}',
                    data: data,
                    success: function (data){
                        console.log("File deleted successfully!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                    });
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script>
</body>
</html> --}} 