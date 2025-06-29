<head>
<style>
   .header_section {
       padding-bottom: 2px; /* Adjust as needed */
   }
</style>
</head>
<!-- header section strats -->
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><img width="250" src="/images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}"> Plants </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('plantCare')}}">Plant Care</a>
                        </li>
                        

                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Explore Us <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                              <li><a href="{{ route('testimonial')}}">Testimonials</a></li>
                           </ul>
                        </li>

                        <li class="nav-item">
                  <a class="nav-link" href="{{url('show_cart')}}">
                     <img src="/images/cart-iconn.gif" alt="Cart" style="width: 30px; height: 30px;">
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('show_order')}}">
                     <img src="/images/order-iconnn.png" alt="Order" style="width: 30px; height: 30px; margin-right:10px; ">
                  </a>
               </li>

                        
                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                        <x-app-layout>
    
                        </x-app-layout>
                        </li>
                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth

                        @endif

                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->