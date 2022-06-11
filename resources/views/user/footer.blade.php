
application/x-httpd-php footer.blade.php ( HTML document, ASCII text, with CRLF line terminators )
  
  <style>
    body{
        overflow-x:hidden !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
		
		
	});

</script>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title">Get more details about this product</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('homeForm') }}" method="post">
                    @csrf
                    <div class="form-group row">
                      <div  class=" col-lg-6">
                       Name: <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                      </div>
                      <div class="col-lg-6">
                       Country: <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
                     </div>
                    </div>
                    <div class="form-group row">
                      <div  class=" col-lg-6">
                      Phone: <input type="number" class="form-control" name="phone" placeholder="Phone number" required>
                      </div>

                      <div class="col-lg-6">
                        Email: <input type="email" id="email" class="form-control"  name="email" placeholder="Email Address" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div  class=" col-lg-6">
                      Company Name: <input type="text" id="company" class="form-control" name="company" placeholder="Company Name:" required>
                      </div>

                      <div class="col-lg-6">
                        City: <input type="text" id="city" class="form-control" name="city" placeholder=" required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div  class=" col-lg-6"> 
                      Pincode: <input type="text" id="pincode" class="form-control"  name="pincode" placeholder="" required>
                      </div>

                      <div class="col-lg-6">
                        Select Category: 
                        <select class="form-select" id="category" aria-label="Default select example" name="category" required>
                              <option selected>Select Category:</option>
                              <option value="Retailer">Retailer</option>
                                <option value="Channel Partner">Channel Partner</option>
                                <option value="Home Owner">Home Owner</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Contractor">Contractor</option>
                                <option value="Builder/Developer">Builder/Developer</option>
                                <option value="System Integrator">System Integrator</option>
                                <option value="Architect">Architect</option>
                                <option value="Interior Designer">Interior Designer</option>
                                <option value="Original Equipment Manufacturer (OEM)">Original Equipment Manufacturer (OEM)</option>
                                <option value="End User">End User</option>
                                <option value="Others">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      

                      <div class="col-lg-6">
                        Select project: 

                        <select class="form-select" id="project" name="project_name" >
                              <option value="">Please select</option>
                              <option value="Individual">Individual</option>
                              <option value="Corporate">Corporate </option>
                              </select>
                      </div>
                    </div>
                    <button type="submit" id="btn" class="btn btn-primary  mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
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

  <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('usertheme/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('user/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('user/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('user/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('user/js/main.js')}}"></script>

    <!-- Template Javascript -->
    <!-- <script src="{{asset('usertheme/js/main.js')}}"></script> -->
   <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  
<script type="text/javascript">

	
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
        $(document).ready(function () {
        $('#btn').on('change',function(e) {
         var name = $('#name').val();
         var country = $('#country').val();
         var company = $('#company').val();
         var phone = $('#phone').val();
         var email = $('#email').val();
         var city = $('#city').val();
         var Pincode = $('#pincode').val();
         var category = $('#category').val();
          var project_name = $('#project').val();
         
         $.ajax({
         url:"{{ url('homeform') }}",
         type:"POST",
            data: {
            name: name,
            country:country,
            company: company,
            phone:phone,
            email: email,
            city:city
            pincode: pincode,
            category:country,
            project_name:project_name
            
         },
            success:function (data) {
            
            }
             
        });
    });


</script>
 