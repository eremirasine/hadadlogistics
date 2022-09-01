<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HADAD - Sourcing & Logistics Company </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+234 70 645 6795</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@hadad.com.ng</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>HADAD</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="price.html" class="nav-item nav-link">Price</a>
                    
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>


                       

                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a>
            </div>

             @if(Route::has('login'))

                        @auth

                <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav m-auto py-0">
                    
                    
                    <a href="{{url('myrequest')}}" class="nav-item nav-link">Request History</a>
                </div>
                       
                        <x-app-layout>
                                
                        </x-app-layout>

                        @else
                        <div>
                       <a href="{{route('login')}}"  class="nav-item nav-link">login</a></div>

                       <div>

                       <a href="{{(route('register'))}}" class= "btn btn-primary py-2 px-4 d-none d-lg-block" class="btn btn-nav-link " type="submit" >Register</a>
						</div>
                         
                    
                     @endauth
                    @endif
        </nav>
    </div>
    <!-- Navbar End -->
    <div class="container" style="width: 100%; padding: 100px; align: center;">
			<table class="table table-hover" >
			  <thead>
			    <tr>
			 
			      <th scope="col">Services</th>
			      <th scope="col">Link</th>
                  <th scope="col">Phone</th>
			      <th scope="col">From</th>
			     <th scope="col">To</th>
			      <th scope="col">Message</th> 
			      <th scope="col">Status</th>
			      <th scope="col">Date</th>
                    <th scope="col">Action</th>

			    </tr>
			  </thead>
                @foreach($request as $requests)

			  <tbody>
			    
			

			    <tr>
			      
			      <td>{{$requests->services}}</td>
			      <td>{{$requests->procurement_link}}</td>
			      <td>{{$requests->phone}}</td>
                  <td>{{$requests->shippingfrom}}</td>
                  <td>{{$requests->shippingto}}</td>
                  <td>{{$requests->message}}</td>
                  <td>{{$requests->status}}</td>
                  <td>{{$requests->created_at}}</td>


                  @if($requests->status =='IN PROGRESS')         
      <!-- <td><a href="#" class="viewPopLink btn btn-default1" role="button" data-id="{{ $user->travel_id }}" data-toggle="modal" data-target="#myModal">Approve/Reject<a></td> -->  

      <td><a href="{{url('cancel_request',$requests->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Cancel</a></td>       
@else
      <td>{{ $requests->status }}</td>        
@endif
                  


			    </tr>

			  </tbody>
                @endforeach

			</table>
</div>
    <!-- Footer Start -->
   @include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>