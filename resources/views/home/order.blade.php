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
         /* General Styles */
         body {
            font-family: Arial, sans-serif;
            background-color: white; /* White background */
            margin: 0;
            padding: 0;
         }

         .center {
            margin: auto;
            width: 90%;
            max-width: 1200px;
            padding: 30px;
            text-align: center;
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

         img {
            height: 100px;
            width: 180px;
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

         .not-allowed {
            color: #3498db; /* Blue text for "Not Allowed" */
            font-weight: bold;
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
      <!--header-->
      @include('home.header')

      <div class="center">
         <table>
            <tr>
               <th>Product Title</th>
               <th>Quantity</th>
               <th>Price</th>
               <th>Payment Status</th>
               <th>Delivery Status</th>
               <th>Image</th>
               <th>Cancel Order</th>
            </tr>

            @foreach($order as $order)
            <tr>
               <td>{{$order->product_title}}</td>
               <td>{{$order->quantity}}</td>
               <td>Rs {{$order->price}}</td>
               <td>{{$order->payment_status}}</td>
               <td>{{$order->delivery_status}}</td>
               <td><img src="product/{{$order->image}}" alt="{{$order->product_title}}"></td>
               <td>
                  @if($order->delivery_status == 'processing')
                     <a onclick="return confirm('Are you sure you want to cancel the order?')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                  @else
                     <p class="not-allowed">Not Allowed</p>
                  @endif
               </td>
            </tr>
            @endforeach
         </table>
      </div>

      <!-- Footer -->
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