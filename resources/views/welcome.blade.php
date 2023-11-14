<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>
<body>
  


  <div class="navbar bg-primary text-primary-content" style="height: 80px; border-radius:0px 0px 50px 50px ; margin-top:0px; margin_left:0px">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:show">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a>Item 1</a></li>
          <li>
            <a>Parent</a>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <img src="img/postman.png" style="padding-left:27px; height:61px" alt="Logo" class="h-10 w-30" />
      
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a>Home</a></li>
        <li><a>Service</a></li>
        <li><a>Aria</a></li>
        <li tabindex="0">
          <details>
            <summary>Transport</summary>
            <ul class="p-2" style="color:black; background-color:blue" >
              <li><a>Bike</a></li>
              <li><a>Track</a></li>
            </ul>
          </details>
        <li tabindex="0">
          <details>
            <summary>By Air</summary>
            <ul class="p-2">
              <li><a>Plain</a></li>
              <li><a>Roket</a></li>
            </ul>
          </details>
        </li>
        <li><a href="{{url('/delivery_calculator')}}" style="color: white; text-decoration: none; background-color:rgb(24, 24, 22); margin-left:59px">Parcel Cost</a></li>
      </ul>
    </div>
    <div class="navbar-end" style="width:227px; margin-right:38px">
      <a class="btn">Login</a>
    </div>
  </div>

</body>
</html>