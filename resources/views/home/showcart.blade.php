<!DOCTYPE html>
<html>
   <head>
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
         /* General Styles */
         body {
            font-family: Arial, sans-serif;
            background-color:white;
            margin: 0;
            padding: 0;
         }

         .center {
            margin: auto;
            width: 80%;
            text-align: center;
            padding: 30px;
         }

         table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         }

         th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #e0e0e0;
         }

         th {
            background-color: #2e7d32; /* Green header */
            color: white;
            font-size: 18px;
            font-weight: bold;
         }

         td {
            font-size: 16px;
            color: #555;
         }

         .img_deg {
            height: 100px;
            width: 100px;
            border-radius: 8px;
            object-fit: cover;
         }

         .btn-danger {
            background-color: #e74c3c; /* Red button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
         }

         .btn-danger:hover {
            background-color: #c0392b; /* Darker red on hover */
         }

         .total_deg {
            font-size: 24px;
            font-weight: bold;
            color: #2e7d32; /* Green text */
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         }

         .proceed-section {
            margin: 20px 0;
         }

         .proceed-section h1 {
            font-size: 22px;
            color: #2e7d32;
            margin-bottom: 15px;
         }

         .proceed-section a {
            margin: 0 10px;
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
         <!--header-->
         @include('home.header')

         @if(session()->has('message'))
         <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{session()->get('message')}}
         </div>
         @endif

         <div class="center">
            <table>
               <tr>
                  <th>Product Title</th>
                  <th>Product Quantity</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Action</th>
               </tr>

               <?php $totalprice = 0; ?>
               @foreach ($cart as $cart)
               <tr>
                  <td>{{$cart->product_title}}</td>
                  <td>{{$cart->quantity}}</td>
                  <td>Rs {{$cart->price}}</td>
                  <td><img class="img_deg" src="/product/{{$cart->image}}" alt="{{$cart->product_title}}"></td>
                  <td>
                     <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('/remove_cart',$cart->id)}}">Remove Product</a>
                  </td>
               </tr>
               <?php $totalprice = $totalprice + $cart->price; ?>
               @endforeach
            </table>

            <div class="total_deg">
               <h1>Total Price: Rs {{$totalprice}}</h1>
            </div>


            <div class="proceed-section">
            <h1 style="font-size: 30px;">Proceed to Order</h1>

   <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 20px;">
      <!-- Cash on Delivery -->
      <a href="{{url('cash_order')}}">
         <img src="/images/cash-on-delivery.jpg" alt="Cash On Delivery" style="height: 110px; cursor: pointer;">
      </a>

      <!-- Pay Using Card -->
      <a href="{{url('stripe', $totalprice)}}">
         <img src="/images/card.png" alt="Pay Using Card" style="height: 80px; cursor: pointer;">
      </a>

      <!-- Pay Using Khalti -->
      <a href="https://web.khalti.com/#/" target="_blank">
         <img src="/images/khalti.png" alt="Pay Using Khalti" style="height: 110px; cursor: pointer;">
      </a>
   </div>
</div>




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
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>