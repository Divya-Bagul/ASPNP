@extends('layouts.app')
@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
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
                            Add product
                            <div class="float-right ">
                            <a href="{{url('showproduct')}}" class="btn btn-dark mb-1" > show Products</a>

                </div>
                    </div>
                </div> 
                <div class="card-body">
                    <form method="POST" action="addproduct" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name"  value="{{old('p_name')}}"/>
                           
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div> 

                        <div class="form-group row">
                            <label for="product_Description" class="col-sm-3 col-form-label" >Product Description</label>
                            <div class="col-sm-7">
                                
                            <textarea class="form-control textarea" id="description" name="description"  placeholder="Enter Product Descritpion" required></textarea>
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>
                            


                        <div class="form-group row">
                            <label for="product_Description" class="col-sm-3 col-form-label" >Product Category</label>
                            <div class="col-sm-7">
                            <select class="form-select"  id = "category" name="category" aria-label="Default select example" required>
                                <option selected>Open this select menu</option>
                                @foreach($category as $catdata)
                                <option value="{{$catdata->id}}">{{$catdata->cat_name}}</option>
                               

                                @endforeach
                                </select>                             
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                            <label for="product_Description" class="col-sm-3 col-form-label" >Product Subcategory</label>
                            <div class="col-sm-7">
                            <select class="form-select" name="subcategory" aria-label="Default select example" id="subcategory" required>
                               
                                </select>                             
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group row">
                            <label for="product_Description" class="col-sm-3 col-form-label" >Product SubCategory Level 1</label>
                            <div class="col-sm-7">
                            <select class="form-select" name="subcategorylevel1" aria-label="Default select example" id="subcategorylevel1" required>
                               
                                </select>                             
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                            <label for="product_Description" class="col-sm-3 col-form-label" >Product Image</label>
                            <div class="col-sm-7">
                            <input type="file" class="form-select"  name="p_image" >
                                                           
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group row justify-item-center">
                              <div class="col-6 offset-sm-5">
                                    <button class="btn btn-success">Add Product</button>
                              </div>
                        </div>
                                 
                    </form>
                    
                </div>
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


<script type="text/javascript">
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
        $(document).ready(function () {
        $('#category').on('change',function(e) {
         var cat_id = e.target.value;
         $.ajax({
         url:"{{ url('subcat') }}",
         type:"GET",
            data: {
            cat_id: cat_id
         },
            success:function (data) {
            $('#subcategory').empty();
            $.each(data.subcategories,function(index,subcategory){
            $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.sub_catname+'</option>');
            })
            }
             })
        });
    });



    $(document).ready(function () {
        $('#subcategory').on('change',function(e) {
         var cat_id = e.target.value;
         $.ajax({
         url:"{{ url('subcatlevel1') }}",
         type:"GET",
            data: {
            cat_id: cat_id
         },
            success:function (data) {
            $('#subcategorylevel1').empty();
            $.each(data.subcategorieslevel,function(index,subcategory){
            $('#subcategorylevel1').append('<option value="'+subcategory.id+'">'+subcategory.subcatlevel1_name+'</option>');
            })
            }
             })
        });
    });
</script>
</body>