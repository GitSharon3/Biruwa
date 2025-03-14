<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="/images/logoo.jpg" type="">
   <title>Biruwa</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
   <!-- font awesome style -->
   <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
   <!-- responsive style -->
   <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

   <style>
      /* Testimonial Section Styling */
      .client_section {
         background: #f9f9f9;
         padding: 60px 0;
         border-radius: 12px;
         box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      }

      .client_section .heading_container h2 {
         font-size: 2.5rem;
         font-weight: bold;
         color: #2e7d32;
         margin-bottom: 30px;
         text-transform: uppercase;
         letter-spacing: 1px;
      }

      .client_section .carousel {
         position: relative;
      }

      .client_section .carousel-inner {
         padding: 20px;
      }

      .client_section .box {
         background: #ffffff;
         border-radius: 12px;
         padding: 30px;
         text-align: center;
         box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .client_section .box:hover {
         transform: translateY(-10px);
         box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      }

      .client_section .img_container {
         margin-bottom: 20px;
      }

      .client_section .img_box-inner {
         width: 120px;
         height: 120px;
         border-radius: 50%;
         overflow: hidden;
         margin: 0 auto;
         border: 4px solid #66bb6a;
         transition: border-color 0.3s ease;
      }

      .client_section .img_box-inner img {
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .client_section .detail-box h5 {
         font-size: 1.5rem;
         font-weight: bold;
         color: #2e7d32;
         margin-top: 15px;
      }

      .client_section .detail-box h6 {
         font-size: 1rem;
         color: #66bb6a;
         margin-bottom: 15px;
      }

      .client_section .detail-box p {
         font-size: 1rem;
         color: #555;
         line-height: 1.6;
         font-style: italic;
      }

      .client_section .carousel_btn_box {
         position: absolute;
         top: 50%;
         left: 0;
         right: 0;
         transform: translateY(-50%);
         display: flex;
         justify-content: space-between;
         padding: 0 20px;
      }

      .client_section .carousel-control-prev,
      .client_section .carousel-control-next {
         background: rgba(46, 125, 50, 0.8);
         width: 40px;
         height: 40px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         color: #fff;
         font-size: 1.2rem;
         transition: background 0.3s ease;
      }

      .client_section .carousel-control-prev:hover,
      .client_section .carousel-control-next:hover {
         background: rgba(46, 125, 50, 1);
      }

      .cpy_ {
         background:rgb(238, 245, 228);
         /* Green shades */
         color: #ffffff;
         /* White text for contrast */
         padding: 15px;
         text-align: center;
         font-family: Arial, sans-serif;
         border-radius: 8px;
      }
      .mx-auto{
         color:black !important;
      }

      .cpy_ p {
         margin: 0;
         font-size: 14px;
      }

      .cpy_ nav {
         margin-top: 5px;
      }

      .cpy_ a {
         color: black;
         /* Light green shade */
         text-decoration: none;
         margin: 0 10px;
         font-weight: bold;
         transition: color 0.3s ease;
      }

      .cpy_ a:hover {
         color:black;
         /* Lighter green on hover */
      }
   </style>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
   <div class="hero_area">
      <!--header-->
      @include('home.header')

      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Customer's Testimonial
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="/images/sharonn.png" alt="Sharon Kadariya">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Sharon Kadariya
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              "Biruwa has the best selection of indoor plants! The quality is amazing, and their customer service is outstanding. Highly recommend!"
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="/images/nirjala.png" alt="Nirjala Shrestha">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Nirjala Shrestha
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              "I bought several plants from Biruwa, and they have transformed my space beautifully. The plants are healthy and well cared for. Thank you, Biruwa!"
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="/images/ishaa.png" alt="Isha Shrestha">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Isha Shrestha
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                              "I love shopping at Biruwa! They provide expert advice on plant care, and their collection is fantastic. My home feels greener and fresher!"
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                     <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                     <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>

      <div class="cpy_">
         <p class="mx-auto">© 2025 Biruwa. All rights reserved.</p>
         <nav>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact</a>
         </nav>
      </div>
   </div>

   <!-- jQery -->
   <script src="home/js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="home/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="home/js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="home/js/custom.js"></script>
</body>

</html>