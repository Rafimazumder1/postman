<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/postman.png">
        <title>
        
            postman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/rl.css">
    
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        {{-- cdn.tailwindcss.com --}}
{{-- 
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script> --}}
        
    </head>
    <body style="background-color: #ffffff;">

        <header>
            <div class="logo">
            <img class="log_" src="img/postman.png" alt="Log">
            </div>
            <div class="navbar">
              <a href="{{url('/')}}">Home</a>
              <a href="#contact">Contact</a>

              <a class="fcc-btn" href="{{url('/register')}}"style="">Sign Up</a>
            </div>
        </header>
                
       
        
        <div class="left-side">
        <div class="container_log">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" action="{{url('/login_form')}}" method="post" autocomplete="off" onsubmit="return IsPageValid();">
                        {{ csrf_field() }}
                             <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="Email or Phone" name="Email"required>
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" class="login__input" placeholder="Password" name="Password"required>
                        </div>
                        <button class="button_log login__submit">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                            
                        </button>	
                        <a href="{{url('/changePassword')}}" style="margin-left:50px; color:black; margin-top:20px;">Forget Password?</a>			
                    </form>

                    <!-- <form action="{{url('/registration')}}" method="get" autocomplete="off">
                    <button class="button login__submit" style="float: left; margin-left:60px; margin-top:15px;">
                            <span class="button__text">Sign Up</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form> -->
                    
                    
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>       
     </div>
        <div class="right-side">
            <img src="/img/postman.png" alt="" class="login_page_image">
        </div>

    </body>
</html>