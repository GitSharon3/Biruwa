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
      /* General Styling */
      body {
         font-family: 'Arial', sans-serif;
         margin: 0;
         padding: 0;
         background-color: #f2f7f0;
         color: #2b4726;
         line-height: 1.6;
      }

      /* About Us Section */
      #about-us h1 {
         margin-bottom: 40px;
      }

      .about-section {
         display: flex;
         align-items: center;
         padding: 60px 20px;
         gap: 40px;
         background-color: #ffffff;
         border-radius: 15px;
         margin: 40px auto;
         max-width: 1200px;
         box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
         flex-wrap: wrap;
      }

      .about-section img {
         width: 100%;
         max-width: 450px;
         border-radius: 12px;
         box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
      }

      .about-description {
         flex: 1;
      }

      .about-description h1 {
         margin-top: 0;
         font-size: 2.8em;
         text-align: center;
         color: #4a6c47;
         margin-bottom: 20px;
      }

      .about-description p {
         margin-bottom: 20px;
         color: #4a6c47;
         font-size: 1.1em;
         line-height: 1.8;
      }

      /* Video Section */
      .video-section {
   text-align: center !important;
   display: flex !important;
   flex-direction: column !important;
   align-items: center !important;
   justify-content: center !important;
   width: 100% !important;
}
.video-container {
   width: 100% !important;
   max-width: 800px !important;
}
.video-container video {
   width: 100% !important;
   height: auto !important;
   display: block !important;
   margin: 0 auto !important;
}

      .video-section {
         text-align: center;
         padding: 60px 20px;
         background-color: #e9f3e6;
         margin: 40px auto;
         border-radius: 15px;
         box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
      }

      .video-section h2 {
         font-size: 2.5em;
         margin-bottom: 20px;
         color: #2b4726;
      }

      .video-section p {
         font-size: 1.2em;
         margin-bottom: 30px;
         color: #4a6c47;
      }

      .video-container iframe {
         width: 100%;
         max-width: 800px;
         height: 400px;
         border: none;
         border-radius: 15px;
      }

      /* Contact Us Section */
      .contact-section {
         background-color: #ffffff;
         padding: 60px 20px;
         margin: 40px auto;
         border-radius: 15px;
         box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
         max-width: 800px;
      }

      .contact-section h2 {
         text-align: center;
         font-size: 2.5em;
         color: #4a6c47;
         margin-bottom: 30px;
      }

      .contact-form label {
         display: block;
         margin-bottom: 10px;
         color: #4a6c47;
         font-size: 1.1em;
      }

      .contact-form input,
      .contact-form textarea {
         width: 100%;
         padding: 12px;
         margin-bottom: 20px;
         border: 1px solid #c5d5c0;
         border-radius: 8px;
         font-size: 1em;
      }

      .contact-form button {
         width: 100%;
         padding: 12px;
         background-color: #4a6c47;
         color: white;
         border: none;
         font-size: 1.1em;
         border-radius: 8px;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }

      .contact-form button:hover {
         background-color: #385b37;
      }

      /* Footer Styling */
      .cpy_ {
         background: linear-gradient(135deg, #2e7d32, #66bb6a);
         color: #ffffff;
         padding: 20px;
         text-align: center;
         font-family: Arial, sans-serif;
         border-radius: 8px;
         margin-top: 40px;
      }

      .cpy_ p {
         margin: 0;
         font-size: 14px;
      }

      .cpy_ nav {
         margin-top: 10px;
      }

      .cpy_ a {
         color: rgb(73, 91, 74);
         text-decoration: none;
         margin: 0 10px;
         font-weight: bold;
         transition: color 0.3s ease;
      }

      .cpy_ a:hover {
         color: #a5d6a7;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
         .about-section {
            flex-direction: column;
            text-align: center;
         }

         .about-description h1 {
            font-size: 2.2em;
         }

         .video-section h2 {
            font-size: 2em;
         }

         .contact-section h2 {
            font-size: 2em;
         }
      }
   </style>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
   <div class="hero_area">
      <!--header-->
      @include('home.header')

      <main class="aboutus-content">
         <!-- About Us Section -->
         <section id="about-us" class="about-section">
            <img src="/images/hello.jpg" alt="About Us">
            <div class="about-description">
               <h1>About Us</h1>
               <p>Welcome to <strong>Biruwa</strong>, your one-stop destination for bringing nature closer to your heart and home. We pride ourselves on offering a curated selection of plants, pots, and gardening accessories that suit every lifestyle and aesthetic.</p>
               <p>We offer more than just plants – we offer a connection to nature. Our range of gardening tools, decorative pots, and eco-friendly accessories help you create a serene and sustainable living space. Whether you’re looking to refresh your home or add greenery to your workspace, we’ve got you covered. Our mission is to cultivate a greener world. From lush indoor plants to functional outdoor greenery, we ensure every product is handpicked and delivered with care.</p>
               <p>Join us in our journey to make every space more lively, sustainable, and vibrant, one plant at a time. Explore our collection and experience the beauty of nature delivered to your doorstep.</p>
            </div>
         </section>

         <!-- Video Section -->
         <section id="video-section" class="video-section">
            <h2>Our Vision</h2>
            <p>Discover our vision and the passion that drives us to bring you the finest greenery:</p>
            <div class="video-container">
               <video controls>
                  <source src="/images/plant.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
            </div>
         </section>

        

      <div class="cpy_">
         <p class="mx-auto">© 2025 Biruwa. All rights reserved.</p>
         <nav>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms.html">Terms & Conditions</a>
            <a href="contact.html">Contact</a>
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