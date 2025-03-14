<head>
    <style>
        .slider_section {
    margin-top: -20px; /* Adjust this value as needed */
    padding-top: 0; /* Removes extra padding */
    
    margin-bottom: 0;
    padding-bottom: 0;

}

.slider_bg_box img {
   
    width: 1500px; /* Maintain width automatically */
    height: 650px; /* Adjust height as needed */
    object-fit: cover; /* Ensures image fits well */
    display: block;
    margin: 0 auto;
    </style>
}

</head>

<section class="slider_section">
    <div class="slider_bg_box">
        <img src="/images/wallpaperr.avif" alt="Biruwa Plants Sale">
        <div class="overlay"></div>
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-6">
                            <div class="detail-box">
                                <h1>
                                    <span class="highlight">Sale 20% Off</span><br> On All Plants
                                </h1>
                                <p>
                                    Bring nature into your home with our special 20% discount on all plants. 
                                    Enhance your space with fresh greens today!
                                </p>
                                <div class="btn-box">
                                    <a href="{{url('products')}}" class="btn1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-6">
                            <div class="detail-box">
                                <h1>
                                    <span class="highlight">Fresh Air, Fresh Life</span><br> Indoor & Outdoor Plants
                                </h1>
                                <p>
                                    From vibrant indoor plants to lush outdoor greenery, we have everything 
                                    you need to create a fresh and peaceful environment.
                                </p>
                                <div class="btn-box">
                                    <a href="{{url('products')}}" class="btn1">Explore Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-6">
                            <div class="detail-box">
                                <h1>
                                    <span class="highlight">Limited Time Offer</span><br> Get Yours Now!
                                </h1>
                                <p>
                                    Don't miss out on our exclusive plant sale! Grab your favorites before the 
                                    offer ends and fill your home with nature's beauty.
                                </p>
                                <div class="btn-box">
                                    <a href="{{url('products')}}" class="btn1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Indicators -->
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>


