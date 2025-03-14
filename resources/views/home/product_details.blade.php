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
   <body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
      <div class="hero_area">
         <!--header-->
         @include('home.header')
       
         <!-- Product Section -->
         <div style="max-width: 600px; margin: 30px auto; padding: 20px; text-align: center;">
            <!-- Product Image -->
            <div style="overflow: hidden; border-radius: 10px;">
               <img src="/product/{{$product->image}}" alt="{{$product->title}}" style="  margin-left: 110px; max-width: 350px; height: 400px; border-radius: 10px;  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>

            <!-- Product Details -->
            <div style="margin-top: 15px;">
               <h5 style="font-size: 20px; color: #2e7d32; font-weight: bold; margin-bottom: 8px;">{{$product->title}}</h5>
               @if($product->discount_price!=null)
               <h6 style="font-size: 18px; font-weight: bold; color: #e74c3c;">
                  Discount Price: Rs {{$product->discount_price}}
               </h6>
               <h6 style="font-size: 14px; text-decoration: line-through; color: #3498db;">
                  Original Price: Rs {{$product->price}}
               </h6>
               @else
               <h6 style="font-size: 18px; font-weight: bold; color: #1b5e20;">
                  Price: Rs {{$product->price}}
               </h6>
               @endif
               <h6 style="font-size: 14px; color: #555; margin: 6px 0;">Category: {{$product->category}}</h6>
               <h6 style="font-size: 14px; color: #555; margin: 6px 0;">Description: {{$product->description}}</h6>
               <h6 style="font-size: 14px; color: #555; margin: 6px 0;">Available Quantity: {{$product->quantity}}</h6>

               <!-- Add to Cart Form -->
               <form action="{{url('add_cart',$product->id)}}" method="Post" style="margin-top: 15px;">
                  @csrf 
                  <div style="display: flex; justify-content: center; align-items: center; gap: 10px;">
                     <input type="number" name="quantity" value="1" min="1" style="width: 80px; padding: 6px; border: 2px solid #2e7d32; border-radius: 5px; text-align: center; font-size: 14px;">
                     <input type="submit" value="Add to Cart" style="background: #2e7d32; color: white; font-size: 14px; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s ease;" onmouseover="this.style.background='#1b5e20'" onmouseout="this.style.background='#2e7d32'">
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!--footer-->
      <div class="cpy_">
         <p class="mx-auto">© 2025 Biruwa. All rights reserved.</p>
         <nav>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms.html">Terms & Conditions</a>
            <a href="contact.html">Contact</a>
         </nav>
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