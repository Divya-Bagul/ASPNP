@extends('user.main')

@section('template_title')

@endsection


@section('main_content')


<div class="section-title">
        @foreach($product as $item)
        
          <span>{{$item->product_name}}</span>

          <h2>{{$item->product_name}}</h2>  
          @endforeach
          
        </div>

        <!-- <div class="row  mb-5">
  -->
                    
        <div class=" row">
               
                @foreach($product as $item)
                <div class="col-lg-4 offset-lg-2"><img src="{{asset('product_images/'.$item->image)}}" style="height: 100px"/></i></div>
        

                    <div class="col-lg-6 mb-3 col-md-4 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box">
                       
                        <h4><a href="{{url('productData/'.$item->product_id)}}">{{$item->product_name}}</a></h4>
                        <!-- <p>{{ $item->description}}</p> -->
                         <div>{!! html_entity_decode( $item->description) !!}</div>
                        </div>
                    </div>
                        @endforeach

</div>


        
      
        <!-- </div> -->

</div>




@endsection