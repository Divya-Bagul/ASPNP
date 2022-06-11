@extends('layouts.app')

@section('content')
<?php
    
    use App\Http\Controllers\products;
    $cat = products::show_categories();

    
    $subcat = products::show_subcategories();
   

  
    

    $subcatlevel1 = products::show_subcategorieslevel1();
    

   
    ?>
<div class="container">
    <div class="row">
        <div class="card col-12">
            <div class="card-header bg-success">
                Show Prducts
                <div class="float-right ">
                    <a href="{{url('subcategory')}}" class="btn btn-dark mb-1" > Add subcategory</a>

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
                            <th>Subcategory name</th>
                           
                            <th>SUbcategory level1</th>
                            
                            <th>Delete</th>


                
                        </tr>
                    </thead>
                       <tbody  id="tbody">  
                          
                        <?php $i=1; ?>
                    @foreach($subcat as $subCat)
                 
                        
                
                        <tr>
                          
                            <td>{{$i++}}</td>
                            <td>   {{$subCat->sub_catname}}  </td>
                                <td>
                            @foreach($subcatlevel1 as $subCaLevel)
                                    @if($subCaLevel->subcat_id == $subCat->id)
                                       <p>{{$subCaLevel->subcatlevel1_name}}</p>  
                                @endif
                           
                            @endforeach
                            </td>
                            <td><a href="{{url('deletesubcat/'.$subCat->id)}}"  class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true">  </i></a></td>
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