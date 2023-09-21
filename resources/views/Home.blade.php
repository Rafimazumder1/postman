<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Laravel')</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="{{ asset('js/app.js') }}"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
      <header>
        <div class="logo">
        <img class="log" src="img/postman.png" alt="Log">
        </div>
        <div class="navbar">
          <a href="{{url('/')}}">Home</a>
          <a href="{{url('/About')}}">About</a>
          <a href="#services">Services</a>
          <a href="#services">Aria</a>
          <a href="#services">Track</a>
          <a href="#services">Transport</a>
          <a href="#contact">Contact</a>
        </div>
    <div class="rl">

          <a class="fcc-btn" href="{{url('/login')}}" style="background-color:rgb(51, 0, 255); ">Log in </a>
      <a class="fcc-btn" href="{{url('/register')}}"style="background-color:red; ">Sign Up</a>

    </div>

        </header>

        <!-- End Header -->
<div class="header" id="header">
  <div class="heading" id="heading">
    <h1>Send <span> parcel</span> at home</h1>
    </div>  
          <div class="track-parcel" id="track-parcel">
            <h2>Track Your Parcel</h2>
            <form>
              <label for="tracking-number">Enter Tracking Number:</label>
              <input type="text" id="tracking-number" name="tracking-number" required>
              <button type="submit">Track</button>
            </form>
            <div id="tracking-result">
              
              <!-- Tracking information will be displayed here -->
            </div>
          </div>
        
          </div>
          <div class="serv">
            <h1>Service</h1>
              </div>
  

          <div class="container1">
           

            <div class="box"> 

              <h2>Express Delivery</h2>
              <p>Fast and reliable delivery service to get your parcels delivered on time.</p>
            </div>
            <div class="box">
              <h2>International Shipping</h2>
              <p>Efficient international shipping service to send parcels globally.</p>
            </div>
            <div class="box">
              <h2>Package Tracking</h2>
              <p>Real-time tracking to keep you updated on the status of your shipments.</p>
            </div>
          </div>
          </div>

        </section>
        <!-- Earn with Postman section end  -->
    
        <section class="section-padding earn-with-Postman">
          <div class="container1">
              <div class="row1">
                  <div class="col-md-12">
                      <h2 class="section-title">Earn with Postman</h2>
                      <p class="section-sub-title"> Choose Postman for the best service</p>
                  </div>
              </div>
          </div>

          <div class="wrapper">
            <div class="slide a">
              <div class="inner">
                Our image is in the background.<br>Change View to see the resize in action</div>
            </div>
            <div class="slide b">Our default slide size is min-width: 100vh; That means 100% of the view height (i.e. a square). Using javascript, we calculate the width of the div based on the dimensions of the background image. This image is square.</div>
            <div class="slide c">
              <div class="inner">Content gets centered using
                align-items: center;</div>
            </div>
          </div>
          <div class="join-us">
            <h1> Join us</h1>
          </div>
        </body>


          <div class="container1">
              <div class="row">
                <div class="col-lg-6">
                          <img src="https://th.bing.com/th/id/OIP.aWhuhLBi6BNhiPbv4nAYRAHaFM?w=284&h=199&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                          <h3>have a car</h3>
                          <p>
                              Lorem ipsum dolor sit amet, conse ctetur adipi scing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna
                          </p>
                          <a href="#">let's start <i class="fas fa-arrow-right"></i></a>
                      </div>
                      <div class="col-lg-6">
                          <img src="data:image/jpeg;base64,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" alt="">
                          <h3>on Time Delivery</h3>
                          <p>
                              Lorem ipsum dolor sit amet, conse ctetur adipi scing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna
                          </p>
                          <a href="#">let's start <i class="fas fa-arrow-right"></i></a>
                      </div>
                      <div class="col-lg-6">
                          <img src="https://th.bing.com/th/id/OIP.a_dqsOHLKxwodA_GxQQ8GwHaHj?w=174&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                          <h3>have a car</h3>
                          <p>
                              Lorem ipsum dolor sit amet, conse ctetur adipi scing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna
                          </p>
                          <a href="#">let's start <i class="fas fa-arrow-right"></i></a>
                      </div>
                      <div class="col-lg-6">
                          <img src="https://th.bing.com/th/id/OIP.sG04A8ei5nqrU69p9odKQwHaE8?w=242&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="">
                          <h3>International Delivery</h3>
                          <p>
                              Lorem ipsum dolor sit amet, conse ctetur adipi scing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna
                          </p>
                          <a href="#">let's start <i class="fas fa-arrow-right"></i></a>
                      </div>
                      <div class="col-lg-6">
                          <img src="./images/lady-with-laptop.png" alt="">
                          <h3>have a car</h3>
                          <p>
                              Lorem ipsum dolor sit amet, conse ctetur adipi scing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna
                          </p>
                          <a href="#">let's start <i class="fas fa-arrow-right"></i></a>
                      </div>
                      <div class="col-lg-6">
                          <img src="./images/lady-with-laptop.png" alt="">
                          <h3>have a car</h3>
                          <p>
                              Lorem ipsum dolor sit amet, conse ctetur adipi scing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna
                          </p>
                          <a href="#">let's start <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>


            <div class="container3">
            <div class="coverage">
            <h1>"coverage"
              <span> Map</span> </h1>
          <div class="col-7">
<div class="slide-nav">
  <ul>
    <li>
      <a class="active">
        <i class="fa-solid fa-truck"></i>
        "surface"
        </a>
        </li>

        <li>
          <a class="active">
            <i class="fa-solid fa-truck"></i>
            "Air"
            </a>
            </li>
          </ul>
</div>
          </div>
</div>
<div id="surface" class="Coverage-aria slide-content in-view">
  <ul>
    <li>
      "Dhaka"
    </li>
  </ul>

  <ul>
    <li>
      "Cumilla"
    </li>
  </ul>
  <ul>
    <li>
      "Borisal"
    </li>
  </ul>
</div>
 

        <footer>
          <p>&copy; 2023 Courier Express. All rights reserved.</p>
        </footer>
      </body>
      </html>