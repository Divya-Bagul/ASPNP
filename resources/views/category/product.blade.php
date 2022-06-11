

@extends('user.main')

@section('template_title')

@endsection


@section('main_content')



<div class="container mt-5">

        <div class="section-title">
        @foreach($categoryData as $itemcat)
        @if($loop->first)
          <span>{{$itemcat->cat_name}}</span>

          <h2>{{$itemcat->cat_name}}</h2>  
        @endif
          @endforeach
          
        </div>

        <div class="row services mb-5">
            
        @foreach($categoryData as $item)
        
          <div class="col-lg-4 mb-3 col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class=""><img src="{{asset('product_images/'.$item->image)}}" style="height: 100px"/></i></div>
              <h4><a href="{{url('productData/'.$item->product_id)}}">{{$item->product_name}}</a></h4>
              <div>{!! html_entity_decode( $item->description) !!}</div>
            </div>
          </div>

        


          @endforeach
        </div>

</div>






@endsection