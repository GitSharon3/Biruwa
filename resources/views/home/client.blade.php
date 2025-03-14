<head>
   <style>
      /* Custom CSS for testimonial section */
      .client_section {
         background-color: #f0faf0; /* Light green background */
         padding: 60px 0;
      }
      .okay{
         padding-left:0px !important;
      }

      .client_section .heading_container h2 {
         font-size: 36px;
         color: #2e7d32; /* Dark green text */
         font-weight: bold;
         margin-bottom: 40px;
      }

      .client_section .carousel-item {
         padding: 20px;
      }

      .client_section .box {
         background-color: white;
         border-radius: 15px;
         padding: 30px;
         box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
         text-align: center;
      }

      .client_section .img_container {
         margin-bottom: 20px;
      }

      .client_section .img-box {
         display: inline-block;
         border-radius: 50%;
         overflow: hidden;
         width: 150px;
         height: 150px;
         border: 4px solid #2e7d32; /* Green border */
      }

      .client_section .img_box-inner img {
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .client_section .detail-box h5 {
         font-size: 24px;
         color: #2e7d32; /* Dark green text */
         font-weight: bold;
         margin-top: 15px;
      }

      .client_section .detail-box h6 {
         font-size: 18px;
         color: #66bb6a; /* Light green text */
         margin-bottom: 15px;
      }

      .client_section .detail-box p {
         font-size: 16px;
         color: #555;
         line-height: 1.6;
      }

      .client_section .carousel_btn_box {
         margin-top: 30px;
      }

      .client_section .carousel-control-prev,
      .client_section .carousel-control-next {
         color: #2e7d32; /* Green arrow color */
         font-size: 24px;
         width: 40px;
         height: 40px;
         background-color: rgba(46, 125, 50, 0.1); /* Light green background */
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: background-color 0.3s ease;
      }

      .client_section .carousel-control-prev:hover,
      .client_section .carousel-control-next:hover {
         background-color: rgba(46, 125, 50, 0.2); /* Darker green on hover */
      }
   </style>
</head>

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
                     <h5 class="okay" >
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
                     <h5 class="okay" >
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
                           <img src="images/ishaa.png" alt="Isha Shrestha">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5 class="okay" >
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