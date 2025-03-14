<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css" >
        .title_deg{
            text-align:center;
            font-size:35px;
            font-weight:bold;
            padding-bottom: 40px;
        }

        .table_deg{
         margin:auto;
        width:100%;
        border:2px solid white;
        text-align:center;
        
        }
        .th_deg{
     
      background-color:skyblue;

    }
    .image_size{
        width:300px;
        height:100px;
    }
    
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

      <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg"> All Orders</h1>

                <div style=" padding-left: 400px; padding-bottom:30px;"> 
                  <form action="{{url('search')}}" method="get"> 
                    @csrf
                    <input style="color:black;" type="search" name="search" placeholder="Search For the Plant">
                    <input type="submit" value="Search"  class="btn btn-outline-primary">
                  </form>


                </div>

                <table class="table_deg" > 
        <tr class="th_deg"> 
                    <th style="padding:10px;" > Name</th>
                    <th style="padding:10px;" > Email</th>
                    <th style="padding:10px;" > Address</th>
                    <th style="padding:10px;" > Phone</th>
                    <th style="padding:10px;" > Plant Title</th>
                    <th style="padding:10px;" > Quantity</th>
                    <th style="padding:10px;" > Price</th>
                    <th style="padding:10px;" > Delete</th>
                    <th style="padding:10px;" > Payment Status</th>
                    <th style="padding:10px;" > Delivery Status</th>
                    <th style="padding:10px;" > Image </th>
                    <th style="padding:10px;" > Delivered </th>
                

                </tr>
                @forelse($order as $order)

                <tr > 
                    <td > {{$order->name}}</td>
                    <td > {{$order->email}}</td>
                    <td >  {{$order->address}}</td>
                    <td >  {{$order->phone}}</td>
                    <td >  {{$order->product_title}}</td>
                    <td >  {{$order->quantity}}</td>
                    <td >  {{$order->price}}</td>
                    <td >  {{$order->delete}}</td>
                    <td >  {{$order->payment_status}}</td>
                    <td >  {{$order->delivery_status}}</td>
                    <td> 
                      <img  class="image_size " src="/product/{{$order->image}}">

                    </td>

                    <td> 

                    @if($order->delivery_status=='processing')
                      <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered?)" class="btn btn-primary" > Delivered</a>

                    </td>

                    @else

                    <p style="color:green;"> Delivered</p>


                    @endif
                

                </tr>

                @empty
                <tr>
                  <td colspan="16">
                  No Data Found
                     </td>
                   </tr>
               

                @endforelse

    </table>



</div>
</div>
    


    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
  </body>
</html>