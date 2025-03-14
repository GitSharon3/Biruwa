<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
      .div_center {
        text-align: center;
        padding-top: 40px;
      }

      .font_size {
        font-size: 40px;
        padding-bottom: 40px;
      }

      .div_design {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 15px;
      }

      label {
        font-size: 18px;
        margin-bottom: 5px;
      }

      input,
      select {
        width: 300px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9; /* Light gray background */
        color: #000 !important;/* Black text */
      }

      input::placeholder {
        color: black; /* Dark gray placeholder text */
      }

      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 15px;
        font-size: 16px;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
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
                <div class="div_center" >
                    <h1 class="font_size"> Add Plants </h1>

                    <form action="{{url ('/add_product')}}" method="POST" enctype="multipart/form-data">
                    <div class="div_design">

                    @csrf
                    <label> Plant Title :</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
                    </div>

                    <div class="div_design">
                    <label> Plant Description :</label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
                    </div>

                    <div class="div_design">
                    <label> Plant Price :</label>
                    <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>

                    <div class="div_design">
                    <label> Discount Price :</label>
                    <input class="text_color" type="number" name="dis_price" placeholder="Write a discount price">
                    </div>

                    <div class="div_design">
                    <label> Product Quantity :</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
                    </div>

                
                    <div class="div_design">
                    <label> Product Category :</label>
                    <select class="text_color" name="category" required=""> 
                    <option value="" selected=""> Add a category here </option>

                    @foreach($category as $category)
                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        
                    @endforeach 



                    </select>
                    </div>

                    <div class="div_design" >
                    <label> Product Image Here :</label>
                    <input type="file" name="image" required="">
                    </div>

                    <div class="div_design">
                    
                    <input type="submit"  value="Add product" class="btn btn-primary">
                    </div>
    </form>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- Add jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>