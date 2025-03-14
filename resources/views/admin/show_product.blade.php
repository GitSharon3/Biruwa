<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type=text/css>
    
    .center{
        margin:auto;
        width:50%;
        border:2px solid white;
        text-align:center;
        margin-top: 40px;

    }
    .font_size{
        text-align:center;
        font-size: 40px;
        padding-top:20px;


    }

    .image_size{
      width:150px;
      height:150px;
    }

    .th_color{
      background:skyblue; class="th_deg" 
    }

    .th_deg{
      padding:30px;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">

        @if(session()->has('message'))
                <div class ="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif

        <h2 class="font_size"> All Plants</h2>
        <table class="center"> 
        <tr class="th_color"> 
                    <th class="th_deg" > Plant Title</th>
                    <th class="th_deg" > Description</th>
                    <th class="th_deg" > Quantity</th>
                    <th class="th_deg" > Category </th>
                    <th class="th_deg" > Price </th>
                    <th class="th_deg" > Discount Price</th>
                    <th class="th_deg" > Plant Image</th>
                    <th class="th_deg" > Delete</th>
                    <th class="th_deg" > Edit</th>
                </tr>

                @foreach($product as $product)
                <tr> 
                    <td> {{$product->title}}</td>
                    <td> {{$product->description}} </td>
                    <td> {{$product->quanity}}</td>
                    <td> {{$product->category}}</td>
                    <td> {{$product->price}}</td>
                    <td> {{$product->discount_price}}</td>
                    <td> 
                      <img  class="image_size " src="/product/{{$product->image}}">


                    </td>
                    <td>
                      <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')" href ="{{url('delete_product',$product->id)}}"> Delete</a>
                    </td>
                    <td>
                    <a class="btn btn-success"  href ="{{url('update_product',$product->id)}}"> Edit</a>
                    </td>
                </tr>

                @endforeach

</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>