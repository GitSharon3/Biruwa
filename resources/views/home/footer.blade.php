<head>
  <style>
    footer {
      background-color: #f8f9fa; /* Slightly lighter background for contrast */
      padding: 30px 0;
    }

    footer .container {
      max-width: 1200px;
    }

    footer .logo_footer {
      text-align: left;
    }

    footer .information_f p {
      margin: 5px 0;
      font-size: 14px;
    }

    footer .widget_menu h3 {
      font-size: 18px;
      color: #333;
      margin-bottom: 15px;
    }

    footer .widget_menu ul {
      padding-left: 0;
    }

    footer .widget_menu ul li {
      margin-bottom: 10px;
      list-style: none;
    }

    footer .widget_menu ul li a {
      color: #555;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s;
    }

    footer .widget_menu ul li a:hover {
      color: #28a745; /* Green on hover */
    }

    footer .social_icons {
      display: flex;
      gap: 15px;
      justify-content: flex-start;
    }

    footer .social_icons img {
      width: 30px; /* Adjust the size of the icons */
      height: 30px;
      transition: transform 0.3s;
    }

    footer .social_icons img:hover {
      transform: scale(1.1); /* Slight zoom effect on hover */
    }

    footer .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    @media (max-width: 768px) {
      footer .col-md-4,
      footer .col-md-8 {
        text-align: center;
        margin-bottom: 30px;
      }

      footer .col-md-6 {
        margin-bottom: 20px;
      }

      footer .social_icons {
        justify-content: center;
      }
    }

  </style>
</head>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="full">
          <div class="logo_footer mb-4">
            <a href="#"><img width="210" src="images/logo.png" alt="Logo" /></a>
          </div>
          <div class="information_f">
            <p><strong>ADDRESS:</strong> Suryabinyak-1, Bhaktapur, Nepal</p>
            <p><strong>TELEPHONE:</strong> +977 9869785631</p>
            <p><strong>EMAIL:</strong> Biruwa@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="widget_menu">
              <h3 class="mb-4">Menu</h3>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Plant Care</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Blogs</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="widget_menu">
              <h3 class="mb-4">Follow Us</h3>
              <div class="social_icons">
                <a href="#"><img src="images/facebook.webp" alt="Facebook" /></a>
                <a href="#"><img src="images/instagram.jpeg" alt="Instagram" /></a>
                <a href="#"><img src="images/x.webp" alt="Twitter" /></a>
                <a href="#"><img src="images/linkedin.webp" alt="LinkedIn" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
