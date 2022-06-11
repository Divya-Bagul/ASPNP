<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
  
    <link href="{{asset('user/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('user/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

 

  <?php
    
    use App\Http\Controllers\products;
    $cat = products::show_categories();

    
    $subcat = products::show_subcategories();
    $subcatExists =[];

    foreach($subcat as $itemsubcat) {
        $subcatExists[] = $itemsubcat->maincat_id;
    }
  //  print_r($subcatExists);

    

    $subcatlevel1 = products::show_subcategorieslevel1();
    $subcatlevel1Exists =[];

    foreach($subcatlevel1 as $item1) {
        $subcatlevel1Exists[] = $item1->subcat_id;
    }
  //  print_r($subcatlevel1Exists);
    ?>
    
</head>


        <!-- Spinner End -->
        <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

        <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">Day</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/apsnp logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Vision</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
         

          <li class="dropdown"><a href="#">Product <i class="bi bi-chevron-down"></i></a></a>
            <ul>
            @foreach($cat as $item)
            
            @if(in_array($item->id, $subcatExists))
            
              <li class="dropdown"><a href="{{url('cat/'.$item->id)}}">{{$item->cat_name}}<i class="bi bi-chevron-right"></i></a>
                  <ul>
                 
                  @foreach($subcat as $itemsubcat) 
                      @if($itemsubcat->maincat_id  ==  $item->id)
                        
                      @if(in_array($itemsubcat->id, $subcatlevel1Exists))



                        <li class="dropdown"><a href="{{url('product_subcat/'.$itemsubcat->id)}}">{{$itemsubcat->sub_catname}}</a>
                      
                    
                          <ul>

                            @foreach($subcatlevel1 as $itemsubcatlevel1) 

                            
                              @if($itemsubcat->id  ==  $itemsubcatlevel1->subcat_id)
                            
                              <li><a href="{{url('product_subcatlevel1/'.$itemsubcatlevel1->id)}}">{{$itemsubcatlevel1->subcatlevel1_name}}</a></li>

                              @endif
                            @endforeach
                            
                          </ul>

                            
                        </li>

                      @else 
                        <li><a href="{{url('product_subcat/'.$itemsubcat->id)}}">{{$itemsubcat->sub_catname}}</a></li>
                      @endif
                                    
                        

                  @endif

                  
                  @endforeach
                 
                  </ul>
              </li>
               @else
               <li><a href="{{url('cat/'.$item->id)}}">{{$item->cat_name}}<i class="bi bi-chevron-right"></i></a></li>
               @endif
          @endforeach
            </ul>
      </li>
     
        
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>









