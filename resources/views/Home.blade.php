                      <!doctype html>
                      <html lang="en">

                      <head>
                          <meta charset="utf-8">
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                          <link rel="shortcut icon" href="/img/postman.png">
                          <title>

                              Postman
                          </title>

                          <link rel="stylesheet" href="css/main.css">
                          <link rel="stylesheet" href="css/contact.css">
                          <link rel="stylesheet" href="js/app.js">
                          <script src="{{ asset('js/app.js') }}"></script>

                          <script src="https://cdnjs.cloudflare.com/ajax/libs/yt-player/3.5.1/ytplayer.min.js"></script>
                          <script src="https://cdn.jsdelivr.net/npm/yt-player@3.5.1"></script>


                          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                              integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
                          </script>


                          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
                              rel="stylesheet"
                              integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                              crossorigin="anonymous">

                          <link rel="stylesheet"
                              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

                      </head>

                      <body>
                          {{-- <header>
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

                              </header> --}}
                          @include('welcome')
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
                          <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white text-center m-5 mt-5 h-14 p-2"
                              style="border-top-left-radius: 0px; border-bottom-left-radius: 50px;border-bottom-right-radius:0px; border-top-right-radius:50px;">
                              <div
                                  class="text-white text-center font-extrabold text-4xl drop-shadow-2xl animate-spin-once">
                                  <span class="animate-fade-in-once">Our</span> Service
                              </div>
                          </div>





                          <div class="container1 mt-4 px-5">


                              <div class="box">

                                  <h2>Express Delivery</h2>

                                  <p style="margin-top:174px">Fast and reliable delivery service to get your parcels
                                      delivered on time.</p>


                              </div>
                              <div class="box">
                                  <h2>International Shipping</h2>

                                  <p style="margin-top:174px">Efficient international shipping service to send parcels
                                      globally.</p>
                              </div>
                              <div class="box">
                                  <h2>Package Tracking</h2>
                                  {{-- <img src="img/postman.png" alt="Italian Trulli" style="width: 100px"> --}}
                                  <p style="margin-top:174px">Real-time tracking to keep you updated on the status of
                                      your shipments.</p>

                              </div>
                          </div>



                          <!-- Earn with Postman section end  -->

                          {{-- <section class="section-padding earn-with-Postman">
                            <div class="container mx-auto w-0"> <!-- Set max width for the container -->
                                <div class="flex justify-center">
                                    <div class="text-center">
                                        <h2 class="text-4xl font-bold mb-4">Earn with Postman</h2>
                                        <p class="text-lg">Choose Postman for the best service</p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="wrapper mt-8 mx-4 w-10"> <!-- Set max width for the wrapper -->
                                <div class="slide a bg-gray-300 p-4">
                                    <div class="inner">
                                        Our image is in the background.<br>Change View to see the resize in action
                                    </div>
                                </div>
                                <div class="slide b bg-gray-300 p-4">
                                    Our default slide size is min-width: 100vh; That means 100% of the view height (i.e. a square).
                                    Using JavaScript, we calculate the width of the div based on the dimensions of the background image.
                                    This image is square.
                                </div>
                                <div class="slide c bg-gray-300 p-4">
                                    <div class="inner">Content gets centered using align-items: center;</div>
                                </div>
                            </div>
                    
                        </section> --}}
                          {{-- 
                        <div class="card-group m-8 h-96 border-2 border-rose-500">
                            <!-- Card 1 -->
                            <div class="card relative border-2 border-rose-500">
                                <!-- Background Video -->
                                <div class="absolute inset-0 overflow-hidden">
                                    <<div class="w-full h-full object-cover" autoplay muted loop>
                                        <img src="../img/postman.png" type="">
                                       <h1 style="color: black"> Your browser does not support the video tag.</h1>
                                   </div>
                                </div>
                        
                                <!-- Card Body -->
                                <div class="card-body relative z-10 text-white border-2 border-rose-500">
                                    <h5 class="card-title text-xl font-bold mb-2">Card Title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card relative m-8">
                                <!-- Background Video -->
                                <div class="absolute inset-0 overflow-hidden">
                                    <video class="w-full h-full object-cover" autoplay muted loop>
                                        <source src="your-video-source.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                        
                                <!-- Card Body -->
                                <div class="card-body relative z-10 text-white">
                                    <h5 class="card-title text-xl font-bold mb-2">Card Title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <!-- Add similar structure for other cards -->
                            <div class="card relative">
                                <!-- Background Video -->
                                <div class="absolute inset-0 overflow-hidden">
                                    <video class="w-full h-full object-cover" autoplay muted loop>
                                        <source src="your-video-source.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                        
                                <!-- Card Body -->
                                <div class="card-body relative z-10 text-white">
                                    <h5 class="card-title text-xl font-bold mb-2">Card Title 1</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div> --}}





                          <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white text-center m-5 mt-5 h-14 p-2"
                              style="border-top-left-radius: 0px; border-bottom-left-radius: 50px;border-bottom-right-radius:0px; border-top-right-radius:50px;">
                              <div class="text-white text-center font-extrabold text-4xl drop-shadow-2xl ">Service</div>
                          </div>





                          <div class="wrapper antialiased text-gray-900 h-auto ">
                              <div class="da relative mt-0 flex-col m-5 justify-center overflow-hidden">

                                  <div
                                      class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                                      <div
                                          class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                          <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80"
                                              class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110"
                                              alt="" />
                                      </div>
                                      <div
                                          class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                                          <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Azores</h1>
                                          <h1 class="text-sm font-light text-gray-200 shadow-xl">A Little Paradise in
                                              Portugal</h1>
                                      </div>
                                  </div>
                              </div>
                              <div>

                                  <img src="https://source.unsplash.com/random/350x350" alt=" random imgee"
                                      class="w-full object-cover object-center rounded-5 shadow-md p-3 ">

                                  <div class="relative px-4 -mt-16  ">
                                      <div class="bg-white p-6 rounded-lg shadow-lg">
                                          <div class="flex items-baseline">
                                              <span
                                                  class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                                  New
                                              </span>
                                              <div
                                                  class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                                  2 baths &bull; 3 rooms
                                              </div>
                                          </div>

                                          <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A
                                              random Title</h4>

                                          <div class="mt-1">
                                              $1800
                                              <span class="text-gray-600 text-sm"> /wk</span>
                                          </div>
                                          <div class="mt-4">
                                              <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
                                              <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                                          </div>
                                      </div>

                                  </div>
                              </div>

                              <div>

                                  <img src="https://source.unsplash.com/random/350x350" alt=" random imgee"
                                      class="w-full object-cover object-center rounded-lg shadow-md p-3 rounded-t-3xl">

                                  <div class="relative px-4 -mt-16  ">
                                      <div class="bg-white p-6 rounded-lg shadow-lg">
                                          <div class="flex items-baseline">
                                              <span
                                                  class="bg-teal-200 text-teal-800 text-xs px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                                                  New
                                              </span>
                                              <div
                                                  class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                                                  2 baths &bull; 3 rooms
                                              </div>
                                          </div>

                                          <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">A
                                              random Title</h4>

                                          <div class="mt-1">
                                              $1800
                                              <span class="text-gray-600 text-sm"> /wk</span>
                                          </div>
                                          <div class="mt-4">
                                              <span class="text-teal-600 text-md font-semibold">4/5 ratings </span>
                                              <span class="text-sm text-gray-600">(based on 234 ratings)</span>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>










                          <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white text-center m-5 mt-5 h-14 p-2"
                              style="border-top-left-radius: 0px; border-bottom-left-radius: 50px;border-bottom-right-radius:0px; border-top-right-radius:50px;">
                              <div
                                  class="text-white text-center font-extrabold text-4xl drop-shadow-2xl animate-spin-once">
                                  Join</div>
                          </div>





                          <div class="container mx-auto">
                            <div class="flex flex-wrap justify-between">
                                <div class="lg:w-1/2 mb-8 lg:mb-0">
                                    <img src="" class="mx-auto" alt="">
                                    <h3 class="text-xl font-semibold mt-4">Have a Car</h3>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="#" class="inline-block mt-4 text-blue-500">Let's Start <i class="fas fa-arrow-right"></i></a>
                                </div>
                        
                                <div class="lg:w-1/2 mb-8 lg:mb-0">
                                    <img src="" class="mx-auto" alt="">
                                    <h3 class="text-xl font-semibold mt-4">On Time Delivery</h3>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="#" class="inline-block mt-4 text-blue-500">Let's Start <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="lg:w-1/2 mb-8 lg:mb-0">
                                    <img src="" class="mx-auto" alt="">
                                    <h3 class="text-xl font-semibold mt-4">On Time Delivery</h3>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="#" class="inline-block mt-4 text-blue-500">Let's Start <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="lg:w-1/2 mb-8 lg:mb-0">
                                    <img src="" class="mx-auto" alt="">
                                    <h3 class="text-xl font-semibold mt-4">On Time Delivery</h3>
                                    <p class="mt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <a href="#" class="inline-block mt-4 text-blue-500">Let's Start <i class="fas fa-arrow-right"></i></a>
                                </div>
                        
                                <!-- Repeat the above structure for the remaining elements -->
                            </div>
                        </div>
                        
                          <div class='container'>

                            <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white text-center  mt-5 h-14 p-2"
                            style="border-top-left-radius: 0px; border-bottom-left-radius: 50px;border-bottom-right-radius:0px; border-top-right-radius:50px;">
                            <div
                                class="text-white text-center font-extrabold text-4xl drop-shadow-2xl animate-spin-once">
                                Percel Calculetor</div>
                        </div>
                              <div class='jumbotron'>
                                  <form>
                                      Distance (km): <input id='distance' type="number" class="form-control"
                                          value="100">
                                      <!-- todo: Use Google maps to input trip start and end, calculate distance -->
                                      Petrol Price (cents per litre):
                                      <!-- todo: Get local petrol price from API -->
                                      <input id='cost_per_litre' type="number" value="145" class="form-control">
                                      Litres per 100 km:
                                      <!-- todo: Allow user to enter car model and automatically get L/100km from scraped data -->
                                      <input id='litres_per_100km' type="number" value="7"
                                          class="form-control">
                                      Trip Cost
                                      <input id='output' class="form-control" type="text" readonly>
                                      <div class="flex justify-center">
                                          <input type="submit" onclick='calculate_cost()'
                                              class="btn btn-primary btn-submit form-control"
                                              style ="margin-top: 10px;width:170px; aling-item:">
                                      </div>
                                  </form>
                              </div>
                          </div>

                          <script>
                              $("form").submit(function(e) {
                                  e.preventDefault();
                              });

                              function calculate_cost() {
                                  let liters_per_100km = $("#litres_per_100km").val();
                                  let cost_per_litre = $("#cost_per_litre").val();
                                  let distance = $("#distance").val();
                                  let trip_cost = (liters_per_100km * cost_per_litre / 100) * distance;
                                  $('#output').val('৳' + trip_cost.toFixed(2)); // fix to display two decimal places
                              }
                          </script>

                          <div class="container_map"style="padding-top:10px; margin-top:20px">
                              <div class="coverage be-animated in-view">



                                  <h1 class="common-heading animate-bounce padding:40px">Coverage <span>Map</span></h1>
                                  {{-- <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
                                <source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">
                                </video>  --}}
                                  <h1
                                      class="flex items-center justify-center animate-scaleAnimation duration-5 ease-in-out">
                                      We are currently available in 64 districts.
                                  </h1>

                                  <div class="row_map">
                                      <div class="col-7">
                                          <div class="slide-nav-map-map">
                                              <select id="transportation-selector"
                                                  class="border rounded p-2 bg-white-10 text-white">
                                                  <option value="surface" class="py-1 px-2 bg-white text-black">
                                                      Surface
                                                  </option>
                                                  <option value="air" class="py-1 px-2 bg-white text-black">Air
                                                  </option>
                                              </select>


                                              <div id="surface" class="coverage-area slide-content in-view">
                                                  <!-- Your list of Surface areas here -->
                                                  <ul>
                                                      <li>Dhaka</li>
                                                      <li>Chattogram</li>
                                                      <li>Maymonsing</li>
                                                      <li>Khulna</li>
                                                      <li>Rajshahi</li>
                                                      <li>Bandorban</li>
                                                      <li>Cumilla</li>
                                                      <li>shylet</li>
                                                      <li>Borisal</li>
                                                      <li>Bagerhat</li>


                                                      <!-- Add more list items here -->
                                                  </ul>
                                              </div>

                                              <div id="air" class= "coverage-area slide-content in-view"
                                                  style="display: none;">
                                                  <!-- Your list of Air areas here -->
                                                  <ul>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <li>Kurigram</li>
                                                      <!-- Add more list items here -->
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-5">
                                          <a href="https://ecourier.com.bd/wp-content/uploads/map-01-1.svg">
                                              <img decoding="async" fetchpriority="high"
                                                  class="alignnone wp-image-2898" role="img"
                                                  src="https://ecourier.com.bd/wp-content/uploads/map-01-1.svg"
                                                  alt="" width="600" height="900">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>




                          <script>
                              // Add an event listener to the dropdown for changing the displayed content
                              const selector = document.getElementById("transportation-selector");
                              selector.addEventListener("change", function() {
                                  const selectedValue = selector.value;
                                  const surfaceDiv = document.getElementById("surface");
                                  const airDiv = document.getElementById("air");

                                  if (selectedValue === "surface") {
                                      surfaceDiv.style.display = "block";
                                      airDiv.style.display = "none";
                                  } else if (selectedValue === "air") {
                                      surfaceDiv.style.display = "none";
                                      airDiv.style.display = "block";
                                  }
                              });
                          </script>
                          {{-- <script>
    const player = new YTPlayer('#video-container', {
        videoId: 'S4TMyRfYaoo&ab', // Replace with your YouTube video ID
        playerVars: {
            autoplay: 1,
            loop: 1,
            mute: 1,
        },
    });

    player.load();
</script> --}}





    











                          {{-- <ul>
 <li><a class="active"> <i class="icon-truck"></i> Surface </a></li>
 <li><a><i class="icon-plane"></i> Air </a></li>
</ul>
</div>
<div id="surface" class="coverage-area slide-content in-view">
<ul>
 <li>Bagerhat</li>
 <li>Barishal</li>
 <li>Bandarban</li>
 <li>Barguna</li>
 <li>Bhola</li>
 <li>Bogura</li>
 <li>Brahmanbaria</li>
 <li>Chandpur</li>
 <li>Chapainawabganj</li>
 <li>Chittagong</li>
 <li>Chuadanga</li>
 <li>Comilla</li>
 <li>Cox’hs Bazar</li>
 <li>Dhaka</li>
 <li>Dinajpur</li>
 <li>Faridpur</li>
 <li>Feni</li>
 <li>Gaibandha</li>
 <li>Gazipur</li>
 <li>Gopalganj</li>
 <li>Hobigonj</li>
 <li>Jamalpur</li>
 <li>Jessore</li>
 <li>Jhalokathi</li>
 <li>Jhenaida</li>
 <li>Joypurhat</li>
 <li>Keranigonj</li>
 <li>Khagrachari</li>
 <li>Khulna</li>
 <li>Kishoreganj</li>
 <li>Kurigram</li>
 <li>Kushtia</li>
 <li>Lalmonirhat</li>
 <li>Laxmipur</li>
 <li>Madaripur</li>
 <li>Magura</li>
 <li>Manikganj</li>
 <li>Meherpur</li>
 <li>Naogaon</li>
 <li>Moulvibazar</li>
 <li>Munshiganj</li>
 <li>Mymensingh</li>
 <li>Narail</li>
 <li>Narayanganj</li>
 <li>Narsingdi</li>
 <li>Natore</li>
 <li>Netrokona</li>
 <li>Nilphamari</li>
 <li>Noakhali</li>
 <li>Pabna</li>
 <li>Panchagarh</li>
 <li>Patuakhali</li>
 <li>Pirojpur</li>
 <li>Rajbari</li>
 <li>Rajshahi</li>
 <li>Rangamati</li>
 <li>Rangpur</li>
 <li>Satkhira</li>
 <li>Savar</li>
 <li>Shariatpur</li>
 <li>Sherpur</li>
 <li>Sirajgonj</li>
 <li>Sunamganj</li>
 <li>Sylhet</li>
 <li>Tangail</li>
 <li>Thakurgaon</li>
</ul>
</div>
<div id="air" class="coverage-area slide-content in-view" style="display: none;">
<ul>
 <li>Chittagong</li>
 <li>Dhaka</li>
 <li>Cox’s Bazar</li>
 <li>Jessore</li>
 <li>Syedpur</li>
 <li>Rajshahi</li>
 <li>Sylhet</li>
</ul>
</div>
</div> --}}
                          {{-- <div class="col-5"><a href="https://ecourier.com.bd/wp-content/uploads/map-01-1.svg"><img
                                  decoding="async" fetchpriority="high" class="alignnone wp-image-2898"
                                  role="img" src="https://ecourier.com.bd/wp-content/uploads/map-01-1.svg"
                                  alt="" width="600" height="1200"></a></div>
                      </div>
                      </div>


                      </div> --}}





                          <div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white text-center  mt-5 h-14 p-2"
                              style="border-top-left-radius: 0px; border-bottom-left-radius: 50px;border-bottom-right-radius:0px; border-top-right-radius:50px;">
                              <div
                                  class="text-white text-center font-extrabold text-4xl drop-shadow-2xl animate-spin-once">
                                  Contact Us</div>
                          </div>

                          <div class="form-main">
                              <div class="main-wrapper">
                                  <h2 class="form-head">Contact From</h2>
                                  <form action="{{ url('/contact') }}" method="POST" class="form-wrapper">
                                      {{ csrf_field() }}
                                      <div class="form-card">
                                          <input class="form-input" type="text" name="full_name"
                                              required="required" />
                                          <label class="form-label" for="full_name">Full Name</label>
                                      </div>

                                      <div class="form-card">
                                          <input class="form-input" type="email" name="email"
                                              required="required" />
                                          <label class="form-label" for="email">Email</label>
                                      </div>

                                      <div class="form-card">
                                          <input class="form-input" type="number" name="phone_number"
                                              required="required" />
                                          <label class="form-label" for="phone_number">Phone
                                              number</label>
                                      </div>

                                      <div class="form-card">
                                          <textarea class="form-textarea" maxlength="420" rows="1" name="address" required="required"></textarea>
                                          <label class="form-textarea-label" for="address">Address</label>
                                      </div>
                                      <div class="form-card">
                                          <textarea class="form-textarea" maxlength="420" rows="2" name="sms" required="required"></textarea>
                                          <label class="form-textarea-label" for="messege">messege
                                          </label>
                                      </div>
                                      <div class="btn-wrap">
                                          <button> Submit </button>
                                      </div>
                                  </form>
                              </div>
                          </div>




                          <script>
                              function

                              function() {
                                  document.getElementById("air ").classList.toggle("show");
                              }
                              window.onload = function() {
                                  $('.coverage-area').addClass('in-view');
                              };

                              function myFunction() {
                                  document.getElementById("myDropdown").classList.toggle("show");
                              }

                              // Close the dropdown menu if the user clicks outside of it
                              window.onclick = function(event) {
                                  if (!event.target.matches('.dropbtn')) {
                                      var dropdowns = document.getElementsByClassName("dropdown-content");
                                      var i;
                                      for (i = 0; i < dropdowns.length; i++) {
                                          var openDropdown = dropdowns[i];
                                          if (openDropdown.classList.contains('show')) {
                                              openDropdown.classList.remove('show');
                                          }
                                      }
                                  }
                              }
                          </script>

                          <div>
                              @include('customer.c_review')
                              @include('footer/footer')

                              {{-- <footer>
                              <p>&copy; 2023 Courier Express. All rights reserved.</p>
                          </footer> --}}

                          </div>
                      </body>

                      </html>
