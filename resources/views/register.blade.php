<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Laravel')</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/rl.css">
    <script src="{{ asset('js/app.js') }}"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <div class="logo">
        <img class="log" src="img/postman.png" alt="Log">
        </div>
        <div class="navbar">
          <a class="active" href="{{url('/')}}"><b>Home</a>
          <a href="{{url('/Home')}}">About</a>
          <a href="#services">Services</a>
    
          <a href="#contact">Contact</a>
          </b>
        </div>
    <div class="rl">

          <a class="fcc-btn" href="{{url('/login')}}" style="background-color:rgb(51, 0, 255); color:black;">Log in </a>
          
          <a class="fcc-btn" href="#"style="background-color:red; color:black; ">Sing Up</a>

    </div>

        </header>

        <div class="wrapper_r">
          <div class="registration_form">
            <div class="title">
              Registration Here
            </div>
        
            <form encrypt="multipart/form-data" method="POST" action="{{url('/register_form')}}">
              <div class="form_wrap">
                <div class="input_grp"   onsubmit="return FormValidation('');">
                  {{ csrf_field()}}
                  <div class="input_wrap">
                    
                    <label for="fname">First Name</label>
                    <input type="text"placeholder="Fist name" name="fname">
                  </div>
                  <div class="input_wrap">
                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Last name" name="lname">
                  </div>
                </div>
                <div class="input_wrap">
                  <label for="email">Email Address</label>
                  <input type="text" placeholder="Email" name="email">
                </div>
                <div class="input_wrap">
                  <label for="Password">Password</label>
                  <input type="text" placeholder="New Password" name="Pass">
                </div>
                <div class="input_wrap">
                  <label for="email">Confrim Password</label>
                  <input type="text" placeholder="Confrim Password" name="Passw">
                </div>
                <div class="input_wrap">
                  <label>Gender</label>
                  <ul>
                    <li>
                      <label class="radio_wrap">
                        <input type="radio" name="gender" value="male" class="input_radio" checked>
                        <span>Male</span>
                      </label>
                    </li>
                    <li>
                      <label class="radio_wrap">
                        <input type="radio" name="gender" value="female" class="input_radio">
                        <span>Female</span>
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="input_wrap">
                  <label for="city">City</label>
                  <input type="text" name="city"id="city">
                </div>
                <div class="input_wrap">
                  <label for="country">Country</label>
                  <input type="text" name= "Country" id="country">
                </div>
                <div class="input_wrap">
                  <button type="submit" value="Register Now" class="submit_btn">Registration Here</button>
                </div>
              </div>
            </form>
          </div>
        </div>
  </body>
</html>
      