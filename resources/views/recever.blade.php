
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Laravel')</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/ss.css">
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

          </b>
        </div>
      </header>

<div class="container4 ">
    <h1>Shipping</h1>
    <p>Please enter your shipping details.</p>
    <hr />
    <div class="form">
      
    <div class="fields fields--2">
      <label class="field">
        <span class="field__label" for="firstname">First name</span>
        <input class="field__input" type="text" id="firstname" value="John" />
      </label>
      <label class="field">
        <span class="field__label" for="lastname">Last name</span>
        <input class="field__input" type="text" id="lastname" value="Doe" />
      </label>
    </div>
    <label class="field">
      <span class="field__label" for="address">Address</span>
      <input class="field__input" type="text" id="address" />
    </label>
    <label class="field">
      <span class="field__label" for="country">Country</span>
      <select class="field__input" id="country">
        <option value=""></option>
        <option value="unitedstates">America</option>
        <option value="unitedstates">Bangladesh</option>
        <option value="unitedstates">Canada</option>
      </select>
    </label>
    <label class="field">
      <span class="field__label" for="Number">Sender Phone Number </span>
     <input class="field_input" type="text" id="num" name="" placeholder="Phone number" />
      </label>
      <label class="field">
        <span class="field__label" for="address">Sender Email</span>
       <input type="text" id="Email" name="Email" placeholder="email" />
        </label>
    <div class="fields fields--3">
      <label class="field">
        <span class="field__label" for="zipcode">Zip code</span>
        <input class="field__input" type="text" id="zipcode" />
      </label>
      <label class="field">
        <span class="field__label" for="city">City</span>
        <input class="field__input" type="text" id="city" />
      </label>
      <label class="field">
        <span class="field__label" for="state">State</span>
        <select class="field__input" id="state">
          <option value=""></option>
        </select>
      </label>
    </div>
    </div>
    <hr>
    <button class="button">Continue</button>
  </div>

  </body>
</html>
