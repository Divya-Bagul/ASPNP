@extends('layouts.app')
@section('content')


<style>
    .form-group input[type=file] {
     opacity: 1 !important;
    }
    </style>

<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
            @include('sweetalert::alert')
                 <!-- @if(Session::get('msg'))
                <div class="alert alert-success " role="alert">
                    
                        <h4>{{Session::get('msg')}}</h3>
                        </div> 
               @endif -->
                <div class="card-header bg-success">
                    <div style="display: flex; justify-content: space-between; align-items: center;" >
                            Add Category
                            <div class="float-right ">
                            <a href="{{url('showproduct')}}" class="btn btn-dark mb-1" > show Products</a>

                </div>
                    </div>
                </div> 
                <div class="card-body">
                    <form method="POST" action="addcategory" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="catname" placeholder="Enter Product Name"  value="{{old('p_name')}}"/>
                           
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div> 

                        <div class="form-group row">
                            <label for="cat_detail" class="col-sm-3 col-form-label" >Category Description</label>
                            <div class="col-sm-7">
                            <textarea class="form-control textarea" name="catdetail"  placeholder="Enter Product Descritpion" ></textarea>
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>


                        <div class="form-group row justify-item-center">
                              <div class="col-6 offset-sm-5">
                                    <button class="btn btn-success">Add Category</button>
                              </div>
                        </div>
                                 
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>









<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header bg-success">
                Show Category
                <div class="float-right ">
                  

                </div>
              
            
            </div>
            <div class="card-body">

               
                   
                
                <div class="float-right"> 
                    <input type="text" name="serach" id="serach" placeholder="Search"  />
                    {{-- <form >
                    @csrf
                   
                    <input type="text" name="search" placeholder="Search" id="search"/>
                    <button type="button" name="submit" id="close" class="  btn btn-sm bg-danger"><i class="fa fa-close" aria-hidden="true"></i></button>
                     </form> --}}
                </div>
                <table class="table text-center table-striped">


                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category name</th>
                           
                            
                            <th>Delete</th>


                
                        </tr>
                    </thead>
                       <tbody  id="tbody">  
                          
                        <?php $i=1; ?>
                    @foreach($category as $cat)
                 
                        
                
                        <tr>
                          
                            <td>{{$i++}}</td>
                            <td>   {{$cat['cat_name']}}  </td>
                            <td><a href="{{url('deletecat/'.$cat['id'])}}"  class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true">  </i></a></td>
                        </tr>
                        @endforeach  
                                             
                    </tbody>

                    <tr>

                        
                </table>
               
            </div>
        </div>
    </div>

</div>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</body>