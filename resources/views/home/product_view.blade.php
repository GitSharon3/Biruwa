<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
    h5{
        /* size: large !important; */
        color:black !important;
        text-align:center !important;
        padding-left:100px !important;
    }
   
/* Product section background */
.product_section {
    background: #f6f9f2;
    padding: 50px 0;
}

//* Ensure that .img-box takes enough space */
.img-box {
    width: 800px;
    height: 1600px; /* Set height that fits your content */
    display: flex;
    object-fit: cover;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border-radius: 15px;
    background: #f6f6f6;
}

/* Make sure the image takes up the container fully */
.img-box img {
    width: 1600;
    height: 2000%;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.3s ease-in-out;
}

/* Make image hover effect clear */
.img-box img:hover {
    transform: scale(1.1);
}

/* Responsive adjustment for small screens */
@media (max-width: 768px) {
    .img-box {
        height: 250px;
    }
    .img-box img {
        object-fit: contain; /* Prevents cropping for smaller screens */
    }
}


/* Product Name - Centered */
.detail-box {
    padding-top: 15px;
}

.detail-box h5 {
    font-size: 22px;
    font-weight: bold;
    color: #2c3e50;
    text-align: center;
    margin-bottom: 10px;
    display: block;
}

/* Price Styling */
.price-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 15px;
}

.price-container h6 {
    font-size: 18px;
    margin: 0;
}

.discount-price {
    color: red;
    font-weight: bold;
}

.original-price {
    text-decoration: line-through;
    color: gray;
}

/* Details and Add to Cart Styling */
.option_container {
    margin-top: 15px;
}

.options {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.options a,
.options input[type="submit"] {
    background: #4caf50;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-decoration: none;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.15);
}

.options a:hover,
.options input[type="submit"]:hover {
    background: #2e7d32;
    transform: translateY(-2px);
}

/* Quantity Input Styling */
.quantity-container {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.quantity-container input {
    width: 60px;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    text-align: center;
    font-size: 16px;
}

/* Make sure all elements are responsive */
@media (max-width: 768px) {
    .box {
        max-width: 90% !important;
    }
    
    .img-box {
        height: 300px !important;
    }

    .img-box img {
        width: 100% !important;
        height: 100% !important;
        object-fit: contain !important;
    }
}
</style>
</head>

<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <!-- <h2>Our <span>Plants</span></h2>
            <br> <br> -->
        </div>

        <!-- Search Bar -->
        <div style="position: relative;">
            <form id="search-form" action="{{url('search_product')}}" method="GET">
                @csrf
                <input type="text" name="search" placeholder="Search for any Plants" id="search-input">
                <img src="/images/search.png" alt="Search Icon" style="position: absolute; right: -50px; top: 30%; transform: translateY(-50%); cursor: pointer; width: 40px; height: 40px;" id="search-icon">
            </form>
        </div>

        <script>
            document.getElementById('search-icon').addEventListener('click', function() {
                document.getElementById('search-form').submit();
            });
        </script>

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Product Listing -->
        <div class="row">
            @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <!-- Image -->
                        <div class="img-box">
                            <img src="product/{{$products->image}}" alt="">
                        </div>

                        <!-- Centered Product Name -->
                        <div class="detail-box">
                            <h5>{{$products->title}}</h5>
                        </div>

                        <!-- Price at Opposite Ends -->
                        <div class="price-container">
                            @if($products->discount_price != null)
                                <h6 class="discount-price">Rs {{$products->discount_price}}</h6>
                                <h6 class="original-price">Rs {{$products->price}}</h6>
                            @else
                                <h6 class="original-price">Rs {{$products->price}}</h6>
                            @endif
                        </div>

                        <!-- Product Details and Add to Cart -->
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details', $products->id)}}" class="option1">Details</a>
                                <form action="{{url('add_cart', $products->id)}}" method="POST">
                                    @csrf 
                                    <div class="quantity-container">
                                        <label for="quantity">Qty:</label>
                                        <input type="number" name="quantity" value="1" min="1">
                                    </div>
                                    <input type="submit" value="Add to Cart">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <span style="padding-top: 20px">
                {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
            </span>
        </div>
    </div>
</section>
