<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="plants, plant care, indoor plants, outdoor plants" />
   <meta name="description" content="Comprehensive guide to plant care for indoor and outdoor plants." />
   <meta name="author" content="Biruwa" />
   <link rel="shortcut icon" href="/images/logoo.jpg" type="">
   <title>Biruwa - Plant Care</title>
   
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
   <!-- font awesome style -->
   <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
   <!-- responsive style -->
   <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

   <style>
      /* Fixed Header */
      .fixed-header {
         
         top: 0;
         width: 100%;
         background-color: #fff;
         z-index: 1000;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }
      
      /* Plant Care Styling */
      .plant-care {
         max-width: 1200px;
         margin: 80px auto 40px;
         padding: 20px;
         background-color: #f2f7f0;
         border-radius: 10px;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
         text-align: center;
      }
      .plant-care h1 {
         color: #4a6c47;
         font-size: 2.5em;
         margin-bottom: 20px;
      }
      .care-guide {
         display: flex;
         align-items: center;
         justify-content: center;
         margin-bottom: 30px;
         gap: 20px;
         flex-wrap: wrap;
      }
      .care-guide:nth-child(even) {
         flex-direction: row-reverse;
      }
      .care-guide img {
         width: 200%;
         max-width: 300px;
         border-radius: 10px;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      }
      .care-text {
         flex: 1;
         color: #4a6c47;
         font-size: 1.2em;
         text-align: left;
      }
      .care-text h2 {
         color: #2e7d32;
         font-size: 1.8em;
         margin-bottom: 10px;
      }
      .care-text ul {
         padding-left: 20px;
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
</head>

<body>
   <div class="hero_area">
      <!-- Header -->
      <div class="fixed-header">
         @include('home.header')
      </div>
      
      <!-- Plant Care Section -->
      <section class="plant-care">
         <h1>Plant Care Guide</h1>
         
         <div class="care-guide">
            <img src="/images/watering.avif" alt="Watering Plants">
            <div class="care-text">
               <h2>Watering Tips</h2>
               <ul>
                  <li>Water in the morning or evening to prevent water loss due to evaporation.</li>
                  <li>Always check soil moisture before watering; overwatering leads to root rot.</li>
                  <li>Ensure pots have drainage holes to avoid water accumulation.</li>
                  <li>Different plants have different water needs—succulents need less water than ferns.</li>
               </ul>
            </div>
         </div>

         <div class="care-guide">
            <img src="/images/sunlight.avif" alt="Plant Sunlight">
            <div class="care-text">
               <h2>Sunlight Needs</h2>
               <ul>
                  <li>Indoor plants thrive near windows with indirect sunlight.</li>
                  <li>Outdoor plants need positioning based on their sunlight requirements.</li>
                  <li>Rotate plants regularly for even growth.</li>
                  <li>Too much direct sunlight can burn leaves, while too little slows growth.</li>
               </ul>
            </div>
         </div>

         <div class="care-guide">
            <img src="/images/soiling.avif" alt="Healthy Soil">
            <div class="care-text">
               <h2>Soil and Fertilization</h2>
               <ul>
                  <li>Use nutrient-rich, well-draining soil for optimal plant health.</li>
                  <li>Fertilize every 2-4 weeks with organic compost or liquid fertilizer.</li>
                  <li>Avoid over-fertilizing to prevent root burn.</li>
                  <li>Repot when soil becomes compacted or depleted of nutrients.</li>
               </ul>
            </div>
         </div>
      </section>
      
      <!--footer-->
      <div class="cpy_">
         <p class="mx-auto">© 2025 Biruwa. All rights reserved.</p>
         <nav>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms.html">Terms & Conditions</a>
            <a href="contact.html">Contact</a>
         </nav>
      </div>

   <!-- Scripts -->
   <script src="home/js/jquery-3.4.1.min.js"></script>
   <script src="home/js/popper.min.js"></script>
   <script src="home/js/bootstrap.js"></script>
   <script src="home/js/custom.js"></script>
</body>
</html>
